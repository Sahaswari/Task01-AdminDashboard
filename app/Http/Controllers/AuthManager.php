<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
        if(Auth::check()){
            return redirect(route('dashboard'));
        }
        return view('login');
    }

    function registration(){
        if(Auth::check()){
            return redirect(route('dashboard'));
        }
        return view('registration');
    }

    function loginPost(request $request){
        $request->validate([
            'email' =>'required',
            'password' =>'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'));
        }
        return redirect(route('login'))->with("error",'Login Details are not Valid');
    }

    function registrationPost(request $request){
        $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'password' =>'required'
        ]);

        $data["name"] = $request->name;
        $data["email"] = $request->email;
        $data["password"] = Hash::make( $request->password);

        $user = User::create($data);

        if(!$user){
            return redirect(route('registration'))->with("error",'Registration faild, try again');
        }
        return redirect(route('login'))->with("success",'Registration successful, login to the site');
        
    }

    function logout(){
        Session::flash('logout_message', 'You have been logged out successfully.');
        Auth::logout();
        return redirect(route('login'));
    }

    function dashboard(){
        
        return view('welcome');
    }
}
