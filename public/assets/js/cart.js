
// $(document).ready(function() {
//     var interval = 2000;

//     setInterval(showCartCount, interval);
// });
function removeCartItem(itemId) {
    var result = confirm('Are you sure you want to delete this item?');
    if(result) {
        $.ajax({
            url: mainUrl + "/delete-cart-items",
            type: 'GET',
            data: {itemId: itemId},
            success: function (response) {
                window.location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error: ' + jqXHR.status);
            } // <-- remove the trailing comma you had here
        });
    }
}
function addToCart(session,productId,name) {
    var qty = $('#for_detail_page').val();
    $.ajax({
        url: mainUrl+"/add-to-cart",
        type: 'GET',
        data: { session: session, productId:productId,qty:qty},
        success : function(response) {
            swal('Success',"your product is added into cart?",'success', {
                buttons: {
                    catch: {
                        text: "OK",
                        value: "catch",
                    },
                },
            })
                .then((value) => {
                switch (value) {


            case "catch":
                window.location.replace(mainUrl+'/product-detail/'+name);
                break;

            }
        });
        },
        error : function(jqXHR, textStatus, errorThrown) {
            alert('Error: '+jqXHR.status);
        } // <-- remove the trailing comma you had here
    });
}

function showCartCount(interval) {
    $.ajax({
        url: mainUrl+"/get-cart-count",
        type: 'GET',
        data: {},
        success : function(response) {
            $('#cart_count').text(response)
        },

        error : function(jqXHR, textStatus, errorThrown) {
            alert('Error: '+jqXHR.status);
        } // <-- remove the trailing comma you had here
    });
}

function getState(countryId) {
    $.ajax({
        url: mainUrl+"/get-state",
        type: 'GET',
        data: {countryId:countryId},
        success : function(response) {
            var html ='';
            $.each(response,function (index,value) {
                html +='<option value="'+value.id+'">'+value.name+'</option>'
            })
            $('#states').empty();
            $('#states').append(html);
        },

        error : function(jqXHR, textStatus, errorThrown) {
            alert('Error: '+jqXHR.status);
        } // <-- remove the trailing comma you had here
    });
}
function getCities(stateId) {
    $.ajax({
        url: mainUrl+"/get-cities",
        type: 'GET',
        data: {stateId:stateId},
        success : function(response) {
            var html ='';
            $.each(response,function (index,value) {
                html +='<option value="'+value.id+'">'+value.name+'</option>'
            })
            $('#cities').empty();
            $('#cities').append(html);
        },

        error : function(jqXHR, textStatus, errorThrown) {
            alert('Error: '+jqXHR.status);
        } // <-- remove the trailing comma you had here
    });
}
function increaseQty(price){
    var qty = (parseInt($('#for_detail_page').val(),10));
    qty++;
    calcolatePrice(price,qty)
}
function decreaseQty(price) {
    var qty = (parseInt($('#for_detail_page').val(),10));
    qty--;
    if(qty <=0 ){

        $('#for_detail_page').val(2);
        calcolatePrice(price,1)
        swal("Warning!", "Quantity Could Not Less Then 1", "warning");
    }else{
        calcolatePrice(price,qty)
    }

}
function calcolatePrice(price,qty) {
    var orgPrice = qty * price;
    $('.dd_price').text('$'+orgPrice);
}
