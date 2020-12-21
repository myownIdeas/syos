@extends('frontend.layout.main')
@section('content')
        <!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
<div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="assets/images/bg/bg6.jpg">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">New Pharmacy Customer</h2>
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
    <section data-bg-img="images/p4.png" style="background-image: url(&quot;images/p4.png">

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
                        <form   method="post" class="contact-form-transparent" action="{{url('/add_pharmacy_customer')}}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name </label>
                                        <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Address </label>
                                        <input name="address" class="form-control required " type="text" placeholder="Enter address" aria-required="true">
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
                                        <label>Zip </label>
                                        <input name="zip" class="form-control required " type="text" placeholder="Enter zipcode" aria-required="true">
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>EZ Open Caps</label>
                                        <select name="ezopencap" class="form-control" >
                                            <option value="yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Refill Maintenance Medications Each Month </label>
                                        <select name="refill" class="form-control" >
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Drug Allergy?</label>
                                        <select name="drug" class="form-control" >
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Current Medications</label>
                                <textarea name="current_medication" class="form-control required" rows="2" placeholder="Enter current medications here including over-the-counter and herbal." aria-required="true"></textarea>
                            </div>
                            <div class="form-group">
                                    <label>List Medical Conditions</label>
                                <textarea name="last_medicataion" class="form-control required" rows="2" placeholder="Enter list of medical conditions here." aria-required="true"></textarea>
                            </div>
                            {{--<div class=" form-group g-recaptcha dmforminput dmRespDesignCol" style="float:none;clear:both;"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LffcBsUAAAAAMU-MYacU-6QHY4iDtUEYv_Ppwlz&amp;co=aHR0cHM6Ly93d3cuc3lvc3NldHBoYXJtYWN5LmNvbTo0NDM.&amp;hl=en&amp;v=UFwvoDBMjc8LiYc1DKXiAomK&amp;theme=light&amp;size=normal&amp;cb=h5ovv8a992dr" width="304" height="78" role="presentation" name="a-unz2xmtayo6j" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-2" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>--}}

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
