<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Green India Trust (GIT)</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Contact-Form-v2-Modal--Full-with-Google-Map.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Features-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Footer-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Lightbox-Gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/multilevel-nav-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Projects-Horizontal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Registration-Form-with-Photo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Team-Boxed.css') }}">
</head>

<body>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-2"><img class="logo_img" src="{{ asset('img/Green_India_Logo.jpg')}}"></div>
                <div class="col-12 col-md-4 col-lg-4 offset-lg-3 text-right">
                    <div class="form-group">
                        <form class="text-right example" style="margin: auto;width: auto;">
                            <input class="border rounded-0 form-control" type="search">
                            <button class="btn btn-success btn-sm bg-success border rounded" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 offset-lg-0">
                    <div class="row" style="margin: 25px 0px 0px 0px;">
                        <div class="col-lg-5 text-left"><a class="btn btn-primary text-left bg-success" role="button" href="donatepage.html">Donate</a></div>
                        @if(Auth::check())                       
                            <div class="col-lg-3 text-right"><a href="{{ url('/home') }}" class="btn btn-primary btn-success" type="button">Profile</a></div>                            
                        @else
                            <div class="col-lg-3 text-right"><a href="{{ route('login') }}" class="btn btn-primary btn-success" type="button">Login</a></div>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-2"><img class="logo_img" src="{{ asset('img/Green_India_Logo.jpg')}}"></div>
                <div class="col-12 col-md-4 col-lg-6">
                    <div class="form-group">
                        <form class="example" style="margin: auto;width: auto;"><input class="form-control" type="search"><button class="btn btn-success" type="button"><i class="fa fa-search"></i></button></form>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="row" style="margin: 25px 0px 0px 0px;">
                        <div class="col-lg-9 text-right"><button class="btn btn-success" type="button">Donate</button></div>
                        @if(Auth::check())                       
                            <div class="col-lg-3 text-right"><a href="{{ url('/home') }}" class="btn btn-success" type="button">Profile</a></div>
                        @else
                            <div class="col-lg-3 text-right"><a href="{{ route('login') }}" class="btn btn-success" type="button">Login</a></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-light navbar-hover w-100 py-0 nav-color">		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHover" aria-controls="navbarDD" aria-expanded="false" aria-label="Navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarHover">
			<ul class="navbar-nav text-center">
				
				<li class="nav-item active">
					<a class="nav-link" href="index.html"><i class="fa fa-home fa-lg text-white"></i> 
						</a>
				</li>	

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						About Us
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="aboutus.html">About Us</a></li>
						<li><a class="dropdown-item" href="missionandvision.html">Mission and Vision</a></li>
                        <li><a class="dropdown-item" href="ourfounder.html">Our Founder</a></li>
                        <li><a class="dropdown-item" href="ourvalues.html">Our Values</a></li>
                        <li><a class="dropdown-item" href="ourteam.html">Our Team</a></li>
                        <li><a class="dropdown-item" href="ourobjectives.html">Our Objectives</a></li>
                        <li><a class="dropdown-item" href="gitaccoutingsystem.html">GIT Accounting System</a></li>
                        <li><a class="dropdown-item" href="gitfinancials.html">GIT Financials</a></li>
                        <li><a class="dropdown-item" href="gitfy20-21.html">GIT FY 2020-21</a></li>
					</ul>
				</li>
                <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Our Work
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="healthcare.html">Health Care</a></li>
						
						<li><a class="dropdown-item dropdown-toggle" href="#">Environment</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="onebilliontreeplantation.html">One Billion Tree Plantation</a></li>
								<li><a class="dropdown-item" href="greenwallresearch.html">Green Wall Research</a></li>
                                <li><a class="dropdown-item" href="greenindianursery.html">Green India Nursery</a></li>
                                <li><a class="dropdown-item" href="environmentaware.html"> Environment Aware</a></li>
                               
                                <li><a class="dropdown-item" href="smokefree.html">Smoke Free</a></li>
                                <li><a class="dropdown-item" href="apbiodiversity.html">AP Bio-Diversity</a></li>
                                <li><a class="dropdown-item" href="campaigning2024.html">Campaigning 2024</a></li>
								 <li><a class="dropdown-item" href="savewater.html">Save Water</a></li>
                                <li><a class="dropdown-item" href="organicfarming.html">Organic Farming</a></li>
							</ul>
						</li>
						
                        <li><a class="dropdown-item" href="livlihood.html">Livihood</a></li>
                        <li><a class="dropdown-item" href="education.html">Education</a></li>
					</ul>
				</li>
                
                <li class="nav-item dropdown ">
					<a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Get Involved
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="volunteering.html">Volunteering</a></li>
						<li><a class="dropdown-item" href="onlinefundraising.html">Online Fundraising</a></li>
                        <li><a class="dropdown-item" href="smvolunteering.html">SM Voluntering</a></li>
                        <li><a class="dropdown-item" href="crowdfundraising.html">Crowd Fundraising</a></li>
					</ul>
				</li>
                
                
                <li class="nav-item ">
					<a class="nav-link text-white" href="awards.html">Awards</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link text-white" href="csropportunity.html">CSR Opportunity</a>
				</li>
                <li class="nav-item ">
					<a class="nav-link text-white" href="reportsandpublications.html">Reports & Publications</a>
				</li>
                <li class="nav-item ">
					<a class="nav-link text-white" href="gallery.html">Gallery</a>
				</li>
                <li class="nav-item">
					<a class="nav-link text-white" href="newsandevents.html">News and Events</a>
				</li>
                <li class="nav-item">
					<a class="nav-link text-white" href="contactus.html">Contact Us</a>
				</li>
			</ul>
		</div>						
	</nav>   