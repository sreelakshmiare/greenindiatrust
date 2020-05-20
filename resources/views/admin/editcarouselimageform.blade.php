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
    <h4>Current Image</h4>
    <div>
        <img src="{{asset ('storage')}}/product_images/{{$carouselimage['carousel_image']}}" width="100" height="100" style="max-height:220px" >
    </div>

    <form action="{{ route('adminUpdateCarouselImage',['id' => $carouselimage->id ])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="carousel_image">Update Carousel Image</label>
            <input type="file" class=""  name="carousel_image" id="carousel_image" placeholder="Carousel Image" value="{{$carouselimage->carousel_image}}" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayCarouselImages')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>

@endsection