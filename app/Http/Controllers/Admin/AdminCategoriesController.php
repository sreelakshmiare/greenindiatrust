<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCategoriesController extends Controller
{
    public function index() {
        $categories = Category::paginate(10);
        $searchText = '';    
        return view("admin.displaycategories",['categories'=>$categories,'searchText'=>$searchText]);
    }

    public function searchCategories(Request $request) {
        $searchText = $request->get('searchText');  
        $categories = Category::where('name', "Like", $searchText."%")->paginate(10);       
        return view("admin.displaycategories",['categories'=>$categories,
                                            'searchText'=>$searchText]);
    }

    public function editCategoryForm($id){
        $category = Category::find($id);
         return view('admin.editcategoryform',['category'=>$category]);
    }

    public function updateCategory(Request $request,$id){

        $name =  $request->input('name');
        $type =  $request->input('type');
        $active_ind = $request->input('active_ind');
        //$category_code = $request->input('category_code');
        $updated_at = now();
        $updateArray = array("name"=>$name, 
                            "type"=> $type,
                            "active_ind"=>$active_ind,
                            "updated_at"=>$updated_at);
 
         DB::table('categories')->where('id',$id)->update($updateArray);
 
         return redirect()->route("adminDisplayCategories");
 
     }

     public function deleteCategory($id){

        $category = Category::find($id);
        Category::destroy($id);
        return redirect()->route("adminDisplayCategories");

    }

    //display create category form
    public function createCategoryForm(){
        return view("admin.createcategoryform");
    }

    //store new category to database
    public function sendCreateCategoryForm(Request $request){

        $name =  $request->input('name');
        $type =  $request->input('type');
        //$category_code = $request->input('category_code');
        $active_ind = $request->input('active_ind');
        $created_at = now();
        $newCategoryArray = array("name"=>$name, 
                                "active_ind"=> $active_ind,
                                "type"=>$type,
                                "created_at"=>$created_at);

        $created = DB::table("categories")->insert($newCategoryArray);

        if($created){
            return redirect()->route("adminDisplayCategories");
        }else{
           return "Category was not Created";
        }
    }
}
