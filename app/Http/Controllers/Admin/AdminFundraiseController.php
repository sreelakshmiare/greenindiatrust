<?php

namespace App\Http\Controllers\Admin;

use App\Fundraise;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class AdminFundraiseController extends Controller
{
    public function index() {
        $fundraises = Fundraise::paginate(10);
        
        return view("admin.displayfundraises",['fundraises'=>$fundraises]);
    }

    public function editFundraiseForm($id){
        $fundraise = Fundraise::find($id);
        return view('admin.editfundraiseform',['fundraise'=>$fundraise]);
    }

    public function updateFundraise(Request $request,$id){

        $campaign_status =  $request->input('campaign_status'); 
        $donation_raised_so_far =  $request->input('donation_raised_so_far');   
        $active_ind = $request->input('active_ind');
        $updated_at = now();
        Validator::make($request->all(),
            ['images.*'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();
        $fundraise = Fundraise::find($id);
        if ($request->hasFile("campaign_image")) {
            Log::debug("file exists in the request");            
            Log::debug('campaign_image  = '.$fundraise->campaign_image);
            $stringImageName = $request->file("campaign_image")->getClientOriginalName();
            Log::debug(' stringImageName = '.$stringImageName);
            $image = $request->file("campaign_image");
            $imageEncoded = File::get($request->campaign_image);
            $exists = Storage::disk('local')->exists('public/images/'.$fundraise->campaign_image);
            Log::debug('image exists = '.$exists);
            //delete old image
            if ($exists) {
                Storage::delete('public/images/'.$fundraise->campaign_image);
                Log::debug('deleted '. $fundraise->campaign_image.' from file system ');
            }
            Log::debug("Storing new image = ".$stringImageName);
            $request->campaign_image->storeAs("public/images/", $stringImageName);
            $updateArray = array("campaign_status"=>$campaign_status,
                            "active_ind"=>$active_ind,
                            "donation_raised_so_far"=>$donation_raised_so_far,
                            "updated_at"=>$updated_at,
                            "campaign_image"=> $stringImageName);
            DB::table('donations')->where('id',$id)->update($updateArray);
        } else {
            $updateArray = array("campaign_status"=>$campaign_status,
                                "active_ind"=>$active_ind,
                                "donation_raised_so_far"=>$donation_raised_so_far,
                                "campaign_image"=> $fundraise->campaign_image,
                                "updated_at"=>$updated_at);

            DB::table('fundraise')->where('id',$id)->update($updateArray);
        }
        return redirect()->route("adminDisplayFundraises"); 
     }

     public function deleteFundraise($id){ 
        $funraise = Fundraise::find($id);
        $exists =  Storage::disk("local")->exists("public/images/".$funraise->campaign_image);

        if($exists){
            Storage::delete('public/images/'.$funraise->campaign_image);
        }
        Fundraise::destroy($id);
        return redirect()->route("adminDisplayFundraises");
    }    
}
