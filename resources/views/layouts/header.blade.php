<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Green India Trust</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Footer-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Lightbox-Gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/multilevel-nav-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
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
    <nav class="navbar navbar-expand-md navbar-hover w-100 py-0" style="background-color: #ccffcc">		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHover" aria-controls="navbarDD" aria-expanded="false" aria-label="Navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarHover">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#"><i class="fa fa-home fa-2x"></i> <span class="sr-only">(current)</span></a>
				</li>				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						About Us
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">About Us</a></li>
						<li><a class="dropdown-item" href="#">Mission and Vision</a></li>
                        <li><a class="dropdown-item" href="#">Our Founder</a></li>
                        <li><a class="dropdown-item" href="#">Our Values</a></li>
                        <li><a class="dropdown-item" href="#">Our Team</a></li>
                        <li><a class="dropdown-item" href="#">Our Objectives</a></li>
                        <li><a class="dropdown-item" href="#">GIT Accounting System</a></li>
                        <li><a class="dropdown-item" href="#">GIT Financials</a></li>
                        <li><a class="dropdown-item" href="#">GIT FY 2020-21</a></li>
					</ul>
				</li>
                <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Our Work
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">Health Care</a></li>
						
						<li><a class="dropdown-item dropdown-toggle" href="#">Environment</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">One Billion Tree Plantation</a></li>
								<li><a class="dropdown-item" href="#">Green Wall Research</a></li>
                                <li><a class="dropdown-item" href="#">Green India Nursery</a></li>
                                <li><a class="dropdown-item" href="#"> Environment Aware</a></li>
                                <li><a class="dropdown-item" href="#">Save Water</a></li>
                                <li><a class="dropdown-item" href="#">Smoke Free</a></li>
                                <li><a class="dropdown-item" href="#">AP Bio-Diversity</a></li>
                                <li><a class="dropdown-item" href="#">Campaigning 2024</a></li>
                                <li><a class="dropdown-item" href="#">Organic Farming</a></li>
							</ul>
						</li>
						
                        <li><a class="dropdown-item" href="#">Livihood</a></li>
                        <li><a class="dropdown-item" href="#">Education</a></li>
					</ul>
				</li>
                
                <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Get Involved
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">Volunteering</a></li>
						<li><a class="dropdown-item" href="#">Online Fundraising</a></li>
                        <li><a class="dropdown-item" href="#">SM Voluntering</a></li>
                        <li><a class="dropdown-item" href="#">Crowd Fundraising</a></li>
					</ul>
				</li>
                
                
                <li class="nav-item">
					<a class="nav-link" href="#">Awards</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">CSR Opportunity</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="#">Reports & Publications</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="#">News and Events</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" href="#">Contact Us</a>
				</li>
			</ul>
		</div>						
    </nav>    