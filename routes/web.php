<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\AdminController;

//Admin routes
Route::get('/dashboard', [AdminController ::class, 'dashboard'])->name('dashboard');

Route::get('/login', [AuthManager ::class, 'login'])->name('login');
Route::post('/login', [AuthManager ::class, 'loginPost'])->name('login.post');

Route::get('/registration',  [AuthManager ::class, 'registration'])->name('registration');
Route::post('/registration',  [AuthManager ::class, 'registrationPost'])->name('registration.post');

Route::get('/logout', [AuthManager ::class,'logout'])->name('logout');
Route::get('/logout', [AuthManager ::class,'logout'])->name('logout');
