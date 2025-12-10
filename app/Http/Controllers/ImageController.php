<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::get();
        return view('admin.image.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([


            // 'status' => 'required|string|max:255',  // Status validation
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Logo validation
        ]);

        // Handle the logo file upload

        if ($request->hasFile('photo')) {
            // Store the logo in the 'public/logos' directory
            // $logoPath = $request->file('logo')->store('Team', 'public');  // Store in storage/app/public/logos
            $image = $request->file('photo');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('Images'), $imageName);

            // $powteam->logo = $imageName;
        }

        // Create a new Team (or save the data to the database)
        Image::create([

            'image' => $imageName

            // 'logo' => $imageName,  // Save the logo path in the database
        ]);

        // $Team = new Team;
        // $Team->name = $request->name;
        // $Team->save();
        return redirect()->route('admin.image')->with('success', 'Data Added Successfully!!!!');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $image = Image::find($id);
        return view('admin.image.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $image = Image::find($id);


        // if ($request->hasFile('photo')) {

        //     $request->validate([
        //         'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for the logo
        //     ]);


        //     if (file_exists(public_path('Images/' . $image->image))) {
        //         unlink(public_path('Images/' . $image->image));
        //     }

        //     $image = $request->file('photo');

        //     $imageName = time() . '.' . $image->getClientOriginalExtension();

        //     $image->move(public_path('Images'), $imageName);

        //     $image-> $imageName;
        // }

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for the logo
            ]);
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move('Images', $imageName);
            $filePath = public_path('Images/' . $image->photo);
            if (is_file($filePath)) {
                unlink($filePath);
            }
            $image->image = $imageName;
        }

        $image->save();
        return redirect()->route('admin.image')->with('success', 'Data Updated Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Image::destroy($id);
        return redirect()->route('admin.image')->with('success', 'Data Deleted Successfully!!!!');
    }
}
