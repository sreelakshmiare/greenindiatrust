<?php
namespace App\Http\Controllers\Admin;

use App\CarouselImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class AdminCarouselImageController extends Controller
{
    public function index() {
        $carouselimages = CarouselImage::paginate(5);
        return view("admin.displaycarouselimages",['carouselimages'=>$carouselimages]);
    }

    public function editCarouselImageForm($id){
        $carouselimage = CarouselImage::find($id);
         return view('admin.editcarouselimageform',['carouselimage'=>$carouselimage]);
    }

    public function updateCarouselImage(Request $request,$id){
        Validator::make($request->all(),
            ['images.*'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();

        if($request->hasFile("carousel_image")) {
            $carousel_image = CarouselImage::find($id);
            //Log::debug('carousel image = '.$carousel_image->carousel_image);
            $stringImageName = $request->file("carousel_image")->getClientOriginalName();
            $image = $request->file("carousel_image");
            $imageEncoded = File::get($request->carousel_image);
            $exists = Storage::disk('local')->exists('public/images/'.$carousel_image->carousel_image);
            $updated_at = now();           

            //$exists = Storage::disk('local')->exists("public/images/".$carousel_image->carousel_image);
            //Log::debug($carousel_image->carousel_image. 'image exists = '.$exists);
            //delete old image
            if($exists){
                Storage::delete('public/images/'.$carousel_image->carousel_image);
                //Log::debug('deleted ',$carousel_image->carousel_image.' from file system ');
            }
            //Log::debug("Storing new image = ".$stringImageName);
            $request->carousel_image->storeAs("public/images/",$stringImageName);
            //$arrayToUpdate = array('carousel_image'=>$carousel_image->carousel_image);
            $arrayToUpdate = array("carousel_image"=> $stringImageName,"updated_at"=>$updated_at);

            DB::table('carousel_images')->where('id',$id)->update($arrayToUpdate);            
            return redirect()->route("adminDisplayCarouselImages");

        }else{
           $error = "NO Image was Selected";
           return $error;

        } 
     }

     public function deleteCarouselImage($id){

        $carousel_image = CarouselImage::find($id);

        $exists =  Storage::disk("local")->exists("public/images/".$carousel_image->carousel_image);

        //if old image exists
        if($exists){
            //delete it
            Storage::delete('public/images/'.$carousel_image->carousel_image);
        }


        CarouselImage::destroy($id);
        return redirect()->route("adminDisplayCarouselImages");

    }

    //display create product form
    public function createCarouselImageForm(){
        return view("admin.createcarouselimageform");
    }

    //store new brand to database
    public function sendCreateCarouselImageForm(Request $request){

        Validator::make($request->all(),['images.*'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();
        //$ext =  $request->file("carousel_image")->getClientOriginalExtension();        
        $stringImageReFormat = $request->file("carousel_image")->getClientOriginalName();

        //$imageName = $stringImageReFormat.".".$ext; //blackdress.jpg
        $imageEncoded = File::get($request->carousel_image);
        Storage::disk('local')->put('public/images/'.$stringImageReFormat, $imageEncoded);
        $created_at = now();
        $newCarouselImageArray = array("carousel_image"=> $stringImageReFormat,"created_at"=>$created_at);

        $created = DB::table("carousel_images")->insert($newCarouselImageArray);

        if($created){
            return redirect()->route("adminDisplayCarouselImages");
        }else{
           return "CarouselImage was not Created";
        }
    }
}
