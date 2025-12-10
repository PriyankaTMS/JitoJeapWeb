<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $powteam = Zone::get();
        return view('admin.zone.index', compact('powteam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.zone.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for image
        ]);

        // Create a new Zone instance
        $powteam = new Zone;
        $powteam->name = $request->name;
        $powteam->desc = $request->desc;

        // Handle the image upload
        if ($request->hasFile('logo')) {
            // Get the file from the request
            $image = $request->file('logo');

            // Create a unique name for the image
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Save the image to the 'public/images' directory (or any directory you prefer)
            $image->move(public_path('zone'), $imageName);

            // Save the image filename to the database
            $powteam->logo = $imageName;
        }

        // Save the data to the database
        $powteam->save();

        // Redirect with a success message
        return redirect()->route('admin.zone')->with('success', 'Data Added Successfully!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Zone $Zone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Zone $Zone, $id)
    {
        $powteam = Zone::find($id);
        return view('admin.zone.edit', compact('powteam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Zone $Zone, $id)
    {
        $powteam = Zone::find($id);

        // Update name and description
        $powteam->name = $request->name;
        $powteam->desc = $request->desc;

        // Handle the logo upload if a file is provided
        if ($request->hasFile('logo')) {

            $request->validate([
                'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for the logo
            ]);


            if ($powteam->logo && file_exists(public_path('zone/' . $powteam->logo))) {
                unlink(public_path('zone/' . $powteam->logo));
            }

            $image = $request->file('logo');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('zone'), $imageName);

            $powteam->logo = $imageName;
        }

        // Save the updated team data
        $powteam->save();

        // Redirect with success message
        return redirect()->route('admin.zone')->with('success', 'Data Updated Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zone $Zone, $id)
    {
        Zone::destroy($id);
        return redirect()->route('admin.zone')->with('success', 'Data Deleted Successfully!!!!');
    }
}
