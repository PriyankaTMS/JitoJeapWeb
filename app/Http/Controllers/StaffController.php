<?php

namespace App\Http\Controllers;

use App\Models\EventAgenda;
use App\Models\User;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff = User::where('role', 'staff')->get();
        return view('admin.staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $staff = new User;
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->password = Hash::make($request->email);
        $staff->mobile = $request->mobile;
        $staff->role = 'staff';
        $staff->status = $request->status;
        $staff->save();
        return redirect()->route('admin.staff')->with('success', 'Data Added Successfully!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff, $id)
    {
        $staff = User::find($id);
        return view('admin.staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff, $id)
    {
        $staff = User::find($id);
        $staff->name = $request->name;
        $staff->email = $request->email;
        if ($request->filled('password')) {
            $staff->password = Hash::make($request->password);
        } else {
            $staff->password = $staff->getOriginal('password');
        }
        $staff->mobile = $request->mobile;
        $staff->status = $request->status;
        $staff->save();
        return redirect()->route('admin.staff')->with('success', 'Data Updated Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff, $id)
    {
        User::destroy($id);
        return redirect()->route('admin.staff')->with('success', 'Data Updated Successfully!!!!');
    }

    public function status(Request $request,  $id)
    {
        $staff = User::find($id);
        if ($staff->status == '1') {
            $staff->status = '0';
            $staff->save();
        } elseif ($staff->status == '0') {
            $staff->status = '1';
            $staff->save();
        }
        return back()->with('success', 'Status changed Successfully!!!!');
    }


    public function stafflogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'result' => 'false',
                'message' => 'Invalid login credentials'
            ], 401);
        }

        if ($user->role !== 'staff') {
            return response()->json([
                'result' => 'false',
                'message' => 'Only staff members are allowed to log in'
            ], 403);
        }

        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json([
            'result' => 'true',
            'statusCode' => "200",
            'user' => $user,
            'token' => $token,
            'message' => 'Successfully logged in!',
        ]);
    }

    public function staffdashboard(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);

        $staffId = $request->id;
        $events = EventAgenda::where('staff_id', $staffId)->get();

        if ($events->isEmpty()) {
            return response()->json([
                'result' => 'false',
                'statusCode' => "404",
                'message' => 'No events found for this staff member'
            ], 404);
        }

        return response()->json([
            'result' => 'true',
            'statusCode' => "200",
            'message' => 'Events retrieved successfully',
            'events' => $events,
        ]);
    }
}
