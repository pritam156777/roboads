@extends('index')

@section('content')
    @include('layouts.products-header')

    <style>

        @media (min-width: 768px)
        {
            .left-text-1{
                padding: 14%;
            }
            .text-right-1{
                padding: 7%;
            }
            .text-right-2{
                padding: 7%;
            }
            .text-left-2{
                padding: 14%;
            }
            .overlapped-image{
                position: absolute;
                z-index: -1;
                height: 123px;
                margin: -52px 0px 1px -34px;opacity: .8;
            }
        }
        @media (max-width: 768px)
        {
            .overlapped-image{
                position: absolute;
                z-index: -1;
                margin: -20px 0px 1px -18px;opacity: .8;
                height: 72px;
            }
        }

            .subheading{
            font-family: fantasy;

        }

        #product-para{
            font-style: italic;
            font-size: 14px;
            color: black;
        }

        canvas {
            background-image: radial-gradient(#666, #333);
        }

        #instructions {
            position: absolute;
            color: #fff;
            bottom: 0;
            padding-bottom: 6px;
            font-family: sans-serif;
            width: 100%;
            text-align: center;
            pointer-events: none;
        }
        .ourProducts {
            font-family: fantasy;
            background: -webkit-linear-gradient(rgba(3, 59, 145, 0.58), rgba(180, 49, 246, 0.65));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            z-index: 1;
        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <link rel="stylesheet" href="{{asset('products/css/style.css')}}">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('products/css/responsive.css')}}">
    <section class="feature-list section">
        <div class="container-fluid">
          <div class="container">

          </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="col position-absolute left-div"></div>
                    <img class="" style="width: inherit" src="{{asset('assets/images/files/image-left-1.png')}}"
                         alt="">
                </div>
                <div class="col-md-4 text-right-1" >
                    <div class="content mt-100">
                            <img class="overlapped-image" src="{{asset('assets/images/files/overlapped.png')}}" alt="">
                            <h4 class="subheading">The Future has arrived</h4>
                            <p id="product-para">While we can't predict the future, we can inspire it. RA 500 has been explicitly designed to
                                enhance the indoor/outdoor advertising experience. It can be placed in any busy public place
                                like airports, malls, stations, expos, or other trade shows to grab the attention of
                                visitors. These high -resolution screens are the most interactive advertising technology
                                that eliminates the need for any physical interaction while engaging with the audience by
                                grabbing their attention and even answering their queries</p>
                            <a href="" class="btn btn-main btn-main-sm">Check More</a>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 left-text-1">
                    <div class="content mt-100">
                        <img class="overlapped-image" src="{{asset('assets/images/files/overlapped.png')}}" alt="">
                        <h4 class="subheading">Effective Marketing</h4>
                        <p id="product-para">RA - 500 attracts greater customer attention than traditional marketing billboards, standees,
                            and posters. They offer a higher conversion rate by engaging customers at places with
                            increased traffic and allowing more consumer involvement by connecting to remote virtual
                            calls with customer service agents</p>
                        <a href="" class="btn btn-main btn-main-sm">Check Features</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" style="width: inherit" src="{{asset('assets/images/files/image-right-1.png')}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <div class="col position-absolute left-div"></div>
                    <img class="" style="width: inherit" src="{{asset('assets/images/files/image-left-2.png')}}"
                         alt="">
                </div>
                <div class="col-md-4 text-right-2">
                    <div class="content mt-100">
                        <img class="overlapped-image" src="{{asset('assets/images/files/overlapped.png')}}" alt="">
                        <h4 class="subheading">New breed of service robots</h4>
                        <p id="product-para">RA 500 offers a one-of-its-kind customer experience with four - 55inch
                            digital signage screens in 4K resolution. The robot is equipped with the ability to navigate
                            on its own. It is programmed to roam around an area autonomously, engaging people and
                            marketing a product and extracting their contact information, or it can be tele-operated as
                            well. A camera attached to it provides a real-time visual queue for the operator. It is
                            highly interactive and continues to learn and get better with its advanced artificial
                            intelligence algorithm.</p>
                        <a href="" class="btn btn-main btn-main-sm">Check More</a>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 text-left-2">
                    <div class="content mt-100">
                        <img class="overlapped-image" src="{{asset('assets/images/files/overlapped.png')}}" alt="">
                        <h4 class="subheading">Engagement is a Key Element</h4>
                        <p id="product-para">RA 500 is an excellent means to get increased engagement with the interest
                            levels of the prospects at their peak. Anyone can now rent a robot and enjoy unprecedented
                            customer engagement</p>
                        <a href="" class="btn btn-main btn-main-sm">Check More</a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="col position-absolute right-div"></div>
                    <img class="img-responsive" style="width: inherit"
                         src="{{asset('assets/images/files/mcdonalds.jpg')}}" alt="">
                </div>
            </div>
            <div class="row">

<div class="container">
    <h3 style="font-family: fantasy">Specifications</h3>
    <img style="width: inherit;border-radius: 12px" src="{{asset('assets/images/files/artboard.png')}}" alt="">
</div>
            </div>
        </div>

    </section>


@endsection
