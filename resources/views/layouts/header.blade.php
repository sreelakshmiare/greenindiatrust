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
    <link rel="stylesheet" href="{{ asset('css/Login-Form-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Social-Icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Lightbox-Gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/multilevel-nav-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Projects-Horizontal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Registration-Form-with-Photo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Team-Boxed.css') }}">
    <link rel="stylesheet" href="{{ asset('css/phonepe.css') }}">
    
</head>

<body>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-2"><img class="logo_img" src="{{ asset('img/Green_India_Logo.jpg') }}"></div>
                <div class="col-md-4 col-lg-3 offset-lg-7">
                    <div class="row" style="margin: 25px 0px 0px 0px;">
                        <div class="col-lg-5 text-left"><a class="btn btn-primary text-left bg-success" role="button" href="{{route('donate')}}">Donate</a></div>
                        @if(Auth::check())                       
                            <div class="col-lg-4 text-right"><a href="{{ url('/home') }}" class="btn btn-primary bg-success" type="button">Profile</a></div>                            
                        @else
                            <div class="col-lg-4 text-right"><a href="{{ route('login') }}" class="btn btn-primary bg-success" type="button">Login</a></div>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <nav class="navbar navbar-expand-md navbar-light navbar-hover w-100 py-0 nav-color">		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHover" aria-controls="navbarDD" aria-expanded="false" aria-label="Navigation">
        <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarHover">
			<ul class="navbar-nav flex-grow-1 justify-content-center mr-auto">
				
				<li class="nav-item active">
					<a class="nav-link" href="/"><i class="fa fa-home fa-lg text-white"></i> 
						</a>
				</li>	

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						About Us
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{route('about')}}">About Us</a></li>
						<li><a class="dropdown-item" href="{{route('mission')}}">Mission and Vision</a></li>
                        <li><a class="dropdown-item" href="{{route('ourfounder')}}">Our Founder</a></li>
                        <li><a class="dropdown-item" href="{{route('ourvalues')}}">Our Values</a></li>
                        <li><a class="dropdown-item" href="{{route('ourteam')}}">Our Team</a></li>
                        <li><a class="dropdown-item" href="{{route('ourobjectives')}}">Our Objectives</a></li>
                        <li><a class="dropdown-item" href="{{route('gitaccount')}}">GIT Accounting System</a></li>
                        <li><a class="dropdown-item" href="{{route('gitfinancials')}}">GIT Financials</a></li>
                        <li><a class="dropdown-item" href="{{route('gitfy')}}">GIT FY 2020-21</a></li>
					</ul>
				</li>
                <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Our Work
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{route('healthcare')}}">Health Care</a></li>
						
						<li><a class="dropdown-item dropdown-toggle" href="#">Environment</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="{{route('billiontree')}}">One Billion Tree Plantation</a></li>
								<li><a class="dropdown-item" href="{{route('greenwall')}}">Green Wall Research</a></li>
                                <li><a class="dropdown-item" href="{{route('nursery')}}">Green India Nursery</a></li>
                                <li><a class="dropdown-item" href="{{route('environment')}}"> Environment Aware</a></li>
                               
                                <li><a class="dropdown-item" href="{{route('smokefree')}}">Smoke Free</a></li>
                                <li><a class="dropdown-item" href="{{route('apbio')}}">AP Bio-Diversity</a></li>
                                <li><a class="dropdown-item" href="{{route('campaign')}}">Campaigning 2024</a></li>
								 <li><a class="dropdown-item" href="{{route('savewater')}}">Save Water</a></li>
                                <li><a class="dropdown-item" href="{{route('organic')}}">Organic Farming</a></li>
							</ul>
						</li>
						
                        <li><a class="dropdown-item" href="{{route('livlihood')}}">Livlihood</a></li>
                        <li><a class="dropdown-item" href="{{route('education')}}">Education</a></li>
					</ul>
				</li>
                
                <li class="nav-item dropdown ">
					<a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Get Involved
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{route('volunteer')}}">Volunteering</a></li>
						<li><a class="dropdown-item" href="{{route('onlinefund')}}">Online Fundraising</a></li>
                        <li><a class="dropdown-item" href="{{route('smvolunteer')}}">SM Voluntering</a></li>
                        <li><a class="dropdown-item" href="{{route('crowdfund')}}">Crowd Fundraising</a></li>
                        <li><a class="dropdown-item" href="{{route('getActiveFundraiseList')}}">Active Crowd Fundraising</a></li>
					</ul>
				</li>
                
                
                <li class="nav-item ">
					<a class="nav-link text-white" href="{{route('awards')}}">Awards</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link text-white" href="{{route('csr')}}">CSR Opportunity</a>
				</li>
                <li class="nav-item ">
					<a class="nav-link text-white" href="{{route('reports')}}">Reports & Publications</a>
				</li>
                <li class="nav-item ">
					<a class="nav-link text-white" href="{{route('gallery')}}">Gallery</a>
				</li>
                <li class="nav-item">
					<a class="nav-link text-white" href="{{route('news')}}">News and Events</a>
				</li>
                <li class="nav-item">
					<a class="nav-link text-white" href="{{route('contact')}}">Contact Us</a>
				</li>
			</ul>
		</div>						
	</nav>   