<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Zone;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Team = Team::get();
        $zones = Zone::get();
        return view('admin.team.index', compact('Team', 'zones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zones = Zone::get();
        return view('admin.team.create', compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'zone' => 'required|exists:zones,id',  // Ensure the zone exists
            'name' => 'required|string|max:255',  // Name validation
            'designation' => 'required|string|max:255',  // City validation
            // 'status' => 'required|string|max:255',  // Status validation
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Logo validation
        ]);

        // Handle the logo file upload
        $logoPath = null;
        if ($request->hasFile('photo')) {
            // Store the logo in the 'public/logos' directory
            // $logoPath = $request->file('logo')->store('Team', 'public');  // Store in storage/app/public/logos
            $image = $request->file('photo');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('Teams'), $imageName);

            // $powteam->logo = $imageName;
        }

        // Create a new Team (or save the data to the database)
        Team::create([
            'zone_id' => $request->zone,
            'name' => $request->name,
            'image' => $imageName,
            'designation' => $request->designation,
            // 'logo' => $imageName,  // Save the logo path in the database
        ]);

        // $Team = new Team;
        // $Team->name = $request->name;
        // $Team->save();
        return redirect()->route('admin.team')->with('success', 'Data Added Successfully!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $Team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $Team, $id)
    {
        $Team = Team::find($id);
        $zones = Zone::get();
        return view('admin.team.edit', compact('Team', 'zones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $Team, $id)
    {
        $Team = Team::find($id);
        $Team->name = $request->name;
        $Team->designation = $request->designation;
        $Team->zone_id  = $request->zone;

        if ($request->hasFile('photo')) {

            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for the logo
            ]);


            if ($Team->logo && file_exists(public_path('Teams/' . $Team->image))) {
                unlink(public_path('Teams/' . $Team->image));
            }

            $image = $request->file('photo');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('Teams'), $imageName);

            $Team->logo = $imageName;
        }

        $Team->save();
        return redirect()->route('admin.team')->with('success', 'Data Updated Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $Team, $id)
    {
        Team::destroy($id);
        return redirect()->route('admin.team')->with('success', 'Data Deleted Successfully!!!!');
    }
}
