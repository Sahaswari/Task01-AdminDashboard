<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ContainTypeController ;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

//Admin routes
//Route::get('/dashboard', [AdminController ::class, 'dashboard'])->name('dashboard');
Route::post('/dashboard', [AdminController ::class, 'adminlogout'])->name('adminlogout');

Route::get('/login', [AuthManager ::class, 'login'])->name('login');
Route::post('/login', [AuthManager ::class, 'loginPost'])->name('login.post');

Route::get('/registration',  [AuthManager ::class, 'registration'])->name('registration');
Route::post('/registration',  [AuthManager ::class, 'registrationPost'])->name('registration.post');

Route::get('/logout', [AuthManager ::class,'logout'])->name('logout');

//Admin group middleware


Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
  
//Project add type All route
Route::group(['prefix' => 'ContainType'], function(){
  Route::get('/dashboard/list', [ContainTypeController::class, 'viewList'])->name('viewProjectData');
});

Route::group(['prefix' => 'ContainType'], function(){
  Route::get('/dashboard/addlist', [ContainTypeController::class, 'addList'])->name('addProject');
});

Route::group(['prefix' => 'ContainType'], function(){
  Route::post('/dashboard/addlist', [ContainTypeController::class, 'storeData'])->name('storeData');
});

// Route::group(['prefix' => 'ContainType'], function(){
//   Route::get('/dashboard/addlist', [ContainTypeController::class, 'addButtonList'])->name('addButtonProject');
// });






