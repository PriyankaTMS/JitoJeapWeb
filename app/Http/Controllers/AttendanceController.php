<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EventAgenda;
use App\Models\Attendance;
use App\Helpers\AppHelpers;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendance = Attendance::with('roasters', 'staff', 'event_agenda')->get();
        return view('admin.attendance.index', compact('attendance'));
    }


    public function destroy(Attendance $attendance, $id)
    {
        Attendance::destroy($id);
        return redirect()->route('admin.attendance')->with('success', 'Data Deleted Successfully!!!!!');
    }

    public function status(Request $request,  $id)
    {
        $attendance = Attendance::find($id);
        if ($attendance->status == '1') {
            $attendance->status = '0';
            $attendance->save();
        } elseif ($attendance->status == '0') {
            $attendance->status = '1';
            $attendance->save();
        }
        return back()->with('success', 'Status changed Successfully!!!!');
    }

    public function markAttendance(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "qr_code" => "required|string:min:10|max:10",
            "staff_id" => "required|numeric",
            "event_id" => "required|numeric",
        ]);
        if ($validator->fails()) {
            return AppHelpers::sendResponse(false, $validator->errors()->first(), Response::HTTP_BAD_REQUEST);
        }

        $user = User::where('qr_image', 'like', '%' . $request->qr_code . '%')->first();
        if (is_null($user)) {
            return AppHelpers::sendResponse(false, 'QR Code not found', Response::HTTP_BAD_REQUEST);
        }

        $staff = User::find($request->staff_id);
        if (is_null($staff)) {
            return AppHelpers::sendResponse(false, 'Staff not found', Response::HTTP_BAD_REQUEST);
        }

        $event = EventAgenda::find($request->event_id);
        if (is_null($event)) {
            return AppHelpers::sendResponse(false, 'Event not found', Response::HTTP_BAD_REQUEST);
        }

        if ($event->status == 0) {
            return AppHelpers::sendResponse(false, 'Event is not open', Response::HTTP_BAD_REQUEST);
        }

        if ($event->attendance == 0) {
            return AppHelpers::sendResponse(false, 'Attendance is not required', Response::HTTP_BAD_REQUEST);
        }

        $data = [
            'user_id' => $user->id,
            'event_id' => $event->id,
            'staff_id' => $staff->id,
            'event_date' => $event->date,
            'status' => "1"
        ];

        $attendance = Attendance::updateOrCreate(
            [
                'user_id' => $data['user_id'],
                'event_id' => $data['event_id'],
            ],
            $data
        );

        return AppHelpers::sendResponse($attendance, 'Attendance marked successfully', Response::HTTP_OK);
    }

    public function AttendanceController(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "event_id" => "required|numeric",
        ]);
    }
}
