@extends('layouts.index')
@section('center')
<section class="section-about">
    <div class="container">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"><img class="w-100 d-block carousel-img" src="{{ asset('img/Green%20Friont.jpg')}}" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block carousel-img" src="{{ asset('img/Green%20Friont.jpg')}}" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block carousel-img" src="{{ asset('img/Green%20Friont.jpg')}}" alt="Slide Image"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span></a>
                <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="bg-white div-homeabout">
            <div class="row">
                <div class="col-lg-7 col-xl-7">
                    <h4 class="text-center text-success heading-home">&nbsp;<b>About Green India Trust</b></h4>
                    
                    <p class="text-justify text-success para-home">Founded in 2008 by&nbsp;<strong>Dr. Ch. Murali
                    &nbsp;Krishna</strong>&nbsp;along with like-minded and passionate friends, Green India Trust
                     (GIT)&nbsp;is a collective effort of a resourceful and professional common platform for&nbsp;
                     partnership and accordance towards development, empowerment and conservation in &nbsp;
                     livelihood, rural communities, rural infrastructure, NRM and health.
                     
                     <a class="btn btn-outline-success active btn-lg bg-success border-success shadow-lg" 
                        data-bs-hover-animate="pulse" type="button" 
                        href="{{route('about')}}">Read More</a>&nbsp; &nbsp;<br>

       <!--  <a class="btn btn-light btn-sm text-success bg-white shadow-sm" role="button" 
                        href="{{route('about')}}">Read More</a>&nbsp; &nbsp;<br>-->
                    
                  
                      <br></p>
                </div>
                <div class="col-lg-5 offset-lg-0"><img class="img-thumbnail img-fluid float-right about-img" 
                src="{{ asset('img/home-about.jpg')}}" style="/*padding: 15px;*/"></div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light section-about">
    <div class="container">
        <div>
            <h4 class="text-center text-success div-head"><b>OUR IMPACT</b></h4>
            <hr>
            <div class="row">
                <div class="col-lg-7">
                        <h4 class="text-center text-success heading-home"><b>Environment</b></h4>
                        
                        <p class="text-justify text-success para-home">Environmental awareness is to understand the 
                            fragility of our environment and the importance of its protection. &nbsp;Promoting
                             environmental awareness is an easy way to become an environmental steward and participate 
                             in creating a brighter future for our children.&nbsp; <br>
                             
                          <!--  <a class="btn btn-light btn-sm text-success bg-white shadow-sm" role="button"
                              href="{{route('billiontree')}}">Read More</a>-->

                              <a class="btn btn-outline-success active btn-lg bg-success border-success shadow-lg" 
                        data-bs-hover-animate="pulse" type="button" 
                        href="{{route('billiontree')}}">Read More</a>&nbsp; &nbsp;<br>
                      
                              <br><br></p>
                </div>
                <div class="col-lg-5 offset-lg-0"><img class="img-thumbnail img-fluid float-right about-img" 
                src="{{ asset('img/home-enivironment.jpg')}}" width="400" style="/*padding: 15px;*/"></div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="bg-white">
            <div class="row">
                <div class="col-lg-5 offset-lg-0"><img class="img-thumbnail img-fluid about-img" 
                    src="{{ asset('img/home-health.jpg')}}"></div>
                <div class="col-lg-7 col-xl-7">
                        <h4 class="text-center text-success heading-home"><b>Health Care</b></h4>
                        
                         <p class="text-justify text-success para-home">GIT has few Core Areas of Focus under which 
                         it designs, plans, and works and responding to the civic need and&nbsp;concerns, GIT works
                          on few cross-cutting the matic areas also as when such emergency and need arise.&nbsp;<br>
                        
                          <a class="btn btn-outline-success active btn-lg bg-success border-success shadow-lg" 
                        data-bs-hover-animate="pulse" type="button" 
                        href="{{route('healthcare')}}">Read More</a>&nbsp; &nbsp;<br>

                       <!-- <a class="btn btn-light btn-sm text-success bg-white shadow-sm" role="button" 
                        href="{{route('healthcare') }}">Read More</a><br></p>-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="container">
        <div>
            <div class="row">
                <div class="col-lg-7">
                        <h4 class="text-center text-success heading-home"><b>Livlihood</b></h4>
                        
                        <p class="text-justify text-success para-home">The livelihood and community development projects
                         implemented by Green India Trust have a holistic approach encompassing many components of 
                         education, skills training, capacity building and awareness. The projects work in sync
                        with government development programmes and facilitate linkages to public services and 
                        schemes for the project beneficiaries.&nbsp;<br>
                        
                        <a class="btn btn-outline-success active btn-lg bg-success border-success shadow-lg" 
                        data-bs-hover-animate="pulse" type="button" 
                        href="{{route('livlihood')}}">Read More</a>&nbsp; &nbsp;<br>

                        
                        <!--<a class="btn btn-light btn-sm text-success bg-white shadow-sm"
                            role="button" href="{{route('livlihood')}}">Read More</a><br><br></p>-->
                </div>
                <div class="col-lg-5 offset-lg-0"><img class="img-thumbnail img-fluid float-right about-img" 
                src="{{ asset('img/home-livlihood.jpg')}}" width="400" style="/*padding: 15px;*/"></div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="bg-white">
            <div class="row">
                <div class="col-lg-5 offset-lg-0"><img class="img-thumbnail img-fluid about-img" src="{{ asset('img/home-womenpower.jpg')}}"></div>
                <div class="col-lg-7 col-xl-7">
                        <h4 class="text-center text-success heading-home"><b>Women Empowers</b></h4>
                         <p class="text-justify text-success para-home">GIT has few Core Areas of Focus under which it 
                         designs, plans, and works and responding to the civic need and&nbsp;concerns, GIT works on few 
                         cross-cutting the matic areas also as when such emergency and need arise.&nbsp;<br>
                        
                         <a class="btn btn-outline-success active btn-lg bg-success border-success shadow-lg" 
                        data-bs-hover-animate="pulse" type="button" 
                        href="{{route('livlihood')}}">Read More</a>&nbsp; &nbsp;<br>

                      
                        <!--<a class="btn btn-light btn-sm text-success bg-white shadow-sm" role="button" 
                        href="{{ route('livlihood') }}">Read More</a><br></p>-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light">
    <div class="container">
        <div>
            <div class="row">
                <div class="col-lg-7">
                        <h4 class="text-center text-success heading-home"><b>Education</b></h4>
                         <p class="text-justify text-success para-home">Green India trust to educate the local man
                          power and to create the awareness program in rural areas often urge their children to take
                           up domestic tasks or help in labor, instead of helping them attain an education.&nbsp;<br>
                
                        
                           <a class="btn btn-outline-success active btn-lg bg-success border-success shadow-lg" 
                        data-bs-hover-animate="pulse" type="button" 
                        href="{{route('education')}}">Read More</a>&nbsp; &nbsp;<br>

                        
                        <!--<a class="btn btn-light btn-sm text-success bg-white shadow-sm" role="button"
                         href="{{route('education')}}">Read More</a><br><br></p>-->
                </div>
                <div class="col-lg-5"><img class="img-thumbnail img-fluid float-right about-img" 
                src="{{ asset('img/home-education.jpg')}}"></div>
            </div>
        </div>
    </div>
</section>
<!--<section class="bg-light section-2">
    <div class="container-fluid text-center">
            <h4 class="text-center text-success div-head"><strong>OUR WORKING NUMBERS.....</strong></h4>
            <hr>
        <div class="number d-flex flex-md-row flex-wrap justify-content-center">
            <div class="rect">
                <h6>Trees Planted</h6>
                <p><strong>31,39,724</strong><br></p>
            </div>
            <div class="rect">
                <h6>Pregnanat Women and New Born Babies</h6>
                <p><strong>165</strong></p>
            </div>
            <div class="rect">
                <h6>Volunteering</h6>
                <p><strong>5285</strong></p>
            </div>
            <div class="rect">
                <h6>Medical Camps&nbsp;</h6>
                <p><strong>836</strong></p>
                <h6>Total Beneficiaries</h6>
                <p><strong>14,020</strong></p>
            </div>
            <div class="rect">
                <h6>Women Training</h6>
                <p><strong>33</strong></p>
            </div>
            <div class="rect">
                <h6>Kids Training</h6>
                <p><strong>16</strong></p>
            </div>
        </div>
    </div>
</section> -->

<section class="stat bg-white section-about" id="stats">
    <div class="content-box">
        <h4 class="text-center text-success div-head"><strong>OUR WORKING NUMBERS.....</strong></h4>
            <hr>
        <br>
        <br>
        <div class="container">
            <div class="row text-center">
                @foreach($achievements as $achievement)
                    <div class="col-md-3">
                        <div class="stat-item">
                            @if($achievement->achievement == 'Trees Planted')
                                <i class="fa fa-tree"></i>
                            @elseif($achievement->achievement == 'Pregnanat Women & New Born Babies')
                                <i class="fa fa-female"></i>
                            @elseif($achievement->achievement == 'Volunteering')
                                <i class="fa fa-handshake-o"></i>
                            @elseif($achievement->achievement == 'Medical Camps')
                                <i class="fa fa-ambulance"></i>
                            @elseif($achievement->achievement == 'Women Training')
                                <i class="fa fa-certificate"></i>
                            @elseif($achievement->achievement == 'Kids Training')
                                <i class="fa fa-certificate"></i>
                            @elseif($achievement->achievement == 'Medical Camp Beneficiaries')
                                <i class="fa fa-male"></i>
                            @else
                                <i class="fa fa-male"></i>
                            @endif
                            <h2>
                                <div class="counter" data-target="{{ $achievement->count }}">0</div>
                            </h2>
                            <p> <h5>{{ $achievement->achievement }} </h5></p>
                        </div>
                    </div>
                @endforeach                
            </div>
        </div>
    </div>
</section>



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
            <div class="col">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active text-center">
                            <div class="card mr-2 d-inline-block shadow-lg" style=" height: 25rem; width: 22rem">
                                <div class="card-body">
                                    <h4 class="card-title text-success">Awards</h4>
                                </div>
                                <div class="card-img-top"><img src="{{ asset('img/award2.jpg') }}" alt="Member" class="img-size img-fluid" /></div>
                            </div>
                        </div>
                        <div class="carousel-item text-center">
                            <div class="card mr-2 d-inline-block shadow-lg" style=" height: 25rem; width: 22rem">
                                <div class="card-body">
                                    <h4 class="card-title text-success">Awards</h4>
                                </div>
                                <div class="card-img-top"><img src="{{ asset('img/award4.jpg') }}" alt="Member" class="img-size img-fluid" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
           

       <!-- <div class="text-center row team-row">

<div class = "col-md-6">
    <div class="carousel-item active text-center">
    
         <div class="card mr-2 d-inline-block shadow-lg">
            <div class="card-body">
                    <h3 class="card-title">News and events</h3>
                    <img src="" alt="Member" class="award-img">
            </div>
         </div>
    </div>
 </div>

 <div class = "col-md-6">
    <div class="carousel-item active text-center">
        
             <div class="card mr-2 d-inline-block shadow-lg">
                 <div class="card-body">
                     <h3 class="card-title">Awards</h3>
                        <img src="" alt="Member" class="award-img">
                 </div>
             </div>
    </div>
  </div>
</div>-->



    <section class="bg-white section-about">
    <div class="container bottom">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center text-success div-head"><strong>OUR ASSOCIATE PARTNERS</strong></h4>
                <hr>
            </div>
            <div class="col-lg-3 offset-lg-1 text-center"><img class="img-fluid brand-logo" src="{{ asset('img/neshna%20Trust%20logo.JPG')}}"></div>
            <div class="col-lg-3 text-center"><img class="img-fluid brand-logo" src="{{ asset('img/AGF%20LOGO.jpg')}}"></div>
            <div class="col-lg-3 text-center"><img class="img-fluid brand-logo" src="{{ asset('img/STRADA%20DEI%20%20main%20log.JPG')}}"></div>
        </div>
    </div>
</section>

@endsection