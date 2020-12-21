@extends('frontend.layout.main')
@section('content')
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
<!--    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="assets/images/bg/bg6.jpg">-->
<!--        <div class="container pt-60 pb-60">-->
            <!-- Section Content -->
<!--            <div class="section-content">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12 text-center">-->
<!--                        <h2 class="title">Contact</h2>-->
<!--{{--                        <ol class="breadcrumb text-center text-black mt-10">--}}-->
<!--{{--                            <li><a href="#">Home</a></li>--}}-->
<!--{{--                            <li><a href="#">Pages</a></li>--}}-->
<!--{{--                            <li class="active text-theme-colored">Page Title</li>--}}-->
<!--{{--                        </ol>--}}-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<div class="col-lg-12 order-lg-1 order-2  mt-4 mt-lg-0">
                <div class="map wow fadeIn" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-name: fadeIn;">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1509.8933041085106!2d-73.5112498!3d40.8106828!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c283a33ae79cd7%3A0x63cdadcbbd40fd68!2sSyosset%20Pharmacy%20-%20CBD%20Dispensary!5e0!3m2!1sen!2s!4v1608234041207!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                </div>

            </div>
    <!-- Divider: Contact -->
    <section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-md-6">
                    <h3 class="line-bottom mt-0 mb-30">Send us a message</h3>

                    <!-- Contact Form -->
                    <form  action="{{url('/contact-us-record')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name <small>*</small></label>
                                    <input name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <small>*</small></label>
                                    <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Subject <small>*</small></label>
                                    <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="msg" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>

                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3 class="line-bottom mt-0">Get in touch with us</h3>
                    <p>Have a question? Syosset Pharmacy is here to help. Send us a message and we’ll be in touch. </p>
                     <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
                        <li><a href="https://web.facebook.com/syossetpharmacy?_rdc=1&_rdr" data-bg-color="#3B5998" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/syossetpharmacy" data-bg-color="#02B0E8" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/syossetpharmacy/" data-bg-color="#D9CCB9" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>


                     <div class="icon-box1 media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored" style="font-size: 40px;"></i></a>
                        <div class="media-body">
                            <a class="text-gray"  href="https://goo.gl/maps/mBNP286yJSsvLaYv9" target="_blank"><h5 class="mt-0">Syosset Pharmacy <br />175 ericho Turnpike <br />
                            West Lobby Suite<br />Syosset, NY 11791</h5></a>

                        </div>
                    </div>
                    <div class="icon-box1 media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored" style="font-size: 40px;"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">Contact Number</h5>
                            <p><a class="fa fa-phone" href="tel:+5168651151">(516) 865-1151</a></p>
                            <p><a class="fa fa-fax" href="tel:+5168651152">(516)-865-1152</a></p>
                        </div>
                    </div>

                    <div class="icon-box1 media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored" style="font-size: 40px;"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0">Email Address</h5>
                            <p><a href="mailto:hello@syossetpharmacy.com">hello@syossetpharmacy.com</a></p>
                        </div>
                    </div>
{{--                    <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="fa fa-skype text-theme-colored" style="font-size: 40px;"></i></a>--}}
{{--                        <div class="media-body">--}}
{{--                            <h5 class="mt-0">Make a Video Call</h5>--}}
{{--                            <p>ThemeMascotSkype</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

</div>
<!-- end main-content -->
@endsection
