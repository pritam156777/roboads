@extends('index')
@section('content')
    <style>
        .fixed-top{
            padding: 0.375rem 1.5rem 0.375rem 2rem;
            box-shadow: 0 0.0625rem 0.375rem 0 rgba(0, 0, 0, 0.1);
            background-color: #0349B4 !important;
            opacity: .85;
        }
        video{
            min-height:0vh !important;
            box-shadow: 1px 1px 19px -1px black;
            border-radius: 3px;
        }
        .lightbox-basic{
            background: none;
        }

        @media (max-width: 600px) {


        }
    </style>

    <div id="projects" class="filter">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                 {{--   <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
                        <a class="button" data-filter=".youtube"><span>YOUTUBE</span></a>
                        <a class="button" data-filter=".blogs"><span>BLOGS</span></a>
                    </div> <!-- end of button group -->--}}
                    <div class="grid">
                        <div class="element-item youtube">
                            <a class="popup-with-move-anim" href="#project-1"><div class="element-item-overlay"><span>AIBC</span></div><img src="{{asset('assets/images/p1.JPG')}}" alt="alternative"></a>
                        </div>
                        <div class="element-item youtube">
                            <a class="popup-with-move-anim" href="#project-2"><div class="element-item-overlay"><span>TELEPRESENCE</span></div><img src="{{asset('assets/images/p2.JPG')}}" alt="alternative"></a>
                        </div>
                        <div class="element-item youtube blogs">
                            <a class="popup-with-move-anim" href="#project-3"><div class="element-item-overlay"><span>GITEX</span></div><img src="{{asset('assets/images/p3.JPG')}}" alt="alternative"></a>
                        </div>
                        <div class="element-item blogs">
                            <a class="popup-with-move-anim" href="#project-4"><div class="element-item-overlay"><span>ARTIFICIAL INTELLIGENCE</span></div><img src="{{asset('assets/images/p4.JPG')}}" alt="alternative"></a>
                        </div>
                        <div class="element-item blogs">
                            <a class="popup-with-move-anim" href="#project-5"><div class="element-item-overlay"><span>ROBOTICS</span></div><img src="{{asset('assets/images/p5.JPG')}}" alt="alternative"></a>
                        </div>
                        <div class="element-item youtube blogs">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"><span>NVIDEA</span></div><img src="{{asset('assets/images/p6.JPG')}}" alt="alternative"></a>
                        </div>
                        <div class="element-item youtube">
                            <a class="popup-with-move-anim" href="#project-7"><div class="element-item-overlay"><span>DIGITAL SIGNAGE</span></div><img src="{{asset('assets/images/p7.JPG')}}" alt="alternative"></a>
                        </div>
                        <div class="element-item youtube">
                            <a class="popup-with-move-anim" href="#project-8"><div class="element-item-overlay"><span>WAREHOUSE ROBOTICS</span></div><img src="{{asset('assets/images/p8.JPG')}}" alt="alternative"></a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->


    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">
                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/KBKFXYEJCB4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">
                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/MteoDYVD4Z0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> <!-- end of col -->

        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">
                <iframe  width="100%" height="600px"  src="https://www.youtube.com/embed/ByPGNZch2Fs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">
                <iframe  width="100%" height="600px"  src="https://www.youtube.com/embed/alvCBUyAiQo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">
                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/KBKFXYEJCB4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">
                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/j_WXMKkxa9g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div> <!-- end of col -->-- end of col -->

        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">
                <iframe width="100%" height="600" src="https://www.youtube.com/embed/ENvEcv-3uhs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    </div>

    <!-- Lightbox -->
    <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-12">
                <iframe width="100%" height="600px" src="https://www.youtube.com/embed/Yq_vWN-1rEI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.navbar-nav li .nav-link.active').removeClass('active');
        $('.navbar-nav li #gallary').addClass('active');

    </script>
@endsection
