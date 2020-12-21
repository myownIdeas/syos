@extends('frontend.layout.main')
@section('content')
        <!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="assets/images/bg/bg6.jpg">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Transfer RX</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li>We believe that every individual deserves the best customer service. Syosset Pharmacy can help you transfer your prescription to us without any hassle.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section data-bg-img="images/p4.png" style="background-image: url(&quot;images/p4.png&quot;);">


        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase font-28 mt-0">New<span class="text-theme-colored"> Pharmacy </span> Customer </h2>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Contact Form -->
                          <form   method="post" class="contact-form-transparent" action="{{url('/transfer_rx')}}">
                                @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name </label>
                                        <input name="form_name" class="form-control" type="text" placeholder="Enter First name" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name </label>
                                        <input name="last_name" class="form-control required " type="text" placeholder="Enter Last name " aria-required="true">
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Date of Birth </label>
                                        <input name="dob" class="form-control" type="text" placeholder="Enter your DOB" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Phone Number </label>
                                        <input name="number" class="form-control required " type="text" placeholder="Enter number" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Address </label>
                                        <input name="Address" class="form-control required " type="text" placeholder="Enter address" aria-required="true">
                                    </div>
                                </div>


                            </div>


                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>City </label>
                                        <input name="city" class="form-control" type="text" placeholder="Enter city" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>State </label>
                                        <input name="state" class="form-control required " type="text" placeholder="Enter state" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Zip/Postal Code </label>
                                        <input name="zip" class="form-control required " type="text" placeholder="Enter zipcode" aria-required="true">
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Pharmacy Name </label>
                                        <input name="pharmacy_name" class="form-control" type="text" placeholder="Enter pharmacy name" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Pharmacy Phone </label>
                                        <input name="phar_phone" class="form-control required " type="text" placeholder="Enter pharmacy phone" aria-required="true">
                                    </div>
                                </div>



                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>RX 1 Medication Name </label>
                                        <input name="rx_med_name" class="form-control required email" type="text" placeholder="Enter medication name " aria-required="true">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>RX1 Number</label>
                                        <input name="rx_num" class="form-control" type="number" placeholder="Enter number">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>RX 2 Medication Name </label>
                                        <input name="rx_2_med_name" class="form-control required email" type="text" placeholder="Enter medication name " aria-required="true">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>RX2 Number</label>
                                        <input name="rx_2" class="form-control" type="number" placeholder="Enter number">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>RX 3 Medication Name </label>
                                        <input name="rx_3med_num" class="form-control required email" type="text" placeholder="Enter medication name " aria-required="true">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>RX3 Number</label>
                                        <input name="rx_3" class="form-control" type="number" placeholder="Enter number">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>RX 4 Medication Name </label>
                                        <input name="rx_4_med_num" class="form-control required email" type="text" placeholder="Enter medication name " aria-required="true">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>RX4 Number</label>
                                        <input name="rx_4" class="form-control" type="number" placeholder="Enter number">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>RX 5 Medication Name </label>
                                        <input name="rx_5_med_num" class="form-control required email" type="text" placeholder="Enter medication name " aria-required="true">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>RX5 Number</label>
                                        <input name="rx_5" class="form-control" type="number" placeholder="Enter number">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>If you would like to transfer all prescriptions, simply check the box below.</label>
                                <div class="checkboxwrapper " id="1227215081">
                                    <div id="29678" class="contact-checkable-container">
                                        <input type="checkbox" value="Transfer all my prescriptions" name="dmform_24">
                                        <span id="4740">Transfer all my prescriptions</span>
                                    </div>
                                </div>                </div>

                            {{--<div class=" form-group g-recaptcha dmforminput dmRespDesignCol" style="float:none;clear:both;">--}}
                                {{--<div style="width: 304px; height: 78px;">--}}
                                    {{--<div>--}}
                                        {{--<iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LffcBsUAAAAAMU-MYacU-6QHY4iDtUEYv_Ppwlz&amp;co=aHR0cHM6Ly93d3cuc3lvc3NldHBoYXJtYWN5LmNvbTo0NDM.&amp;hl=en&amp;v=UFwvoDBMjc8LiYc1DKXiAomK&amp;theme=light&amp;size=normal&amp;cb=h5ovv8a992dr" width="304" height="78" role="presentation" name="a-unz2xmtayo6j" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-2" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                {{--<input name="form_botcheck" class="form-control" type="hidden" value="">--}}
                                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat btn-block" data-loading-text="Please wait...">Submit</button>
                            </div>
                        </form>
                        <!-- Contact Form Validation-->
                        <script>
                            $("#contact_form").validate({
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
                                            if( data.status === 'true' ) {
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

                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
<!-- end main-content -->

@endsection
