<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Zone;
use App\Models\Chapter;
use App\Models\Category;
use App\Models\PowerTeam;
use App\Models\Membership;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        // $powerteams = PowerTeam::all();

        $category = Category::get();
        $zone = Zone::first();
        $chapter = Chapter::get();
        $member = Membership::get();
        $designations = Designation::get();
        return view('auth.register', compact('category', 'zone', 'chapter', 'member', 'designations'));
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'confirmed'],
            'mobile' => ['required', 'string', 'max:255'],
            'dob' => 'required',
            'image' => 'required',
            'company' => 'required|string',
            'link' => 'nullable|string',
            // 'chap_des' => 'string|nullable',
            'zone_id' => 'required',
            'cat_id' => 'required',
            'cap_id' => 'required',
            'mem_id' => 'required',
            'usp' => 'string|nullable',
            'com_brief' => 'string|nullable',
            'designation_id' => 'required',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $imageName = null;
        // if (request()->hasFile('image')) {
        //     $file = request()->file('image');
        //     $imageName = time() . '_' . $file->getClientOriginalName();
        //     $destinationPath = base_path('roaster');
        //     $file->move($destinationPath, $imageName);
        // }
        if (request()->hasFile('image')) {
            $imageName = time() . '.' . request()->image->extension();
            request()->image->move(
                'roaster',
                $imageName
            );
        } else {
            $imageName = '';
        }


        return User::create([
            'status' => "1",
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['mobile']),
            'mobile' => $data['mobile'],
            'dob' => $data['dob'],
            'image' => $imageName,
            'company' => $data['company'],
            'link' => $data['link'],
            // 'chap_des' => $data['chap_des'],
            'zone_id' => $data['zone_id'],
            'cat_id' => $data['cat_id'],
            'cap_id' => $data['cap_id'],
            'mem_id' => $data['mem_id'],
            'usp' => $data['usp'],
            'com_brief' => $data['com_brief'],
            'designation_id' => $data['designation_id'],
        ]);
    }

    // Custom register method
    public function register(Request $request)
    {
        // return $request->all();
        $this->validator($request->all())->validate();
        $this->create($request->all());
        return redirect()->route('showmsg')->with('success', 'Registration successful. Please log in.');
    }


    // public function register(Request $request)
    // {
    // return $request->all();
    // Manually handle validation (optional)
    // $request->validate([
    //     'name' => 'required|string|max:255',
    //     'email' => 'required|string|email|max:255|unique:users',
    //     'mobile' => 'required|string|max:255',
    //     'image' => 'required',
    //     'company' => 'required|string',
    //     'link' => 'nullable|string',
    //     'chap_des' => 'string',
    //     'zone_id' => 'required',
    //     'cat_id' => 'required',
    //     'cap_id' => 'required',
    //     'mem_id' => 'required',
    // ]);

    //     $imageName = null;
    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $imageName = time() . '_' . $file->getClientOriginalName();
    //         $destinationPath = base_path('public_html/roaster');
    //         $file->move($destinationPath, $imageName);
    //     }

    //     User::create([
    //         'status' => "0",
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->mobile),
    //         'mobile' => $request->mobile,
    //         'image' => $imageName,
    //         'company' => $request->company,
    //         'link' => $request->link,
    //         'chap_des' => $request->chap_des,
    //         'zone_id' => $request->zone_id,
    //         'cat_id' => $request->cat_id,
    //         'cap_id' => $request->cap_id,
    //         'mem_id' => $request->mem_id,
    //     ]);

    //     return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    // }
}
