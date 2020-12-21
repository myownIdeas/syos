@extends('frontend.layout.main')
@section('content')
        <!-- Start main-content -->
<div class="main-content">


    <!-- Section: home -->
    <section id="home" class="divider">
        <div class="container-fluid p-0">

            <!-- START REVOLUTION SLIDER 5.0.7 -->
            <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE 1 -->
                        <li >
                            <!-- MAIN IMAGE -->
                            <img src="assets/images/bg/bg-pharmacy.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                 id="slide-1-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="normal"
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-start="1000"
                                 data-basealign="slide"
                                 data-responsive_offset="on"
                                 style="z-index: 5;background-color:rgba(255, 255,255, 0.1);border-color:rgba(0, 0, 0, 1.00);">
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                 id="slide-1-layer-2"
                                 data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                 data-y="['top','top','top','top']" data-voffset="['120','100','70','90']"
                                 data-fontsize="['56','46','40','36']"
                                 data-lineheight="['70','60','50','45']"
                                 data-fontweight="['800','700','700','700']"
                                 data-width="['700','650','600','420']"
                                 data-height="none"
                                 data-whitespace="normal"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Syosset Pharmacy<br> <span class="text-theme-colored2">CBD Dispensary</span> <!--Doctor.-->
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-white  rs-parallaxlevel-0"
                                 id="slide-1-layer-3"
                                 data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                 data-y="['top','top','top','top']" data-voffset="['280','220','180','180']"
                                 data-fontsize="['18','18','16','13']"
                                 data-lineheight="['30','30','28','25']"
                                 data-fontweight="['600','600','600','600']"
                                 data-width="['700','650','600','420']"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap;">We are a Long Island Pharmacy servicing the area of Syosset <br>and the surrounding communities <br>
                                <br> <a href="{{url('/about-us')}}" class="btn btn-default  btn-theme-colored btn-xl">LEARN MORE ABOUT PHARMACY</a>
                                <br> <br><a href="{{url('/cbd')}}" class="btn btn-default btn-theme-colored btn-xl ">LEARN MORE ABOUT CBD</a>
                            </div>
                        </li>


                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
                </div>
            </div>

            <!-- END REVOLUTION SLIDER -->
            <script type="text/javascript">
                var tpj=jQuery;
                var revapi34;
                tpj(document).ready(function() {
                    if(tpj("#rev_slider_home").revolution == undefined){
                        revslider_showDoubleJqueryError("#rev_slider_home");
                    }else{
                        revapi34 = tpj("#rev_slider_home").show().revolution({
                            sliderType:"standard",
                            jsFileLocation:"js/revolution-slider/js/",
                            sliderLayout:"fullwidth",
                            dottedOverlay:"none",
                            delay:9000,
                            navigation: {
                                keyboardNavigation:"on",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation:"off",
                                onHoverStop:"on",
                                touch:{
                                    touchenabled:"on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                }
                                ,
                                arrows: {
                                    style:"zeus",
                                    enable:true,
                                    hide_onmobile:true,
                                    hide_under:600,
                                    hide_onleave:true,
                                    hide_delay:200,
                                    hide_delay_mobile:1200,
                                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                    left: {
                                        h_align:"left",
                                        v_align:"center",
                                        h_offset:30,
                                        v_offset:0
                                    },
                                    right: {
                                        h_align:"right",
                                        v_align:"center",
                                        h_offset:30,
                                        v_offset:0
                                    }
                                },
                                bullets: {
                                    enable:true,
                                    hide_onmobile:true,
                                    hide_under:600,
                                    style:"metis",
                                    hide_onleave:true,
                                    hide_delay:200,
                                    hide_delay_mobile:1200,
                                    direction:"horizontal",
                                    h_align:"center",
                                    v_align:"bottom",
                                    h_offset:0,
                                    v_offset:30,
                                    space:5,
                                    tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                                }
                            },
                            viewPort: {
                                enable:true,
                                outof:"pause",
                                visible_area:"80%"
                            },
                            responsiveLevels:[1240,1024,778,480],
                            gridwidth:[1240,1024,778,480],
                            gridheight:[600,550,500,450],
                            lazyType:"none",
                            parallax: {
                                type:"scroll",
                                origo:"enterpoint",
                                speed:400,
                                levels:[5,10,15,20,25,30,35,40,45,50],
                            },
                            shadow:0,
                            spinner:"off",
                            stopLoop:"off",
                            stopAfterLoops:-1,
                            stopAtSlide:-1,
                            shuffle:"off",
                            autoHeight:"off",
                            hideThumbsOnMobile:"off",
                            hideSliderAtLimit:0,
                            hideCaptionAtLimit:0,
                            hideAllCaptionAtLilmit:0,
                            debugMode:false,
                            fallbacks: {
                                simplifyAll:"off",
                                nextSlideOnWindowFocus:"off",
                                disableFocusListener:false,
                            }
                        });
                    }
                }); /*ready*/
            </script>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </section>


    <!-- Section: About -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="border-7px p-25 pt-10 pb-20 bg-lighter">
                            <h3 class="">Getting Started Right Now Is Easy!
                            </h3>
                            @if(Session::has('inquiry'))
                                <p class="alert alert-info">{{ Session::get('inquiry') }}</p>
                                @endif
                                        <!-- Appontment Form Starts -->
                                <form   method="post" action="{{url('/add-inquiry')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group mb-10">
                                                <input id="form_name" name="form_name" class="form-control" type="text" required="" placeholder="Enter Name" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-10">
                                                <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-10">
                                                <input  name="form_phone" class="form-control required email" type="text" placeholder="Enter Phone" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-10">
                                                <input  name="form_state" class="form-control required email" type="text" placeholder="Enter State" aria-required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 mt-20">

                                        <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Submit</button>
                                    </div>
                                </form>

                                <!-- Appointment Form Validation-->
                                <script>
                                    $("#appointment_form_at_home").validate({
                                        submitHandler: function(form) {
                                            var form_btn = $(form).find('button[type="submit"]');
                                            var form_result_div = '#form-result';
                                            $(form_result_div).remove();
                                            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                            var form_btn_old_msg = form_btn.html();
                                            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                            $(form).ajaxSubmit({
                                                dataType:  'json',
                                                success: function(data) {
                                                    if( data.status == 'true' ) {
                                                        $(form).find('.form-control').val('');
                                                    }
                                                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                    $(form_result_div).html(data.message).fadeIn('slow');
                                                    setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                                }
                                            });
                                        }
                                    });
                                </script>
                                <!-- Appontment Form Ends -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-box">
                            <h3 class="">Discover The Pharmacy</h3>
                            <hr>
                            <p class="text-gray" >Cannabis has become the fastest growing natural remedy for patients with debilitating or life-threatening medical conditions and Syosset Pharmacy has dedicated its efforts to be in the forefront of this movement. We have become the premier CBD Pharmacy in the area by providing one-on-one consultations to patients with the help of our Pharmacist who is an expert in cannabis therapeutics.</p>
                            <p class="text-gray">We encourage you and your staff to stop by or call us. Let us show you what products and services we have to offer you and your patients. We look forward to working with you!
                                <br> <br> <a href="{{url('/about-us')}}" class="btn btn-default btn-theme-colored btn-xl ">LEARN MORE</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="service-box">
                            <h3 class="">Patients First</h3>
                            <hr>
                            <p class="text-gray" >We strive to be a pharmacy where our patients receive the best advice and products possible with respect to this emerging healthcare trend.</p>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="service-box">
                            <h3 class="">CBD Education</h3>
                            <hr>
                            <p class="text-gray">CBD is one of more than 100 compounds found in the cannabis plant. These compounds are known as cannabinoids and they interact with cell receptors to make up the endocannabinoid system.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--<section id="services" class="bg-silver-light" style="background-color: #f3f3f3 !important;">-->
    <!--            <div class="container pb-40">-->

    <!--                <div class="section-content">-->
    <!--                    <div class="row">-->
    <!--                                                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="text-align: center;">-->

    <!--    <div class=""> <p><a href="{{url('/new_pharmacy_customer')}}" class="btn btn-default btn-theme-colored btn-xl ">NEW PHARMACY CUSTOMER</a></p></div>-->

    <!--</div>-->



    <!--<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="text-align: center;">-->

    <!--    <div class=""> <p><a href="{{url('/transfer')}}" class="btn btn-default btn-theme-colored btn-xl ">TRANSFER RX</a></p></div>-->

    <!--</div>-->


    <!--                                            </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->


    <section class="services-links">
        <div class="container">
            <ul>
                <li>
                    <a href="{{url('/new_pharmacy_customer')}}"  class="btn cta-white">NEW PHARMACY CUSTOMERS</a>
                </li>
                <li>
                    <a href="{{url('/transfer')}}" class="btn cta-white">TRANSFER RX</a>
                </li>
            </ul>
        </div>
    </section>


    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="assets/images/bg/bg6.jpg" style="display:none;">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Products</h2>
                        {{--                            <ol class="breadcrumb text-center text-black mt-10">--}}
                        {{--                                <li><a href="#">Home</a></li>--}}
                        {{--                                <li><a href="#">Pages</a></li>--}}
                        {{--                                <li class="active text-theme-colored">Page Title</li>--}}
                        {{--                            </ol>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="" style="display:none;">

        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="products">
                            <div class="row multi-row-clearfix">
                                @foreach($products as $product)
                                    <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                                        <div class="product">
                                            {{--                                                <span class="tag-sale">Sale!</span>--}}
                                            <div class="product-thumb"> <img alt="" src="images/{{unserialize($product->images)[0]}}" class="img-responsive img-fullwidth">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="product-details text-center">
                                                <a href="{{url('product-detail/'.$product->id)}}"><h5 class="product-title">{{$product->name}}</h5></a>
                                                {{--                                                    <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span></div>--}}
                                                <div class="price"><ins><span class="amount">${{$product->price}}</span></ins></div>
                                                <div class="btn-add-to-cart-wrapper">
                                                    <a class="btn btn-default btn-xs btn-add-to-cart attToCart" onclick="addToCart({{$_SESSION["cart_temp_id"]}},{{$product->id}})" href="javascript:void(0)">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a href="{{url('/all_products')}}" class="btn btn-default btn-circled btn-xl ">View More</a>
                                    {{--                                        <nav>--}}
                                    {{--                                            <ul class="pagination theme-colored">--}}
                                    {{--                                                <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>--}}
                                    {{--                                                <li class="active"><a href="#">1</a></li>--}}
                                    {{--                                                <li><a href="#">2</a></li>--}}
                                    {{--                                                <li><a href="#">3</a></li>--}}
                                    {{--                                                <li><a href="#">4</a></li>--}}
                                    {{--                                                <li><a href="#">5</a></li>--}}
                                    {{--                                                <li><a href="#">...</a></li>--}}
                                    {{--                                                <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>--}}
                                    {{--                                            </ul>--}}
                                    {{--                                        </nav>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Services -->
    <section id="services" class="bg-silver-light">
        <div class="container pb-40">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase mt-0 line-height-1">Our <span class="text-theme-colored2">Services</span></h2>
                        <div class="title-icon">
                            <!--<img class="mb-10" src="assets/images/title-icon.png" alt="">-->
                        </div>
                        <p>Syosset Pharmacy is a locally owned and operated pharmacy providing the community with not only the highest quality
                            pharmaceuticals but providing its patrons with CBD education.
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="icon-box text-center bg-white bg-hover-theme-colored2 mb-30 p-30">
                            <i class="fa fa-check font-weight-600 text-theme-colored2 font-38"></i>
                            <h3 class="mt-20">CBD CONSULTING</h3>
                            <p style="font-size:13px;">One on one CBD counseling with a certified and licensed Pharmacist.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="icon-box text-center bg-white bg-hover-theme-colored2 mb-30 p-30">
                            <i class="fa fa-check font-weight-600 text-theme-colored2 font-38"></i>
                            <h3 class="mt-20">FREE SCREEING</h3>
                            <p style="font-size:13px;">Free blood pressure screening. free medication management and blister packaging.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="icon-box text-center bg-white bg-hover-theme-colored2 mb-30 p-30">
                            <i class="fa fa-check font-weight-600 text-theme-colored2 font-38"></i>
                            <h3 class="mt-20">FREE DELIVERY</h3>
                            <p style="font-size:13px;">Free delivery of CBD and Prescription medications.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="icon-box text-center bg-white bg-hover-theme-colored2 mb-30 p-30">
                            <i class="fa fa-check font-weight-600 text-theme-colored2 font-38"></i>
                            <h3 class="mt-20">DMV EYE TEST</h3>
                            <p style="font-size:13px;">Syosset Pharmacy is an offical DMV eye test location.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="icon-box text-center bg-white bg-hover-theme-colored2 mb-30 p-30">
                            <i class="fa fa-check font-weight-600 text-theme-colored2 font-38"></i>
                            <h3 class="mt-20">NOTARY PUBLIC</h3>
                            <p style="font-size:13px;">We are a certified Notary location. We provide the best services</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a href="{{url('/covid-19-test')}}" target="_blank"><div class="icon-box text-center bg-white bg-hover-theme-colored2 mb-30 p-30">
                            <i class="fa fa-check font-weight-600 text-theme-colored2 font-38"></i>
                            <h3 class="mt-20">Rapid COVID-19 Drive-in Testing</h3>
                            <p style="font-size:13px;">FDA Approved Rapid Test Results in 15 minutes $100 for Rapid COCID-19 Test.</p>
                        </div></a>
                    </div>



                </div>
            </div>

        </div>
    </section>
    <!-- Section: about -->
    <section id="about">
        <div class="container pb-70 pt-70">
            <div class="row">
                <div class="col-md-7 wow fadeInLeft animation-delay1">
                    <h2 class="mt-0"><span class="text-theme-colored2"></span>CBD Pharmacy </h2>
                    {{--                        <h3 class="mt-0">World Famous Heart Transplant Hospital In World</h3>--}}
                    <p>We have become the premier CBD Pharmacy in the area by providing one-on-one consultations to patients with the help of our Pharmacist who is an expert in cannabis therapeutics.</p>

                </div>
                <div class="col-md-5 wow fadeInRight animation-delay4">
                    <section id="home">
                        <div class="container-fluid p-0">
                            <div class="owl-carousel-1col" data-nav="true">
                                <div class="item">
                                    <img src="assets/images/bg/slide_1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/images/bg/slide_2.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>



    {{--<section id="services" class="bg-silver-light">--}}

    {{--<div class="container">--}}
    {{--<div class="section-content">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
    {{--<div class="section-title text-center">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<h2 class="text-uppercase mt-0 line-height-1">Our <span class="text-theme-colored2">Products</span></h2>--}}
    {{--<div class="title-icon">--}}
    {{--<img class="mb-10" src="assets/images/title-icon.png" alt="">--}}
    {{--</div>--}}
    {{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="products">--}}
    {{--<div class="row multi-row-clearfix">--}}
    {{--@foreach($products as $product)--}}
    {{--<div class="col-sm-6 col-md-4 col-lg-4 mb-30">--}}
    {{--<div class="product">--}}
    {{--                                                <span class="tag-sale">Sale!</span>--}}
    {{--<div class="product-thumb"> <img alt="" src="images/{{unserialize($product->images)[0]}}" class="img-responsive img-fullwidth">--}}
    {{--<div class="overlay"></div>--}}
    {{--</div>--}}
    {{--<div class="product-details text-center">--}}
    {{--<a href="{{url('product-detail/'.$product->name)}}"><h5 class="product-title">{{$product->name}}</h5></a>--}}
    {{--                                                    <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span></div>--}}
    {{--<div class="price"><ins><span class="amount">${{$product->price}}</span></ins></div>--}}
    {{--<div class="text-center">--}}
    {{--<a class="btn cta-primary btn-add-to-cart attToCart" onclick="addToCart({{$_SESSION["cart_temp_id"]}},{{$product->id}})" href="javascript:void(0)">View Detail</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}

    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-12 text-center">--}}
    {{--<a href="{{url('/all_products')}}" class="btn btn-default btn-circled btn-xl ">View More</a>--}}
    {{--                                        <nav>--}}
    {{--                                            <ul class="pagination theme-colored">--}}
    {{--                                                <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>--}}
    {{--                                                <li class="active"><a href="#">1</a></li>--}}
    {{--                                                <li><a href="#">2</a></li>--}}
    {{--                                                <li><a href="#">3</a></li>--}}
    {{--                                                <li><a href="#">4</a></li>--}}
    {{--                                                <li><a href="#">5</a></li>--}}
    {{--                                                <li><a href="#">...</a></li>--}}
    {{--                                                <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>--}}
    {{--                                            </ul>--}}
    {{--                                        </nav>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- Section: Services -->





    <!--start testimonial Section-->
    <!--<section class="divider parallax layer-overlay overlay-theme-colored2-9" data-background-ratio="0.7" data-bg-img="images/bg/bg5.jpg">-->
    <!--    <div class="container">-->
    <!--        <div class="section-title text-center mt-0">-->
    <!--            <div class="row">-->
    <!--                <div class="col-md-8 col-md-offset-2">-->
    <!--                    <h2 class="mt-0 line-height-1 text-uppercase text-white"> Testimonial</h2>-->
    <!--  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="section-content">-->

    <!--            <div class="row">-->
    <!--                @foreach($testes as $test)-->
    <!--                    <div class="col-md-4">-->

    <!--                        <div class="" data-dots="true">-->
    <!--                            <div class="item">-->
    <!--                                <div class="testimonial-wrapper text-center bg-white p-30">-->
    <!--                                    <div class="thumb mb-30"><img class="img-circle img-thumbnail" alt="" src="images/{{unserialize($test->image)[0]}}"></div>-->
    <!--                                    <div class="content">-->
    <!--                                        <p class="mb-25">{{$test->title}}</p>-->
    <!--                                        <h4 class="author text-theme-colored2 mb-0">{{$test->name}}</h4>-->
    <!--                                        <h6 class="title mt-0 mb-15">{{$test->designation}}</h6>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->

    <!--                        </div>-->

    <!--                    </div>-->
    <!--                @endforeach-->
        <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- Modal -->


    <!--start doctor Section-->
    <section id="team" class="bg-silver-light">
        <div class="container pt-70 pb-70">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1 text-uppercase">Customer <span class="text-theme-colored2">Reviews</span></h2><br />
                        {{--<div class="title-icon">--}}
                        {{--<img class="mb-10" src="images/title-icon.png" alt="">--}}
                        {{--</div>--}}
                        {{--<p>What people say<br> about us!</p>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="row mtli-row-clearfix">
                    <div class="col-md-12">
                        <div class="owl-carousel-4col">
                            @foreach($testes as $test)
                                <div class="item bg-white">
                                    <div class="team-block maxwidth500 mb-sm-30">
                                        <div class="team-upper-block">
                                            <img class="img-fullwidth" src="images/{{unserialize($test->image)[0]}}" alt="" style="width:60px!important; padding-top:50px;">
                                            {{--<ul class="styled-icons icon-bordered icon-circled icon-theme-colored pt-5">--}}
                                            {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                            {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                                            {{--</ul>--}}
                                        </div>
                                        <div class="team-lower-block text-center border-bottom-2px border-theme-colored2 mt-0 pt-0 p-20">
                                            <h3><a href="#">{{$test->name}}</a></h3>
                                            <p style="font-size:14px; height:150px; overflow:scroll;">{{$test->title}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--start gallary Section-->

    <div id="onload" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
                <div class="row no-gutters">
                    <div class="col-sm-6">
                        <div class="card_modal text-center">
                            <div class="card_body">
                                <h2 class="pink">COVID-19 RAPID TEST</h2>
                                <h4>Results in 15 Minutes</h4>
                                <p>
                                    Drive-in and get results in 15 minutes with our FDA approved COVID-19 Rapid test analyzer.
                                    If you or a loved one is in need of a COVID-19 Rapid test, we can help!
                                </p>
                            </div>
                            <a href="https://app.acuityscheduling.com/schedule.php?owner=21422947"><span> Rapid COVID-19  Testing </span> <i>$100</i></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card_modal text-center bg-default">
                            <div class="card_body">
                                <h2>COVID-19 PCR LAB TEST</h2>
                                <h4>Results in 3-5 business Days</h4>
                                <p>Drive-in to our customer parking lot located at Syosset Pharmacy 175 Jericho Turnpike Syosset, West Lobby Suite, NY 11791. Get tested from the convenience of your own car!</p>
                            </div>
                            <a href="https://www.doineedacovid19test.com/Syosset_NY_2252.html" target="_blank"><span>COVID-19 Lab Test</span>  <i>Free</i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
<script>
    $(document).ready(function(){
        $('#onload').modal('show');
    })
</script>

@endsection
