<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\NewsAndEvents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminNewsAndEventsController extends Controller
{
    public function index() {
        $newsandevents = NewsAndEvents::paginate(10);
        return view("admin.displaynewsandevents",
        ['newsandevents'=>$newsandevents]);
    }

    public function editNewsAndEventsForm($id){
        $newsandevents = NewsAndEvents::find($id);
         return view('admin.editnewsandeventsform',['newsandevents'=>$newsandevents]);
    }

    public function updateNewsAndEvents(Request $request,$id){

        $news_events =  $request->input('news_events');
        $valid_from =  $request->input('valid_from');
        $valid_to =  $request->input('valid_to');
        $active_ind = $request->input('active_ind');
        $updated_at = now();

        $updateArray = array("news_events"=> $news_events,
                            "valid_from"=> $valid_from,
                            "valid_to"=> $valid_to,                            
                            "active_ind"=>$active_ind,
                            "updated_at"=>$updated_at);
 
         DB::table('news_and_events')->where('id',$id)->update($updateArray);
 
         return redirect()->route("adminDisplayNewsAndEvents");
 
     }

     public function deleteNewsAndEvents($id){

        $newsandevents = NewsAndEvents::find($id);
        NewsAndEvents::destroy($id);
        return redirect()->route("adminDisplayNewsAndEvents");

    }

    //display create product form
    public function createNewsAndEventsForm(){
        return view("admin.createnewsandeventsform");
    }

    //store new role to database
    public function sendCreateNewsAndEventsForm(Request $request){

        $news_events =  $request->input('news_events');
        $valid_from =  $request->input('valid_from');
        $valid_to =  $request->input('valid_to');
        $active_ind = $request->input('active_ind');
        $created_at = now();

        $newNewsAndEventsArray = array("news_events"=> $news_events,
                            "valid_from"=> $valid_from,
                            "valid_to"=> $valid_to,                            
                            "active_ind"=>$active_ind,                            
                            "created_at"=>$created_at);

        $created = DB::table("news_and_events")->insert($newNewsAndEventsArray);

        if($created){
            return redirect()->route("adminDisplayNewsAndEvents");
        }else{
           return "NewsAndEvents was not Created";
        }
    }
}
