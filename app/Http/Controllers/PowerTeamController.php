<?php

namespace App\Http\Controllers;

use App\Models\PowerTeam;
use Illuminate\Http\Request;

class PowerTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $powteam = PowerTeam::get();
        return view('admin.power_team.index', compact('powteam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.power_team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $powteam = new PowerTeam;
        $powteam->name = $request->name;
        $powteam->desc = $request->desc;
        $powteam->save();
        return redirect()->route('admin.power_team')->with('success', 'Data Added Successfully!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PowerTeam $powerTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PowerTeam $powerTeam, $id)
    {
        $powteam = PowerTeam::find($id);
        return view('admin.power_team.edit', compact('powteam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PowerTeam $powerTeam, $id)
    {
        $powteam = PowerTeam::find($id);
        $powteam->name = $request->name;
        $powteam->desc = $request->desc;
        $powteam->save();
        return redirect()->route('admin.power_team')->with('success', 'Data Updated Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PowerTeam $powerTeam, $id)
    {
        PowerTeam::destroy($id);
        return redirect()->route('admin.power_team')->with('success', 'Data Deleted Successfully!!!!');
    }
}
