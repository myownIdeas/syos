<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::post('/create_payment','HomeController@makePaymentAndPlaceOrder');
Route::get('/','HomeController@index');
Route::get('/covid-19-test','HomeController@covidTest');


Route::get('/new_pharmacy_customer','HomeController@NewPharmacyCustomer');




Route::get('/transfer','HomeController@transfer');

Route::get('/faq','HomeController@faq');

Route::post('/add_pharmacy_customer','HomeController@addPharmacyCustomer');

Route::post('/transfer_rx','HomeController@transferRx');

Route::get('/get-payment-form','HomeController@paymentForm');

Route::post('/place_order','HomeController@makePaymentAndPlaceOrder');

Route::get('/product-detail/{name}','HomeController@productDetail');

Route::get('/service-detail/{name}','HomeController@serviceDetail');

Route::get('/let-get-started','HomeController@letGetStarted');

Route::post('/add-lets-get-started','HomeController@addLetsGetStarted');

Route::post('/order_tracker','HomeController@orderTracker');



Route::get('/add-to-cart','HomeController@addToCart');

Route::get('/get-cart-count','HomeController@getCartCount');

Route::get('/show-cart','HomeController@showCart');

Route::post('/update-cart','HomeController@updateCart');

Route::get('/delete-cart-items','HomeController@deleteCartItems');

Route::get('/proceed-cart','HomeController@proceedCart');

Route::get('/about-us','HomeController@about');

Route::get('/get-state','HomeController@getState');

Route::get('/get-cities','HomeController@getCities');

Route::post('/add-inquiry','HomeController@addInquiry');

Route::get('/show-testimonial-page','AdminController@showTesimonialPage');

Route::post('/save-testimonial','AdminController@addTesimonial');

Route::get('/list-testimonial','AdminController@showTesimonialList');

Route::get('/show-testemonial-update-page/{id}','AdminController@showTesimoniaUpdatePage');

Route::post('/update-testimonial','AdminController@updateTestiminol');

Route::get('/deleteItems','AdminController@deleteItems');

Route::get('/all_products','HomeController@showAllProducts');

Route::get('/get-products-by-category_id/{id}','HomeController@getProductsByCategoryId');













Route::get('/show-services-page','AdminController@showServicsPage');

Route::post('/save-services','AdminController@saveServices');

Route::get('/list-services','AdminController@servicesList');

Route::get('/show-service-update-page/{id}','AdminController@showUpdatePageForServices');

Route::post('/update-services','AdminController@updateService');

Route::get('/delete-services/{id}','AdminController@deleteService');

//---------------------------------------------------


Route::get('/show-resources-page','AdminController@showResourcesPage');

Route::post('/save-resources','AdminController@saveResources');

Route::get('/list-resources','AdminController@resourcesList');

Route::get('/show-resources-update-page/{id}','AdminController@showUpdatePageForResources');

Route::post('/update-resources','AdminController@updateResources');

Route::get('/delete-resources/{id}','AdminController@deleteResources');

//-----------------------------------------------------------


//---------------------------------------------------


Route::get('/show-cbd-page','AdminController@cbdPage');

Route::post('/save-cbd','AdminController@saveCbd');

Route::get('/list-cbd','AdminController@cbdList');

Route::get('/show-cbd-update-page/{id}','AdminController@showUpdatePageForResources');

Route::post('/update-cbd','AdminController@updateResources');

Route::get('/delete-cbd/{id}','AdminController@deleteResources');

Route::get('/cbd','HomeController@cbd');

//-----------------------------------------------------------


Route::get('/admin','AdminController@loginPage');

Route::post('/admin/login','AdminController@loginUser');

Route::get('/dashboard','AdminController@index');

Route::get('/add-products','AdminController@addProducts');

Route::post('/save-products','AdminController@saveProducts');

Route::post('/update-products','AdminController@updateProducts');

Route::get('/list-products','AdminController@listProducts');

Route::get('/show-update-page/{id}','AdminController@showUpdatePage');

Route::get('/delete-products/{id}','AdminController@deleteProducts');

Route::get('/get-product-detail/{id}','HomeController@showProductDetail');

Route::get('/get-discount-products','HomeController@getAllDiscountProducts');

Route::get('/products','HomeController@getAllProducts');

Route::get('/pharmacy-contact-us','HomeController@contact');

Route::post('/contact-us-record','HomeController@addContactUsRecord');

Route::get('/contact-us-record-show','AdminController@showContactUsRecord');

Route::get('/biography','HomeController@biography');

Route::post('/get-search-results','HomeController@getSearchRecords');

Route::post('/add-inquiry','HomeController@addInquiry');

Route::get('/get-search-results-by-category','HomeController@getSearchRecordsByCategory');

Route::get('/show-inquiry','AdminController@showInquiry');


Route::get('/pharmacy-services','HomeController@showServices');

Route::get('/pharmacy-resources','HomeController@showResources');

Route::get('/pharmacy-specialty-medications','HomeController@pharmacySpecialtyMedications');

Route::get('/show-brand-category','AdminController@showBranPage');

Route::get('/show-brand-category-list','AdminController@showBranPageList');

Route::post('/save-brands','AdminController@addBrands');

Route::get('/get-sub-categories','AdminController@getSubCategories');

Route::get('/change-status-for-product','AdminController@changeProductStatus');

Route::get('/change-status-for-order','AdminController@changeOrderStatus');

Route::get('/change-status-for-brand','AdminController@changeBrandStatus');

Route::get('/show-partner-page','AdminController@showPartnerPage');

Route::post('/save-partner','AdminController@addPartner');

Route::get('/show-partner-list','AdminController@partnerList');

Route::get('/delete-partner/{id}','AdminController@deletePartner');

Route::get('/get-product-by-brands/{id}','HomeController@getProductsByBrands');

Route::get('/change-name-for-brand','AdminController@updateBrandName');

Route::get('/list-orders','AdminController@orderLists');

Route::get('/order_detail/{id}','AdminController@orderDetail');

Route::get('/about','HomeController@about');

Route::get('/list-get-started','AdminController@showListGetStarted');

Route::get('/sign-out',function (){
    session_destroy();
    return redirect('/admin');
});

