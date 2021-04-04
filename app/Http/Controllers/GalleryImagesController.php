<?php

namespace App\Http\Controllers;

use App\Category;
use App\GalleryImage;
use Illuminate\Http\Request;

class GalleryImagesController extends Controller
{
    public function index() {
        $galleryimages = GalleryImage::where('active_ind','Y')->where('gallery_type','photo')
        ->orderBy('activity_date')->get();
        foreach($galleryimages as $galleryimage) {
            //$submenus = Menu::where('active_ind','Y')->where('parent_id',$menu->id)->orderBy('sort_order')->get();
            $image_str = $galleryimage->gallery_image;
            $images = explode('|',$image_str);
            $galleryimage['images'] = $images;
        }
        $years = GalleryImage::distinct()->where('gallery_type','photo')->orderBy('activity_date')->get(['gallery_year']);
        $categorids = GalleryImage::distinct()->where('gallery_type','photo')->get(['category_id']);
        $categories = Category::whereIn('id', $categorids)->orderBy('name')->get();

        return view("gallery",['galleryimages'=>$galleryimages,
                                'years'=>$years,
                                'categories'=>$categories]);
    }

    public function getMedia() {
        $galleryimages = GalleryImage::where('active_ind','Y')->where('gallery_type','media')
        ->orderBy('activity_date')->get();
        foreach($galleryimages as $galleryimage) {
            //$submenus = Menu::where('active_ind','Y')->where('parent_id',$menu->id)->orderBy('sort_order')->get();
            $image_str = $galleryimage->gallery_image;
            $images = explode('|',$image_str);
            $galleryimage['images'] = $images;
        }
        $years = GalleryImage::distinct()->where('gallery_type','media')->orderBy('activity_date')->get(['gallery_year']);
        $categorids = GalleryImage::distinct()->where('gallery_type','media')->get(['category_id']);
        $categories = Category::whereIn('id', $categorids)->orderBy('name')->get();

        return view("media_gallery",['galleryimages'=>$galleryimages,
                                'years'=>$years,
                                'categories'=>$categories]);
    }

    public function getVideoLinks() {
        $galleryimages = GalleryImage::where('active_ind','Y')->where('gallery_type','video')
        ->orderBy('activity_date')->get();
        foreach($galleryimages as $galleryimage) {
            //$submenus = Menu::where('active_ind','Y')->where('parent_id',$menu->id)->orderBy('sort_order')->get();
            $videos_str = $galleryimage->video_link;
            $videos = explode('|',$videos_str);
            $galleryimage['videos'] = $videos;
        }
        $years = GalleryImage::distinct()->where('gallery_type','video')->orderBy('activity_date')->get(['gallery_year']);
        $categorids = GalleryImage::distinct()->where('gallery_type','video')->get(['category_id']);
        $categories = Category::whereIn('id', $categorids)->orderBy('name')->get();

        return view("videogallery",['galleryimages'=>$galleryimages,
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

    public function getMediaGalleryImagesById($id){
        $galleryimage = GalleryImage::find($id);
        $category = Category::find($galleryimage->category_id);
        $image_str = $galleryimage->gallery_image;
        $images = explode('|',$image_str);
        $galleryimage['images'] = $images;

        return view("media_gallery_detail",['galleryimage'=>$galleryimage,'category'=>$category]);
    }

    public function getVideoGalleryImagesById($id){
        $galleryimage = GalleryImage::find($id);
        $category = Category::find($galleryimage->category_id);
        $video_str = $galleryimage->video_link;
        $videos = explode('|',$video_str);
        $galleryimage['videos'] = $videos;

        return view("video_gallery_detail",['galleryimage'=>$galleryimage,'category'=>$category]);
    }
}
