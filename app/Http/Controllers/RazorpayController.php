<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class RazorpayController extends Controller
{
    public function pay() {
        //return view('pay');
    }
    public function doPayment(Request $request) {
        $input = $request->all();
        Log::debug('------------------ request ---------------------');
        Log::debug($request);
        Log::debug('------------------ end ---------------------');

        //$cart = Session::get('cart');
         
        $name = $request->input('name');
        $address = $request->input('address'); 
        $city = $request->input('city');
        $state = $request->input('state');
        $country = $request->input('country');  
        $pin = $request->input('pin');       
        $email = $request->input('email');
        $phone = $request->input('phone');           
        $pan = $request->input('pan');
        $aadhar = $request->input('aadhar');
        $nationality = $request->input('nationality');   
        $passport = $request->input('passport');      
        $donation_amount = $request->input('donation_amount');
        $donation_for = $request->input('donation_for');
        $razorpay_payment_id = $request->input('razorpay_payment_id');
        $created_at = now();
        //check if user is logged in or not
        $isUserLoggedIn = Auth::check();
 
        if($isUserLoggedIn){
           //get user id
            $user_id = Auth::id();  //OR $user_id = Auth:user()->id;
        }else{
           //user is guest (not logged in OR Does not have account)
           $user_id = 0;
        }
        Log::debug('***********************');
        
        $date = date('Y-m-d H:i:s');
            $datenum = date('HdsYim');
            $user_donation_id = 'GIT_'.$datenum;
            $newOrderArray = array("user_id" => $user_id, 
                                    "status"=>"Amount Donated",
                                    "donation_date"=>$date,                                    
                                    "donation_amount"=>$donation_amount,
                                    "donation_for"=>$donation_for,
                                    "name"=>$name, 
                                    "address"=> $address,  
                                    "city"=> $city,  
                                    "state"=> $state, 
                                    "country"=> $country,
                                    'pin'=>$pin,
                                    'email'=>$email,
                                    'phone'=>$phone,
                                    "pan"=> $pan,  
                                    "aadhar"=> $aadhar,                              
                                    'payment_id'=> $razorpay_payment_id,
                                    'user_donation_id'=> $user_donation_id,
                                    'created_at'=>$created_at,
                                    'nationality'=>$nationality,
                                    'passport'=>$passport);
            $created_donation = DB::table("user_donations")->insert($newOrderArray);
            $donation_id = DB::getPdo()->lastInsertId();
            Log::debug('donation_id created = '. $donation_id);

            return response()->json(["user_donation_id"=> $user_donation_id,
                                        "donation_id"=>$donation_id]);    
         

        
    }
}
