<?php

namespace App\Http\Controllers;

use App\Category;
use App\GalleryImage;
use Illuminate\Http\Request;

class GalleryImagesController extends Controller
{
    public function index() {
        $galleryimages = GalleryImage::where('active_ind','Y')
        ->orderBy('activity_date')->get();
        foreach($galleryimages as $galleryimage) {
            //$submenus = Menu::where('active_ind','Y')->where('parent_id',$menu->id)->orderBy('sort_order')->get();
            $image_str = $galleryimage->gallery_image;
            $images = explode('|',$image_str);
            $galleryimage['images'] = $images;
        }
        $years = GalleryImage::distinct()->orderBy('activity_date')->get(['gallery_year']);
        $categorids = GalleryImage::distinct()->get(['category_id']);
        $categories = Category::whereIn('id', $categorids)->orderBy('name')->get();
        
        return view("gallery",['galleryimages'=>$galleryimages,
                                'years'=>$years,
                                'categories'=>$categories]);
    }

    public function getGalleryImagesById($id){
        $galleryimage = GalleryImage::find($id);
        $category = Category::find($galleryimage->category_id);
        $image_str = $galleryimage->gallery_image;
        $images = explode('|',$image_str);
        $galleryimage['images'] = $images;        
        
        return view("gallery_detail",['galleryimage'=>$galleryimage,'category'=>$category]);
    }
}
