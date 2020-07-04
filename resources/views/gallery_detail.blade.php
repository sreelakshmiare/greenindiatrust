@extends('layouts.index')
@section('center')
<link rel="stylesheet" href="{{ asset('css/gallery-istope-tablet-buttons.css') }}">
<BR>
<div class="container">
    <div class="filters">      
        <div class="row">
            <div class="col-8 text-center">
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
                    <a href="{{route('gallery')}}" class="btn btn-md"><strong>Go Back</strong></a>                    
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
                                @php
                                    $images = $galleryimage->images;
                                @endphp
                                @foreach($images as $image)
                                    <div class="col-lg-4 item {{$galleryimage->gallery_year}} {{$galleryimage->category_id}}">                        
                                        <div class="mycard">
                                            <div class="mycard-head">
                                                @php
                                                    $token = strtok($image, ".");
                                                    $image_type = '';
                                                    while ($token !== false) {
                                                        $image_type = $token;
                                                        $token = strtok(".");
                                                    }                                                    
                                                @endphp
                                                @if($image_type == 'jpg' || $image_type == 'jpeg' || $image_type == 'JPG' ||
                                                    $image_type == 'png' || $image_type == 'JPEG' || $image_type == 'PNG')
                                                    <img src="{{asset ('storage')}}/images/{{$image}}" alt="" class="img-fluid card-img">                                    
                                                @elseif($image_type == 'mp4' || $image_type == 'ogg' ||
                                                    $image_type == 'webm')
                                                    <video width="350" height="400" controls muted>
                                                        <source src="{{asset ('storage')}}/images/{{$image}}" type="video/mp4"/>
                                                        <source src="{{asset ('storage')}}/images/{{$image}}" type="video/webm"/>
                                                        <source src="{{asset ('storage')}}/images/{{$image}}" type="video/ogg"/>
                                                    </video>
                                                @endif

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
