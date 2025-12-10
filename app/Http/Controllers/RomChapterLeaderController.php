<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Models\RomChapterLeader;

class RomChapterLeaderController extends Controller
{

    public function index()
    {
        $chapleader = RomChapterLeader::get();
        // $chater = Chapter::grt();
        return view('admin.chapterleader.index', compact('chapleader'));
    }


    public function create()
    {
        $chapter = Chapter::get();
        return view('admin.chapterleader.create', compact('chapter'));
    }

    public function store(Request $request)
    {
        $chapleader = new RomChapterLeader;
        $chapleader->name = $request->name;
        $chapleader->designation = $request->designation;
        $chapleader->phone = $request->phone;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(
                'roaster',
                $imageName
            );
        } else {
            $imageName = '';
        }
        $chapleader->image = $imageName;
        $chapleader->chap_id = $request->chap_id;
        $chapleader->save();
        return redirect()->route('admin.chapterleader')->with('success', 'Chapter Leader Added Successfully');
    }

    public function show(RomChapterLeader $romChapterLeader)
    {
        //
    }

    public function edit(RomChapterLeader $romChapterLeader, $id)
    {
        $chapleader = RomChapterLeader::find($id);
        $chapter = Chapter::get();
        return view('admin.chapterleader.edit', compact('chapleader', 'chapter'));
    }


    public function update(Request $request, RomChapterLeader $romChapterLeader, $id)
    {
        $chapleader = RomChapterLeader::find($id);
        $chapleader->name = $request->name;
        $chapleader->designation = $request->designation;
        $chapleader->phone = $request->phone;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move('roaster', $imageName);
            $filePath = public_path('roaster/' . $chapleader->image);
            if (is_file($filePath)) {
                unlink($filePath);
            }
            $chapleader->image = $imageName;
        }
        $chapleader->chap_id = $request->chap_id;
        $chapleader->save();
        return redirect()->route('admin.chapterleader')->with('success', 'Chapter Leader Updated Successfully');
    }


    public function destroy(RomChapterLeader $romChapterLeader, $id)
    {
        RomChapterLeader::destroy($id);
        return redirect()->route('admin.chapterleader')->with('success', 'Chapter Leader Deleted Successfully');
    }
}
