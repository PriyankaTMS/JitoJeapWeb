<?php

namespace App\Http\Controllers;

use App\Models\IndustrialConnect;
use Illuminate\Http\Request;

class IndustrialConnectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ind_con = IndustrialConnect::get();
        return view('admin.industrial_connect.index', compact('ind_con'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.industrial_connect.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ind_con = new IndustrialConnect;
        $ind_con->name = $request->name;
        if ($request->hasFile('logo')) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(
                'admin/assets/images/industryLogo',
                $imageName
            );
        } else {
            $imageName = '';
        }
        $ind_con->logo = $imageName;
        $ind_con->con_per_name = $request->con_per_name;
        $ind_con->designation = $request->designation;
        $ind_con->seats = $request->seats;
        $ind_con->desc = $request->desc;
        $ind_con->status = $request->status;
        $ind_con->save();
        return redirect()->route('admin.industrial_connect')->with('success', 'Data Added Successfully!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(IndustrialConnect $industrialConnect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IndustrialConnect $industrialConnect, $id)
    {
        $ind_con = IndustrialConnect::find($id);
        return view('admin.industrial_connect.edit', compact('ind_con'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IndustrialConnect $industrialConnect, $id)
    {
        $ind_con = IndustrialConnect::find($id);
        $ind_con->name = $request->name;
        if ($request->hasFile('logo')) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move('admin/assets/images/industryLogo', $imageName);
            $filePath = public_path('admin/assets/images/industryLogo/' . $ind_con->logo);
            if (is_file($filePath)) {
                unlink($filePath);
            }
            $ind_con->logo = $imageName;
        }
        $ind_con->con_per_name = $request->con_per_name;
        $ind_con->designation = $request->designation;
        $ind_con->seats = $request->seats;
        $ind_con->desc = $request->desc;
        $ind_con->status = $request->status;
        $ind_con->save();
        return redirect()->route('admin.industrial_connect')->with('success', 'Data Updated Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IndustrialConnect $industrialConnect, $id)
    {
        IndustrialConnect::destroy($id);
        return redirect()->route('admin.industrial_connect')->with('success', 'Data Deleted Successfully!!!!');
    }


    public function status(Request $request, IndustrialConnect $industrialConnect, $id)
    {
        $ind_con = IndustrialConnect::find($id);
        if ($ind_con->status == '1') {
            $ind_con->status = '0';
            $ind_con->save();
        } elseif ($ind_con->status == '0') {
            $ind_con->status = '1';
            $ind_con->save();
        }

        return back()->with('success', 'Status changed Successfully!!!!');
    }
}
