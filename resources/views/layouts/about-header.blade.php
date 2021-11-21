<!-- Header -->
<style>

    .overlay{
        width: 100%;
        height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
        background-size: 3px 3px;
        z-index: 2;

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
            margin: 4px 1px 1px -45%;
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
        <img src="{{asset('assets/images/files/aboutus.png')}}" alt="">
        <div class="overlay">
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            {{-- <canvas id="scene"></canvas>
                             <input id="copy" type="text" value="RoboAds ♥" />--}}
                            <div class="text-container">
                                <h1 id="coming_soon" class="text-nowrap" style="color: #236df2 !important;">ABOUT US</h1>
                            </div>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->

                </div> <!-- end of container -->

                </p>

            </div> <!-- end of header-content -->

        </div>

    </div>

</header> <!-- end of header -->
<!-- end of header -->

