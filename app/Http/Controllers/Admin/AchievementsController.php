<?php

namespace App\Http\Controllers\Admin;

use App\Achievements;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log; 

class AchievementsController extends Controller
{
    public function index() {
        $achievements = Achievements::paginate(5);
        $searchText = ''; 
        return view("admin.displayachievements",['achievements'=>$achievements,
        'searchText'=>$searchText]);
    }

    public function searchAchievements(Request $request) {
        $searchText = $request->get('searchText');  
        $achievements = Achievements::where('achievement', "Like", $searchText."%")->paginate(10);       
        return view("admin.displayachievements",['achievements'=>$achievements,
                                            'searchText'=>$searchText]);
    }    

    public function editAchievementForm($id){
        $achievement = Achievements::find($id);
         return view('admin.editachievementform',['achievement'=>$achievement]);
    }    
    
    public function updateAchievement(Request $request,$id){

        $achievement =  $request->input('achievement');
        $count =  $request->input('count');
        $active_ind = $request->input('active_ind');
        $updated_at = now();
        
        $updateArray = array("achievement"=>$achievement, 
                            "count"=> $count,
                            "active_ind"=>$active_ind,
                            "updated_at"=>$updated_at);

        DB::table('achievements')->where('id',$id)->update($updateArray);
        
        return redirect()->route("adminDisplayAchievements"); 
     }

     public function deleteAchievement($id){        
        Achievements::destroy($id);
        return redirect()->route("adminDisplayAchievements");

    }

    //display create product form
    public function createAchievementForm(){
        return view("admin.createachievementform");
    }

    //store new achievement to database
    public function sendCreateAchievementForm(Request $request){

        $achievement =  $request->input('achievement');
        $count =  $request->input('count');
        $active_ind = $request->input('active_ind');
        $created_at = now();
        
        $achievementsArray = array("achievement"=>$achievement,
                                "count"=> $count,
                                "active_ind"=>$active_ind,
                                "created_at"=>$created_at);
        

        $created = DB::table("achievements")->insert($achievementsArray);

        if($created){
            return redirect()->route("adminDisplayAchievements");
        }else{
           return "Achievements was not Created";
        }
    }
}
