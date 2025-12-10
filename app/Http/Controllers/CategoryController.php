<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PowerTeam;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with('powerteam')->get();
        // $powteam = PowerTeam::get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $powteam = PowerTeam::get();
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        // $category->pt_id = $request->pt_id;
        $category->desc = $request->desc;
        $category->save();
        return redirect()->route('admin.category')->with('success', 'Data Added Successfully!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, $id)
    {
        $category = Category::find($id);
        // $powteam = PowerTeam::get();
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        // $category->pt_id = $request->pt_id;
        $category->desc = $request->desc;
        $category->save();
        return redirect()->route('admin.category')->with('success', 'Data Updated Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, $id)
    {
        Category::destroy($id);
        return redirect()->route('admin.category')->with('success', 'Data Deleted Successfully!!!!');
    }
}
