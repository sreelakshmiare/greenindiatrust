@extends('layouts.index')
@section('center')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <ul class="filters text-center">
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
            <ul class="filters text-center">
                <li class="active" data-filter="*"><a href="#!">All</a></li>
                <li data-filter=".andhrapradesh"><a href="#!">AndhraPradesh</a></li>
                <li data-filter=".tamilnadu"><a href="#!">TamilNadu</a></li>
                <li data-filter=".karnataka"><a href="#!">Karnataka</a></li>
            </ul>
            <div class="projects">
                <div class="row">
                    <div class="col-lg-4 item 2020 andhrapradesh">                        
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/isotope.min.js')}}"></script>
<script src="{{ asset('js/gallery-script.js')}}"></script>
@endsection