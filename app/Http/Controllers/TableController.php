<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $table = Table::get();
        return view('admin.table.index', compact('table'));
    }


    public function create()
    {
        return view('admin.table.create');
    }


    public function store(Request $request)
    {
        $table = new Table;
        $table->name = $request->name;
        $table->save();
        return redirect()->route('admin.table')->with('success', 'Data Added Successfully!!!!');
    }


    public function edit(Table $table, $id)
    {
        $table = Table::find($id);
        return view('admin.table.edit', compact('table'));
    }


    public function update(Request $request, Table $table, $id)
    {
        $table = Table::find($id);
        $table->name = $request->name;
        $table->save();
        return redirect()->route('admin.table')->with('success', 'Data Updated Successfully!!!!');
    }


    public function destroy(Table $table, $id)
    {
        Table::destroy($id);
        return redirect()->route('admin.table')->with('success', 'Data Updated Successfully!!!!');
    }
}
