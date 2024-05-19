<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProjectManager;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProjectManagerController extends Controller
{
    public function managerList(){
        
        $managers =ProjectManager::latest()->get();
        return view('backend.viewManagerList',compact('managers'));
    }
}
