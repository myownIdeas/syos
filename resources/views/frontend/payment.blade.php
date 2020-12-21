


<script type="text/javascript" src="https://js.squareupsandbox.com/v2/paymentform">
</script>
<link rel="stylesheet" type="text/css" href="{{url('assets/css/squre.css')}}">
<script src="{{url('assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{url('assets/js/jquery-ui.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    var mainUrl ="";
    mainUrl = '<?php echo e(URL::to('/')); ?>';
</script>
<section>
    <div class="col-md-12">
        <h3>Payment Information</h3>
        <div class="payment-method">


            <div class="container">
                <div class='row'>
                    <div class='col-md-4'></div>
                    <div class='col-md-4'>

                        <input type="hidden" id="nonc_amount" value="{{$payment}}">
                        <div id="sq-card-number"></div>
                        <span id="card" style="color:red;"></span>
                        <div class="third" id="sq-expiration-date"></div>
                        <span id="exp_date" style="color:red;"></span>
                        <div class="third" id="sq-cvv"></div>
                        <span id="cvv" style="color:red;"></span>
                        <div class="third" id="sq-postal-code"></div>
                        <span id="post_code" style="color:red;"></span>
                        <button id="sq-creditcard" class="button-credit-card" onclick="onGetCardNonce(event)">Pay ${{number_format($payment,2)}}</button>
                        <div class='col-md-4'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    const paymentForm = new SqPaymentForm({
        applicationId: 'sandbox-sq0idb-1K6JE1rsbDtYYmKYoxuAmg',
        inputClass: 'sq-input',
        inputStyles: [{
            fontSize: '16px',
            lineHeight: '24px',
            padding: '16px',
            placeholderColor: '#a0a0a0',
            backgroundColor: 'transparent',
        }],
        cardNumber: {
            elementId: 'sq-card-number',
            placeholder: 'Card Number'
        },
        cvv: {
            elementId: 'sq-cvv',
            placeholder: 'CVV'
        },
        expirationDate: {
            elementId: 'sq-expiration-date',
            placeholder: 'MM/YY'
        },
        postalCode: {
            elementId: 'sq-postal-code',
            placeholder: 'Postal'
        },
        // SqPaymentForm callback functions
        callbacks: {
            cardNonceResponseReceived: function (errors, nonce, cardData) {

                $('#card').text('');
                $('#cvv').text('');
                $('#exp_date').text('');
                $('#post_code').text('');
                if (errors) {
                    console.log(errors);


                    errors.forEach(function(error) {
                        if(error.field =="cardNumber"){
                            $('#card').text(error.message)
                        }
                        if(error.field =="cvv"){
                            $('#cvv').text(error.message)
                        }
                        if(error.field =="expirationDate"){
                            $('#exp_date').text(error.message)
                        }
                        if(error.field =="postalCode"){
                            $('#post_code').text(error.message)
                        }
                        //alert('  ' + error.message);
                    });

                } else {

                    $.ajax({
                        url: mainUrl + "/create_payment",
                        type: 'get',
                        data: {nonce: nonce,amount:$('#nonc_amount').val()},
                        success: function (response) {
                            swal("Success!", "your payment has been captured", "success");
                          //  alert('');
                           // window.location.reload();
                        },
                        error: function (jqXHR, textStatus, errorThrown) {

                            swal("Error!", "something went wrong with the payment", "warning");
                            //alert('Error: ' + jqXHR.status);
                        } // <-- remove the trailing comma you had here
                    });
                    //$('#nonce_keu').val(nonce);
                    //alert('Nonce received: ' + nonce);

                }
            }
        }
    });

    function onGetCardNonce(event) {

        paymentForm.requestCardNonce();
    }

</script>



























