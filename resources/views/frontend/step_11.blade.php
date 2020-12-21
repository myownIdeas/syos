@extends('frontend.layout.lets_get_started')
@section('content')

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider bg-lighter">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-push-3">
                                <div class="text-center mb-60"><a href="#" class=""><img alt="" src="https://www.syossetpharmacy.com/assets/images/main_logo.png" style="width: 40%;"></a></div>
                                <div class="bg-lightest border-1px p-30 mb-0">
                                    <h3 class="text-theme-colored mt-0 pt-5">Review your order</h3>
                                    <hr>
                                    <p>Our service is free, you’ll only pay your standard 30-day copays for our service and the cost of any vitamins and over-the-counter medications.</p>
                                    <form  id="wizard1" action="{{url('/add-lets-get-started')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="step" value="9">
                                        <input type="hidden" name="recordId" value="{{$recordId}}">
                                        <div class="row">

                                            <div class="col-sm-6" style="margin-bottom: 20px;">
                                                <div class="review-card">

                                                    <div class="media-body">
                                                        <h4>{{$doctor->doctor_name}}<br />{{$doctor->doctor_phone}} </h4>
                                                        Your Doctor
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="col-sm-6" style="margin-bottom: 20px;">
                                                <div class="review-card">

                                                    <div class="media-body">
                                                        <h4>{{$pharmacy->pharmacy_name}}<br />{{$pharmacy->pharmacy_phone}} </h4>
                                                        Your Pharmacy
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-6" style="margin-bottom: 20px;">
                                                <div class="review-card">

                                                    <div class="media-body">
                                                        <h4>{{$medication->med_name}}<br />{{$medication->med_dose}} </h4>
                                                        Your Medication
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="col-sm-6" style="margin-bottom: 20px;">
                                                <div class="review-card">

                                                    <div class="media-body">
                                                        <h4>{{$insurance->ins_bin}}<br />{{$insurance->ins_phone}} </h4>
                                                        Your Insurance
                                                    </div>

                                                </div>
                                            </div>


                                        </div>




                                        <div class="row">


                                            <div class="col-sm-12" style="margin-bottom: 20px;">
                                                <div class="text-form">
                                                    <h3>How much are my copays?</h3>
                                                    <p>In most cases, your copays will stay the same as they are at your local retail pharmacy for a 30-day supply of medication. </p>
                                                    <p class="mb-0">Ask an Advisor</p>
                                                    <h3><a href="tel:5168651151l" ><i class="fas fa-phone-volume"></i>(516) 865-1151</a></h3>
                                                </div>
                                            </div>
                                        </div>





{{--                                        <div class="row">--}}
{{--                                            <h3 class="text-theme-colored mt-0 pt-5">Get updates by text message</h3>--}}
{{--                                            <hr>--}}
{{--                                            <p>We’ll send medication, shipment and service updates to your mobile phone.</p>--}}


{{--                                            <div class="col-sm-12">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label>Phone Number</label>--}}
{{--                                                    <input name="form_name" type="number" placeholder="(000) 000 0000" required="" class="form-control">--}}
{{--                                                    <label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox4" onclick="myFunction()" value="option1">Send text message updates to my phone.</label><br>--}}
{{--                                                    <small>Message and data rates may apply. Reply “STOP” anytime to cancel. View our <a href="#" class="cta-links">Terms of Use</a> and <a href="#" class="cta-links">Privacy Policy</a> .</small>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}



                                        <div class="row">
                                            <h3 class="text-theme-colored mt-0 pt-5">Add payment method</h3>
                                            <hr>
                                            <p>We require a credit or debit card on file to start your service. We won’t charge your card until after we send your first shipment.</p>
                                            <ul class="payment-card">
                                                <li><img src="images/visa.png" alt=""></li>
                                                <li><img src="images/american.png" alt=""></li>
                                                <li><img src="images/discover.png" alt=""></li>
                                                <li><img src="images/master-card.png" alt=""></li>
                                            </ul>


                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Card Number</label>
                                                    <input name="form_name" type="number" placeholder="Card Number" required="" class="form-control">

                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input name="form_name" type="number" placeholder="MM/YY" required="" class="form-control">

                                                </div>
                                            </div>


                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <input name="form_name" type="number" placeholder="CVC" required="" class="form-control">

                                                </div>
                                            </div>
                                            <label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox4" onclick="myFunction()" value="option1">Billing address is same as shipping address</label><br>

                                        </div>


                                        <div class="row">
                                            <hr>
                                            {{--<ul class="action-links">--}}
                                                {{--<li><a href="#" class="action-add"><i class="fa fa-plus-square"></i> Add a coupon code (optional)</a></li>--}}
                                                {{--<li>--}}
                                                    {{--<a href="#" class="action-add createModelBox" data-toggle="modal" data-url=""><i class="fa fa-plus-square"></i> Add HSA or FSA card (optional)</a>--}}

                                                {{--</li>--}}
                                            {{--</ul>--}}


                                        </div>


                                        <div class="form-group">
                                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10"><a href="13_Review.html" style="color: #fff;">Next</a></button>
                                        </div>

                                        <div class="form-group" style="text-align: center;"><a href="12_Dispenser.html"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-bar-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L3.207 8l2.647-2.646a.5.5 0 0 0 0-.708z"/>
                                                    <path fill-rule="evenodd" d="M10 8a.5.5 0 0 0-.5-.5H3a.5.5 0 0 0 0 1h6.5A.5.5 0 0 0 10 8zm2.5 6a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 1 0v11a.5.5 0 0 1-.5.5z"/>
                                                </svg>
                                            </a></div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->


@endsection
