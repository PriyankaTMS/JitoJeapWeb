<?php

namespace App\Http\Controllers;

use App\Models\Upcoming;
use Illuminate\Http\Request;

class UpcomingController extends Controller
{
    public function index()
    {
       $upcomings = Upcoming::get();
        return view('admin.upcoming_events.index', compact('upcomings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.upcoming_events.create', );
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

            $image->move(public_path('Upcomings'), $imageName);

            // $powteam->logo = $imageName;
        }

        // Create a new Team (or save the data to the database)
        Upcoming::create([
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
        return redirect()->route('admin.upcoming')->with('success', 'Data Added Successfully!!!!');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $upcoming = Upcoming::find($id);

        return view('admin.upcoming_events.edit', compact( 'upcoming'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $upcoming = Upcoming::find($id);
        $upcoming->title = $request->title;
        $upcoming->description = $request->description;
        $upcoming->place  = $request->place;
        $upcoming->date  = $request->date;


        // if ($request->hasFile('photo')) {

        //     $request->validate([
        //         'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for the logo
        //     ]);


        //     if (file_exists(public_path('Upcomings/' . $upcoming->image))) {
        //         unlink(public_path('Upcomings/' . $upcoming->image));
        //     }

        //     $image = $request->file('photo');

        //     $imageName = time() . '.' . $image->getClientOriginalExtension();

        //     $image->move(public_path('Upcomings'), $imageName);

        //     $upcoming->image = $imageName;
        // }
        
        
           if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for the logo
            ]);
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move('Upcomings', $imageName);
            $filePath = public_path('Upcomings/' . $upcoming->image);
            if (is_file($filePath)) {
                unlink($filePath);
            }
            $upcoming->image = $imageName;
        }

        $upcoming->save();
        return redirect()->route('admin.upcoming')->with('success', 'Data Updated Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Upcoming::destroy($id);
        return redirect()->route('admin.upcoming')->with('success', 'Data Deleted Successfully!!!!');
    }
}
