@extends('index')
@section('content')
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

        .portfolio_description {
            position: absolute;
            width: 67%;
            top: 0;
            float: right;
            background: red;
            height: 100%;
            right: 15px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .portfolio-block {
            position: relative;
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
        }

        .ul-left li img {
            float: right;
            margin: 1px 1px 1px 7px;
        }

        #products-right li {
            list-style: none;
            margin: 1px -41px;
        }

        hr {
            border: 1px solid #497bc9;
            height: 166px;
        }

        #robot-image {
            width: 145%;
            margin-top: -120px;
        }

        @media only screen and (max-width: 600px) {
            .ul-left li {
                margin: 1px 0px 4px 5px;
                list-style: none;
                color: white;
                font-family: Roboto;
            }

            #robot-image {
                width: -webkit-fill-available;
                margin-top: -76px;
            }

        }



        .typewriter {
            font-family: sans-serif;
            color: #fff;
            padding-left: 30px;
            display: block;
        }
        .typewriter-text {
            padding-right: 10px;
            color: #04199b94;
            border-right: solid #04199b94 7px;
            text-transform: uppercase;
            animation: cursor 1s ease-in-out infinite;
            font-weight: bold;
        }
        @keyframes cursor {
            from { border-color: #04199b94; }
            to { border-color: transparent; }
        }

        @media (max-width: 767.98px) {
            .typewriter { font-size: 14px; }
        }
        @media (min-width: 768px) {
            .typewriter { font-size: 17px; }
        }

        /*general styles*/


        /*slideshow styles*/

        .slideshow {
            width: 625px;
            margin: 0 auto;
            overflow: hidden;
            border: none;
        }

        .slideshow-container {
            width: 2500px;
            font-size: 0;
            transition: 1s ease;
        }

        .slideshow-container:hover {
            animation-play-state: paused;
        }

        .imaging{
            width: 625px;
            height: auto;
            display: inline-block;
            font-size: 16px;
            text-align: center;
            margin-top: -36px;
        }

        .slide {
            animation: slide 24s ease infinite;
        }

        @keyframes slide {
            0% {
                transform: translateX(0%);
            }

            12.5% {
                transform: translateX(0%);
            }

            25% {
                transform: translateX(-25%);
            }

            37.5% {
                transform: translateX(-25%);
            }

            50% {
                transform: translateX(-50%);
            }

            62.5% {
                transform: translateX(-50%);
            }

            75% {
                transform: translateX(-75%);
            }

            87.5% {
                transform: translateX(-75%);
            }

            99% {
                transform: translateX(-75%);
            }

            100% {
                transform: translateX(0);
            }
        }
    .company_name{
        color: #06b77c;
        border: none;
        font-size: 14px;
        font-family: roboto;
    }
        figure {
            margin-bottom: 60px;
        }

        /* img tags */
        .imagesContainer {

            height: 280px;
            overflow: hidden;
        }

        .imagesContainer img {
            width: 500px;
            position: absolute;
            top: 0;
            left: 0;
        }

        /* images using CSS */
        .imageDiv {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-size: cover;
        }

        .image1 { background-image: url('{{asset('assets/images/files/slider-robot2.jpg.png')}}'); }

        .image2 { background-image: url('{{asset('assets/images/files/slider-robot2.png')}}'); }


        /* animation styles */
        @keyframes fadeIn {
            0% { opacity: 0; }
            20% { opacity: 0; }
            60% { opacity: 1; }
            100% { opacity: 1; }
        }

        .fadeInClass {
            animation-name: fadeIn;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            animation-timing-function: linear;
        }


        @keyframes vertical {
            0% {
                opacity: 0;
            }
            4% {
                opacity: 0;
                -webkit-transform: rotateX(-180deg);
                transform: rotateX(-180deg);
            }
            10% {
                opacity: 1;
                -webkit-transform: translateY(0px);
                transform: translateY(0px);
            }
            38% {
                opacity: 1;
                -webkit-transform: translateY(0px);
                transform: translateY(0px);
            }
            45% {
                opacity: 0;
                -webkit-transform: translateY(0px);
                transform: translateY(0px);
            }
            80% {
                opacity: 0;
            }
            100% {
                opacity: 0;
            }
        }
        .verticalflip {
            text-align: center;
            margin: -15px 206px 40px -15px;font-weight: bold;
        }
        .verticalflip span {
            animation: vertical 7.5s linear infinite 0s;
            -ms-animation: vertical 7.5s linear infinite 0s;
            -webkit-animation: vertical 7.5s linear infinite 0s;
            color: #2482ff;
            position: absolute;
            opacity: 0;
            padding: 3px;
            border-radius: 10px;
        }

        .verticalflip span:nth-child(2) {
            -ms-animation-delay: 2.5s;
            -webkit-animation-delay: 2.5s;
            animation-delay: 2.5s;
        }
    </style>
    @include('layouts.header')
    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="image-container" style="margin-top: 32px;">
                        <iframe width="100%" height="260" src="https://www.youtube.com/embed/KBKFXYEJCB4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="text-container">
                        <div class="section-title"></div>
                        <h2 style="color: black;-webkit-text-stroke: thin;letter-spacing: 2px;font-family: 'roboto';">
                            ADVERTISE YOUR <br>
                            PRODUCTS ON ROBOADS </h2>
                        <p><b>Robo</b><b>Ads</b> advertising robots have been designed to market your products
                            and attract greater customer attention than traditional billboards and posters.
                            The robots drive fully autonomously and offer higher conversion rates
                            by engaging with audience at high traffic areas like tradeshows, malls, airports,
                            hotels and events. you can rent roboads robots for a minimum period of one day
                            and benefit from a disruptive new way of marketing, allowing your business
                            to showcase your products and services in a way that’s never been seen before. </p>
                        {{--   <p class="testimonial-text">"Our mission here at Aira is to get you through those tough moments relying on our team's expertise in starting and growing companies."</p>--}}
                        {{--<div class="testimonial-author">Louise Donovan - CEO</div>--}}
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->

    <!-- Call Me -->
    <div id="howitsworks" class="m-1">
        <div class="container">
            <h2 style="color: #051788" class="text-center">HOW TO RENT ROBOT</h2>
            <p class='typewriter text-dark text-center'>
            <div class="verticalflip">
                <span>Tradeshows, Summits, Events</span>
                <span class="ml-4">Airports, Malls, Hotels.</span>
            </div>
            </p>
            <img style="width: inherit" src="{{asset('assets/images/files/howitworks.png')}}" alt="">
        </div>

    </div> <!-- end of form-1 -->
    <!-- end of call me -->


    {{--
    <!-- About -->
    <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 portfolio-block">
                    <img style="width: inherit" src="{{asset('assets/images/files/robot3.png')}}"
                         class="img-responsive portfolio_frontpage" alt="">
                    <div class="portfolio_description p-5 text-white">
                        <h2 class="text-white">Roboads Introduces
                            The World’s First Mobile Advertising Robot
                            For Displaying NFT ART
                            And Live Cryptocurrency Pricing</h2>
                        <br>
                        <p style="color: lawngreen">May 27, 2021/By Faysal roboads</p>
                        <hr style="  border: 1px solid #7cff51ed;">

                        <h2 @class('text-white')>How To Use Moveiit To Develop
                            A Robotic Manipulation Application</h2>
                        <br>
                        <p>May 23, 2021/By Faysal roboads</p>
                        <hr style="  border: 1px solid rgba(136,136,136,0.93);">
                        <b>Fast-Growing Industries Thanks
                            To Robotic Applications</b>

                        <br>
                        <p class="mt-2">May 23, 2021/By Faysal roboads</p>
                        <hr style="  border: 1px solid rgba(162,162,162,0.93);">
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div> <!-- end of counter -->
    <!-- end of about -->
    --}}

    <div id="callMe" class="form-1 mb-4" style="margin-top: -0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="">

                        <h2 class="white text-nowrap">Why advertising robots ?</h2>
                        <p class="white">Companies and brands are always looking for ways to interact and engage with
                            their audiences. Consumer behaviour and demands have been changing at a fast pace, and the
                            competition for innovation has been growing. It is crucial to offer the customers an
                            out-of-this-world experience. <br>
                            <br>
                            RoboAds attracts greater customer attention than traditional marketing billboards, standees,
                            and posters. The advertising robots can be programmed to roam around an area autonomously
                            and market a product or service. They offer a higher conversion rate by engaging customers
                            at places with increased traffic and allowing more consumer involvement by connecting to
                            remote virtual calls with customer service agents. Anyone can now rent a robot and enjoy
                            unprecedented customer engagement. </p>
                        {{--                        <ul class="list-unstyled li-space-lg white">--}}
                        {{--                            <li class="media">--}}
                        {{--                                <i class="fas fa-square"></i>--}}
                        {{--                                <div class="media-body">It's very easy just fill in the form so we can call</div>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="media">--}}
                        {{--                                <i class="fas fa-square"></i>--}}
                        {{--                                <div class="media-body">During the call we'll require some info about the company</div>--}}
                        {{--                            </li>--}}
                        {{--                            <li class="media">--}}
                        {{--                                <i class="fas fa-square"></i>--}}
                        {{--                                <div class="media-body">Don't hesitate to email us for any questions or inquiries</div>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <figure>
                        <div class="imagesContainer">
                            <div class="imageDiv image1"></div>
                            <div class="imageDiv image2 fadeInClass"></div>
                        </div>
                    </figure>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->


    <!-- Testimonials -->
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Read Our Customer Testimonials</h2>
                    <p class="p-heading">Our clients are our partners and we can not imagine a better future for our company without helping them reach their objectives</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('assets/images/testimonial-1.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">The most disruptive piece of equipment capable of delivering live and interactive digital content in the most engaging way. We use it and will continue doing so.</div>
                                            <div class="testimonial-author text-nowrap">Daniel Khairallah</div>
                                            <h6 class="text-dark small">Managing Partner</h6>
                                            <span class="company_name ">Activate 360</span>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('assets/images/testimonial-2.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I purchased the Growth Accelerator service pack a few years ago and I renewed the contract each year. </div>
                                            <div class="testimonial-author">Marsha Singer - Marketer</div>
                                            <span class="company_name ">Activate 360</span>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('assets/images/testimonial-3.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">RoboAds's CEO personally attends client meetings and gives his feedback on business growth strategies.</div>
                                            <div class="testimonial-author">Roy Smith</div>
                                            <p class="text-dark small">Managing Partner</p>
                                            <span class="company_name ">Activate 360</span>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('assets/images/testimonial-4.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">At the beginning I thought the prices are a little high for what they offer but they over deliver each and every time.</div>
                                            <div class="testimonial-author">Ronald Spice</div>
                                            <span class="company_name ">Activate 360</span>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('assets/images/testimonial-5.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I recommend RoboAds to every business owner or growth leader that wants to take his company to the next level.</div>
                                            <div class="testimonial-author">Lindsay Rune - Manager</div>
                                            <span class="company_name ">Activate 360</span>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{asset('assets/images/testimonial-6.jpg')}}" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">My goals for using RoboAds's services seemed high when I first set them but they've met them with no problems.</div>
                                            <div class="testimonial-author">Ann Black - Consultant</div>
                                            <span class="company_name ">Activate 360</span>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of sliedr-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of testimonials -->


    <div class="container">


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

        });

        $('.navbar-nav li .nav-link.active').removeClass('active');
        $('.navbar-nav li #home').addClass('active');
    </script>
@endsection
