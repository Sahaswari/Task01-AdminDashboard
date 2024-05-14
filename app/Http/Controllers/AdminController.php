<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dashboard(){
        
        return view('welcome');
    }


    public function adminlogout(){
        Session::flash('logout_message', 'You have been logged out successfully.');
        Auth::logout();
        return redirect(route('login'));
    }
}
