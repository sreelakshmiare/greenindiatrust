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
    <form action="{{ route('adminSendCreateGalleryImageForm')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <h2 class="text-center">Create New Gallery Image</h2>

        <div class="form-group">
            <label for="gallery_year">Year</label>
            <select class="form-control" name="gallery_year">
                @foreach (range(2000,2030) as $i)
                    <option value="{{$i}}">{{$i}}</option>
                @endforeach              
            </select>
        </div>

        <div class="form-group">
            <label for="category_id">Categories</label>
            <select class="form-control" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach                         
            </select>
        </div>

        <div class="form-group">
            <label for="gallery_image">Gallery Image</label>
            <input type="file" class="form-control"  name="gallery_image[]" id="gallery_image" multiple required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayGalleryImages')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>

@endsection