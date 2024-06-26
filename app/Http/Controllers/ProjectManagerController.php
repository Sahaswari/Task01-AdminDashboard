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

    public function addButtonList(){
        return view('backend.addprojectmanager');
    }

    public function addmanagerList(){
        return view('backend.addprojectmanager');
    }

    public function storeManagerData(Request $request){
        $request->validate([
            'managerReg_id' => 'request|unique:project_managers'
           
        ]);
        ProjectManager::insert([
            'managerReg_id' =>$request->InputManagerId,
            'manager_name' =>$request->InputManagerName,
            'manager_type' =>$request->InputManagerType,
            'started_date' =>$request->StartedDate
        ]);

        $notification = array(
            'message' =>'Manager Details Added Successfully',
            'alert-type' =>'success',
        );
        return redirect(route('viewProjectManagers'))->with($notification);

    }

    public function editProject($id){
        $managers = ProjectManager::findOrFail($id);
        return view('backend.editmanagerdetails',compact('managers'));
    }

    public function editData(Request $request){
       
        $pid = $request->id;

        ProjectManager::findOrFail($pid)->update([
            'managerReg_id' =>$request->InputManagerId,
            'manager_name' =>$request->InputManagerName,
            'manager_type' =>$request->InputManagerType,
            'started_date' =>$request->StartedDate

        ]);

        $notification = array(
            'message' =>'Project Manager Details Updated Successfully',
            'alert-type' =>'success',
        );
        return redirect(route('viewProjectManagers'))->with($notification);

    }

    public function deleteData($id){
        ProjectManager::findOrFail($id)->delete();

        $notification=array(
        'message' =>'Project Manager Details Deleted Successfully',
        'alert-type' =>'success',
    );

    return redirect(route('viewProjectManagers'))->with($notification);

    }
}
