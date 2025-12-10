<?php

namespace App\Helpers;


class AppHelpers
{
    public static $pricingData = [
        [
            "id" => 1,
            "title" => "DIGITAL ADS",
            "price" => "7499",
            "gst" => "+GST",
            "maxEntry" => 60,
            "minEntry" => 10,
            "details" => "15 second ad for 40 times a day",
            "lastDate" => "23 Sep 2024",
        ],
        [
            "id" => 2,
            "title" => "Fashion Shows",
            "price" => "39999",
            "gst" => "+GST",
            "maxEntry" => 10,
            "minEntry" => 7,
            "details" => "Product show for 5 Minutes",
            "lastDate" => "23 Sep 2024",
        ],
        [
            "id" => 3,
            "title" => "Stall Details",
            "price" => "39999",
            "gst" => "+GST",
            "maxEntry" => 22,
            "minEntry" => 11,
            "details" => "3M X 3M stall 1 Table, 2 chairs and light point",
            "lastDate" => "23 Sep 2024",
        ]
    ];

    public static function getDataById($id)
    {
        foreach (self::$pricingData as $plan) {
            if ($plan['id'] == $id) {
                return $plan;
            }
        }
        return null;
    }

    public static function sendResponse($data = false, $msg = null, $status_code = 401)
    {
        return response()->json(['result' => $data, 'message' => $msg], $status_code);
    }

    public static function trimText($text, $maxLines = 3, $lineHeight = 1.2)
    {
        $maxLength = $maxLines * $lineHeight * 16; // Approximate number of characters per line
        if (strlen($text) > $maxLength) {
            return substr($text, 0, $maxLength) . '...';
        }
        return $text;
    }

    public static function sendPDFinWhatsApp($mobile, $pdf_path, $name)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://graph.facebook.com/v17.0/210453232149208/messages',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
    "messaging_product": "whatsapp",
    "to":  "' . $mobile . '",
    "type": "template",
    "template":
    {
        "name": "pass_nmd1",
        "language": {"code": "en"},
        "components":
        [
            {
                "type": "header",
                "parameters": [
                    {
                        "type": "document",
                        "document": {
                            "filename": "visitor_pass_nmd.pdf",
                            "link": "' . $pdf_path . '",
                        }
                    }
                ]
            },
            {
                "type": "body",
                "parameters":
                [
                    {
                        "type": "text",
                        "text": "' . $name . '",
                    }
                ]
             }
        ]
    }
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer EAAPKWIadv40BO3uxrLQY78YtFZCR9VbfzPWZAGy08YVbYsa8iULExUqR3NBeFcW5G0QuB6hPq1XZCokR8hADqF4LJuEWRHUstRhuxZBJzvkZAgvTyKMwh3JsEVXK9sBwXHjBY5y4FCYjdjHYNp2K8o0fQSMtBTmhbkDCyLdHHtYRtUkW5dcNCc38ESZAhf'
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $result = json_decode($response, true);
        if ($err) {
            info($err);
            return null;
        }
        return $result;
    }


    public static function send121Request($mobile, $user_name, $roaster_name)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://graph.facebook.com/v17.0/210453232149208/messages',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
    "messaging_product": "whatsapp",
    "to":  "' . $mobile . '",
    "type": "template",
    "template":
    {
        "name": "121_nmd_request",
        "language": {"code": "en"},
        "components":
        [
            {
                "type": "body",
                "parameters": [
                    {
                        "type": "text",
                        "text": "' . $user_name . '",
                    },
                    {
                        "type": "text",
                        "text": "' . $roaster_name . '",
                    }                ]
            }
        ]
    }
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer EAAPKWIadv40BO3uxrLQY78YtFZCR9VbfzPWZAGy08YVbYsa8iULExUqR3NBeFcW5G0QuB6hPq1XZCokR8hADqF4LJuEWRHUstRhuxZBJzvkZAgvTyKMwh3JsEVXK9sBwXHjBY5y4FCYjdjHYNp2K8o0fQSMtBTmhbkDCyLdHHtYRtUkW5dcNCc38ESZAhf'
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $result = json_decode($response, true);
        if ($err) {
            info($err);
            return null;
        }
        return $result;
    }

    public static function send121Accept($mobile, $user_name, $roaster_name, $table, $time)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://graph.facebook.com/v17.0/210453232149208/messages',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
    "messaging_product": "whatsapp",
    "to":  "' . $mobile . '",
    "type": "template",
    "template":
    {
        "name": "121_nmd_accept",
        "language": {"code": "en"},
        "components":
        [
            {
                "type": "body",
                "parameters": [
                    {
                        "type": "text",
                        "text":  "' . $user_name . '",
                    },
                    {
                        "type": "text",
                        "text": "' . $roaster_name . '",
                    },
                    {
                        "type": "text",
                        "text": "' . $table . '",
                    },
                    {
                        "type": "text",
                        "text": "' . $time . '",
                    }
                     ]
            }
        ]
    }
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer EAAPKWIadv40BO3uxrLQY78YtFZCR9VbfzPWZAGy08YVbYsa8iULExUqR3NBeFcW5G0QuB6hPq1XZCokR8hADqF4LJuEWRHUstRhuxZBJzvkZAgvTyKMwh3JsEVXK9sBwXHjBY5y4FCYjdjHYNp2K8o0fQSMtBTmhbkDCyLdHHtYRtUkW5dcNCc38ESZAhf'
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $result = json_decode($response, true);
        if ($err) {
            info($err);
            return null;
        }
        return $result;
    }

    public static function send121Pending($mobile, $user_name, $roaster_name,  $time)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://graph.facebook.com/v17.0/210453232149208/messages',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
    "messaging_product": "whatsapp",
    "to":  "' . $mobile . '",
    "type": "template",
    "template":
    {
        "name": "121_nmd_pending",
        "language": {"code": "en"},
        "components":
        [
            {
                "type": "body",
                "parameters": [
                    {
                        "type": "text",
                        "text":  "' . $user_name . '",
                    },
                    {
                        "type": "text",
                        "text":  "' . $roaster_name . '",
                    },
                    {
                        "type": "text",
                        "text":  "' . $time . '",
                    }
                ]
            }
        ]
    }
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer EAAPKWIadv40BO3uxrLQY78YtFZCR9VbfzPWZAGy08YVbYsa8iULExUqR3NBeFcW5G0QuB6hPq1XZCokR8hADqF4LJuEWRHUstRhuxZBJzvkZAgvTyKMwh3JsEVXK9sBwXHjBY5y4FCYjdjHYNp2K8o0fQSMtBTmhbkDCyLdHHtYRtUkW5dcNCc38ESZAhf'
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $result = json_decode($response, true);
        if ($err) {
            info($err);
            return null;
        }
        return $result;
    }

    public static function send121Thankyou($mobile, $roaster_name, $user_name, $table, $time)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://graph.facebook.com/v17.0/210453232149208/messages',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
    "messaging_product": "whatsapp",
    "to":  "' . $mobile . '",
    "type": "template",
    "template":
    {
        "name": "121_nmd_thankyou",
        "language": {"code": "en"},
        "components":
        [
            {
                "type": "body",
                "parameters": [
                    {
                        "type": "text",
                        "text":  "' . $roaster_name . '",
                    },
                    {
                        "type": "text",
                        "text":  "' . $user_name . '",
                    },
                    {
                        "type": "text",
                        "text":  "' . $table . '",
                    },
                    {
                        "type": "text",
                        "text":  "' . $time . '",
                    }
                     ]
            }
        ]
    }
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer EAAPKWIadv40BO3uxrLQY78YtFZCR9VbfzPWZAGy08YVbYsa8iULExUqR3NBeFcW5G0QuB6hPq1XZCokR8hADqF4LJuEWRHUstRhuxZBJzvkZAgvTyKMwh3JsEVXK9sBwXHjBY5y4FCYjdjHYNp2K8o0fQSMtBTmhbkDCyLdHHtYRtUkW5dcNCc38ESZAhf'
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $result = json_decode($response, true);
        if ($err) {
            info($err);
            return null;
        }
        return $result;
    }
}
