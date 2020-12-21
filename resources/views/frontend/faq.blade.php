@extends('frontend.layout.main')
@section('content')
        <!-- Start main-content -->
<div class="main-content">

    <!-- Section: inner-header -->
     <section class="inner-header divider parallax layer-overlay overlay-white-5" data-bg-img="assets/images/bg/bg6.jpg">
            <div class="container pt-70 pb-20">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="title text-center">FAQ</h2>
{{--                            <ol class="breadcrumb text-center text-white mt-10">--}}
{{--                                <li><a href="#">Home</a></li>--}}
{{--                                <li><a href="#">Pages</a></li>--}}
{{--                                <li class="active text-silver-gray">Page Title</li>--}}
{{--                            </ol>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <style>
        
           
            .faqs h3 {
    margin-bottom: 30px;
}
h3 {
    font-size: 28px;
}
.faqs {
    padding: 50px 0;
}

.faqs h3 {
    margin-bottom: 30px
}

.faqs .title:after {
    left: 0;
    transform: inherit;
}

.card-faqs {
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-radius: 0px;
    overflow: hidden;
    border-bottom: 1px solid #efefef;
}

.card-faqs .faqs-head a {
    display: flex;
    align-items: center;
    text-decoration: none;
    min-height: 20px;
    font-size: 16px;
    color: #000;
    font-weight: 600;
}

.card-faqs .faqs-head a:after {
    min-width: 20px;
    height: 20px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 12px;
    margin-left: 15px
}

.card-faqs .faqs-head a[aria-expanded="false"]:after {
    font-family: "Font Awesome 5 pro";
    font-weight: 900;
    margin-left: auto;
}

.card-faqs .faqs-head a[aria-expanded="true"]:after {
    font-family: "Font Awesome 5 pro";
    font-weight: 900;
    margin-left: auto;
    background-color: #ff5552;
    color: #fff;
}


.card-faqs .faqs-head a[aria-expanded="true"] {
    color: #005b88;
}


.faq-contact {
    position: relative;
    margin-top: 30px;
    border: 1px solid #efefef;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 30px;
    background-position: bottom center;
    overflow: hidden;
}

.faq-contact img {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
	z-index:-1;
}

.faq-contact h3 {
    margin-bottom: 10px;
}

.faq-contact p {
    font-size: 16px;
    margin-bottom: 20px;
}

.faq-contact .btn i {
    margin-right: 8px
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.cta-primary {
    background-color: #005b88;
    color: #fff;
    border: 1px solid #005b88;
}

            
        </style>

<section class="faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <h3>Patients</h3>

                    <div id="accordion">
                        <div class="card-faqs">
                            <div class="faqs-head">
                                <a data-toggle="collapse" href="#q6" aria-expanded="false">
                                    How much does Syosset Pharmacy charge for delivery?
                                </a>
                            </div>
                            <div class="collapse" id="q6" data-parent="#accordion">
                                <div class="faqs-body">
                                    <p>Our prescription delivery service is free.<br>
&nbsp;</p>


                                </div>
                            </div>
                        </div>
                        <div class="card-faqs">
                            <div class="faqs-head">
                                <a data-toggle="collapse" href="#q7" aria-expanded="false">
                                    Does Syosset Pharmacy take my insurance?
                                </a>
                            </div>
                            <div class="collapse" id="q7" data-parent="#accordion">
                                <div class="faqs-body">
                                    <p>We accept all major insurance plans, including Medicaid and Medicare.</p>


                                </div>
                            </div>
                        </div>
                        <div class="card-faqs">
                            <div class="faqs-head">
                                <a data-toggle="collapse" href="#q8" aria-expanded="false">
                                    How do I send my prescription(s) to Syosset Pharmacy?
                                </a>
                            </div>
                            <div class="collapse" id="q8" data-parent="#accordion">
                                <div class="faqs-body">
                                    <p>&nbsp;You can send your prescriptions to Syosset Pharmacy by informing your doctor, who may need our National Council for Prescription Drug Programs (NCPDP), which is 5827970. Or you can simply call our main line at&nbsp;&nbsp;&nbsp;<a href="tel:(516) 865-1151">(516) 865-1151</a>,and we can get in touch with your doctor to handle your prescription(s).</p>


                                </div>
                            </div>
                        </div>
                        <div class="card-faqs">
                            <div class="faqs-head">
                                <a data-toggle="collapse" href="#q9" aria-expanded="false">
                                    How do I transfer my prescription refills to Syosset Pharmacy?
                                </a>
                            </div>
                            <div class="collapse" id="q9" data-parent="#accordion">
                                <div class="faqs-body">
                                    <p>To transfer your prescription refills to Syosset Pharmacy, you can fill out this form [hyperlink to the form that exists on the Landing Page], or, you can call us at <a href="tel:6313236337">(631) 323-6337</a>, and we can get in touch with your previous pharmacy.</p>


                                </div>
                            </div>
                        </div>
                        {{--<div class="card-faqs">--}}
                            {{--<div class="faqs-head">--}}
                                {{--<a data-toggle="collapse" href="#q10" aria-expanded="false">--}}
                                    {{--Is there a fee for The Compass (strip packaging)?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="collapse" id="q10" data-parent="#accordion">--}}
                                {{--<div class="faqs-body">--}}
                                    {{--<p>No. Our strip packaging service is free of cost to you and your insurance company. Our goal with “The Compass�? is to help you with your medication regimen.</p>--}}


                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="card-faqs">
                            <div class="faqs-head">
                                <a data-toggle="collapse" href="#q11" aria-expanded="false">
                                    Can I speak with a pharmacist to update my health information?
                                </a>
                            </div>
                            <div class="collapse" id="q11" data-parent="#accordion">
                                <div class="faqs-body">
                                    <p>Absolutely. You can call Syosset Pharmacy to speak with a pharmacist to provide updates to your health which will be recorded appropriately. You can also update your health information by logging into the Syosset Pharmacy portal to let us know of any changes in your condition.</p>


                                </div>
                            </div>
                        </div>
                        <div class="card-faqs">
                            <div class="faqs-head">
                                <a data-toggle="collapse" href="#q12" aria-expanded="false">
                                    What if my insurance changed?
                                </a>
                            </div>
                            <div class="collapse" id="q12" data-parent="#accordion">
                                <div class="faqs-body">
                                    <p>If you need to update your insurance information, you can call Syosset Pharmacy to speak with our staff or log on to the Syosset Pharmacy portal to update with your new plan.</p>


                                </div>
                            </div>
                        </div>
                        <div class="card-faqs">
                            <div class="faqs-head">
                                <a data-toggle="collapse" href="#q13" aria-expanded="false">
                                    Is my medical information confidential?
                                </a>
                            </div>
                            <div class="collapse" id="q13" data-parent="#accordion">
                                <div class="faqs-body">
                                    <p>Any information that you provide to Syosset Pharmacy is strictly confidential and in accordance with the Health Insurance Portability and Accountability Act (HIPAA).</p>


                                </div>
                            </div>
                        </div>
                        <div class="card-faqs">
                            <div class="faqs-head">
                                <a data-toggle="collapse" href="#q14" aria-expanded="false">
                                    What if I have more questions?
                                </a>
                            </div>
                            <div class="collapse" id="q14" data-parent="#accordion">
                                <div class="faqs-body">
                                    <p>Not a problem. E-mail us at <a href="mailto:hello@syossetpharmacy.com">hello@syossetpharmacy.com</a> or to speak with a representative call <a href="tel:(516) 865-1151">(516) 865-1151</a></p>


                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="mt-lg-5 mt-3">Providers</h3>

                    <div id="accordion2">
                        <div class="card-faqs">
                            <div class="faqs-head">
                                <a data-toggle="collapse" href="#q15" aria-expanded="false">
                                    What happens if I send a patient’s prescription to Syosset Pharmacy?
                                </a>
                            </div>
                            <div class="collapse" id="q15" data-parent="#accordion2">
                                <div class="faqs-body">
                                    <p>Once we receive the prescription notification, our team will immediately call the patient to verify their address for delivery, allergies, and insurance information</p>


                                </div>
                            </div>
                        </div>
                        <div class="card-faqs">
                            <div class="faqs-head">
                                <a data-toggle="collapse" href="#q16" aria-expanded="false">
                                    Does Syosset Pharmacy handle prior authorizations?
                                </a>
                            </div>
                            <div class="collapse" id="q16" data-parent="#accordion2">
                                <div class="faqs-body">
                                    <p>Yes. Let us deal with the insurance companies so that you can focus on providing care to your patients.</p>


                                </div>
                            </div>
                        </div>
                        <div class="card-faqs">
                            <div class="faqs-head">
                                <a data-toggle="collapse" href="#q17" aria-expanded="false">
                                    Can I refer a patient for The Compass (strip packaging)?
                                </a>
                            </div>
                            <div class="collapse" id="q17" data-parent="#accordion2">
                                <div class="faqs-body">
                                    <p>Yes, you can! If you would like to refer a patient for our strip packaging service, you can call us at (516) 865-1151 and our intake specialist will coordinate with you on setting them up on the plan.</p>


                                </div>
                            </div>
                        </div>
                        <div class="card-faqs">
                            <div class="faqs-head">
                                <a data-toggle="collapse" href="#q18" aria-expanded="false">
                                    Does Syosset Pharmacy offer chronic care management services?
                                </a>
                            </div>
                            <div class="collapse" id="q18" data-parent="#accordion2">
                                <div class="faqs-body">
                                    <p>Yes. Our pharmacists and clinical staff work with healthcare providers as part of the patient’s care team. We work closely with patients to provide them with education and resources to help manage chronic or life-threatening conditions, and provide updates to their provider accordingly.</p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="faq_sidebar">
                        <img src="images/group3.png" alt="" class="img-fluid d-none d-lg-block">
                        <div class="faq-contact">
                            <h3>How Can <br> We Help You </h3>
                            <p>We understand the importance approaching eash work integrally and believe in the power of simple and easy communication.</p>
                            <a href="https://www.vitaminpack.com/syossetpharmacy.vitaminpack.com/public/pharmacy-contact-us" class="btn cta-primary"> Contact Us</a>
                            <img src="images/mail-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
<!-- end main-content -->

@endsection
