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
            <input type="file" class="form-control"  name="gallery_image[]" id="gallery_image" multiple>
        </div>

        <div class="form-group">
            <label for="project">Project Name</label>
            <input type="text" class="form-control" name="project" id="project">
        </div>

        <div class="form-group">
            <label for="location">Location Name</label>
            <input type="text" class="form-control" name="location" id="location">
        </div>

        <div class="form-group">
            <label for="description">Project Description</label>
            <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="form-group">
            <label for="category_id">state</label>
            <select class="form-control @error('state') is-invalid @enderror" name="state" id="state" required autocomplete="state" autofocus>
                <option value="">Please Select</option>
                @foreach ($states['states'] as $state)
                    <option value="{{$state['state']}}">{{ $state['state'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="activity_date">Activity Date</label>
            <input id="activity_date" type="date" class="form-control" name="activity_date" id="activity_date">

        </div>

        <div class="form-group">
            <label for="active_ind">Gallery Type</label>
            <select class="form-control" name="gallery_type">
                <option value="photo">Photo</option>
                <option value="video">Video</option>
                <option value="media">Print Media</option>
            </select>
        </div>

        <div class="form-group">
            <label for="video_link">Video Link</label>
            <input type="text" class="form-control" name="video_link" id="video_link">
        </div>


        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-primary" type="reset">Reset </button>
            <a href="{{route('adminDisplayGalleryImages')}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
</div>

@endsection
