<?php

namespace App\Http\Controllers;

use App\Category;
use App\Donations;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DonationsController extends Controller
{
    public function getDonationsByCategory() {
        $categories = Category::where('type','Donations')->get();
        foreach ($categories as $category) {
            $donations = Donations::where('category_id', $category->id)->get();
            $category['donations'] = $donations;
        }
        return view("donate",['categories'=>$categories]);
    }
    public function personalDetail(Request $request) {
        $donation_amount =  $request->input('donation_amount'); 
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
