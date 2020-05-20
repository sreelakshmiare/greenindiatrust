<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminMenusController extends Controller
{
    public function index() {
        $menus = Menu::orderBy('sort_order')->paginate(10);
        $searchText = '';
        return view("admin.displaymenus",['menus'=>$menus,'searchText'=>$searchText]);
    }

    public function searchMenus(Request $request) {
        $searchText = $request->get('searchText');  
        $menus = Menu::where('label', "Like", $searchText."%")->paginate(10);       
        return view("admin.displaymenus",['menus'=>$menus,
                                            'searchText'=>$searchText]);
    }

    public function editMenuForm($id){
        $menu = Menu::find($id);
        $parentMenus = Menu::where('action','parent')
                        ->where('active_ind','Y')
                        ->get();
        $subparentMenus = Menu::where('action','sub parent')
                        ->where('active_ind','Y')
                        ->get(); 
        Log::debug('parentMenus = '.$parentMenus);
        return view('admin.editmenuform',['menu'=>$menu,
                                        'parentMenus'=>$parentMenus,
                                        'subparentMenus'=>$subparentMenus]);
    }

    public function updateMenu(Request $request,$id){

        $label =  $request->input('label');
        $parent_id =  $request->input('parent_id');
        $sub_parent_id =  $request->input('sub_parent_id');
        $sort_order =  $request->input('sort_order');
        $action = $request->input('action');        
        $function_cd =  $request->input('function_cd');
        $active_ind =  $request->input('active_ind');
        $external_url =  $request->input('external_url');
        $updated_at = now();
        $updateArray = array("label"=> $label,
                            "parent_id"=> $parent_id,
                            "sub_parent_id"=> $sub_parent_id,
                            "sort_order"=> $sort_order,
                            "action"=> $action,
                            "function_cd"=> $function_cd,
                            "external_url"=> $external_url,
                            "active_ind"=>$active_ind,
                            "updated_at"=>$updated_at);
 
         DB::table('menus')->where('id',$id)->update($updateArray);
 
         return redirect()->route("adminDisplayMenus");
 
     }

     public function deleteMenu($id){

        $menu = Menu::find($id);
        Menu::destroy($id);
        return redirect()->route("adminDisplayMenus");

    }

    //display create product form
    public function createMenuForm(){
        $parentMenus = Menu::where('action','parent')
                        ->where('active_ind','Y')
                        ->get(); 
        $subparentMenus = Menu::where('action','sub parent')
                        ->where('active_ind','Y')
                        ->get(); 
        
        return view("admin.createmenuform",['parentMenus'=>$parentMenus,
                                            'subparentMenus'=>$subparentMenus]);
    }

    //store new menu to database
    public function sendCreateMenuForm(Request $request){

        $label =  $request->input('label');
        $parent_id =  $request->input('parent_id');
        $sub_parent_id =  $request->input('sub_parent_id');
        $sort_order =  $request->input('sort_order');
        $action =  $request->input('action');
        $function_cd =  $request->input('function_cd');
        $active_ind =  $request->input('active_ind');
        $external_url =  $request->input('external_url');
        $created_at = now();
        $newMenuArray = array("label"=> $label,
                            "parent_id"=> $parent_id,
                            "sub_parent_id"=> $sub_parent_id,
                            "sort_order"=> $sort_order,
                            "action"=> $action,
                            "function_cd"=> $function_cd,
                            "external_url"=> $external_url,
                            "active_ind"=>$active_ind,
                            "created_at"=>$created_at
                           );

        $created = DB::table("menus")->insert($newMenuArray);

        if($created){
            return redirect()->route("adminDisplayMenus");
        }else{
           return "Menu was not Created";
        }
    }
}
