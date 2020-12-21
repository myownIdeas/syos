@extends('frontend.layout.main')
@section('content')

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-white-5" data-bg-img="assets/images/bg/b1.jpg">
            <div class="container pt-70 pb-20">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">Specialty Medications</h2>
{{--                            <ol class="breadcrumb text-center text-black mt-10">--}}
{{--                                <li><a href="#">Home</a></li>--}}
{{--                                <li><a href="#">Pages</a></li>--}}
{{--                                <li class="active">Page Title</li>--}}
{{--                            </ol>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Departments -->
        <section id="depertments" class="bg-silver-light">
            <div class="container">
                <div class="section-centent">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="horizontal-tab-centered">
{{--                                <div class="text-center">--}}
{{--                                    <ul class="nav nav-pills mb-10">--}}
{{--                                        <li class="active"> <a href="#tab11" class="" data-toggle="tab" aria-expanded="false"> Orthopaedics</a> </li>--}}
{{--                                        <li class=""> <a href="#tab12" data-toggle="tab" aria-expanded="false"> Cardiology</a> </li>--}}
{{--                                        <li class=""> <a href="#tab13" data-toggle="tab" aria-expanded="true"> Neurology</a> </li>--}}
{{--                                        <li class=""> <a href="#tab14" data-toggle="tab" aria-expanded="false"> Dental</a> </li>--}}
{{--                                        <li class=""> <a href="#tab15" data-toggle="tab" aria-expanded="false"> Haematology</a> </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                                <div class="tab-content bg-white">
                                    <div class="tab-pane fade in active" id="tab11">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="service-content ml-10 ml-sm-0">
                                                    <h2 class="">Specialty Medications</h2>
                                                    <p class="lead">When your loved ones have a chronic illness, it can be challenging to find the right medication that can treat their condition. Unlike traditional drugs, which most people are familiar with and which can be found almost anywhere, specialty medications are created to treat serious diseases such as cancer, rheumatoid arthritis, and multiple sclerosis, among others. Syosset Pharmacy can help you get access to the specialty medications your loved ones need.</p>
                                                    <p>Should you have further inquiries and clarifications regarding the specialty medications we offer, please do not hesitate to give us a call at 347-868-6394. You may also send us a message on our Contact Us page</p>
{{--                                                    <div class="row mt-20 mb-sm-30">--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-ambulance14"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Emergency Care</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-illness"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Operation Theater</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-stethoscope10"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Outdoor Checkup</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-medical51"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Cancer Service</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="thumb mt-20">
                                                    <img class="img-fullwidth" src="assets/images/services/1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="tab-pane fade" id="tab12">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-7">--}}
{{--                                                <div class="service-content ml-10 ml-sm-0">--}}
{{--                                                    <h2 class="">Cardiology</h2>--}}
{{--                                                    <p class="lead">One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid molestias.</p>--}}
{{--                                                    <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>--}}
{{--                                                    <div class="row mt-20 mb-sm-30">--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-ambulance14"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Emergency Care</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-illness"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Operation Theater</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-stethoscope10"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Outdoor Checkup</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-medical51"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Cancer Service</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-5">--}}
{{--                                                <div class="thumb mt-20">--}}
{{--                                                    <img class="img-fullwidth" src="images/services/2.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade" id="tab13">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-7">--}}
{{--                                                <div class="service-content ml-10 ml-sm-0">--}}
{{--                                                    <h2 class="">Neurology</h2>--}}
{{--                                                    <p class="lead">One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid molestias.</p>--}}
{{--                                                    <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>--}}
{{--                                                    <div class="row mt-20 mb-sm-30">--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-ambulance14"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Emergency Care</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-illness"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Operation Theater</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-stethoscope10"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Outdoor Checkup</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-medical51"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Cancer Service</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-5">--}}
{{--                                                <div class="thumb mt-20">--}}
{{--                                                    <img class="img-fullwidth" src="images/services/3.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade" id="tab14">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-7">--}}
{{--                                                <div class="service-content ml-10 ml-sm-0">--}}
{{--                                                    <h2 class="">Dental</h2>--}}
{{--                                                    <p class="lead">One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid molestias.</p>--}}
{{--                                                    <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>--}}
{{--                                                    <div class="row mt-20 mb-sm-30">--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-ambulance14"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Emergency Care</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-illness"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Operation Theater</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-stethoscope10"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Outdoor Checkup</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-medical51"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Cancer Service</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-5">--}}
{{--                                                <div class="thumb mt-20">--}}
{{--                                                    <img class="img-fullwidth" src="images/services/4.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="tab-pane fade" id="tab15">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-7">--}}
{{--                                                <div class="service-content ml-10 ml-sm-0">--}}
{{--                                                    <h2 class="">Hemtology</h2>--}}
{{--                                                    <p class="lead">One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid molestias.</p>--}}
{{--                                                    <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>--}}
{{--                                                    <div class="row mt-20 mb-sm-30">--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-ambulance14"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Emergency Care</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-illness"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Operation Theater</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-stethoscope10"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Outdoor Checkup</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-sm-6">--}}
{{--                                                            <div class="service-icon-box"> <a href="#" class="icon pull-left mr-20"><i class="flaticon-medical-medical51"></i></a>--}}
{{--                                                                <div>--}}
{{--                                                                    <h4 class="mt-0 mb-0">Cancer Service</h4>--}}
{{--                                                                    <p class="">Lorem ipsum dolor sit amet consec tetur elit</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-5">--}}
{{--                                                <div class="thumb mt-20">--}}
{{--                                                    <img class="img-fullwidth" src="images/services/5.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- end wrapper -->

@endsection
