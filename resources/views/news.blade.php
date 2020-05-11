@extends('layouts.index')
@section('center')
<section class="section-about">
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <h4 class="text-success">News and Events</h4>
            </div>
            <div class="col-lg-3"><img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse" src="{{ asset('img/news1.jpg')}}" loading="eager"></div>
            <div class="col-lg-3"><img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse" src="{{ asset('img/news2.jpg')}}"></div>
            <div class="col-lg-3"><img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse" src="{{ asset('img/news3.png')}}"></div>
            <div class="col-lg-3"><img class="img-thumbnail img-fluid shadow award-img" data-bs-hover-animate="pulse" src="{{ asset('img/news5.jpg')}}"></div>
        </div>
    </div>
</section>
@endsection