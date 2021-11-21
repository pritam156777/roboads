@extends('index')

@section('content')
@include('layouts.about-header')
<style>
    .clients{
        width: 100%;
    }
    .card{
        border: none;
    }
    body{
        font-family: Roboto;
    }
</style>



<div class="container mb-3" style="margin-top: 3rem !important">

    <p>
        Founded in 2018 and headquartered in Palo Alto, Roboads Inc. is a fast growing startup
        focused on developing interactive advertising robots and advanced ai solutions, a new service robot
        that can truly enhance people's lives.
    </p>
      <p>  Roboads Inc. has developed the worlds first commercial advertising robots of its kind. it was designed
        and built from the ground up as new means of advertising and attracting greater customer attention
        than traditional posters and billboards.
      </p>
    <p>
        Our story started following a quest to find new ways to interact and engage audience. retail marketing
        has stuck with the traditional ways to make products more appealing for walk-in customers.
        following years of research, we realized the need to develop a new out-of-this-world experience that can
        revolutionize traditional advertising methods and offer a meaningful memorable experience.
    </p>

    <h3 class="mt-5">OUR CLIENTS</h3>

    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img class="clients" src="{{asset('assets/images/files/gitex.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img class="clients" src="{{asset('assets/images/files/geodrones.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img class="clients" src="{{asset('assets/images/files/huiwei.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img class="clients" src="{{asset('assets/images/files/hypermotion.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img class="clients" src="{{asset('assets/images/files/ai_everything.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img class="clients" src="{{asset('assets/images/files/aibc.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img class="clients" src="{{asset('assets/images/files/dubai_customs.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img class="clients" src="{{asset('assets/images/files/ai_everything.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <img class="clients" src="{{asset('assets/images/files/gitex.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
        $('.navbar-nav li .nav-link.active').removeClass('active');
        $('.navbar-nav li #about').addClass('active');
</script>
@endsection
