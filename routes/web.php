<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ContainTypeController ;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectManagerController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

//Admin routes
//Route::get('/dashboard', [AdminController ::class, 'dashboard'])->name('dashboard');
Route::post('/dashboard', [AdminController ::class, 'adminlogout'])->name('adminlogout');

Route::get('/', [AuthManager ::class, 'login'])->name('login');
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

Route::group(['prefix' => 'ContainType'], function(){
  Route::get('/dashboard/edit/{id}', [ContainTypeController::class, 'editProject'])->name('edit');
});

Route::group(['prefix' => 'ContainType'], function(){
  Route::post('/dashboard/editlist', [ContainTypeController::class, 'editData'])->name('editData');
});

Route::group(['prefix' => 'ContainType'], function(){
  Route::get('/dashboard/deletelist{id}', [ContainTypeController::class, 'deleteData'])->name('delete');
});





Route::group(['prefix' => 'ProjectManager'], function(){
  Route::get('/dashboard/managerlist', [ProjectManagerController::class, 'managerList'])->name('viewProjectManagers');
});

Route::group(['prefix' => 'ProjectManager'], function(){
  Route::get('/dashboard/addmanagerlist', [ProjectManagerController::class, 'addButtonList'])->name('addProjectManager');
});

Route::group(['prefix' => 'ProjectManager'], function(){
  Route::get('/dashboard/addmanager', [ProjectManagerController::class, 'addmanagerList'])->name('addManager');
});

Route::group(['prefix' => 'ProjectManager'], function(){
  Route::post('/dashboard/addmanagerlist', [ProjectManagerController::class, 'storeManagerData'])->name('storeManagerData');
});

Route::group(['prefix' => 'ProjectManager'], function(){
  Route::get('/dashboard/edit/{id}', [ProjectManagerController::class, 'editProject'])->name('editManager');
});

Route::group(['prefix' => 'ProjectManager'], function(){
  Route::post('/dashboard/editmanagerlist', [ProjectManagerController::class, 'editData'])->name('editDataManager');
});

Route::group(['prefix' => 'ProjectManager'], function(){
  Route::get('/dashboard/deletemanagerlist{id}', [ProjectManagerController::class, 'deleteData'])->name('deleteManager');
});




