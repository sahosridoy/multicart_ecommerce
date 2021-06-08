<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('profile.profile');
    }
    public function image_update(REQUEST $req){
        // return view('profile.profile');
        $req->validate([
            'profile_image' => 'required|mimes:jpg,png',
        ]);
       print_r($req->all());
    }
}
