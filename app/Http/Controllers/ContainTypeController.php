<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ContainType;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ContainTypeController extends Controller
{
    public function viewList(){
        
        $projects =ContainType::latest()->get();
        return view('backend.viewprojectlist',compact('projects'));
    }
}
