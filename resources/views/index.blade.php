<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
          content="Roboads - An IT COMPANY ">
    <meta name="author" content="ROBOADS">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content=""/> <!-- website name -->
    <meta property="og:site" content=""/> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
    <meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content=""/> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article"/>

    <!-- Website Title -->
    <title>RoboAds - IT Company</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
          rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('assets/images/files/robo-icon.png')}}">

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .bg-video-wrap {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100vh;

        }

        @media only screen and (max-width: 600px) {
            #social{
                height: 54px;
                margin-left: 7px;
            }

            .ul-left li {
                margin:1px 0px 4px -48px !important;
                list-style: none;
                color: white;
                font-weight: 400;
                font-family: Roboto;
            }

            .solutions {
                margin: 0px;
            }

            .card-img-top1 {
                width: 100px;
                margin: auto;
            }

            .larger-screen {
                display: none;
            }

            .custom-btn {
                width: 130px;
                height: 40px;
                background: #14bf98;
                border: none;
                box-shadow: none;
                outline: none;
                color: white;
                font-weight: bold;
                border-radius: 4px;
            }

            h5.h2-right-ra-200{
                font-size: 13px;
                margin-top: -11px;
                font-weight: 500;
            }
            .ul-left li img {
                float: left !important;
                margin: 1px 1px 1px 7px;
                margin: auto;
            }
            .ra-500{
                font-size: initial;
            }
            .h5-ra-500{
                font-size: 14px;
                font-weight: 500;
                margin-top: -19px;
            }


            .ul-solutions li {
                list-style: none;
                color: #bbbbbb;
                font-weight: 100;

            }
            .telep {
                font-size: 15px;
                font-family: roboto;
                color: white !important;
                text-align: left !important;
            }
            #products-right li {
                list-style: none;
                margin: 1px -41px;
                font-weight: 400;
                font-family: Roboto;
            }
        }

        @media only screen and (min-width: 600px) {
            .ra-500{
                font-size: 23px;
            }
            .h5-ra-500{
                font-size: 14px;
                margin-top: -19px;
                font-weight: 400 !important;
            }

            h5.h2-right-ra-200{
                font-size: 13px;
                margin-top: -11px;
                font-weight: 500;
            }
            .small-screen{
                display: none;
            }
            video {
                min-width: 100%;
                min-height: 100vh;
                z-index: 1;
            }

            .overlay {
                width: 100%;
                height: 100vh;
                position: absolute;
                top: 0;
                left: 0;
                background-image: linear-gradient(45deg, rgba(0, 0, 0, .3) 50%, rgba(0, 0, 0, .7) 50%);
                background-size: 3px 3px;
                z-index: 2;
            }

            h1 {
                text-align: center;
                color: #fff;
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;
                z-index: 3;
                max-width: 400px;
                width: 100%;
                height: 50px;
            }

            /*     h2 {

                     background: -webkit-linear-gradient(#084681, #5effe7, #0f3e6c);
                     -webkit-background-clip: text;
                     -webkit-text-fill-color: transparent;
                 }*/
            .seperator {
                background: #787878;
                width: 0.3px;
            }

            #products li {
                list-style: none;
                line-height: normal;
            }


            #social {
                height: 50px;
            }

            .ul-left {

            }

            .ul-left li {
                margin: 1px 0px 4px 5px;
                list-style: none;
                color: white;
                font-family: Roboto;
                font-weight: 400;
                text-align: right;
            }

            #products-right li {
                list-style: none;
                margin: 1px -41px;
                font-weight: 400;
                font-family: Roboto;
            }

            .ul-left li img {
                float: right;
                margin: 1px 1px 1px 7px;
            }

            hr {
                border: 1px solid #497bc9;
                height: 166px;
            }

            .solutions {
                margin: 1px 1px 1px -106%;
            }
            .telepresence{
                margin: 1px 1px 1px -271%;
            }

            .products-menu {
                margin: 1px 1px 1px -189%;
            }


            .ul-solutions li {
                list-style: none;
                text-align: center;
            }

            .telep {
                font-size: 15px;
                font-family: roboto;
                color: white !important;
            }

            .ul-solutions li {
                text-align: center !important;
                line-height: 16px;
                margin: 1px 1px 4px -1px !important;
                font-weight: 100;
                color: #d9d9d9;
                font-family: Roboto;
            }

            .ul-solutions {
                padding: 13px 0px 0px 0px;
            }

            .solutions .row .col-sm-3 h6 {
                color: #ffffff;
                font-size: 13px;
                font-family: roboto;
                text-align: center;
                font-weight: 500;
                margin-bottom: 27px;
                margin-top: -20px;
                padding: 6px;
            }

            .solutions-topText {
                background: #082C64;
                margin: -19px;
                margin-top: -31px;
            }

            .li-space-lg .white {
                text-decoration: none;
            }

            .address li .white {
                display: flow-root;
            }

            /* 11 */
            .h2-right-ra-200 {
                text-align: right;
                font-size: 23px;
            }

            .custom-btn {
                width: 130px;
                height: 40px;
                background: #14bf98;
                border: none;
                box-shadow: none;
                outline: none;
                color: white;
                font-weight: bold;
                border-radius: 4px;
            }

            ::-webkit-scrollbar {
                width: 10px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px white;
                border-radius: 10px;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: linear-gradient(45deg, #09499f, #739cf1, #1f559a);
                border-radius: 10px;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: linear-gradient(45deg, #09499f, #618dee, #00419a);
            }

        }


    </style>
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


<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">

    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.blade.php">Aria</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="{{route('home')}}"><img src="{{asset('assets/images/logo_RoboAds.png')}}"
                                                                     alt="alternative"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">

            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button"
                   aria-haspopup="true" aria-expanded="false">PRODUCTS</a>
                <div class="dropdown-menu solutions" aria-labelledby="navbarDropdown"
                     style="width: max-content;background: #2964bf;padding: 19px;">
                    <div class="row small-screen">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card bg-transparent border-0" style="width: 18rem;">
                                    <img class="card-img-top1" src="{{asset('assets/images/files/robot1.png')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h2 class="ra-500 text-white">RA-200</h2>
                                        <h5 style="" class="h5-ra-500 text-white">
                                            Robotic Digital signage</h5>
                                        <ul id="products-left" class="ul-left">
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}"> Four signage
                                                Displays
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}"> 4K video
                                                sharing
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}"> Advanced 5G
                                                interfaces
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}"> Fast
                                                Charging and long lasting
                                                batteries
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card bg-transparent border-0" style="width: 18rem;">
                                    <a href="{{route('products')}}" class="text-center">
                                    <img class="card-img-top1" src="{{asset('assets/images/files/robot2.png')}}" alt="Card image cap">
                                    </a>
                                    <div class="card-body bg-transparent">
                                        <h2 class="text-white ra-500">RA-500</h2>
                                        <h5 class="text-white h5-ra-500" style="font-size: 14px">Robotic Digital
                                            signage</h5>
                                        <ul class="text-white " id="products-right">
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}" alt="">
                                                Autonomous with 3D Lidars
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}" alt=""> Four
                                                4K Signage Displays
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}" alt=""> Auto
                                                Docking Stations
                                            </li>
                                            <li style="font-size: 12px"><img
                                                    src="{{asset('assets/images/files/bullets.png')}}" alt=""> Fast
                                                Charging and long lasting batteries
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row larger-screen">
                        <div class="col-sm-5">
                            <div class="card mb-3 bg-transparent border-0" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h2 class="h2-right-ra-200 text-white">RA-200</h2>
                                            <h5 style="margin-top: -15px" class="h5-ra-500 text-right text-white">
                                                Robotic Digital signage</h5>
                                            <ul id="products-left" class="ul-left">
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}"> Four signage
                                                    Displays
                                                </li>
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}"> 4K video
                                                    sharing
                                                </li>
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}"> Advanced 5G
                                                    interfaces
                                                </li>
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}"> Fast
                                                    Charging and long lasting
                                                    batteries
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img height="200" src="{{asset('assets/images/files/robot1.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-sm-6">
                            <div class="card mb-3 bg-transparent border-0" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <a href="{{route('products')}}">
                                            <img style="    width: inherit;height:181px;margin: 7px 53px 3px 1px;"
                                                 src="{{asset('assets/images/files/robot2.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h2 class="text-white ra-500">RA-500</h2>
                                            <h5 class="text-white" style="font-size: 14px;margin-top: -14px;font-weight: 500">Robotic Digital
                                                signage</h5>
                                            <ul class="text-white " id="products-right">
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}" alt="">
                                                    Autonomous with 3D Lidars
                                                </li>
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}" alt=""> Three
                                                    4K Signage Displays
                                                </li>
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}" alt=""> Auto
                                                    Docking Stations
                                                </li>
                                                <li style="font-size: 12px"><img
                                                        src="{{asset('assets/images/files/bullets.png')}}" alt=""> Fast
                                                    Charging and long lasting batteries
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- end of dropdown menu -->
            {{--    <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">SERVICES</a>
                </li>--}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll"  id="navbarDropdownsolutions" role="button"
                   aria-haspopup="true" aria-expanded="false">SOLUTIONS</a>
                <div class="dropdown-menu telepresence" aria-labelledby="navbarDropdownsolutions"
                     style="width: max-content;background: #2964bf;padding: 19px;">
                    <div class="row text-white" style="font-size: 12px">
                        <div class="col-sm-3">
                            <div class="solutions-topText">
                                <h2 class="text-white text-center telep">ADVERTISING</h2>
                            </div>
                            <ul class="ul-solutions">
                                <li style="font-size: 14px;font-weight: 500;color: white">Moving signage screens</li>
                                <li>Market your products by displaying image,<br> video and motion graphic advertising
                                    <br> content on RoboAds Advertising robot
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <div class="solutions-topText">
                                <h2 class="text-white text-center telep">TELEPRESENCE</h2>
                            </div>

                            <ul class="ul-solutions">
                                <li style="font-size: 14px;font-weight: 500;color: white">Connect People remotely</li>
                                <li>Talk and interact with your customers <br> from anywhere around the world by virtual
                                    <br> presence on RoboAds Telepresence Robot.
                                </li>
                            </ul>
                        </div>


                        <div class="col-sm-3">
                            <div class="solutions-topText">
                                <h2 class="text-white text-center telep">ARTIFICIAL INTELLIGENCE</h2>
                            </div>
                            <ul class="ul-solutions">
                                <li style="font-size: 14px;font-weight: 500;color: white">Interactions with Customers
                                </li>
                                <li>Improve demand forecasting and unveil <br> new business opportunities. <br> As a
                                    result, customers connect with the
                                    <br> right products, in the right place, <br> at the right time.
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-3">
                            <div class="solutions-topText">
                                <h2 class="text-whit text-center telep">CUSTOMIZATIONS</h2>
                            </div>
                            <ul class="ul-solutions">
                                <li>
                                <li style="font-size: 14px;font-weight: 500;color: white">Developing unique Solutions
                                </li>
                                <li>Tailored solutions to fit your <br> brand's needs Whether its Augmented reality,
                                    <br> API's to hardware and IOT upgrades.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" id="gallary" href="{{route('gallary')}}">GALLERY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" id="about" href="{{route('about')}}">ABOUT US</a>
            </li>


            <li class="nav-item">
                <a class="nav-link page-scroll" id="contact" href="{{route('contact')}}">CONTACT US</a>
            </li>
        </ul>
        <span class="nav-item">
            <i class="fa fa-envelope text-white"></i><a style="margin:5px;color: white;text-underline-position: under;
" href="mailto:info@roboads.com">info@roboads.com</a>
            </span>

        <span class="nav-item">
                <a href="{{route('contact')}}"><button class="custom-btn btn-11 ml-4">Rent Robot<div class="dot"></div></button></a>
        </span>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navbar -->

@yield('content')
<!-- Footer -->
<!-- Footer -->
<div class="footer" style="background: linear-gradient(45deg, #001a3e, #083089,#031f46)">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-container about">
                    <h4>Few Words About RoboAds</h4>
                    <p class="white">RoboAds designs and markets mobile robots and mobile manipulators. Our robots are
                        designed for advertising and marketing purposes, promising a memorable
                        experience when promoting products and services.</p>
                </div> <!-- end of text-container -->
                <div class="row d-flex">
                    <a href="https://www.instagram.com/robo.ads/?hl=en"> <img id="social"
                                                                              src="{{asset('assets/images/files/social_icons/INSTAGRAM.png')}}"
                                                                              alt=""></a>
                    <a href="https://www.linkedin.com/company/roboads/"><img id="social"
                                                                             src="{{asset('assets/images/files/social_icons/LINKEDIN.png')}}"
                                                                             alt=""></a>
                    <a href="https://www.pinterest.com/roboads/"> <img id="social"
                                                                       src="{{asset('assets/images/files/social_icons/PINTREST.png')}}"
                                                                       alt=""></a>
                    <a href="https://www.youtube.com/channel/UCegQ-wUuI4EfWUQkLlewoAQ"><img id="social"
                                                                                            src="{{asset('assets/images/files/social_icons/YOUTUBE.png')}}"
                                                                                            alt=""></a>
                    <a href="https://twitter.com/roboads"><img id="social"
                                                               src="{{asset('assets/images/files/social_icons/TWITTER.png')}}"
                                                               alt=""></a>
                    <a href=""> <img id="social" src="{{asset('assets/images/files/social_icons/WASTAPP.png')}}" alt=""></a>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-2">
                <div class="text-container">
                    <h4>Discover</h4>
                    <ul class="list-unstyled li-space-lg white">
                        <li>
                            <a class="white" href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <a class="white" href="{{route('products')}}">Products</a>
                        </li>
                        <li>
                            <a class="white text-warning" href="terms-conditions.blade.php">Terms & Conditions</a>
                        </li>
                        <li>
                            <a class="white text-warning" href="privacy-policy.blade.php">Privacy Policy</a>
                        </li>
                    </ul>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-md-2">
                <div class="text-container">
                    <h4>Services</h4>
                    <ul class="list-unstyled li-space-lg">
                        <li>
                            <a class="white" href="{{route('about')}}">Who We are</a>
                        </li>
                        <li>
                            <a class="white" href="{{route('gallary')}}">Gallery</a>
                        </li>

                        <li class="media">
                            <a class="white" href="{{route('contact')}}">Contact Us</a>
                        </li>

                    </ul>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-md-2">
                <div class="text-container">
                    <h4>Address</h4>
                    <ul class="list-unstyled li-space-lg address">
                        <li class="mb-3">
                            <span class="white" href="#your-link"><i class="fa fa-map-marker"></i> 3000 El Camino Real,Palo Alto, CA94306,United States.</span>
                            <br>
                            <span class="white" href="#your-link"><i class="fa fa-map-marker"></i> 1312 Metropolis Tower, Business Bay,
Dubai, UAE.</span>

                        </li>
                        <li>
                            <b class="mt-4 text-white"><i class="fa fa-mobile"></i> Contact</b><br>
                            <b class="p-heading p-large text-nowrap text-white" style="font-size: 14px" id=""><img
                                    style="height: 15px;width: 24px" src="{{asset('assets/images/files/uae-flag.png')}}"
                                    alt=""> (+971) 563 426 662</b><br>
                            <b class="p-heading p-large text-nowrap  text-white" id="" style="font-size: 14px"><img
                                    style="height: 15px;width: 26px"
                                    src="{{asset('assets/images/files/usa-flage.png')}}" alt=""> (+18) 555 828 005</b>
                        </li>

                    </ul>
                </div> <!-- end of text-container -->
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
                <p class="p-small">Copyright © 2021 <a href="https://inovatik.com">ROBOADS All Right Reserved</a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->


<!-- Scripts -->

<script src="{{asset('assets/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{asset('assets/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{asset('assets/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
<script src="{{asset('assets/js/morphext.min.js')}}"></script> <!-- Morphtext rotating text in the header -->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
<script src="{{asset('assets/js/validator.min.js')}}"></script>
<!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="{{asset('assets/js/scripts.js')}}"></script> <!-- Custom scripts -->
<script src="{{asset('assets/js/reveal.js')}}"></script>
<script>
    /*      const sm=ScrollReveal({
              origin:'bottom',
              distance:'80px',
              duration:'1000',
              reset:true
          })
          sm.reveal('.tagline',{delay:500})
          sm.reveal('#about_gulfwale',{delay:500})
          sm.reveal('.description',{delay:200})
          sm.reveal('#listing',{delay:300})


  */

    const sr = ScrollReveal({
        origin: 'right',
        distance: '80px',
        duration: '1000',
        reset: true
    })
    sr.reveal('#title_gulf', {delay: 500})

    const dm = ScrollReveal({
        origin: 'left',
        distance: '80px',
        duration: '1300',
        reset: true,

    })
    dm.reveal('#coming_soon', {delay: 200})


    /*     const icons=ScrollReveal({
             origin:'left',
             distance:'80px',
             duration:'1300',
             reset:true,

         })
         icons.reveal('.fa-twitter',{delay:200})
         icons.reveal('.fa-facebook',{delay:300})
         icons.reveal('.fa-linkedin',{delay:400})
         icons.reveal('.fa-envelope',{delay:600})
         icons.reveal('.title',{delay:200})


 */
    var canvas = document.querySelector("#scene"),
        ctx = canvas.getContext("2d"),
        particles = [],
        amount = 0,
        mouse = {x: 0, y: 0},
        radius = 1;

    var colors = ["#468966", "#FFF0A5", "#FFB03B", "#B64926", "#8E2800"];

    var copy = document.querySelector("#copy");

    var ww = canvas.width = window.innerWidth;
    var wh = canvas.height = window.innerHeight;

    function Particle(x, y) {
        this.x = Math.random() * ww;
        this.y = Math.random() * wh;
        this.dest = {
            x: x,
            y: y
        };
        this.r = Math.random() * 5 + 2;
        this.vx = (Math.random() - 0.5) * 20;
        this.vy = (Math.random() - 0.5) * 20;
        this.accX = 0;
        this.accY = 0;
        this.friction = Math.random() * 0.05 + 0.94;

        this.color = colors[Math.floor(Math.random() * 6)];
    }

    Particle.prototype.render = function () {


        this.accX = (this.dest.x - this.x) / 1000;
        this.accY = (this.dest.y - this.y) / 1000;
        this.vx += this.accX;
        this.vy += this.accY;
        this.vx *= this.friction;
        this.vy *= this.friction;

        this.x += this.vx;
        this.y += this.vy;

        ctx.fillStyle = this.color;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.r, Math.PI * 2, false);
        ctx.fill();

        var a = this.x - mouse.x;
        var b = this.y - mouse.y;

        var distance = Math.sqrt(a * a + b * b);
        if (distance < (radius * 70)) {
            this.accX = (this.x - mouse.x) / 100;
            this.accY = (this.y - mouse.y) / 100;
            this.vx += this.accX;
            this.vy += this.accY;
        }

    }

    function onMouseMove(e) {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    }

    function onTouchMove(e) {
        if (e.touches.length > 0) {
            mouse.x = e.touches[0].clientX;
            mouse.y = e.touches[0].clientY;
        }
    }

    function onTouchEnd(e) {
        mouse.x = -9999;
        mouse.y = -9999;
    }

    function initScene() {
        ww = canvas.width = window.innerWidth;
        wh = canvas.height = window.innerHeight;
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.font = "bold " + (ww / 10) + "px sans-serif";
        ctx.textAlign = "center";
        ctx.fillText(copy.value, ww / 2, wh / 2);

        var data = ctx.getImageData(0, 0, ww, wh).data;
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.globalCompositeOperation = "screen";

        particles = [];
        for (var i = 0; i < ww; i += Math.round(ww / 150)) {
            for (var j = 0; j < wh; j += Math.round(ww / 150)) {
                if (data[((i + j * ww) * 4) + 3] > 150) {
                    particles.push(new Particle(i, j));
                }
            }
        }
        amount = particles.length;

    }

    function onMouseClick() {
        radius++;
        if (radius === 5) {
            radius = 0;
        }
    }

    function render(a) {
        requestAnimationFrame(render);
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        for (var i = 0; i < amount; i++) {
            particles[i].render();
        }
    };

    copy.addEventListener("keyup", initScene);
    window.addEventListener("resize", initScene);
    window.addEventListener("mousemove", onMouseMove);
    window.addEventListener("touchmove", onTouchMove);
    window.addEventListener("click", onMouseClick);
    window.addEventListener("touchend", onTouchEnd);
    initScene();
    requestAnimationFrame(render);


</script>
</body>
</html>
