<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
