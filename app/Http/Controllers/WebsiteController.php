<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Chapter;
use App\Models\Category;
use App\Models\Upcoming;
use App\Models\Completed;
use App\Models\PowerTeam;
use App\Models\UserBought;
use App\Helpers\AppHelpers;
use App\Models\ContactEnquiry;
use App\Models\RomChapterLeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebsiteController extends Controller
{
    public function index()
    {
        $chapters = Chapter::orderby('name', 'asc')->get();
        $images = Image::get();
        return view('website.home', compact('images', 'chapters'));
    }
    public function aboutJito(){
        return view('website.aboutJito');
    }
    public function aboutJeap(){
        return view('website.aboutJeap');
    }
    public function boardOfDirectors(){
        return view('website.boardOfDirectors');
    }
    public function testimonialSuccessStories(){
        return view('website.testimonialSuccessStories');
    }
    public function book()
    {
        return view('website.book');
    }
    public function pricing()
    {
        $pricingPlans = AppHelpers::$pricingData;
        $cartItems = [];
        if (Auth::check()) {
            $user = Auth::user();
            $cartItems = UserBought::where('user_id', $user->id)->where('status', 0)->get();
            $cartItems->map(function ($item) {
                $data = AppHelpers::getDataById($item->item_id);
                $item->name = $data['title'];
                return $item;
            });
        }
        return view('website.price', compact('pricingPlans', 'cartItems'));
    }
    public function industrial()
    {
        return view('website.industrial');
    }
    public function session()
    {
        // $user = User::with('powerteam', 'capter')->findOrFail($id);
        $chapters = Chapter::all();

        $delegates = User::with('chapters', 'categories')->where('role', 'user')->where('status', "1")->get();
        return view('website.session_1_2_1', compact('delegates', 'chapters'));
    }




    // public function session(Request $request)
    // {
    //     $chapters = Chapter::all();
    //     $query = $request->input('query');

    //     $delegates = User::with('chapters')
    //         ->where('role', 'user')
    //         ->where('status', '1')
    //         ->when($query, function ($q) use ($query) {
    //             $q->where(function ($subQuery) use ($query) {
    //                 $subQuery->where('name', 'like', "%{$query}%")
    //                     ->orWhere('email', 'like', "%{$query}%")
    //                     ->orWhere('phone', 'like', "%{$query}%"); // Add any other fields you want to search
    //             });
    //         })
    //         ->get();

    //     return view('website.session_1_2_1', compact('delegates', 'chapters'));
    // }



    // public function session(Request $request)
    // {
    //     $chapters = Chapter::all();

    //     $query = $request->input('query');

    //     $delegates = User::with('chapters')
    //         ->where('role', 'user')
    //         ->where('status', "1")
    //         ->when($query, function ($q) use ($query) {
    //             $q->where(function ($q2) use ($query) {
    //                 $q2->where('name', 'like', "%{$query}%")
    //                     ->orWhere('email', 'like', "%{$query}%")
    //                     ->orWhere('mobile', 'like', "%{$query}%");
    //             });
    //         })
    //         ->get();

    //     return view('website.session_1_2_1', compact('delegates', 'chapters'));
    // }





    // public function searchDelegates(Request $request)
    // {
    //     $query = $request->input('query');

    //     $delegates = User::where('role', 'user')
    //         ->where('status', "1")
    //         ->where(function ($q) use ($query) {
    //             $q->where('name', 'like', '%' . $query . '%')
    //                 ->orWhere('email', 'like', '%' . $query . '%'); // adjust fields as needed
    //         })
    //         ->get();

    //     return response()->json($delegates);
    // }





    public function profile($id)
    {
        // $roaster = User::find($id);
        $roaster = User::with('powerteam', 'categories')->where('role', 'user')->where('status', "1")->get();

        return view('website.profile', compact('roaster'));
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function myprofile()
    {
        return view('website.myprofile');
    }
    public function eventagenda()
    {
        return view('website.event');
    }

    public function editmyprofile($id, Request $request)
    {
        //return  $request->all();
        $roaster = User::find($id);
        $roaster->usp = $request->usp;
        $roaster->branches = $request->branches;
        $roaster->exp = $request->exp;
        $roaster->com_brief = $request->com_brief;
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
        // return $roaster;
        $roaster->save();
        return redirect()->back();
    }

    public function change_password(Request $request, $id)
    {
        // $roaster = User::find($id);
        // return $roaster;
        // //return $request->all();
        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully!');
    }


    public function getFilteredCategories(Request $request)
    {
        $pt_id = $request->input('pt_id');

        // Get all roasters that match the selected power team ID
        $roasters = User::where('role', 'user')->where('pt_id', $pt_id)->get();

        // Extract the category IDs from the roasters without duplicates
        $categoryIds = $roasters->pluck('cat_id')->unique();

        // Get the categories that match the filtered category IDs
        $categories = Category::whereIn('id', $categoryIds)->get();

        return response()->json($categories);
    }


    public function showmsg()
    {
        return view('website.showmsg');
    }



    public function upcommingEvent()
    {
        $upcomings = Upcoming::all();
        return view('website.upcomming-event', compact('upcomings'));
    }
    public function completedEvent()
    {
        $completeds = Completed::all();
        return view('website.completed-event', compact('completeds'));
    }
    public function profileDetails()
    {
        return view('website.profile-details');
    }
    public function roomdirec()
    {
        return view('website.room-direct');
    }
    public function contactus()
    {
        return view('website.contactus');
    }

    public function delegateProfile(Request $request)
    {
        $delegateId = $request->input('rost_id');

        $roaster = User::with('chapters', 'membership', 'zone', 'designation')->findOrFail($delegateId);
        //return $roaster;

        return view('website.profile', compact('roaster'));
    }

    public function chapterleader($id)
    {
        $chapleader = RomChapterLeader::where('chap_id', $id)->get();
        return view('website.chapterleaders', compact('chapleader'));
    }



    public function contactenquiry(Request $request)
    {
        $contactenquiry = new ContactEnquiry();
        $contactenquiry->name = $request->name;
        $contactenquiry->email = $request->email;
        $contactenquiry->message = $request->message;
        $contactenquiry->save();
        return redirect()->back()->with('success', 'Your message has been sent successfully');
    }
}
