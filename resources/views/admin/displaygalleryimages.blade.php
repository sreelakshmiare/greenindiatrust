@extends('layouts.admin')

@section('body')

<div class="container">
    <div class="table-responsive table-bordered bg-light shadow-sm">
        <table class="table table-bordered table-hover table-sm">
            <thead class="bg-warning shadow-sm">
                <tr>
                    <th>#id</th>
                    <th>Image</th>  
                    <th>Year</th>
                    <th>Category</th>          
                    <th>Edit Image</th>
                    <th>Remove</th>
                </tr>
            </thead>
            
            <tbody>
                <a href="{{ route('adminCreateGalleryImageForm') }}" class="btn btn-primary">Create New Gallery Image</a>
                @foreach($galleryimages as $galleryimage)
                        @php  
                            $category_name;
                        @endphp
                        @foreach ($categories as $category)                                             
                            @if ($category->id == $galleryimage['category_id'])
                                @php
                                    $category_name = $category->name;
                                @endphp
                                @break                
                            @endif                        
                        @endforeach
                    <tr>
                        <td>{{$galleryimage['id']}}</td>
                        <td><img src="{{asset ('storage')}}/images/{{$galleryimage['gallery_image']}}" alt="{{asset ('storage')}}/images/{{$galleryimage['gallery_image']}}" width="100" height="100" style="max-height:220px" ></td>
                    <!-- <td>  <img src="{{ Storage::url('images/'.$galleryimage['gallery_image'])}}"
                                alt="<?php echo Storage::url($galleryimage['gallery_image']); ?>" width="100" height="100" style="max-height:220px" >   </td> -->
                        <td>{{$galleryimage['gallery_year']}}</td>
                        <td>{{$category_name}}</td>
                        <td><a href="{{ route('adminEditGalleryImageForm',['id' => $galleryimage['id'] ])}}" class="btn btn-primary">Edit Image</a></td>
                        <td><a href="{{ route('adminDeleteGalleryImage',['id' => $galleryimage['id'] ])}}"  class="btn btn-warning">Remove</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $galleryimages->links() }}
</div>

@endsection