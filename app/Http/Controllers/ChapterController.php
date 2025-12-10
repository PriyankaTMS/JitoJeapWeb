<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Models\Zone;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chapter = Chapter::get();
        $zones = Zone::get();
        return view('admin.chapter.index', compact('chapter', 'zones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $zones = Zone::get();
        return view('admin.chapter.create', compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'zone' => 'required|exists:zones,id',  // Ensure the zone exists
            'name' => 'required|string|max:255',  // Name validation
            'city' => 'required|string|max:255',  // City validation
            'status' => 'required|string|max:255',  // Status validation
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Logo validation
        ]);

        // Handle the logo file upload
        $logoPath = null;
        if ($request->hasFile('logo')) {
            // Store the logo in the 'public/logos' directory
            // $logoPath = $request->file('logo')->store('chapter', 'public');  // Store in storage/app/public/logos
            $image = $request->file('logo');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('chapter'), $imageName);

            // $powteam->logo = $imageName;
        }

        // Create a new chapter (or save the data to the database)
        Chapter::create([
            'zone_id' => $request->zone,
            'name' => $request->name,
            'city' => $request->city,
            'status' => $request->status,
            'logo' => $imageName,
            'members' => $request->members,
            'com_evt' => $request->com_evt,
            'up_evt' => $request->up_evt,
            'rank' => $request->rank,  // Save the logo path in the database
        ]);

        // $chapter = new Chapter;
        // $chapter->name = $request->name;
        // $chapter->save();
        return redirect()->route('admin.chapter')->with('success', 'Data Added Successfully!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chapter $chapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chapter $chapter, $id)
    {
        $chapter = Chapter::find($id);
        $zones = Zone::get();
        return view('admin.chapter.edit', compact('chapter', 'zones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chapter $chapter, $id)
    {
        $chapter = Chapter::find($id);
        $chapter->name = $request->name;
        $chapter->city = $request->city;
        $chapter->status = $request->status;
        $chapter->zone_id  = $request->zone;
        $chapter->members = $request->members;
        $chapter->com_evt = $request->com_evt;
        $chapter->up_evt = $request->up_evt;
        $chapter->rank = $request->rank;


        if ($request->hasFile('logo')) {

            $request->validate([
                'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for the logo
            ]);


            if ($chapter->logo && file_exists(public_path('chapter/' . $chapter->logo))) {
                unlink(public_path('zone/' . $chapter->logo));
            }

            $image = $request->file('logo');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('chapter'), $imageName);

            $chapter->logo = $imageName;
        }

        $chapter->save();
        return redirect()->route('admin.chapter')->with('success', 'Data Updated Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chapter $chapter, $id)
    {
        Chapter::destroy($id);
        return redirect()->route('admin.chapter')->with('success', 'Data Deleted Successfully!!!!');
    }
}
