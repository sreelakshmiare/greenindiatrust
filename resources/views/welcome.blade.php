@extends('layouts.index')
@section('center')
    <div class="container">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"><img class="w-100 d-block" src="{{ asset('img/Green%20Friont.jpg')}}" alt="Slide Image" style="height: 450px;"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="{{ asset('img/Green%20Friont.jpg') }}" alt="Slide Image" style="height: 450px;"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="{{ asset('img/Green%20Friont.jpg')}}" alt="Slide Image" style="height: 450px;"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                    data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>

     <section class="section-about">
        <div class="container">
            <div class="bg-light div-homeabout">
                <div class="row">
                    <div class="col-lg-7 col-xl-7">
                        <h5 class="text-right text-success heading-home">&nbsp;About Green India Trust</h5>
                        <p class="text-right text-success shadow-sm para-home">Founded in 2008 by&nbsp;<strong>Dr. Ch. Murali&nbsp;Krishna</strong>&nbsp;along with like-minded and passionate friends, Green India Trust (GIT)&nbsp;is a collective effort of a resourceful and professional common platform for&nbsp;partnership
                            and accordance towards development, empowerment and conservation in&nbsp;livelihood, rural communities, rural infrastructure, NRM and health.<a class="btn btn-light btn-sm text-success bg-white shadow-sm" role="button" href="aboutus.html">Read More</a>&nbsp;
                            &nbsp;<br><a href="healthcare.html"></a><br></p>
                    </div>
                    <div class="col-lg-5 offset-lg-0"><img class="img-fluid float-right about-img" src="{{ asset('img/GreenEarth.jpg')}}" width="400" style="/*padding: 15px;*/" height="800"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container">
            <div>
                <h5 class="text-left text-white bg-success div-head"><strong>OUR IMPACT</strong></h5>
                <div class="row">
                    <div class="col-lg-7">
                        <h5 class="text-right text-success heading-home">Environment</h5>
                        <p class="text-right text-success shadow-sm para-home">Environmental awareness is to understand the fragility of our <br>environment and the importance of its protection. &nbsp;Promoting <br>environmental awareness is an easy way to become an environmental <br>steward and participate
                            in creating a brighter future for our children.&nbsp; <br><a href="healthcare.html"></a><a class="btn btn-light btn-sm text-success bg-white shadow-sm" role="button" href="environment-aware.html">Read More</a><br><br></p>
                    </div>
                    <div class="col-lg-5 offset-lg-0"><img class="img-fluid float-right about-img" src="{{ asset('img/home-enivironment.jpg')}}" width="400" style="/*padding: 15px;*/"></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="bg-light">
                <div class="row">
                    <div class="col-lg-5 offset-lg-0"><img class="img-fluid" src="{{ asset('img/home-health.jpg') }}" width="400" height="300"></div>
                    <div class="col-lg-7 col-xl-7">
                        <h5 class="text-left text-success heading-home1">Health Care</h5>
                        <p class="text-left text-success shadow-sm para-home">GIT has few Core Areas of Focus under which it designs, plans, and works and responding to the civic need and&nbsp;concerns, GIT works on few cross-cutting the matic areas also as when such emergency and need arise.&nbsp;<br>
                            <a
                                href="healthcare.html"></a><a class="btn btn-light btn-sm text-success bg-white shadow-sm" role="button" href="healthcare.html">Read More</a><br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-lg-7">
                        <h5 class="text-right text-success heading-home">Livlihood</h5>
                        <p class="text-right text-success shadow-sm para-home">The livelihood and community development projects implemented by Green India Trust have a holistic approach encompassing many components of education, skills training, capacity building and awareness. The projects work in sync
                            with government development programmes and facilitate linkages to public services and schemes for the project beneficiaries.&nbsp;<br><a href="healthcare.html"></a><a class="btn btn-light btn-sm text-success bg-white shadow-sm"
                                role="button" href="livelihood.html">Read More</a><br><br></p>
                    </div>
                    <div class="col-lg-5 offset-lg-0"><img class="img-fluid float-right about-img" src="{{ asset('img/home-enivironment.jpg') }}" width="400" style="/*padding: 15px;*/"></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="bg-light">
                <div class="row">
                    <div class="col-lg-5 offset-lg-0"><img class="img-fluid" src="{{ asset('img/home-womenpower.jpg') }}" width="400" height="300"></div>
                    <div class="col-lg-7 col-xl-7">
                        <h5 class="text-left text-success heading-home1">Women Empowers</h5>
                        <p class="text-left text-success shadow-sm para-home">GIT has few Core Areas of Focus under which it designs, plans, and works and responding to the civic need and&nbsp;concerns, GIT works on few cross-cutting the matic areas also as when such emergency and need arise.&nbsp;<br>
                            <a
                                href="healthcare.html"></a><a class="btn btn-success btn-sm text-success bg-white shadow-sm" role="button">Read More</a><br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-lg-7">
                        <h5 class="text-right text-success heading-home">Education</h5>
                        <p class="text-right text-success shadow-sm para-home">Green India trust to educate the local man power and to create the <br>awareness program in rural areas often urge their children to take up domestic tasks or help in labor, instead of helping them attain an education.&nbsp;<br>
                            <a
                                href="healthcare.html"></a><a class="btn btn-light btn-sm text-success bg-white shadow-sm" role="button" href="education.html">Read More</a><br><br></p>
                    </div>
                    <div class="col-lg-5"><img class="img-fluid float-right" src="{{ asset('img/home-education.jpg') }}" width="400"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="container-fluid text-center">
            <div class="number d-flex flex-md-row flex-wrap justify-content-center">
                <div class="rect">
                    <h6>Trees Planted</h6>
                    <p><strong>31,39,724</strong><br></p>
                </div>
                <div class="rect">
                    <h6>Pregnanat Women &amp; New Born Babies</h6>
                    <p><strong>165</strong></p>
                </div>
                <div class="rect">
                    <h6>Volunteering</h6>
                    <p><strong>5285</strong></p>
                </div>
                <div class="rect">
                    <h6>Medical</h6>
                    <p><strong>836</strong></p>
                </div>
                <div class="rect">
                    <h6>Total Beneficiaries</h6>
                    <p><strong>14,020</strong><br></p>
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
    </section>
    <section class="section-4">
        <div class="container text-center">
            <h5 class="text-white bg-success">Latest News</h5>
            <div class="text-center row team-row"><div class="col-md-4 col-12">



<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
        <div class="carousel-item active text-center">
             <!--card 2-->
                 <div class="card mr-2 d-inline-block shadow-lg">
                    <div class="card-body">
                         <h3 class="card-title">News and events</h3>
                        	<img src="{{ asset('img/news1.jpg') }}" alt="Member" class="award-img">
                    </div>

                 </div>
        </div>

        <div class="carousel-item text-center">
            <!--card 2-->
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-body">
                            <h3 class="card-title">News and events</h3>
                                <img src="{{ asset('img/news2.jpg') }}" alt="Member" class="award-img">
                        </div>

                    </div>
        </div>
    </div>
 </div>
</div>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active text-center">
            <!--card 2-->
                <div class="card mr-2 d-inline-block shadow-lg">
                    <div class="card-body">
                        <h3 class="card-title">News and events</h3>
                            <img src="{{ asset('img/news1.jpg') }}" alt="Member" class="award-img">
                    </div>

                </div>
      </div>

    <div class="carousel-item text-center">
         <!--card 2-->
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-body">
                    <h3 class="card-title">News and events</h3>
                     <img src="{{ asset('img/news2.jpg') }}" alt="Member" class="award-img">
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
    <section class="bg-light section-about">
        <div class="container bottom">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="text-center text-white bg-success">Our Associate Partners</h5>
                </div>
                <div class="col-lg-3 offset-lg-1 text-center"><img class="img-thumbnail img-fluid border rounded-0 shadow brand-logo" src="{{ asset('img/neshna%20Trust%20logo.JPG') }}"></div>
                <div class="col-lg-3 text-center"><img class="img-thumbnail img-fluid border rounded-0 shadow brand-logo" src=" {{ asset('img/AGF%20LOGO.jpg') }}"></div>
                <div class="col-lg-3 text-center"><img class="img-fluid border rounded-0 shadow brand-logo" src="{{ asset('img/STRADA%20DEI%20%20main%20log.JPG') }}"></div>
            </div>
        </div>
    </section>


@endsection