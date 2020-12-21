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
                                <div class="text-center mb-60"><a href="{{url('/')}}" class=""><img alt="" src="{{URL::to('/')}}/assets/images/main_logo.png" style="width: 40%;"></a></div>
                                <div class="bg-lightest border-1px p-30 mb-0">
                                    <h3 class="text-theme-colored mt-0 pt-5"> Get started</h3>
                                    <hr>
                                    <p>We ship your medication right to your door. Where would you like to receive your first shipment?</p>
                                    <form  action="{{url('/add-lets-get-started')}}" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="step" value="1">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>First Name <small>*</small></label>
                                                    <input name="first_name" type="text" placeholder="Enter First Name" required="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Last Name <small>*</small></label>
                                                    <input name="last_name" type="text" placeholder="Enter Last Name" required="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Email Address <small>*</small></label>
                                                    <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Password <small>*</small></label>
                                                    <input name="password" class="form-control required password" type="password" placeholder="Enter Password">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Phone Number <small>*</small></label>
                                                    <input name="phone_number" class="form-control required number" type="Number" placeholder="Enter Number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>How did you hear about Syosset? (optional)</label>
                                                    <select name="how_to_hear"  class="form-control">
                                                        <option selected="selected" hidden="hidden" value="" class="placeholder-option">Select One...</option>
                                                        <option value="video"> Video (YouTube)</option>
                                                        <option value="linkedin">Linkedin</option>
                                                        <option value="friends_family">Friends / Family</option>
                                                        <option value="phone_call">Phone Call</option>
                                                        <option value="press">Press (News, Blogs, etc.)</option>
                                                        <option value="tv_ad">TV Commercial</option>
                                                        <option value="insurance">Insurance Company</option>
                                                        <option value="facebook">Facebook</option>
                                                        <option value="social_media">Social Media (Twitter, Instagram, etc.)</option>
                                                        <option value="doctor_health_care_provider">Doctor / Health Care Provider</option>
                                                        <option value="mail">Mail</option>
                                                        <option value="search_engine"> Search Engine (Google, Bing, etc.)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
{{--                                            <input name="form_botcheck" class="form-control" type="hidden" value="" />--}}
                                            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10"> Next</button>
                                        </div>
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
