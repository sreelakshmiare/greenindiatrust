<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminRolesController extends Controller
{
    public function index() {
        $roles = Role::paginate(10);
        return view("admin.displayroles",['roles'=>$roles]);
    }

    public function editRoleForm($id){
        $role = Role::find($id);
         return view('admin.editroleform',['role'=>$role]);
    }

    public function updateRole(Request $request,$id){

        $role_name =  $request->input('role_name');
        $priority =  $request->input('priority');
        $role_type =  $request->input('role_type');
        $active_ind =  $request->input('active_ind');
        $updated_at = now();

        $updateArray = array("role_name"=> $role_name,
                            "priority"=> $priority,
                            "role_type"=> $role_type,                            
                            "active_ind"=>$active_ind,
                            "updated_at"=>$updated_at);
 
         DB::table('role')->where('id',$id)->update($updateArray);
 
         return redirect()->route("adminDisplayRoles");
 
     }

     public function deleteRole($id){

        $role = Role::find($id);
        Role::destroy($id);
        return redirect()->route("adminDisplayRoles");

    }

    //display create product form
    public function createRoleForm(){
        return view("admin.createroleform");
    }

    //store new role to database
    public function sendCreateRoleForm(Request $request){

        $role_name =  $request->input('role_name');
        $priority =  $request->input('priority');
        $role_type =  $request->input('role_type');
        $active_ind =  $request->input('active_ind');
        $created_at = now();

        $newRoleArray = array("role_name"=> $role_name,
                            "priority"=> $priority,
                            "role_type"=> $role_type,                            
                            "active_ind"=>$active_ind,
                            "created_at"=>$created_at);

        $created = DB::table("role")->insert($newRoleArray);

        if($created){
            return redirect()->route("adminDisplayRoles");
        }else{
           return "Role was not Created";
        }
    }
}
