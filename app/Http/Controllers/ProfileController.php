<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Image;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile.profile');
    }

    // edit page show
    public function edit_profile()
    {
        return view('profile.edit_profile');
    }

    // profile image update
    public function image_update(REQUEST $req)
    {
        $req->validate([
            'profile_image' => 'required|mimes:jpg,png',
        ]);

        $new_profile_image = $req->file('profile_image');
        $new_profile_image_name = Auth::id() . "." . $new_profile_image->getClientOriginalExtension();
        if (Auth::user()->profile_image != "user.jpg") {
            $path = public_path() . "/asset/upload/user/" . Auth::user()->profile_image;
            unlink($path);
        }
        Image::make($new_profile_image)->save(base_path('public/asset/upload/user/' . $new_profile_image_name));
        User::find(Auth::id())->update([
            'profile_image' => $new_profile_image_name,
        ]);
        return back()->with('success', "you are sucess to update you profile ");
    }

    // profile gender update
    public function gender_update(REQUEST $req)
    {
        User::find(Auth::id())->update([
            'gender' => $req->gender
        ]);
        return back()->with('success', "you are sucess to update you gender ");
    }
    // profile name update
    public function name_update(REQUEST $req)
    {
        $req->validate([
            'name' => 'required',
        ]);
        User::find(Auth::id())->update([
            'name' => $req->name
        ]);
        return back()->with('success', "you are sucess to update you name ");
    }

    // profile email update
    public function email_update(REQUEST $req)
    {
        $req->validate([
            'email' => 'required|unique:users,email'
        ]);

        User::find(Auth::id())->update([
            'email' => $req->email
        ]);
        return back()->with('success', "you are sucess to update you eamil ");
    }
    // profile password update
    public function password_update(REQUEST $req)
    {
        $req->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|between:8,255',
            'password_confirmation' => 'required',
        ]);
        if (Hash::check($req->old_password, Auth::user()->password)) {
            User::find(Auth::id())->update([
                'password' => bcrypt($req->password)
            ]);
            return back()->with('success', "you are sucess to update you password ");
        } else {
            return back()->with('error', 'your old password ia wrong');
        }
    }
}
