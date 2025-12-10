<?php

namespace App\Http\Controllers;

use App\Models\TimeSlot;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class TimeSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slot = TimeSlot::get();
        return view('admin.timeslot.index', compact('slot'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.timeslot.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slot = new TimeSlot;
        $slot->slot = $request->slot;
        $slot->save();
        return redirect()->route('admin.timeslot')->with('success', 'Data Added Successfully!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TimeSlot $timeSlot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TimeSlot $timeSlot, $id)
    {
        $slot = TimeSlot::find($id);
        return view('admin.timeslot.edit', compact('slot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TimeSlot $timeSlot, $id)
    {
        $slot = TimeSlot::find($id);
        $slot->slot = $request->slot;
        $slot->save();
        return redirect()->route('admin.timeslot')->with('success', 'Data Updated Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TimeSlot $timeSlot, $id)
    {
        TimeSlot::destroy($id);
        return redirect()->route('admin.timeslot')->with('success', 'Data Deleted Successfully!!!!');
    }
}
