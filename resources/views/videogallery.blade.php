@extends('layouts.index')
@section('center')
<link rel="stylesheet" href="{{ asset('css/gallery-istope-tablet-buttons.css') }}">
<BR>
<div class="container">
    <div class="filters">
        <div class="row">
            <div class="col text-center">
                <div class="myui-group">
                    <h3><strong>Year</strong></h3>
                    <div class="mybutton-group js-radio-button-group" data-filter-group="year">
                        <button class="mybutton is-checked" data-filter="">All</button>
                        @foreach ($years as $year)
                            <button class="mybutton" data-filter=".{{$year->gallery_year}}">{{$year->gallery_year}}</button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="myui-group">
                    <h3><strong>Category</strong></h3>
                    <div class="mybutton-group js-radio-button-group" data-filter-group="category">
                    <button class="mybutton is-checked" data-filter="">All</button>
                    @foreach ($categories as $category)
                        <button class="mybutton" data-filter=".{{$category->id}}">{{$category->name}}</button>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!--<div class="filters">
                <div class="ui-group">     -->
                    <div class="projects">
                        <div class="row">
                            @foreach ($galleryimages as $gallery)
                                @php
                                    $videos = $gallery->videos;
                                @endphp
                                @foreach($videos as $video)
                                    <div class="col-lg-4 item {{$gallery->gallery_year}} {{$gallery->category_id}}">
                                        <div class="mycard">
                                            <div class="mycard-head">

                                            </div>

                                            <div class="mycard-body text-center">
                                                <h6 class="title"><strong>{{$gallery->location}} - {{$gallery->activity_date}}</strong></h6>
                                                <a href="{{ route('getVideoGalleryImagesById',['id' => $gallery->id])}}" class="btn btn-lg mycard-btn"><strong>{{$gallery->project}}</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                <!--</div>
            </div>  -->
        </div>
    </div>
</div>

<BR>
<BR>
<BR>
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/gallery-script-buttons.js')}}"></script>
@endsection
