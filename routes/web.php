<?php

use Illuminate\Support\Facades\Route;



// Controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

// Model


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

// Profile
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::get('edit_profile', [ProfileController::class, 'edit_profile'])->name('edit_profile');
Route::post('/profile_image_update', [ProfileController::class, 'image_update'])->name('profile_image_update');

