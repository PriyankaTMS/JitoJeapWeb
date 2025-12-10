<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membership = Membership::get();
        return view('admin.membership.index', compact('membership'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.membership.create');
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

        // Create a new Membership instance
        $powteam = new Membership;
        $powteam->name = $request->name;
        $powteam->desc = $request->desc;
        $powteam->save();

        // Redirect with a success message
        return redirect()->route('admin.membership')->with('success', 'Data Added Successfully!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Membership $Membership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Membership $Membership, $id)
    {
        $powteam = Membership::find($id);
        return view('admin.membership.edit', compact('powteam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Membership $Membership, $id)
    {
        $powteam = Membership::find($id);

        // Update name and description
        $powteam->name = $request->name;
        $powteam->desc = $request->desc;

        $powteam->save();

        // Redirect with success message
        return redirect()->route('admin.membership')->with('success', 'Data Updated Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Membership $Membership, $id)
    {
        Membership::destroy($id);
        return redirect()->route('admin.membership')->with('success', 'Data Deleted Successfully!!!!');
    }
}
