<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        
        return view('welcome');
    }

    public function container(){
        return view('contain');
    }
}
