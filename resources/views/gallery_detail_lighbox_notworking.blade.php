@extends('layouts.index')
@section('center')
<link rel="stylesheet" href="{{ asset('css/gallery-istope-tablet-buttons.css') }}">
<BR>
<style>
/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 80%;
  height: 80%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
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
                                                    <img src="{{asset ('storage')}}/images/{{$image}}" alt="" 
                                                    class="img-fluid card-img" onclick="openModal();currentSlide({{$loop->iteration}})">                                    
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
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            @foreach($images as $image)
                <div class="mySlides">
                    <div class="numbertext">{{$loop->iteration}} / {{count($images)}}</div>
                    <img src="{{asset ('storage')}}/images/{{$image}}" style="width:100%">
                </div>
            @endforeach            
          
          <a class="prev" onclick="plusSlides(-1)"><<</a>
          <a class="next" onclick="plusSlides(1)">>></a>
      
          <div class="caption-container">
            <p id="caption"></p>
          </div>
      
          @foreach($images as $image)
            <div class="column">
                <img class="demo cursor" src="{{asset ('storage')}}/images/{{$image}}" 
                style="width:100%" onclick="currentSlide({{$loop->iteration}})">
            </div>
          @endforeach           
        </div>
      </div>
      
      <script>
      function openModal() {
        document.getElementById("myModal").style.display = "block";
      }
      
      function closeModal() {
        document.getElementById("myModal").style.display = "none";
      }
      
      var slideIndex = 1;
      showSlides(slideIndex);
      
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
      }
      </script>
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/gallery-script-buttons.js')}}"></script>
@endsection
