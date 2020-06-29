<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Donations;
use App\Http\Controllers\Controller;
use App\UserDonations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class AdminDonationsController extends Controller
{

    public function index() {
        $donations = Donations::paginate(10);
        $categories = Category::all()->sortBy('name');
        return view("admin.displaydonations",['donations'=>$donations,
                                                'categories'=>$categories]);
    }    

    public function editDonationsForm($id){
        $donations = Donations::find($id);
        //$categories = Category::all()->sortBy('name');
        $categories = Category::where('type', 'Donations')->get();
         return view('admin.editdonationsform',['donations'=>$donations,
                                            'categories'=>$categories]);
    }

    public function updateDonations(Request $request,$id){

        $donation_name =  $request->input('donation_name'); 
        $category_id =  $request->input('category_id'); 
        $donation_amount =  $request->input('donation_amount');   
        $donation_description =  $request->input('donation_description');     
        $active_ind = $request->input('active_ind');
        $updated_at = now();
        Validator::make($request->all(),
            ['images.*'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();
        $donations = Donations::find($id);
        if ($request->hasFile("donation_image")) {
            Log::debug("file exists in the request");            
            Log::debug('crop image = '.$donations->donation_image);
            $stringImageName = $request->file("donation_image")->getClientOriginalName();
            Log::debug(' stringImageName = '.$stringImageName);
            $image = $request->file("donation_image");
            $imageEncoded = File::get($request->donation_image);
            $exists = Storage::disk('local')->exists('public/images/'.$donations->donation_image);
            Log::debug('image exists = '.$exists);
            //delete old image
            if ($exists) {
                Storage::delete('public/images/'.$donations->donation_image);
                Log::debug('deleted '. $donations->donation_image.' from file system ');
            }
            Log::debug("Storing new image = ".$stringImageName);
            $request->donation_image->storeAs("public/images/", $stringImageName);
            $updateArray = array("donation_name"=>$donation_name,
                            "donation_description" => $donation_description,
                            "active_ind"=>$active_ind,
                            "category_id"=>$category_id,
                            "donation_amount"=>$donation_amount,
                            "updated_at"=>$updated_at,
                            "donation_image"=> $stringImageName);
            DB::table('donations')->where('id',$id)->update($updateArray);
        } else {
            $updateArray = array("donation_name"=>$donation_name, 
                            "donation_description" => $donation_description,
                            "category_id"=>$category_id,
                            "donation_amount"=>$donation_amount,
                            "active_ind"=>$active_ind,
                            "donation_image"=> $donations->donation_image,
                            "updated_at"=>$updated_at);

            DB::table('donations')->where('id',$id)->update($updateArray);
        }
        return redirect()->route("adminDisplayDonations"); 
     }
 
     public function deleteDonations($id){ 
        $donations = Donations::find($id);
        $exists =  Storage::disk("local")->exists("public/images/".$donations->donation_image);

        if($exists){
            Storage::delete('public/images/'.$donations->donation_image);
        }
        Donations::destroy($id);
        return redirect()->route("adminDisplayDonations");
    }

    //display create Crop form
    public function createDonationsForm(){
        //$categories = Category::all()->sortBy('name');
        $categories = Category::where('type', 'Donations')->get();
        return view("admin.createdonationsform",["categories"=>$categories]);
    }

    //store new Crop to database
    public function sendCreateDonationsForm(Request $request){

        $donation_name =  $request->input('donation_name'); 
        $donation_description =  $request->input('donation_description');   
        $category_id =  $request->input('category_id'); 
        $donation_amount =  $request->input('donation_amount');   
        $active_ind = $request->input('active_ind');
        $created_at = now();
        if ($request->hasFile("crop_image")) {
            Validator::make($request->all(), ['images.*'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();
            //$ext =  $request->file("carousel_image")->getClientOriginalExtension();
            $stringImageReFormat = $request->file("crop_image")->getClientOriginalName();
            $imageEncoded = File::get($request->crop_image);
            Storage::disk('local')->put('public/product_images/'.$stringImageReFormat, $imageEncoded);
            $newDonationsArray = array("donation_name"=>$donation_name,
                                "donation_description" => $donation_description,
                                "category_id"=>$category_id,
                                "donation_amount"=>$donation_amount,
                                "active_ind"=> $active_ind,
                                "created_at"=>$created_at,
                                "crop_image"=> $stringImageReFormat);
        } else {
            $newDonationsArray = array("donation_name"=>$donation_name,
                                "donation_description" => $donation_description,
                                "category_id"=>$category_id,
                                "donation_amount"=>$donation_amount,
                                "active_ind"=> $active_ind,
                                "created_at"=>$created_at);
        }       

        $created = DB::table("donations")->insert($newDonationsArray);

        if($created){
            return redirect()->route("adminDisplayDonations");
        }else{
           return "Donation was not Created";
        }
    }
}
