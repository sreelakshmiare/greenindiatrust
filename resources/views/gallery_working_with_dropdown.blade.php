@extends('layouts.index')
@section('center')
<link rel="stylesheet" href="{{ asset('css/gallery-istope-new.css') }}">
<BR>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="filters">
                <div class="ui-group">  
                    <div class="row">
                        <div class="col-lg-4">
                            <label> Select Year </label>
                            <select class="form-control col-4 filters-select button-group js-radio-button-group" data-filter-group="year">
                                <option value="*">show all</option>
                                @foreach ($years as $year)
                                    <option value=".{{$year->gallery_year}}">{{$year->gallery_year}}</option>
                                @endforeach                                
                            </select>
                        </div>
                        <div class="col-lg-8"> 
                            <label> Select Cateogory </label>                       
                            <select class="form-control col-4 filters-select button-group js-radio-button-group" data-filter-group="category">
                                <option value="*">show all</option>
                                @foreach ($categories as $category)
                                    <option value=".{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select> 
                        </div>
                        {{-- <div class="col-lg-8"> 
                            <label> Select Area </label>                       
                            <select class="form-control col-4 filters-select button-group js-radio-button-group" data-filter-group="place">
                                <option value="*">show all</option>
                                <option value=".andhrapradesh">AndhraPradesh</option>
                                <option value=".tamilnadu">TamilNadu</option>
                                <option value=".karnataka">Karnataka</option>
                            </select> 
                        </div> --}}
                    </div>
                    <!--<ul class="filters text-center" data-filter-group="year">
                        <li data-filter=".2020"><a href="#!">2020</a></li>
                        <li data-filter=".2019"><a href="#!">2019</a></li>
                        <li data-filter=".2018"><a href="#!">2018</a></li>
                        <li data-filter=".2017"><a href="#!">2017</a></li>
                        <li data-filter=".2016"><a href="#!">2016</a></li>
                        <li data-filter=".2015"><a href="#!">2015</a></li>
                        <li data-filter=".2014"><a href="#!">2014</a></li>
                        <li data-filter=".2013"><a href="#!">2013</a></li>
                        <li data-filter=".2012"><a href="#!">2012</a></li>
                    </ul>
                    <ul class="filters text-center" data-filter-group="place">
                        <li class="active" data-filter="*"><a href="#!">All</a></li>
                        <li data-filter=".andhrapradesh"><a href="#!">AndhraPradesh</a></li>
                        <li data-filter=".tamilnadu"><a href="#!">TamilNadu</a></li>
                        <li data-filter=".karnataka"><a href="#!">Karnataka</a></li>
                    </ul>-->
                    <div class="projects">
                        <div class="row">
                            @foreach ($galleryimages as $gallery)
                                @php
                                    $images = $gallery->images;
                                @endphp
                                @foreach($images as $image)
                                    <div class="col-lg-4 item {{$gallery->gallery_year}} {{$gallery->category_id}}">                        
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
                                                <h6 class="title">{{$gallery->location}} - {{$gallery->activity_date}}</h6>
                                                <a href="#!" class="btn btn-lg mycard-btn">{{$gallery->project}}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                            {{--<div class="col-lg-4 item 2020 andhrapradesh">                        
                                <div class="mycard">
                                    <div class="mycard-head">
                                        <img src="{{ asset('img/comptraining.jpg')}}" alt="" class="img-fluid card-img">                                    
                                    </div>

                                    <div class="mycard-body text-center">
                                        <h4 class="title">Nellore</h4>
                                        <!--<a href="#!" class="btn btn-lg mycard-btn">See More</a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 item 2019 tamilnadu">                        
                                <div class="mycard">
                                    <div class="mycard-head">
                                        <img src="{{ asset('img/comptraining.jpg')}}" alt="" class="img-fluid card-img">                
                                    </div>

                                    <div class="mycard-body text-center">
                                        <h4 class="title">Chennai</h4>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 item 2018 karnataka">                        
                                <div class="mycard">
                                    <div class="mycard-head">
                                        <img src="{{ asset('img/comptraining.jpg')}}" alt="" class="img-fluid card-img">
                                    </div>
                                    <div class="mycard-body text-center">
                                        <h4 class="title">Bangalore</h4>                            
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 item 2017 andhrapradesh">                        
                                <div class="mycard">
                                    <div class="mycard-head">
                                        <img src="{{ asset('img/comptraining.jpg')}}" alt="" class="img-fluid card-img">
                                    </div>

                                    <div class="mycard-body text-center">
                                        <h4 class="title">Kavali</h4>                                
                                    </div>
                                </div>
                            </div>
                    
                            <div class="col-lg-4 item 2018 tamilnadu">                        
                                <div class="mycard">
                                    <div class="mycard-head">
                                        <img src="{{ asset('img/comptraining.jpg')}}" alt="" class="img-fluid card-img">                                    
                                    </div>

                                    <div class="mycard-body text-center">
                                        <h4 class="title">Vellore</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 item 2020 andhrapradesh">                        
                                <div class="mycard">
                                    <div class="mycard-head">
                                        <img src="{{ asset('img/comptraining.jpg')}}" alt="" class="img-fluid card-img">
                                    </div>
                                    <div class="mycard-body text-center">
                                        <h4 class="title">Naidu Peta</h4>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>                       
        </div>
    </div>
</div>

<BR>
<BR>
<BR>
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/gallery-script-new.js')}}"></script>
@endsection
