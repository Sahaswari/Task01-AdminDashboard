<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ContainTypeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

//Admin routes
Route::get('/dashboard', [AdminController ::class, 'dashboard'])->name('dashboard');
Route::post('/dashboard', [AdminController ::class, 'adminlogout'])->name('adminlogout');

Route::get('/login', [AuthManager ::class, 'login'])->name('login');
Route::post('/login', [AuthManager ::class, 'loginPost'])->name('login.post');

Route::get('/registration',  [AuthManager ::class, 'registration'])->name('registration');
Route::post('/registration',  [AuthManager ::class, 'registrationPost'])->name('registration.post');

Route::get('/logout', [AuthManager ::class,'logout'])->name('logout');



