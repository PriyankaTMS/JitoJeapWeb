<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\UserBought;
use App\Helpers\AppHelpers;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role === 'user') {
            return view('website.home', compact('user'));
        }
        return redirect()->back()->with('failed', 'You are not authorized to access this page');
    }
    // public function userBought()
    // {
    //     $userBought = UserBought::with('user')->latest('id')->get();
    //     $userBought->map(function ($item) {
    //         $item->item_data = AppHelpers::getDataById($item->item_id);
    //         return $item;
    //     });
    //     return view('admin.userBought.index', compact('userBought'));
    // }
    public function adminHome()
    {
        return view('admin.home');
    }

    public function addToCart($id)
    {
        $item = AppHelpers::getDataById($id);
        if (is_null($item)) {
            return redirect()->back()->with('failed', 'Invalid item');
        }
        $user = Auth::user();
        $userBought = UserBought::where('user_id', $user->id)->where('item_id', $id)->where('status', 0)->first();
        if ($userBought) {
            return redirect()->back()->with('failed', 'Item already in cart');
        }
        $price = (int)$item['price'];
        $gst = $price * 0.18;
        $userBought = new UserBought();
        $userBought->user_id = $user->id;
        $userBought->item_id = $id;
        $userBought->price = $item['price'];
        $userBought->gst = $gst;
        $userBought->total_price = $price + $gst;
        $userBought->status = 0;
        $userBought->save();
        return redirect()->back()->with('success', 'Item added to cart');
    }

    public function buy($id)
    {
        if (Auth::check() == false) {
            return redirect()->back()->with(
                'failed',
                'Please login to buy'
            );
        }
        $user = Auth::user();

        if (
            $id == 'all'
        ) {
            $userBought = UserBought::where('user_id', $user->id)->where('status', 0)->get();
            $totalAmount = $userBought->sum('total_price');
        } else {
            $userBought = UserBought::where('user_id', $user->id)->where('item_id', $id)->first();
            if (is_null($userBought)) {
                $item = AppHelpers::getDataById($id);
                if (is_null($item)) {
                    return redirect()->back()->with('failed', 'Invalid item');
                }
                $price = (int)$item['price'];
                $gst = $price * 0.18;
                $userBought = new UserBought();
                $userBought->user_id = $user->id;
                $userBought->item_id = $id;
                $userBought->price = $item['price'];
                $userBought->gst = $gst;
                $userBought->total_price = $price + $gst;
                $userBought->status = 0;
                $userBought->save();
            }
            $totalAmount = $userBought->total_price;
        }
        $apiKey = config('app.instamojo.api_key');
        $authToken = config('app.instamojo.auth_token');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt(
            $ch,
            CURLOPT_RETURNTRANSFER,
            TRUE
        );
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                "X-Api-Key:" . $apiKey,
                "X-Auth-Token:" . $authToken
            )
        );
        $payload = array(
            'purpose' => 'BNI',
            'amount' =>  $totalAmount,
            'phone' => $user->mobile,
            'buyer_name' => $user->name,
            'redirect_url' =>  "https://bninashik.in/buy_redirect",
            'send_email' => true,
            'webhook' => "https://bninashik.in/buy_webhook",
            'send_sms' => true,
            'email' => $user->email,
            'allow_repeated_payments' => false
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        if ($err) {
            return redirect()->back()->with('failed', 'Error: ' . $err);
        }
        $result = json_decode($response);
        info('Payment Request Data: ' . json_encode($result));
        if (
            $result->success == false || !isset($result->payment_request)
        ) {
            info('Payment Request Data: ' . json_encode($result));
            return redirect()->back()->with('failed', 'Some error occurred, Please try again or contact administrator');
        }
        $longUrl = $result->payment_request->longurl;
        // {"success":true,"payment_request":{"id":"c08d875ea7e84f29a2166f12f67ae764","phone":"+919529851966","email":"user@gmail.com","buyer_name":"User","amount":"10.00","purpose":"BNI","expires_at":null,"status":"Pending","send_sms":true,"send_email":true,"sms_status":"Pending","email_status":"Pending","shorturl":null,"longurl":"https:\/\/www.instamojo.com\/@BNiNashik\/c08d875ea7e84f29a2166f12f67ae764","redirect_url":"https:\/\/bninashik.in\/buy_redirect","webhook":"https:\/\/bninashik.in\/buy_webhook","allow_repeated_payments":false,"created_at":"2024-09-25T01:55:10.492729Z","modified_at":"2024-09-25T01:55:10.492780Z"}}
        $payment_request_id = $result->payment_request->id;
        if (
            $id == 'all'
        ) {
            UserBought::where('user_id', $user->id)->where('status', 0)->update(['payment_request_id' => $payment_request_id]);
        } else {
            UserBought::where('user_id', $user->id)->where('item_id', $id)->where('status', 0)->update(['payment_request_id' => $payment_request_id]);
        }
        // https://admin.crickies.co.in/cashfree/notify?payment_id=MOJO4924W05Q07763569&payment_status=Credit&payment_request_id=349a3834622b4adfa8f68036796ca046
        return redirect()->away($longUrl);
    }

    public function buyRedirect(Request $request)
    {
        // {"payment_id":"MOJO4925B05Q63273783","payment_status":"Credit","payment_request_id":"c08d875ea7e84f29a2166f12f67ae764"}
        $payment_request_id = $request->input('payment_request_id');
        $payment_id = $request->input('payment_id');
        UserBought::where('payment_request_id', $payment_request_id)->update(['payment_id' => $payment_id]);
        // $result = (object)[
        //     "success" => true,
        //     "payment_request" => [
        //         "id" => "c08d875ea7e84f29a2166f12f67ae764",
        //         "phone" => "+919529851966",
        //         "email" => "user@gmail.com",
        //         "buyer_name" => "User",
        //         "amount" => "10.00",
        //         "purpose" => "BNI",
        //         "expires_at" => null,
        //         "status" => "Completed",
        //         "send_sms" => true,
        //         "send_email" => true,
        //         "sms_status" => "Pending",
        //         "email_status" => "Sent",
        //         "shorturl" => "https://imjo.in/28NqGJ",
        //         "longurl" => "https://www.instamojo.com/@BNiNashik/c08d875ea7e84f29a2166f12f67ae764",
        //         "redirect_url" => "https://bninashik.in/buy_redirect",
        //         "webhook" => "https://bninashik.in/buy_webhook",
        //         "payments" => [
        //             [
        //                 "payment_id" => "MOJO4925B05Q63273783",
        //                 "status" => "Credit",
        //                 "currency" => "INR",
        //                 "amount" => "10.06",
        //                 "buyer_name" => "User",
        //                 "buyer_phone" => "+919529851966",
        //                 "buyer_email" => "user@gmail.com",
        //                 "shipping_address" => null,
        //                 "shipping_city" => null,
        //                 "shipping_state" => null,
        //                 "shipping_zip" => null,
        //                 "shipping_country" => null,
        //                 "quantity" => 1,
        //                 "unit_price" => "10.00",
        //                 "fees" => "0.05",
        //                 "variants" => [],
        //                 "custom_fields" => [],
        //                 "affiliate_commission" => "0",
        //                 "payment_request" => "https://www.instamojo.com/api/1.1/payment-requests/c08d875ea7e84f29a2166f12f67ae764/",
        //                 "instrument_type" => "QR",
        //                 "billing_instrument" => "Order based QR Code",
        //                 "tax_invoice_id" => "",
        //                 "failure" => null,
        //                 "payout" => null,
        //                 "created_at" => "2024-09-25T01:55:34.651843Z",
        //             ]
        //         ],
        //         "allow_repeated_payments" => false,
        //         "created_at" => "2024-09-25T01:55:10.492729Z",
        //         "modified_at" => "2024-09-25T01:55:34.849551Z",
        //     ]
        // ];

        info('Payment Redirect Data: ');
        info(json_encode($request->all()));
        $apiKey = config('app.instamojo.api_key');
        $authToken = config('app.instamojo.auth_token');
        $payment_request_id = $request->input('payment_request_id');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/' . $payment_request_id);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt(
            $ch,
            CURLOPT_RETURNTRANSFER,
            TRUE
        );
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                "X-Api-Key:" . $apiKey,
                "X-Auth-Token:" . $authToken
            )
        );
        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        info('Payment Redirection Request Data: ' . json_encode($response));
        if ($err) {
            // Redirect to home
            return redirect()->route('home')->with('failed', 'Payment Failed, Please contact administrator');
        }
        $result = json_decode($response);
        info('Payment Request Data: ' . json_encode($result));
        if (
            $result->success == false || !isset($result->payment_request)
        ) {
            info('Payment Request Data: ' . json_encode($result));
            return redirect()->back()->with('failed', 'Some error occurred, Please try again or contact administrator');
        }
        $payment_request_id = $result->payment_request->id;
        $payment_request_status = $result->payment_request->status;
        $payments = $result->payment_request->payments;
        $payment_id = $payments[0]->payment_id;
        $status = $payments[0]->status;
        if (
            $payment_request_status == 'Completed' && $status == 'Credit'
        ) {
            UserBought::where('payment_request_id', $payment_request_id)->update(
                [
                    'payment_status' => $status,
                    'payment_id' => $payment_id,
                    'status' => 1
                ]
            );
            return redirect()->route('home')->with('success', 'Payment Successful');
        }
        return redirect()->route('home')->with('failed', 'Payment Failed, Please contact administrator');
    }

    public function buyWebhook(Request $request)
    {
        info('Payment WebHook Data: ' . json_encode($request->all()));
    }
}
