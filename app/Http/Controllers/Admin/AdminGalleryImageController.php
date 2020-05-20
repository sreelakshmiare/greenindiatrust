<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\GalleryImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class AdminGalleryImageController extends Controller
{
    public function index() {
        $galleryimages = GalleryImage::paginate(10);
        $categories = Category::all()->sortBy('name');
        return view("admin.displaygalleryimages",['galleryimages'=>$galleryimages,
                                                'categories'=>$categories]);
    }

    public function editGalleryImageForm($id){
        $galleryimage = GalleryImage::find($id);
        $categories = Category::all()->sortBy('name');
         return view('admin.editgalleryimageform',['galleryimage'=>$galleryimage,
         'categories'=>$categories]);
    }

    public function updateGalleryImage(Request $request,$id){
        Validator::make($request->all(),
            ['images.*'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();

        $images=array();
        if ($files=$request->file('gallery_image')) {
            $gallery_image = GalleryImage::find($id);
            $gallery_image_arr = explode('|', $gallery_image->gallery_image);
            foreach ($gallery_image_arr as $gallery_img) {
                Log::debug('updateGalleryImage finding image '. $gallery_img .' in the file system ');
                $exists = Storage::disk('local')->exists('public/images/'.$gallery_img);
                if ($exists) {
                    Storage::delete('public/images/'.$gallery_img);
                    Log::debug('updateGalleryImage deleted '. $gallery_img .' from file system ');
                }
            }


            foreach ($files as $file) {
                $name=$file->getClientOriginalName();
                $images[]=$name;
                $imageEncoded = File::get($file);
                Storage::disk('local')->put('public/images/'.$name, $imageEncoded);
            }

            $gallery_year = $request->input('gallery_year');
            $category_id = $request->input('category_id');
            $updated_at = now(); 
            $newGalleryImageArray = array(
                //"gallery_image"=> $stringImageReFormat,
                'gallery_year'=> $gallery_year,
                'category_id'=> $category_id,
                'gallery_image'=>  implode("|",$images),
                "updated_at"=>$updated_at);

        } else {
            $gallery_year = $request->input('gallery_year');
            $category_id = $request->input('category_id');
            $updated_at = now(); 
            $newGalleryImageArray = array(
                //"gallery_image"=> $stringImageReFormat,
                'gallery_year'=> $gallery_year,
                'category_id'=> $category_id,                
                "updated_at"=>$updated_at);
            
        }
        DB::table('gallery_images')->where('id', $id)->update($newGalleryImageArray);
        return redirect()->route("adminDisplayGalleryImages");
        /*} else {
           $error = "NO Image was Selected";
           return $error;

        } */
     }

     public function deleteGalleryImage($id){

        $gallery_image = GalleryImage::find($id);

        $gallery_image_arr = explode('|',$gallery_image->gallery_image);
        foreach ($gallery_image_arr as $gallery_img) {
            Log::debug('deleteGalleryImage finding image '. $gallery_img .' in the file system ');
            $exists = Storage::disk('local')->exists('public/images/'.$gallery_img);
            if ($exists) {
                Storage::delete('public/images/'.$gallery_img);
                Log::debug('deleteGalleryImage deleted '. $gallery_img.' from file system ');
            }
        }        
        GalleryImage::destroy($id);
        return redirect()->route("adminDisplayGalleryImages");
    }

    //display create product form
    public function createGalleryImageForm(){
        $categories = Category::all()->sortBy('name');
        return view("admin.creategalleryimageform",['categories'=>$categories]);
    }

    //store new brand to database
    public function sendCreateGalleryImageForm(Request $request){

        Validator::make($request->all(),['images.*'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();
        //$ext =  $request->file("gallery_image")->getClientOriginalExtension(); 
        $images=array();
        if($files=$request->file('gallery_image')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();                
                $images[]=$name;
                $imageEncoded = File::get($file);
                Storage::disk('local')->put('public/images/'.$name, $imageEncoded);
            }
        }       
        //$stringImageReFormat = $request->file("gallery_image")->getClientOriginalName();

        //$imageName = $stringImageReFormat.".".$ext; //blackdress.jpg
        
        $created_at = now();
        $gallery_year = $request->input('gallery_year');
        $category_id = $request->input('category_id');
        
        $newGalleryImageArray = array(
            //"gallery_image"=> $stringImageReFormat,
            'gallery_year'=> $gallery_year,
            'category_id'=> $category_id,
            'gallery_image'=>  implode("|",$images),
            "created_at"=>$created_at);

        $created = DB::table("gallery_images")->insert($newGalleryImageArray);

        if($created){
            return redirect()->route("adminDisplayGalleryImages");
        }else{
           return "GalleryImage was not Created";
        }
    }
}
