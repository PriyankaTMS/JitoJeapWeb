<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\EventAgenda;
use Illuminate\Http\Request;

class EventAgendaController extends Controller
{

    public function index()
    {
        $eve_agd = EventAgenda::get();
        return view('admin.eventagenda.index', compact('eve_agd'));
    }


    public function create()
    {
        $staff = User::where('role', 'staff')->get();
        return view('admin.eventagenda.create', compact('staff'));
    }


    public function store(Request $request)
    {
        $eve_agd = new EventAgenda;
        $eve_agd->name = $request->name;
        $eve_agd->date = $request->date;
        $eve_agd->staff_id = $request->staff_id;
        $eve_agd->start_time = $request->start_time;
        $eve_agd->end_time = $request->end_time;
        $eve_agd->attendance = $request->attendance;
        $eve_agd->status = $request->status;
        $eve_agd->save();
        return redirect()->route('admin.eventagenda')->with('success', 'Data Added Successfully!!!!');
    }


    public function show(EventAgenda $eventAgenda)
    {
        //
    }


    public function edit(EventAgenda $eventAgenda, $id)
    {
        $eve_agd = EventAgenda::find($id);
        $staff = User::where('role', 'staff')->get();
        return view('admin.eventagenda.edit', compact('eve_agd', 'staff'));
    }


    public function update(Request $request, EventAgenda $eventAgenda, $id)
    {
        $eve_agd = EventAgenda::find($id);
        $eve_agd->name = $request->name;
        $eve_agd->date = $request->date;
        $eve_agd->staff_id = $request->staff_id;
        $eve_agd->start_time = $request->start_time;
        $eve_agd->end_time = $request->end_time;
        $eve_agd->attendance = $request->attendance;
        $eve_agd->status = $request->status;
        $eve_agd->save();
        return redirect()->route('admin.eventagenda')->with('success', 'Data Updated Successfully!!!!');
    }


    public function destroy(EventAgenda $eventAgenda, $id)
    {
        EventAgenda::destroy($id);
        return redirect()->route('admin.eventagenda')->with('success', 'Data Deleted Successfully!!!!');
    }

    public function status(Request $request,  $id)
    {
        $eve_agd = EventAgenda::find($id);
        if ($eve_agd->status == '1') {
            $eve_agd->status = '0';
            $eve_agd->save();
        } elseif ($eve_agd->status == '0') {
            $eve_agd->status = '1';
            $eve_agd->save();
        }

        return back()->with('success', 'Status changed Successfully!!!!');
    }
}
