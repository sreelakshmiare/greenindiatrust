@extends('layouts.index')
@section('center')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <ul class="filters text-center">
                <li class="active" data-filter="*"><a href="#!">All</a></li>
                <li data-filter=".html"><a href="#!">HTML</a></li>
                <li data-filter=".css"><a href="#!">CSS</a></li>
                <li data-filter=".javascript"><a href="#!">Javascript</a></li>
            </ul>
            <div class="projects">
                <div class="row">
                    <div class="col-lg-4 item html">                        
                        <div class="mycard">
                            <div class="mycard-head">
                                <img src="{{ asset('img/comptraining.jpg')}}" alt="" class="img-fluid card-img">                                    
                            </div>

                            <div class="mycard-body text-center">
                                <h4 class="title">HTML</h4>
                                <a href="#!" class="btn btn-lg mycard-btn">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 item css">                        
                        <div class="mycard">
                            <div class="mycard-head">
                                <img src="{{ asset('img/comptraining.jpg')}}" alt="" class="img-fluid card-img">                
                            </div>

                            <div class="mycard-body text-center">
                                <h4 class="title">CSS</h4>
                                <a href="#!" class="btn btn-lg mycard-btn">See More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 item javascript">                        
                        <div class="mycard">
                            <div class="mycard-head">
                                <img src="{{ asset('img/comptraining.jpg')}}" alt="" class="img-fluid card-img">
                            </div>
                            <div class="mycard-body text-center">
                                <h4 class="title">Javascript</h4>
                                <a href="#!" class="btn btn-lg mycard-btn">See More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 item html">                        
                        <div class="mycard">
                            <div class="mycard-head">
                                <img src="{{ asset('img/comptraining.jpg')}}" alt="" class="img-fluid card-img">
                            </div>

                            <div class="mycard-body text-center">
                                <h4 class="title">HTML</h4>
                                <a href="#!" class="btn btn-lg mycard-btn">See More</a>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-lg-4 item css">                        
                        <div class="mycard">
                            <div class="mycard-head">
                                <img src="{{ asset('img/comptraining.jpg')}}" alt="" class="img-fluid card-img">                                    
                            </div>

                            <div class="mycard-body text-center">
                                <h4 class="title">CSS</h4>
                                <a href="#!" class="btn btn-lg mycard-btn">See More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 item html">                        
                        <div class="mycard">
                            <div class="mycard-head">
                                <img src="{{ asset('img/comptraining.jpg')}}" alt="" class="img-fluid card-img">
                            </div>
                            <div class="mycard-body text-center">
                                <h4 class="title">HTML</h4>
                                <a href="#!" class="btn btn-lg mycard-btn">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<section class="section-about">
    <div class="container">
        <div class="row">
            <div class="col col-md-12">
                <h4 class="text-success">Gallery</h4>
                <div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active text-white bg-success border rounded-circle border-white" role="tab" data-toggle="tab" href="#tab-1">2020</a></li>
                        <li class="nav-item"><a class="nav-link text-white bg-success border rounded-circle border-white" role="tab" data-toggle="tab" href="#tab-2">2019</a></li>
                        <li class="nav-item"><a class="nav-link text-white bg-success border rounded-circle border-white" role="tab" data-toggle="tab" href="#tab-3">2018</a></li>
                        <li class="nav-item"><a class="nav-link text-white bg-success border rounded-circle border-white" role="tab" data-toggle="tab" href="#tab-4">2017</a></li>
                        <li class="nav-item"><a class="nav-link text-white bg-success border rounded-circle border-white" role="tab" data-toggle="tab" href="#tab-5">2016</a></li>
                        <li class="nav-item"><a class="nav-link text-white bg-success border rounded-circle border-white" role="tab" data-toggle="tab" href="#tab-6">2015</a></li>
                        <li class="nav-item"><a class="nav-link text-white bg-success border rounded-circle border-white" role="tab" data-toggle="tab" href="#tab-7">2014</a></li>
                        <li class="nav-item"><a class="nav-link text-white bg-success border rounded-circle" role="tab" data-toggle="tab" href="#tab-8">2013</a></li>
                        <li class="nav-item"><a class="nav-link text-white bg-success border rounded-circle border-white" role="tab" data-toggle="tab" href="#tab-9">2012</a></li>
                        <li class="nav-item"><a class="nav-link text-white bg-success border rounded-circle border-white" role="tab" data-toggle="tab" href="#tab-10">2011</a></li>
                        <li class="nav-item"><a class="nav-link text-white bg-success border rounded-circle border-white" role="tab" data-toggle="tab" href="#tab-11">2010</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="tab-1">
                            <p class="text-success">&nbsp;Tree Plantation in 2020</p>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card shadow card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card shadow card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card shadow card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card shadow card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card shadow card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card shadow card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-2">
                            <p class="text-success">&nbsp;Tree Plantation in 2019</p>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-3">
                            <p class="text-success">&nbsp;Tree Plantation in 2018</p>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-4">
                            <p class="text-success">Tree Plantation in 2017</p>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-5">
                            <p class="text-success">&nbsp;Tree Plantation in 2016</p>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-6">
                            <p class="text-success">&nbsp;Tree Plantation in 2015</p>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-7">
                            <p class="text-success">&nbsp;Tree Plantation in 2014</p>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-8">
                            <p class="text-success">&nbsp;Tree Plantation in 2013</p>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-9">
                            <p class="text-success">&nbsp;Tree Plantation in 2012</p>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-10">
                            <p class="text-success">&nbsp;Tree Plantation in 2011</p>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-11">
                            <p class="text-success">&nbsp;Tree Plantation in 2010</p>
                            <div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card card-top"><a class="text-center" href="#"><img class="img-gal" src="{{ asset('img/New%20Folder/28.jpeg')}}"></a>
                                            <h6 class="text-center text-muted"><a class="text-muted" href="#">05-02-2020</a></h6>
                                            <p class="text-center text-success">Nanalagunta,Kovur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/gallery-script.js')}}"></script>
@endsection