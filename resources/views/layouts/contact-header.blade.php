<!-- Header -->
<style>

    @media only screen and (min-width: 600px) {
        .overlay{
            background: linear-gradient(0deg, transparent, transparent,transparent,transparent,black)
        }
        #coming_soon{
            text-shadow: 3px 3px 6px black;
        }
    }

    @media only screen and (max-width: 600px) {
        .header{
            height: 37%;
        }
        .bg-video-wrap img{
            width: inherit;
            margin-top: 16%;
        }
        #coming_soon{
            font-size: large;
            margin: 59px 2px 2px 1px;
        }
        .p-heading{
            margin: 40px 3px 2px;
            font-size: 12px;
            text-shadow: 2px 2px 4px black;
        }
    }

</style>
<header id="header" class="header">
    <div class="bg-video-wrap">
        <img style="width: inherit" src="{{asset('assets/images/files/contact-min.jpg')}}" alt="">
        <div class="overlay">
            <div class="header-content">

                <div class="container mb-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="email-image" src="{{asset('assets/images/overlay-email.png')}}" alt="">
                            {{-- <canvas id="scene"></canvas>
                             <input id="copy" type="text" value="RoboAds ♥" />--}}
                            <div class="text-container">
                                <h1 id="coming_soon" class="text-nowrap">CONTACT US</h1>

                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->

                </div> <!-- end of container -->

            </div> <!-- end of header-content -->

        </div>

    </div>

</header> <!-- end of header -->
<!-- end of header -->

