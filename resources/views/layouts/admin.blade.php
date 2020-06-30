<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin | Green India Trust</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('admin/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/Navigation-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/Contact-Form-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/sidebar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container">
                <a class="navbar-brand" href="/">Green India</a>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#">Admin Dashboard</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="{{route('main')}}">Home Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="nav flex-column shadow d-flex sidebar mobile-hid">
        <li class="nav-item logo-holder">
            <div class="text-center text-white logo py-2 mx-3">
                <a class="text-white text-decoration-none" id="title" href="#">
                    <strong>AdminPanel</strong>
                </a>
                <a class="text-white float-right" id="sidebarToggleHolder" href="#">
                    <i class="fas fa-bars" id="sidebarToggle"></i>
                </a>
            </div>
        </li>
        
        <li class="nav-item dropdown">
            <a class="dropdown-toggle nav-link text-left text-white py-1 px-0 position-relative" data-toggle="dropdown" aria-expanded="false" href="#">
                <i class="fas fa-sliders-h mx-3"></i>
                <span class="text-nowrap mx-2">Useful Admins</span>
                <i class="fas fa-caret-down float-none float-lg-right fa-sm"></i>
            </a>
            <div
                class="dropdown-menu border-0 animated fadeIn" role="menu">
                <a class="dropdown-item text-white" role="presentation" href="{{route('adminDisplayAchievements')}}">
                    <span>Achievements</span>
                </a>
                <a class="dropdown-item text-white" role="presentation" href="{{route('adminDisplayDonations')}}">
                    <span>Manage Donation Amounts</span>
                </a>
                <a class="dropdown-item text-white" role="presentation" href="{{route('adminDisplayFundraises')}}">
                    <span>Manage Fundraises</span>
                </a>
                <a class="dropdown-item text-white" role="presentation" href="{{route('adminDisplayNewsAndEvents')}}">
                    <span>Manage News Events</span>
                </a>
                <a class="dropdown-item text-white" role="presentation" href="{{route('adminDisplayVolunteers')}}">
                    <span>Manage Volunteer Requests</span>
                </a>
                <a class="dropdown-item text-white" role="presentation" href="{{route('adminDisplayUserDonations')}}">
                    <span>Manage User Donations</span>
                </a>
                <a class="dropdown-item text-white" role="presentation" href="{{route('adminDisplayCategories')}}">
                    <span>Gallery Categories</span>
                </a>
                <a class="dropdown-item text-white" role="presentation" href="{{route('adminDisplayGalleryImages')}}">
                    <span>Manage Gallery Images</span>
                </a>
                            
            </div>
        </li>
        
        <li class="nav-item dropdown">
            <a class="dropdown-toggle nav-link text-left text-white py-1 px-0 position-relative" data-toggle="dropdown" aria-expanded="false" href="#">
                <i class="fas fas fa-user mx-3"></i>
                <span class="text-nowrap mx-2">User Admin</span>
                <i class="fas fa-caret-down float-none float-lg-right fa-sm"></i>
            </a>
            <div
                class="dropdown-menu border-0 animated fadeIn" role="menu">
                <a class="dropdown-item text-white" role="presentation" href="{{route('adminDisplayUsers')}}">
                    <span>Manage Users</span>
                </a>
                <a class="dropdown-item text-white" role="presentation" href="{{route('adminDisplayMenus')}}">
                    <span>Manage Menus</span>
                </a>
                <a class="dropdown-item text-white" role="presentation" href="{{route('adminDisplayRoles')}}">
                    <span>Manage Roles</span>
                </a>                
                <a class="dropdown-item text-white" role="presentation" href="{{route('adminDisplayCarouselImages')}}">
                    <span>Manage Carousel Images</span>
                </a>                
            </div>
        </li>
        <!--<li class="nav-item">
            <a class="nav-link text-left text-white py-1 px-0" href="#">
                <i class="fas fa-sign-out-alt mx-3"></i>
                <i class="fa fa-caret-right d-none position-absolute"></i>
                <span class="text-nowrap mx-2">Log out</span>
            </a>
        </li> -->
    </ul>

    @yield('body')
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/lightbox.min.js')}}"></script>
    <script src="{{ asset('js/livereload.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{asset('admin/js/sidebar.js')}}"></script>   
</body>

</html>