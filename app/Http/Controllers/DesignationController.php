<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::get();
        return view('admin.designation.index', compact('designations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.designation.create');
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

        ]);

        // Create a new designation instance
        $designation = new Designation;
        $designation->name = $request->name;
        $designation->desc = $request->desc;
        $designation->save();

        // Redirect with a success message
        return redirect()->route('admin.designation')->with('success', 'Data Added Successfully!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(designation $designation, $id)
    {
        $designation = Designation::find($id);
        return view('admin.designation.edit', compact('designation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, designation $designation, $id)
    {
        $designation = Designation::find($id);

        // Update name and description
        $designation->name = $request->name;
        $designation->desc = $request->desc;

        $designation->save();

        // Redirect with success message
        return redirect()->route('admin.designation')->with('success', 'Data Updated Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation, $id)
    {
        Designation::destroy($id);
        return redirect()->route('admin.designation')->with('success', 'Data Deleted Successfully!!!!');
    }
}
