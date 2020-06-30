<?php

namespace App\Http\Controllers;

use App\Achievements;
use App\Category;
use App\Donations;
use App\Fundraise;
use App\Http\Controllers\Controller;
use App\NewsAndEvents;
use App\UserDonations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class DonationsController extends Controller
{
    public function index() {
        $achievements = Achievements::where('active_ind','Y')->get();  
        $newsandevents = NewsAndEvents::where('active_ind','Y')->get();      
        return view("welcome",['achievements'=>$achievements,
                                'newsandevents'=>$newsandevents]);
    } 
    
    public function news() {
        $newsandevents = NewsAndEvents::where('active_ind','Y')->get();      
        return view("news",['newsandevents'=>$newsandevents]);
    }

    public function findFundraise($id) {
        $fundraise = Fundraise::find($id);
        $user_donations = UserDonations::where('donation_for',$fundraise->campaign_name)->get();
        return view("fundraisedetail",['fundraise'=>$fundraise,
                                        'user_donations'=>$user_donations]);
    }     

    public function getActiveFundraiseList() {
        $fundraiselist = Fundraise::where('active_ind','Y')->paginate(8);
        return view("activefundraiselist",['fundraiselist'=>$fundraiselist]);
    }

    public function sendCreateVolunteerForm(Request $request){

        $first_name =  $request->input('first_name');
        $last_name =  $request->input('last_name');
        $email =  $request->input('email');
        $password =  $request->input('password');
        $mobile =  $request->input('mobile');
        $gender =  $request->input('gender');
        $age =  $request->input('age');
        $address =  $request->input('address');
        $education =  $request->input('education');
        $periodofvolunteer =  $request->input('periodofvolunteer');
        $areasofinterest =  $request->input('areasofinterest');
        $relocating =  $request->input('relocating');
        $emergency_contact_name =  $request->input('emergency_contact_name');
        $emergency_contact_phone =  $request->input('emergency_contact_phone');
        $liketodonate =  $request->input('liketodonate');
        $acceptterms =  $request->input('acceptterms');
        $active_ind =  $request->input('active_ind');
        

        $created_at = now();
        $newMenuArray = array("first_name"=> $first_name,
                            "last_name"=> $last_name,
                            "email"=> $email,
                            "password"=> $password,
                            "mobile"=> $mobile,
                            "gender"=> $gender,
                            "age"=> $age,
                            "address"=>$address,
                            "education"=>$education,
                            "periodofvolunteer"=>$periodofvolunteer,
                            "areasofinterest"=>$areasofinterest,
                            "relocating"=>$relocating,
                            "emergency_contact_name"=>$emergency_contact_name,
                            "emergency_contact_phone"=>$emergency_contact_phone,
                            "liketodonate"=>$liketodonate,
                            "acceptterms"=>$acceptterms,
                            "active_ind"=>'Y',
                            "created_at"=>$created_at
                           );

        $created = DB::table("volunteer")->insert($newMenuArray);

        if($created){
            return redirect()->route("getActiveFundraiseList");
        }else{
           return "FundraiseList was not Created";
        }
    }
    
    public function sendCreateFundraiseForm(Request $request){

        $first_name =  $request->input('first_name');
        $last_name =  $request->input('last_name');
        $email =  $request->input('email');
        $password =  $request->input('password');
        $mobile =  $request->input('mobile');
        $campaign_name =  $request->input('campaign_name');
        $campaign_amount =  $request->input('campaign_amount');
        $start_date =  $request->input('start_date');
        $end_date =  $request->input('end_date');
        $campaign_desc =  $request->input('campaign_desc');
        $active_ind =  $request->input('active_ind');

        Validator::make($request->all(),
            ['images.*'=>"required|file|image|mimes:jpg,png,jpeg,mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:25000"])->validate();
        $stringImageName='';
        if ($request->hasFile("campaign_image")) {
            $stringImageName = $request->file("campaign_image")->getClientOriginalName();
            //$image = $request->file("campaign_image");
            //$imageEncoded = File::get($request->campaign_image);
            $request->campaign_image->storeAs("public/images/", $stringImageName);
        }

        $stringVideoName='';
        if ($request->hasFile("campaign_video")) {
            $stringVideoName = $request->file("campaign_video")->getClientOriginalName();
            //$image = $request->file("campaign_video");
            //$imageEncoded = File::get($request->campaign_video);
            $request->campaign_video->storeAs("public/images/", $stringVideoName);
        }
        $created_at = now();
        $newMenuArray = array("first_name"=> $first_name,
                            "last_name"=> $last_name,
                            "email"=> $email,
                            "password"=> $password,
                            "mobile"=> $mobile,
                            "campaign_name"=> $campaign_name,
                            "campaign_amount"=> $campaign_amount,
                            "start_date"=>$start_date,
                            "end_date"=>$end_date,
                            "campaign_desc"=>$campaign_desc,
                            "created_at"=>$created_at,
                            "active_ind"=>'Y',
                            "campaign_image"=> $stringImageName,
                            "campaign_video"=> $stringVideoName
                           );

        $created = DB::table("fundraise")->insert($newMenuArray);

        if($created){
            return redirect()->route("getActiveFundraiseList");
        }else{
           return "FundraiseList was not Created";
        }
    }

    public function getDonationsByCategory() {
        $categories = Category::where('type','Donations')->get();
        foreach ($categories as $category) {
            $donations = Donations::where('category_id', $category->id)->get();
            $category['donations'] = $donations;
        }
        Log::debug($categories);
        return view("donate",['categories'=>$categories]);
    }
    public function personalDetail(Request $request) {
        $donation_amount =  $request->input('donation_amount');
        $health_other_amount = $request->input('health_other_amount'); 
        $donation_name =  $request->input('donation_name'); 
        $qty = $request->input('qty');
        $livamountkeepmother =  $request->input('livamountkeepmother');
        $livlihoodorganic =  $request->input('livlihoodorganic');
        $livlihoodtailer =  $request->input('livlihoodtailer'); 
        $educationsschool =  $request->input('educationsschool'); 
        $educationscomputer =  $request->input('educationscomputer'); 
        Log::debug('donation_amt = |' .$donation_amount . '|, qtty = |' .$qty. '|,livlihoodtailer = |'.$livlihoodtailer .'|');
        Log::debug('livamountkeepmother = |' .$livamountkeepmother . '|, livlihoodorganic = |'.$livlihoodorganic.
                                        '|, educationsschool = |'.$educationsschool.'|,educationscomputer = '.$educationscomputer.'|' );
        Log::debug("donation_name = " . $donation_name);
        if ($qty !='') {            
            $donation_amount *= $qty;
        }

        if ($livamountkeepmother !='') {            
            $donation_amount = $livamountkeepmother;
        }

        if ($livlihoodorganic !='') {            
            $donation_amount = $livlihoodorganic;
        }

        if ($livlihoodtailer !='') {            
            $donation_amount = $livlihoodtailer;
        }

        if ($educationsschool !='') {            
            $donation_amount = $educationsschool;
        }

        if ($educationscomputer !='') {            
            $donation_amount = $educationscomputer;
        }

        if($health_other_amount !='') {
            $donation_amount = $health_other_amount;
        }

        $states = $this->getStates();    
        return view("personaldetail",['donation_amount'=>$donation_amount,
                                    'donation_name'=>$donation_name,
                                    'states'=>$states]);
    }


    public function getStates(){
        $path = storage_path() . "/json/statesanddistricts.json";

        $states = json_decode(file_get_contents($path), true); 
        return $states;        
    }
    
}
