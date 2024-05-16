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

    public function addList(){
        return view('backend.addprojectdetails');
    }

    public function addButtonList(){
        return view('backend.addprojectdetails');
    }

    public function storeData(Request $request){
        $request->validate([
            'project_name' => 'request|unique:contain_types',
            'assign_name' => 'request',
        ]);
        ContainType::insert([
            'project_name' =>$request->InputProjectName,
            'project_type' =>$request->InputProjectType,
            'assign_name' =>$request->InputAssignName,
            'status' =>$request->Status

        ]);

        $notification = array(
            'message' =>'Project Details Added Successfully',
            'alert-type' =>'success',
        );
        return redirect(route('viewProjectData'))->with($notification);

    }

    public function editProject($id){
        $projects = ContainType::findOrFail($id);
        return view('backend.editdetails',compact('projects'));
    }
}
