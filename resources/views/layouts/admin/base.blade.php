<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Law Associate Admin Panel</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{asset('assets/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    @livewireStyles
</head>
<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="{{route('admin.dashboard')}}">
                            <!-- <img src="assets/images/logo.png" alt="" /> --><span>Associate Law</span></a></div>
                    <li class="label">Main</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-home"></i>Advocate Dashboard
                    <span class="sidebar-collapse-icon ti-angle-down"></span>
                    </a>
                    <ul>
                        <li><a href="{{route('admin.cahngepassword')}}">Change Password</a></li>
                    </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-user"></i> Client
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                                <li><a href="{{route('admin.createuser')}}">Add New Client</a></li>
                                <li><a href="{{route('admin.allusers')}}">All Client's</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-file"></i>Cases
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                                <li><a href="{{route('admin.addnewcase')}}">Add New Case</a></li>
                                <li><a href="{{route('admin.caseslist')}}">All Case's</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-layout"></i>Court
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                                <li><a href="{{route('admin.addcourt')}}">Add New Court</a></li>
                                <li><a href="{{route('admin.courtlist')}}">All Court's</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-map"></i>City
                        <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                                <li><a href="{{route('admin.addcity')}}">Add New City</a></li>
                                <li><a href="{{route('admin.citieslist')}}">All Cities</a></li>
                        </ul>
                    </li>

                   
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                      
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">{{Auth::user()->name}}
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">
                                            @if(Auth::user()->utype === 'ADM')
                                            Admin
                                            @endif
                                        </span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                           
                                            <li>
                                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" > <i class="ti-user"></i>Logout</a>
                                            <form id="logout-form" method="POST" action="{{route('logout')}}">
                                         @csrf
                                         
                                         </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{$slot}}

 
    @livewireScripts
    <!-- jquery vendor -->
    <script src="{{asset('assets/js/lib/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/jquery.nanoscroller.min.js')}}"></script>
    <!-- nano scroller -->
    
    <script src="{{asset('assets/js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{asset('assets/js/lib/preloader/pace.min.js')}}"></script>
    <!-- sidebar -->

    <script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <!-- bootstrap -->

    <script src="{{asset('assets/js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/calendar-2/pignose.init.js')}}"></script>


    <script src="{{asset('assets/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/weather/weather-init.js')}}"></script>
    <script src="{{asset('assets/js/lib/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/circle-progress/circle-progress-init.js')}}"></script>
    <script src="{{asset('assets/js/lib/chartist/chartist.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/sparklinechart/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/sparklinechart/sparkline.init.js')}}"></script>
    <script src="{{asset('assets/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('assets/js/dashboard2.js')}}"></script>

    @stack('scripts')
    @stack('js')
</body>

</html>