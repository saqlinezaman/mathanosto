<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/',[FrontendController::class , 'index']);

Auth::routes();

Route::get('/home', [HomeController:: class, 'index'])->name('home');
// profile

Route::get('/profile', [ProfileController:: class, 'index'])->name('profile.index');

// profile name update 💕

Route::post('/profile/username/update', [ProfileController:: class, 'name_update'])->name('profile.username');


// profile email update😒😒

Route::post('/profile/email/update', [ProfileController:: class, 'email_update'])->name('profile.email');

// password update

Route::post('/profile/password/update', [ProfileController:: class, 'password_update'])->name('profile.password');

// image

Route::post('/profile/image/update', [ProfileController:: class, 'image_update'])->name('profile.image');


