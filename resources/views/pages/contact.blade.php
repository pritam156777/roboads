@extends('index')

@section('content')
    @include('layouts.contact-header')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300">
    <style>


        @media (min-width: 600px) {

            .register .nav-tabs .nav-link:hover{
                border: none;
            }

            .form-new{
                margin-right: 22%;
                margin-left: 20%;
            }
            .register-heading{
                margin-left: 10%;
                margin-bottom: 10%;
                color: #e9ecef;
            }
            .register-heading h1{
                margin-left: 21%;
                margin-bottom: 10%;
                color: #e9ecef;
            }

            .register{
                background: -webkit-linear-gradient(left, #3931af, #00c6ff);
                margin-top: 3%;
                padding: 3%;
                border-radius: 2.5rem;
            }
            .nav-tabs .nav-link{
                border: none;
                color: white;
                text-decoration: none;

            }
            label{
                color: white !important;
            }
            .email-image{
                height: 81px;transform: rotate(45deg);opacity: .6 !important;
            }
            .register-heading{
                margin-left: 19%;
                margin-bottom: 2%;
                color: #e9ecef;
                margin-top: 41px;
            }

        }

        @media (max-width: 600px) {





            .register{
                margin-top: 24%;
            }

            .email-image{
                position: absolute;
                margin: -73% 1% 1% -43% !important;
                width: 46px !important;
                height: inherit;
                opacity: .4;
                transform: rotate(45deg);
            }
            @media (max-width: 600px) {
                .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
                    background: #2964bf;
                    color: white;
                    text-decoration: none;
                }
                .nav-tabs .nav-link{
                    text-decoration: none;
                    background: #e7e7e7;
                }
            }
            .register-heading{
                font-size: 15px;
                margin-top: 17px;
            }

            .name{
                color: black !important;
            }
            .form-control{
                border: none;
                box-shadow: none;
                border-bottom: 3px solid #0b89d36b;
                border-radius: 0px;
            }
            .form-control:focus{
                border: none;
                box-shadow: none;
                border-bottom: 3px solid #2964bf;
                border-radius: 0px;
            }
            .form-control:hover{
                border: none;
                box-shadow: none;
                border-bottom: 3px solid #2964bf;
                border-radius: 0px;
            }

        }
    </style>
    <div class="container register mb-5">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-nowrap" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Rent a Robot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Distribution Inquiries</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h2 class="register-heading">Rent a Robot</h2>
                        <div class="row register-form">
                            <div class="col-lg-12">
                                    <form method="post" action="{{route('robotInquiry')}}">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2" class="name">Name</label><span class="text-danger">*</span>
                                            <input type="text" name="name" class="form-control" id="formGroupExampleInput2" required placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Country/Region</label><span class="text-danger">*</span>
                                            <input name="country" type="text" class="form-control" id="formGroupExampleInput2" required placeholder="Country/Region">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Phone Number</label><span class="text-danger">*</span>
                                            <input name="mobile" type="text" class="form-control" id="formGroupExampleInput2" required placeholder="Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Company Name</label>
                                            <input name="company" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Company Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Email</label><span class="text-danger">*</span>
                                            <input type="email" class="form-control" id="formGroupExampleInput2" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Event Name</label>
                                            <input name="event_name" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Event Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Select Dates</label>
                                          <div class="row">
                                              <div class="col-lg-2">
                                                  <div id="reportrange" class="form-control form-control-sm ">
                                                      <i class="fa fa-calendar"></i>&nbsp;
                                                  </div>
                                              </div>
                                              <div class="col-lg-5 "><input name="start_date" class="form-control form-control-sm" readonly id="from_date" type="text" placeholder="from"></div>
                                              <div class="col-lg-5 "><input name="end_date" class="form-control form-control-sm" readonly type="text" id="to_date" placeholder="to"><div style="margin: -22px -2px -3px -23px;color: aliceblue" class="fa fa-arrow-alt-circle-right position-absolute"></div></div>
                                          </div>
                                        </div>

                                        @csrf
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Message</label><span class="text-danger">*</span>
                                            <textarea name="message" rows="5" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Write Something..."></textarea>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-dark text-center">RENT ROBOT</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h2  class="register-heading text-nowrap">Distribution Inquiries</h2>
                        <div class="row register-form">
                            <div class="col-md-12">
                                <form method="post" action="{{route('buyRobot')}}">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2" class="name">Name</label><span class="text-danger">*</span>
                                        <input type="text" name="name" class="form-control" id="formGroupExampleInput2" required placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Country/Region</label><span class="text-danger">*</span>
                                        <input name="country" type="text" class="form-control" id="formGroupExampleInput2" required placeholder="Country/Region">
                                    </div>
                                    @csrf
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Phone Number</label><span class="text-danger">*</span>
                                        <input name="mobile" type="text" class="form-control" id="formGroupExampleInput2" required placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Company Name</label>
                                        <input name="company" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Company Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Email</label><span class="text-danger">*</span>
                                        <input type="email" class="form-control" id="formGroupExampleInput2" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Message</label><span class="text-danger">*</span>
                                        <textarea rows="5" name="message" type="text" class="form-control" id="formGroupExampleInput2" required placeholder="Write Something..."></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-dark text-center">LET'S GO</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.navbar-nav li .nav-link.active').removeClass('active');
        $('.navbar-nav li #contact').addClass('active');

        $('#reportrange').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            $('#from_date').val(start.format('MMMM D, YYYY'));
            $('#to_date').val( end.format('MMMM D, YYYY'));
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    </script>
@endsection
