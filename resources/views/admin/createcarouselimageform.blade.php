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
    <form action="{{ route('adminSendCreateCarouselImageForm')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <h2 class="text-center">Create New Carousel Image</h2>
        <div class="form-group">
            <label for="carousel_image">Carousel Image</label>
            <input type="file" class=""  name="carousel_image" id="carousel_image" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayCarouselImages')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>

@endsection