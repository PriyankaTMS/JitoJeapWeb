<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use App\Models\BookedSession;
use App\Models\BookSession;
use App\Helpers\AppHelpers;

class BookedSessionController extends Controller
{

    public function testing()
    {
        //         Dear Rohit Jain,

        // Your request for a 1-2-1 with Roaster Name is accepted, and your table number is 2 at 03:00 PM.

        // Team BNI NMD Nashik.
        // $res = AppHelpers::send121Accept('9529916394', 'Rohit Jain', 'Roaster Name', "2", '03:00 PM');
        //         Dear Roaster Name,

        // Rohit Jain has requested to schedule a 1-2-1 session with you at 03:00 PM. Please accept to generate a table number for the meeting.

        // Team BNI NMD Nashik
        // $res = AppHelpers::send121Pending('9529916394', 'Roaster Name', 'Rohit Jain', '03:00 PM');
        //         Dear Rohit Jain,

        // Your request for a 1-2-1 with Roaster Name is currently pending. Once they accept, you will be assigned a table number.

        // Team BNI NMD Nashik
        // $res = AppHelpers::send121Request('9529916394', 'Rohit Jain', 'Roaster Name');
        //         Dear Rohit Jain,

        // Your multi-use Entry Pass for the BNI NMD 2024 is attached. The BNI NMD 2024 is on 28th September 2024 from 9:30am to 8pm at Hotel Treat (Manohar Garden) Govind Nagar, Nasik.

        // Please Click and Save the attached PDF file containing your Visitor Pass for the BNI NMD 2024

        // Please use the attached QR code for entry, the QR Code has also been sent to your registered email address (if provided).

        // Looking forward to seeing you there,

        // Team BNI NMD Nashik.
        // $res = AppHelpers::sendPDFinWhatsApp('9529916394', 'https://bninashik.in/qr_pdfs/NMD-M-0001.pdf', 'Rohit Jain');
        //         Dear Rohit Jain,

        // Thank you for accepting the 1-2-1 request with Roaster Name . Your table number is 2 at  03:00 PM

        // Team BNI NMD Nashik
        // $res = AppHelpers::send121Thankyou('9529916394', 'Roaster Name', 'User Name', '2', '03:00 PM');

        try {
            if (!File::exists(public_path('qr_pdfs'))) {
                File::makeDirectory(public_path('qr_pdfs'), 0755, true);
            }

            $rosters = User::where('role', 'user')
                ->where('status', '1')
                ->where('qr_image', '!=', null)
                // ->skip(300)
                // ->take(50)
                ->where('mobile', '8698452360')
                ->get();

            if ($rosters->isEmpty()) {
                return redirect()->back()->with('error', 'No users found with QR images.');
            }

            Log::info('Total roasters found ' . $rosters->count());

            foreach ($rosters as $rost) {
                // $pdf = PDF::loadView('admin.roaster.idCardPdf', compact('rost'));
                // $fileName = public_path('qr_pdfs/' . $rost->qr_image . '.pdf');
                // $pdf->save($fileName);
                // Log::info('PDF generated for ' . $rost->name);
                // $res = AppHelpers::sendPDFinWhatsApp(
                //     $rost->mobile,
                //     'https://bninashik.in/qr_pdfs_1/' . $rost->qr_image . '.pdf',
                //     $rost->name
                // );
                // Log::info('https://bninashik.in/qr_pdfs_1/' . $rost->qr_image . '.pdf');
                // Log::info('PDF sent to ' . $rost->phone);
                // Log::info($res);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            dd($e);
        }
    }


    public function notification()
    {
        $bookedSessions = BookedSession::with(['user', 'roaster'])->where('user_id', Auth::user()->id)->orWhere('roaster_id', Auth::user()->id)->latest('id')->get();
        $notification = [];
        foreach ($bookedSessions as $bookedSession) {
            $isRoaster = $bookedSession->roaster_id == Auth::user()->id;
            $message = "";
            $status = 'Request';
            if ($bookedSession->status == "0") {
                $status = 'Pending';
                if ($isRoaster) {
                    $message = $bookedSession->user->name . " has requested a session with you on " . $bookedSession->date . " at " . $bookedSession->time;
                } else {
                    $message = "You have a requested session with " . $bookedSession->roaster->name . " on " . $bookedSession->date . " at " . $bookedSession->time;
                }
            } elseif ($bookedSession->status == "1") {
                $status = 'Accepted';
                if ($isRoaster) {
                    $message = $bookedSession->user->name . " has accepted your requested session on " . $bookedSession->date . " at " . $bookedSession->time;
                } else {
                    $message = "Your requested session with " . $bookedSession->roaster->name . " on " . $bookedSession->date . " at " . $bookedSession->time . " has been accepted";
                }
            } else {
                $status = 'Declined';
                if ($isRoaster) {
                    $message = $bookedSession->user->name . " has declined your requested session on " . $bookedSession->date . " at " . $bookedSession->time;
                } else {
                    $message = "Your requested session with " . $bookedSession->roaster->name . " on " . $bookedSession->date . " at " . $bookedSession->time . " has been declined";
                }
            }
            $notification[] = [
                'id' => $bookedSession->id,
                'user_id' => $bookedSession->user_id,
                'roaster_id' => $bookedSession->roaster_id,
                'date' => $bookedSession->date,
                'time' => $bookedSession->time,
                'is_roaster' => $isRoaster,
                'status' => $bookedSession->status,
                'message' => $message,
                'status_str' => $status
            ];
        }

        return view('website.notification', compact('notification'));
    }

    public function rejectSession($id)
    {
        $bookedSession = BookedSession::find($id);
        if (is_null($bookedSession)) {
            return redirect()->back()->with('failed', 'Invalid session');
        }
        if ($bookedSession->roaster_id != Auth::user()->id) {
            return redirect()->back()->with('failed', 'You are not authorized to reject this session');
        }
        $bookedSession->status = "2";
        $bookedSession->save();
        return redirect()->back()->with('success', 'Session rejected successfully');
    }

    public function acceptSession($id)
    {
        $bookedSession = BookedSession::with(['user', 'roaster'])->find($id);
        if (is_null($bookedSession)) {
            return redirect()->back()->with('failed', 'Invalid session');
        }
        if ($bookedSession->roaster_id != Auth::user()->id) {
            return redirect()->back()->with('failed', 'You are not authorized to accept this session');
        }

        $assignedTable = $bookedSession->table;
        $availableTable = $this->findAvailableTable($bookedSession->date, $bookedSession->time, $assignedTable);
        $bookedSession->table = $availableTable ? $availableTable : '0';
        if ($availableTable == '0') {
            $bookedSession->message = 'No tables available, session accepted with table assignment "0".';
        } else {
            AppHelpers::send121Accept($bookedSession->user->mobile, $bookedSession->user->name, $bookedSession->roaster->name, $availableTable, $bookedSession->time);
            AppHelpers::send121Thankyou($bookedSession->roaster->mobile, $bookedSession->roaster->name, $bookedSession->user->name, $availableTable, $bookedSession->time);
            $bookedSession->message = 'Session accepted successfully with table ' . $availableTable;
        }
        $bookedSession->status = "1";
        $bookedSession->save();

        return redirect()->back()->with('success', $bookedSession->message);
    }


    // Method to find an available table
    private function findAvailableTable($date, $time, $preferredTable = null)
    {
        $allTables = range(1, 80);
        $bookedTables = BookedSession::where('date', $date)
            ->where('time', $time)
            ->pluck('table')
            ->toArray();
        if ($preferredTable && !in_array($preferredTable, $bookedTables)) {
            return $preferredTable;
        }
        foreach ($allTables as $table) {
            if (!in_array($table, $bookedTables)) {
                return $table;
            }
        }
        return '0';
    }


    public function bookSession(Request $request)
    {
        $user = Auth::user();
        $roaster = User::find($request->rost_id);
        if (is_null($roaster) || is_null($user)) {
            return redirect()->back()->with('failed', 'Invalid user');
        }
        if ($user->id == $roaster->id) {
            return redirect()->back()->with('failed', 'You cannot book your own session');
        }
        try {
            $totalMinutes = $request->time;
            $hours = floor($totalMinutes / 60);
            $minutes = $totalMinutes % 60;
            $time = Carbon::createFromTime($hours, $minutes);
            $requestedTime = $time->format('H:i');
            $date = Carbon::parse($request->date);

            $bookSession = BookedSession::where('user_id', $user->id)
                ->where('roaster_id', $roaster->id)
                ->where('time', $requestedTime)
                ->first();

            if (!is_null($bookSession)) {
                return redirect()->back()->with('failed', 'You have already booked this session');
            }

            $bookSession = BookedSession::where('roaster_id', $roaster->id)
                ->where('time', $requestedTime)
                ->first();

            if (!is_null($bookSession)) {
                return redirect()->back()->with('failed', 'This time slot is already booked by another user');
            }

            $alreadyBooked = BookedSession::where('user_id', $roaster->id)
                ->where('time', $requestedTime)
                ->first();

            if (!is_null($alreadyBooked)) {
                return redirect()->back()->with('failed', 'This time slot is already booked by you');
            }

            $alreadyBookedUser = BookedSession::where('user_id', $user->id)
                ->where('time', $requestedTime)
                ->first();

            if (!is_null($alreadyBookedUser)) {
                return redirect()->back()->with('failed', 'You have already booked this date');
            }

            $alreadyBookedRoaster = BookedSession::where('roaster_id', $user->id)
                ->where('time', $requestedTime)
                ->first();

            if (!is_null($alreadyBookedRoaster)) {
                return redirect()->back()->with('failed', 'This time slot is already booked by you');
            }

            $bookSession = new BookedSession();
            $bookSession->user_id = $user->id;
            $bookSession->roaster_id = $roaster->id;
            $bookSession->date = $date;
            $bookSession->time = $requestedTime;
            $bookSession->save();
            $bookSession = BookedSession::with(['user', 'roaster'])->find($bookSession->id);
            AppHelpers::send121Request($bookSession->user->mobile, $bookSession->user->name, $bookSession->roaster->name);
            AppHelpers::send121Pending($bookSession->roaster->mobile, $bookSession->roaster->name, $bookSession->user->name, $bookSession->time);
            return redirect()->route('notification')->with('success', 'Session booked successfully');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('failed', 'Failed to book session');
        }
    }
}
