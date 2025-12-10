<?php

namespace App\Http\Controllers;

use App\Models\Qr;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VipController extends Controller
{

    public function index()
    {
        $vip = User::where('role', 'vip')->get();
        return view('admin.vip.index', compact('vip'));
    }


    public function create()
    {
        return view('admin.vip.create');
    }


    public function store(Request $request)
    {
        // return $request->all();
        $vip = new User;
        $vip->name = $request->name;
        $vip->email = $request->email;
        $vip->role = 'vip';
        $vip->password = Hash::make($request->email);
        $vip->mobile = $request->mobile;
        $vip->company = $request->company;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(
                'roaster',
                $imageName
            );
        } else {
            $imageName = '';
        }
        $vip->image = $imageName;
        if ($request->hasFile('qr_image')) {
            // $qr_imageName = $request->qr_image->name() . $request->qr_image->extension();
            $qr_imageName = $request->file('qr_image')->getClientOriginalName();
            $request->qr_image->move(
                'qr_codes',
                $qr_imageName
            );
        } else {
            $qr_imageName = '';
        }
        $vip->qr_image = $qr_imageName;
        $vip->qr_code = $request->qr_code;
        // return $vip;
        $vip->save();

        return redirect()->route('admin.vip')->with('success', 'Data Added Successfully');
    }


    public function edit(string $id)
    {
        $vip = User::find($id);
        return view('admin.vip.edit', compact('vip'));
    }


    public function update(Request $request, $id)
    {
        // return $request->all();
        $vip =  User::find($id);
        $vip->name = $request->name;
        $vip->email = $request->email;
        $vip->role = 'vip';
        $vip->password = Hash::make($request->email);
        $vip->mobile = $request->mobile;
        $vip->company = $request->company;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(
                'roaster',
                $imageName
            );
        } else {
            $imageName = '';
        }
        $vip->image = $imageName;
        if ($request->hasFile('qr_image')) {
            // $qr_imageName = $request->qr_image->name() . $request->qr_image->extension();
            $qr_imageName = $request->file('qr_image')->getClientOriginalName();
            $request->qr_image->move(
                'qr_codes',
                $qr_imageName
            );
            $vip->qr_image = $qr_imageName;
        }

        $vip->qr_code = $request->qr_code;
        $vip->save();

        return redirect()->route('admin.vip')->with('success', 'Data Updated Successfully');
    }


    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('admin.vip')->with('success', 'Data Deleted Successfully!!!!');
    }
}
