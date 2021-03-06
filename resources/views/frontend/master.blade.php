<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Matric Private School Management</title>
    <style type="text/css">
        div.detail{
    background: rgba(6,12,34,0.76);
    position: absolute;
    text-align: center;
    color: #fff;
    width: 100%;
    bottom: 0px;
}
div.speaker{
    position: relative;
}
    .loggo{
    width: 40px;
    height: 40px;
    border-radius: 40px;
    position: relative;
}
   .a{
    font-family: Arial;
    }
    
    </style>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/swiper.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="{{asset('frontend/images/favicon.png')}}">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <a class="navbar-brand logo-text page-scroll" href="index.html">  <img src="{{asset('frontend/images/imagess/edu4.png')}}" class="loggo">Matrix</a>

        <!-- Image Logo -->
        {{-- <a class="navbar-brand logo-image" href="{{asset('frontend/index.blade.php')}}"><img src="{{asset('frontend/images/logo.svg')}}" alt="alternative"></a> --}}
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('mainpage')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('aboutpage')}}">About</a>
                </li>
                <!-- Dropdown Menu -->          
{{--                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Terms Conditions</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Privacy Policy</span></a>
                    </div>
                </li> --}}
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('contactpage')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <div class="col-lg-12 col-10">
                    @role('Student')
                        <span class="float-right d-xl-block d-lg-block d-md-block d-none">

                            <a id="navbarDropdown" class="nav-link dropdown-toggle loginlink" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                {{Auth::user()->name}}
                            </a>

                            {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('logout')}}
                                </a>
                                <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                
                            </div> --}}
                            <div class="dropdown-menu mt-3" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('studentpasswordpage')}}"><span class="item-text">{{ __('Profile')}}</span></a>
                                <div class="dropdown-items-divide-hr"></div>
                                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <span class="item-text">{{ __('logout')}}</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                                @csrf
                            </form>


                        </div>
                            
                        </span>
                        @else
                        <span>
                    <a class="nav-link page-scroll" href="{{route('loginpage')}}">Login</a>
                    </span>
                        @endrole
                    </div>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">

          

           
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


     @yield('content')


   <!-- Customers -->
    {{-- <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5>Trusted By</h5>
                    
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="{{asset('frontend/images/customer-logo-1.png')}}" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="{{asset('frontend/images/customer-logo-2.png')}}" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="{{asset('frontend/images/customer-logo-3.png')}}" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="{{asset('frontend/images/customer-logo-4.png')}}" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="{{asset('frontend/images/customer-logo-5.png')}}" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="{{asset('frontend/images/customer-logo-6.png')}}" alt="alternative">
                                    </div>
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> --}} <!-- end of slider-1 -->
    <!-- end of customers -->
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>About Matrix</h4>
                        <p>We're passionate about offering some of the best business growth services for startups</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Our business partners <a class="turquoise" href="#your-link">startupguide.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Read our <a class="turquoise" href="terms-conditions.html">Terms & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{asset('frontend/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('frontend/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{asset('frontend/js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{asset('frontend/js/scripts.js')}}" rel="stylesheet"></script> <!-- Custom scripts -->
</body>
</html>