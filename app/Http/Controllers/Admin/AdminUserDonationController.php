<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\UserDonations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class AdminUserDonationController extends Controller
{
    public function index() {
        $userdonations = UserDonations::paginate(10);
        return view("admin.displayuserdonations",['userdonations'=>$userdonations]);
    }

    public function editUserDonationForm($id){
        $userdonation = UserDonations::find($id);
        return view('admin.edituserdonationform',['userdonation'=>$userdonation]);
    }

    public function updateUserDonation(Request $request,$id){

        /*$donation_name =  $request->input('donation_name'); 
        $category_id =  $request->input('category_id'); 
        $donation_amount =  $request->input('donation_amount');   
        $donation_description =  $request->input('donation_description');     
        $active_ind = $request->input('active_ind');
        $updated_at = now();
        
        $donations = UserDonations::find($id);
        
        $updateArray = array("donation_name"=>$donation_name, 
                            "donation_description" => $donation_description,
                            "category_id"=>$category_id,
                            "donation_amount"=>$donation_amount,
                            "active_ind"=>$active_ind,
                            "donation_image"=> $donations->donation_image,
                            "updated_at"=>$updated_at);

            DB::table('donations')->where('id',$id)->update($updateArray);*/
        
        return redirect()->route("adminDisplayUserDonations"); 
     }

     public function deleteDonations($id){ 
        UserDonations::destroy($id);
        return redirect()->route("adminDisplayUserDonations");
    }    
}
