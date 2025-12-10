<?php

namespace App\Http\Controllers;

use App\Models\Completed;
use Illuminate\Http\Request;

class CompletedController extends Controller
{
    public function index()
    {
       $completeds = Completed::get();
        return view('admin.completed_events.index', compact('completeds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.completed_events.create', );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'zone' => 'required|exists:zones,id',  // Ensure the zone exists
        //     'name' => 'required|string|max:255',  // Name validation
        //     'designation' => 'required|string|max:255',  // City validation
        //     // 'status' => 'required|string|max:255',  // Status validation
        //     'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Logo validation
        // ]);

        // Handle the logo file upload

        if ($request->hasFile('photo')) {
            // Store the logo in the 'public/logos' directory
            // $logoPath = $request->file('logo')->store('Team', 'public');  // Store in storage/app/public/logos
            $image = $request->file('photo');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('Completed'), $imageName);

            // $powteam->logo = $imageName;
        }

        // Create a new Team (or save the data to the database)
        Completed::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
            'place' => $request->place,
            'date' => $request->date
            // 'logo' => $imageName,  // Save the logo path in the database
        ]);

        // $Team = new Team;
        // $Team->name = $request->name;
        // $Team->save();
        return redirect()->route('admin.completed')->with('success', 'Data Added Successfully!!!!');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $completed = Completed::find($id);

        return view('admin.completed_events.edit', compact( 'completed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $completed = Completed::find($id);
        $completed->title = $request->title;
        $completed->description = $request->description;
        $completed->place  = $request->place;
        $completed->date  = $request->date;


        if ($request->hasFile('photo')) {

            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for the logo
            ]);


            if (file_exists(public_path('Completed/' . $completed->image))) {
                unlink(public_path('Completed/' . $completed->image));
            }

            $image = $request->file('photo');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('Completed'), $imageName);

            $completed->image = $imageName;
        }

        $completed->save();
        return redirect()->route('admin.completed')->with('success', 'Data Updated Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Completed::destroy($id);
        return redirect()->route('admin.completed')->with('success', 'Data Deleted Successfully!!!!');
    }
}
