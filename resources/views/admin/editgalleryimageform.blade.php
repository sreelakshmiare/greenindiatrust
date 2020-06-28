@extends('layouts.admin')

@section('body')

<div class="contact-clean">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            <li>{!! print_r($errors->all()) !!}</li>
        </ul>
    </div>
    @endif      

    <form action="{{ route('adminUpdateGalleryImage',['id' => $galleryimage->id ])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="gallery_year">Year</label>
            <select class="form-control" name="gallery_year">
                @foreach (range(2000,2030) as $i)
                <option value="{{ $i }}"
                    @if ($i == $galleryimage->gallery_year)
                        selected="selected"
                    @endif
                    >{{ $i }}</option>
                @endforeach              
            </select>
        </div>
    
        <div class="form-group">
            <label for="category_id">Categories</label>
            <select class="form-control" name="category_id">               
                @foreach ($categories as $category)                        
                    <option value="{{ $category->id }}"
                    @if ($category->id == $galleryimage->category_id)
                        selected="selected"
                    @endif
                    >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="gallery_image">Update Gallery Image</label>
            <input type="file" class=""  name="gallery_image[]" id="gallery_image" placeholder="Gallery Image" value="{{$galleryimage->gallery_image}}" multiple>
        </div>
        <div class="form-group">
            <label for="project">Project Name</label>
        <input type="text" class="form-control" name="project" id="project" value="{{ $galleryimage->project}}">
        </div>
    
        <div class="form-group">
            <label for="location">Location Name</label>
            <input type="text" class="form-control" name="location" id="location" value="{{ $galleryimage->location}}">
        </div>
    
        <div class="form-group">
            <label for="description">Project Description</label>
            <input type="text" class="form-control" name="description" id="description" value="{{ $galleryimage->description}}">
        </div>
        <div class="form-group">
            <label for="category_id">state</label>
            <select class="form-control" name="state" id="state">
                <option value="">Please Select</option> 
                @foreach ($states['states'] as $state)
                    <option value="{{$state['state']}}"
                        @if ($state['state'] == $galleryimage->state)
                            selected="selected"
                        @endif
                        >{{ $state['state'] }}</option>    
                @endforeach        
            </select>
        </div>
        <div class="form-group">
            <label for="activity_date">Activity Date</label>
            <input id="activity_date" type="date" class="form-control" name="activity_date" id="activity_date"  value="{{ $galleryimage->activity_date}}">
        
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayGalleryImages')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
    <h4>Current Images</h4>
    <div>
        @php
            $gallery_image = $galleryimage['gallery_image'];
            $gallery_img_arr = explode('|', $gallery_image);
        @endphp
        @foreach($gallery_img_arr as $image)
            <img src="{{asset ('storage')}}/images/{{$image}}" width="100" height="100" style="max-height:220px" >
        @endforeach
    </div>
    
    
</div>

@endsection