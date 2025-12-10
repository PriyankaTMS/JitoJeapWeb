<?php

namespace App\Http\Controllers;

use ZipArchive;
use App\Models\Team;
use App\Models\User;
use App\Models\Zone;
use App\Models\Chapter;
use App\Models\Category;
use App\Models\PowerTeam;
use App\Models\Membership;
use App\Helpers\AppHelpers;
use App\Models\Designation;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Imports\UsersQRImport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;


class UserController extends Controller
{
    public function index()
    {
        $roaster = User::with('powerteam', 'categories', 'chapters', 'zone', 'team', 'membership', 'designation')->where('role', 'user')->get();

        return view('admin.roaster.index', compact('roaster'));
    }


    public function create()
    {
        $powteam = PowerTeam::get();
        $category = Category::get();
        $chapter = Chapter::get();
        $zone = Zone::get();
        $member = Membership::get();
        $designations = Designation::get();
        return view('admin.roaster.create', compact('powteam', 'category', 'chapter', 'zone', 'member', 'designations'));
    }


    public function store(Request $request)
    {
        // dd($request);
        $roaster = new user;
        $roaster->name = $request->name;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(
                'roaster',
                $imageName
            );
        } else {
            $imageName = '';
        }
        $roaster->image = $imageName;
        $roaster->email = $request->email;
        $roaster->password = Hash::make($request->mobile);
        // $roaster->addr = $request->addr;
        $roaster->mobile = $request->mobile;
        $roaster->dob = $request->dob;
        $roaster->link = $request->link;
        $roaster->company = $request->company;
        // $roaster->pt_id = $request->pt_id;
        $roaster->cat_id = $request->cat_id;
        $roaster->cap_id = $request->cap_id;
        $roaster->chap_des = $request->chap_des;
        // $roaster->usp = $request->usp;
        // $roaster->branches = $request->branches;
        // $roaster->exp = $request->exp;
        // $roaster->dream_r = $request->dream_r;
        $roaster->com_brief = $request->com_brief;
        $roaster->usp = $request->usp;
        $roaster->zone_id = $request->zone_id;
        $roaster->mem_id = $request->mem_id;
        $roaster->designation_id = $request->designation_id;

        $roaster->save();
        return redirect()->route('admin.roaster')->with('success', 'Data Added Successfully!!!!!');
    }


    public function show(string $id) {}


    public function edit(string $id)
    {
        $roaster = User::where('role', 'user')->find($id);
        $powteam = PowerTeam::get();
        $category = Category::get();
        $chapter = Chapter::get();
        $zone = Zone::get();
        $member = Membership::get();
        $designations = Designation::get();
        return view('admin.roaster.edit', compact('roaster', 'powteam', 'category', 'chapter', 'zone', 'member', 'designations'));
    }


    public function update(Request $request,  $id)
    {
        $roaster = User::find($id);
        $roaster->name = $request->name;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move('roaster', $imageName);
            $filePath = public_path('roaster/' . $roaster->image);
            if (is_file($filePath)) {
                unlink($filePath);
            }
            $roaster->image = $imageName;
        }
        // $roaster->email = $request->email;
        // if ($request->filled('password')) {
        //     $roaster->password = Hash::make($request->password);
        // } else {
        //     $roaster->password = $roaster->getOriginal('password');
        // }

        // $roaster->addr = $request->addr;
        // $roaster->mobile = $request->mobile;
        // $roaster->link = $request->link;
        // $roaster->company = $request->company;
        // $roaster->pt_id = $request->pt_id;
        // $roaster->cat_id = $request->cat_id;
        // $roaster->cap_id = $request->cap_id;
        // $roaster->chap_des = $request->chap_des;
        // $roaster->usp = $request->usp;
        // $roaster->branches = $request->branches;
        // $roaster->exp = $request->exp;
        // $roaster->dream_r = $request->dream_r;
        // $roaster->com_brief = $request->com_brief;
        $roaster->email = $request->email;
        $roaster->password = Hash::make($request->mobile);
        // $roaster->addr = $request->addr;
        $roaster->mobile = $request->mobile;
        $roaster->dob = $request->dob;
        $roaster->link = $request->link;
        $roaster->company = $request->company;
        // $roaster->pt_id = $request->pt_id;
        $roaster->cat_id = $request->cat_id;
        $roaster->cap_id = $request->cap_id;
        $roaster->chap_des = $request->chap_des;
        // $roaster->usp = $request->usp;
        // $roaster->branches = $request->branches;
        // $roaster->exp = $request->exp;
        // $roaster->dream_r = $request->dream_r;
        $roaster->com_brief = $request->com_brief;
        $roaster->usp = $request->usp;
        $roaster->zone_id = $request->zone_id;
        $roaster->mem_id = $request->mem_id;
        $roaster->designation_id = $request->designation_id;
        $roaster->save();
        return redirect()->route('admin.roaster')->with('success', 'Data updated Successfully!!!!!');
    }


    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('admin.roaster')->with('success', 'Data Deleted Successfully!!!!!');
    }

    public function status(string $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->status = $user->status == '0' ? '1' : '0';
            $user->save();
            return AppHelpers::sendResponse(null, 'Data Updated Successfully!!!!!', 200);
        }
        return AppHelpers::sendResponse(null, 'Data Not Found', 404);
    }

    public function importExcel(Request $request)
    {
        $request->validate([
            'import_file' => ['required', 'file'],
        ]);

        Excel::import(new UsersQRImport, $request->file('import_file'));

        return redirect()->back()->with('success', 'Excel Data Added Successfully!!!');
    }


    public function roasterpdf()
    {
        try {
            // Assuming you have a Roaster model and it's being used correctly here
            if (!File::exists(public_path('pdfs'))) {
                File::makeDirectory(public_path('pdfs'), 0755, true);
            }
            $roasters = User::with('chapters', 'categories')
                ->where('role', 'user')
                ->join('chapters', 'users.cap_id', '=', 'chapters.id') // Assuming `chapter_id` is the foreign key in the users table
                ->orderBy('chapters.name', 'asc') // Sort by the chapter's name
                ->select('users.*') // Select all user fields
                ->get();
            // return view('admin.roaster.roasterPDF', compact('roasters'));
            foreach ($roasters as $roster) {
                $roster->com_brief = AppHelpers::trimText($roster->com_brief);
                $roster->usp = AppHelpers::trimText($roster->usp);
                $roster->dream_r = AppHelpers::trimText($roster->dream_r);
                $roster->exp = AppHelpers::trimText($roster->exp);
                $roster->addr = AppHelpers::trimText($roster->addr);
            }
            // Load all roasters into a single PDF view
            $pdf = Pdf::loadView('admin.roaster.roasterPDF', compact('roasters'));
            // Define the file path to save the PDF
            $fileName = public_path('pdfs/all_roasters.pdf');
            $pdf->save($fileName);
            return $pdf->download('all_roasters.pdf');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            dd($e);
        }
    }
}
