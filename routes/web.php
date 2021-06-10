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
Route::post('profile_image_update', [ProfileController::class, 'image_update'])->name('profile_image_update');
Route::post('gender_update', [ProfileController::class, 'gender_update'])->name('profile_gender_update');
Route::post('name_update', [ProfileController::class, 'name_update'])->name('profile_name_update');
Route::post('email_update', [ProfileController::class, 'email_update'])->name('profile_email_update');
Route::post('password_update', [ProfileController::class, 'password_update'])->name('profile_password_update');
