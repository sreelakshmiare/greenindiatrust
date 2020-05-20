<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminUsersController extends Controller
{
    public function index() {
        $users = User::paginate(10);
        $roles = Role::all();
        $searchText = '';    
        return view("admin.displayusers",['users'=>$users,
                                          'roles'=>$roles,'searchText'=>$searchText]);
    }

    public function searchUsers(Request $request) {
        $searchText = $request->get('searchText');  
        $users = User::where('name', "Like", $searchText."%")->paginate(10);   
        $roles = Role::all();    
        return view("admin.displayusers",['users'=>$users,'roles'=>$roles,
                                            'searchText'=>$searchText]);
    }

    public function editUserForm($id){
        $user = User::find($id);
        $roles = Role::all()->sortBy('id');
         return view('admin.edituserform',['user'=>$user,
                                            'roles'=>$roles]);
    }

    public function updateUser(Request $request,$id){
        $name =  $request->input('name');
        $email =  $request->input('email');
        $admin = $request->input('admin_level');
        $admin_level = $request->input('admin_level');
        $updated_at = now();
        $updateArray = array("name"=>$name, 
                            "email"=> $email,
                            "admin"=>$admin,
                            "admin_level"=>$admin_level,
                            "updated_at"=>$updated_at);
 
         DB::table('users')->where('id',$id)->update($updateArray); 
         return redirect()->route("adminDisplayUsers"); 
     }

     public function deleteUser($id){
        $product = User::find($id);
        User::destroy($id);
        return redirect()->route("adminDisplayUsers");

    }
}
