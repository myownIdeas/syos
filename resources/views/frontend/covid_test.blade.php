@extends('frontend.layout.main')
@section('content')
    <section class="corona_primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-cor">
                        <h2>COVID-19 <span>RAPID TEST</span> </h2>
                        <h4>Results in 15 minutes</h4>
                        <p>If you or a loved one are in need of a COVID-19 test, we can help on-site drive-in FDA Approved COVID-19 Rapid Test</p>
                        <a href="https://app.acuityscheduling.com/schedule.php?owner=21422947" target="_blank" >
                            <ul class="rapid">
                                <li>Rapid COVID-19 Testing</li>
                                <li>$100</li>
                            </ul>
                        </a>
                        <h3>How it works:</h3>
                        <ul>
                            <li><span> 01:</span> To sign-up for a 15 minute COVID-19 Rapid Test and pay online, please 
                            <a href="https://app.acuityscheduling.com/schedule.php?owner=21422947" target="_blank" ><strong>Schedule Now</strong></a></li>
                            <li><span> 02:</span>Drive-In to our customer parking lot 5 minutes prior to your appointment. </li>
                            <li><span> 03:</span> Stay in your car and call <a  href="tel:+5168651151">(516) 865-1151</a> once you arrive in the parking lot.</li>
                            <li><span> 04:</span> Our Clinical staff will come to your car and conduct the nasal swap test. </li>
                            <li><span> 05:</span> Wait 15 minutes for your results. </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-holder">
                        <img src="{{URL::to('/')}}/images/img-symtom.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="img-holder float-lg-right">
                        <img src="{{URL::to('/')}}/images/doctor.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-cor">
                        <h2>COVID-19 <span>LAB TEST</span> </h2>
                        <h4>Results in 3-5 business days</h4>

                        <p>On site drive-in <strong>COVID-19 Test</strong>. Please note this is not a rapid COVID-19 test and results take 3-5 business days. </p>
                        <a href="https://www.doineedacovid19test.com/Syosset_NY_2252.html" target="_blank">
                            <ul class="rapid">
                                <li>Covid-19 Lab Test</li>
                                <li>Free</li>

                            </ul>
                        </a>

                        <h3>How it works:</h3>
                        <ul>
                            <li><span> 01:</span> To sign-up for a free COVID-19 test, please  <a href="https://www.doineedacovid19test.com/Syosset_NY_2252.html" target="_blank">
                                <strong>Schedule Now</strong></a></li>
                            <li><span> 02:</span>Drive-In to our customer parking lot 5 minutes prior to your appointment. </li>
                            <li><span> 03:</span> Stay in your car and call <b> <a href="tel:5168651151">(516) 865-1151</a> </b> once you arrive in the parking lot.</li>
                            <li><span> 04:</span> Our Clinical staff will come to your car and conduct the nasal swap test. </li>
                            <li><span> 05:</span> Once your results are ready you will receive an e-mail. Please use your login and password to check your results. </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="testing-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <iframe src="https://app.acuityscheduling.com/schedule.php?owner=21422947" title="Schedule Appointment" width="100%" height="800" frameBorder="0"></iframe><script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>
            </div>

        </div>
    </div>
@endsection
