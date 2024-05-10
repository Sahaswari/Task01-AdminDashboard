<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function registration(){
        return view('registration');
    }

    function loginPost(request $request){
        $request->validate([
            'email' =>'required',
            'password' =>'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attemt($credentials)){
            return redirect()->intended(route('home'));
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
}
