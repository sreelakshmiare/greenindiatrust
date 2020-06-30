@extends('layouts.index')
@section('center')
<section class="section-about">
    <div class="container">
        <section class="bg-light section-about">
            <div class="container text-center">
                <h4 class="text-center text-success div-head"><b>NEWS AND AWARDS</b></h4>
            </div>      
            <hr>
            <div class = "container">
                <div class="row">
                    <div class="col">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active text-center">
                                    <div class="card mr-2 d-inline-block shadow-lg" style=" height: 25rem; width: 22rem">
                                        <div class="card-body">
                                            <h4 class="card-title text-success">News and Events</h4>
                                        </div>
                                        <div class="card-img-top">
                                            <marquee behavior="scroll" direction="up" style="margin: 1px 5px 1px 5px; height:200px;">
                                                @foreach ($newsandevents as $item)
                                                    <p class="text-center">{{ $item->news_events}}</p> 
                                                @endforeach                                        
                                            </marquee>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-3"><img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse" src="{{ asset('img/news1.jpg')}}" loading="eager"></div>
            <div class="col-lg-3"><img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse" src="{{ asset('img/news2.jpg')}}"></div>
            <div class="col-lg-3"><img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse" src="{{ asset('img/news3.png')}}"></div>
            <div class="col-lg-3"><img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse" src="{{ asset('img/news5.jpg')}}"></div>
        </div>
    </div>
</section>
@endsection