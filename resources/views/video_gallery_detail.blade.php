@extends('layouts.index')
@section('center')
<link rel="stylesheet" href="{{ asset('css/gallery-istope-tablet-buttons.css') }}">
<BR>

<div class="container">
    <div class="filters">
        <div class="row">
            <div class="col-8 text-left">
                <div class="myui-group">
                    <!--<h3>Year :</h3> -->
                    <div class="mybutton-group js-radio-button-group" data-filter-group="year">
                        <button class="mybutton is-checked" data-filter=".{{$galleryimage->gallery_year}}">{{$galleryimage->gallery_year}}</button>
                    </div>
                </div>
                <div class="myui-group">
                    <!--<h3>Category</h3> -->
                    <div class="mybutton-group js-radio-button-group" data-filter-group="category">
                        <button class="mybutton is-checked" data-filter=".{{$category->id}}">{{$category->name}}</button>
                    </div>
                </div>
            </div>
            <div class="col-4 text-right">
                <div class="myui-group">
                    <a href="{{route('videogallery')}}" class="btn btn-md"><strong>Go Back</strong></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="photo-gallery">
                <!--<div class="ui-group">     -->
                    <div class="projects">
                        <div class="row photos">
                                @php
                                    $videos = $galleryimage->videos;
                                @endphp
                                @foreach($videos as $video)
                                    <div class="col-lg-4 item {{$galleryimage->gallery_year}} {{$galleryimage->category_id}}">
                                        <div class="mycard">
                                            <div class="mycard-head">
                                                <iframe width="350" height="200" src="{{ $video . '?html5=1'}}"
                                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>

                                            <div class="mycard-body text-center">
                                                <h6 class="title"><strong>{{$galleryimage->location}} - {{$galleryimage->activity_date}}</strong></h6>
                                                <a href="#!" class="btn btn-lg mycard-btn"><strong>{{$galleryimage->project}}</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                    </div>
                <!--</div>-->
            </div>
        </div>
    </div>
</div>

<BR>
<BR>
<BR>

<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/gallery-script-buttons.js')}}"></script>
@endsection
