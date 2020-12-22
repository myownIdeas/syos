<?php

namespace App\Http\Controllers;

use Dompdf\Exception;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Products;
use App\Resources;
use App\Services;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Stripe\Stripe;

use Square\SquareClient;
use Square\LocationsApi;
use Square\Exceptions\ApiException;
use Square\Http\ApiResponse;
use Square\Models;
use Square\Environment;
use Square\Models\CreateCustomerRequest;

class HomeController extends Controller
{
    public function __construct()
    {

    }
    public function index(){
        return view('frontend.home')
          ->with('products',$this->getProducts())
          ->with('testes',$this->getTestemonial())
            ->with('services',$this->getServices());
    }

    public function NewPharmacyCustomer(){
        return view('frontend.new_pharmacy_customer');
    }

    public function transfer(){
        return view('frontend.transferr');
    }

    public function faq(){
        return view('frontend.faq');
    }

    public function addPharmacyCustomer(Request $request){
        $record = $request->all();
        \Mail::send('email.pharmacy_customer',array('record' => $record ),
            function ($message) use ($record)
            {
                $message->to('hello@syossetpharmacy.com','syossetpharmacy')->subject('Pharmacy Customer');
                $message->cc('onlyzainulabidin@gmail.com');
                $message->cc('Signup@delivermymeds.com');
//                   $message->cc('sc@delivermymeds.com');
//                   $message->cc('mian@delivermymeds.com');

            });
        \Session::flash ( 'inquiry', 'Your inquiry has been received we will contact you shortly' );
        return redirect('/new_pharmacy_customer');
    }

    public function transferRx(Request $request){

        $record = $request->all();
        \Mail::send('email.transfer_rx',array('record' => $record ),
            function ($message) use ($record)
            {
                $message->to('hello@syossetpharmacy.com','syossetpharmacy')->subject('Pharmacy Customer');
                $message->cc('onlyzainulabidin@gmail.com');
                $message->cc('Signup@delivermymeds.com');
//                   $message->cc('sc@delivermymeds.com');
//                   $message->cc('mian@delivermymeds.com');

            });
        \Session::flash ( 'inquiry', 'Your inquiry has been received we will contact you shortly' );
        return redirect('/transfer');
    }

    public function getServices(){
        return DB::table('services')->limit(6)->get();
    }
     public function getTestemonial(){
        return DB::table('testimonial')->where('is_deleted',0)->get();
    }
    public function getProducts(){
       return  DB::table('products')
           ->limit(6)->orderBy('id','DESC')->get();
    }
    public function addToCart(Request $request){
        $record = [
          'temp_id'=>$request->get('session'),
          'product_id'=>$request->get('productId'),
          'qty'=>$request->has('qty')?$request->get('qty'):1,
        ];
        DB::table('temp_cart')->insert($record);
        return 'true';
    }

    public function getCartCount(){
        return DB::table('temp_cart')->where('temp_id',$_SESSION['cart_temp_id'])->count();
    }

    public function showCart(){
        return view('frontend.cart')
            ->with('items',$this->showCartItems());
    }
    public function showCartItems(){
        $final = [];
        $records =  DB::table('temp_cart')->where('temp_id',$_SESSION['cart_temp_id'])->get();
        foreach ($records as $record){
            $final[] = $record->product_id;
        }
        return $this->getProductById($final);
    }
    public function getProductById($ids){
        return DB::table('products')
            ->select('products.*','temp_cart.qty','temp_cart.id as temp_id')
            ->join('temp_cart','temp_cart.product_id','=','products.id')

            ->whereIn('products.id',$ids)->get();
    }
    public function updateCart(Request $request){
        $final = [];
        $quantity = $request->get('quantity');
        $prices = $request->get('price');

        foreach ($request->get('cart_id') as $key=>$value){
            $final= [
               'qty'=>$quantity[$key],
               'price'=> ($quantity[$key]  * $prices[$key])
            ];
            DB::table('temp_cart')->where('id',$value)->update($final);
        }
        return redirect('/show-cart');
    }

    public function deleteCartItems(Request $request){
        DB::table('temp_cart')->where('id',$request->get('itemId'))->delete();
        return 'true';
    }
    public function contact(){
        return view('frontend.contact_us');
    }
    public function addContactUsRecord(Request $request){
        $record = [
          'name'=>$request->get('name'),
          'email'=>$request->get('email'),
          'phone'=>$request->get('phone'),
          'subject'=>$request->get('subject'),
          'msg'=>$request->get('msg')
        ];
        DB::table('contact_us')->insert($record);
        return redirect('/contact');
    }
    public function proceedCart(Request $request){
        return view('frontend.checkout')
            ->with('items',$this->showCartItems())
            ->with('countries',$this->getCountries());
    }
    public function getCountries(){
        return DB::table('countries')->get();
    }
//    public function aboutUs(){
//        return view('frontend.about_us');
//    }
    public function getState(Request $request){
      return  DB::table('states')
            ->where('country_id',$request->get('countryId'))
            ->get();
    }
    public function getCities(Request $request){
        return  DB::table('cities')
            ->where('state_id',$request->get('stateId'))
            ->get();
    }
    public function addInquiry(Request $request){
       try{
           $record = [
               'name'=>$request->get('form_name'),
               'email'=>$request->get('form_email'),
               'phone'=>$request->get('form_phone'),
               'state'=>$request->get('form_state')
           ];
           DB::table('inquiry')->insert($record);
           \Mail::send('email.inquiry',array('record' => $record ),
               function ($message) use ($record)
               {
                   $message->to($record['email'],'Syosset')->subject('Syosset Pharmacy User Inquiry Email');
                   $message->cc('onlyzainulabidin@gmail.com');
                   $message->cc('Signup@delivermymeds.com');
               });
           \Session::flash ( 'inquiry', 'Your inquiry has been received we will contact you shortly' );
           return redirect('/');
       } catch (Exception $e){

       }
    }
    public function showAllProducts(){
        return view('frontend.all_products')
            ->with('products',$this->getAllProducts())
            ->with('categories',$this->getCatProductCout($this->getAllCategories()));
    }
    public function getCatProductCout($records){
        $final = [];
        foreach ($records as $record){
            $final[] = ['id'=>$record->id,'name'=>$record->name,'count'=>$this->countProductByCatId($record->id)];
        }
        return $final;
    }
    public function countProductByCatId($catId){
        return DB::table('products')->where('category_id',$catId)->count();
    }
    public function getAllProducts(){
        return DB::table('products')->paginate(15);
    }
    public function getAllCategories(){
        return DB::table('category')
            ->select('category.*')
           ->where('category.is_active',1)
            ->get();
    }
    public function getProductsByCategoryId($catId){
        return view('frontend.all_products')
            ->with('products',DB::table('products')->where('category_id',$catId)->paginate(15))
            ->with('categories',$this->getCatProductCout($this->getAllCategories()));

    }
    public function paymentForm(Request $request){
        return view('frontend.payment')->with('payment',$request->get('payment'));
    }

    public function getLocationId($client){
        $locationId = [];
        try {
            $locationsApi = $client->getLocationsApi();
            $apiResponse = $locationsApi->listLocations();

            if ($apiResponse->isSuccess()) {
                $listLocationsResponse = $apiResponse->getResult();
                $locationsList = $listLocationsResponse->getLocations();
                foreach ($locationsList as $location) {
                   $locationId =  $location;
                }
            } else {
                print_r($apiResponse->getErrors());
            }
        } catch (ApiException $e) {
            print_r("Recieved error while calling Square: " . $e->getMessage());
        }

        return $locationId;
    }

    public function clientId($client ,$params){
        $customer = '';
        $customersApi = $client->getCustomersApi();

// Create customer
        $request = new CreateCustomerRequest;
        $request->setGivenName($params['first_name']);
        $request->setFamilyName($params['last_name']);
        $request->setPhoneNumber("(516) 865-1151");
        $request->setNote($params['order_note']);

        try {
            $result = $customersApi->createCustomer($request);

            if ($result->isSuccess()) {
                $customer = $result->getResult()->getCustomer()->getId();
            } else {
                print_r($result->getErrors());
            }
        } catch (ApiException $e) {
            print_r("Recieved error while calling Square: " . $e->getMessage());
        }
        return $customer;
    }
    public function makePaymentAndPlaceOrder(Request $request){
       // dd($request->all());
        $client = new SquareClient([
            'accessToken' => 'EAAAEPIFfHVYTqyZOOrhJkk_6e7c0cWHXNSmGp1GrSgdUdAMksEHq4_IbWBMRCsN',
            'environment' => Environment::SANDBOX,
        ]);

        //$locationId = $this->getLocationId($client);
        $customer = (object)$this->clientId($client,$request->all());

        //dd($locationId);

        $paymentsApi = $client->getPaymentsApi();
        $body_sourceId = $request->get('nonce_toke_for_payment');
        $body_idempotencyKey =  $customer->scalar;
        $body_amountMoney = new Models\Money;
        $body_amountMoney->setAmount($request->get('amount')*100);
        $body_amountMoney->setCurrency(Models\Currency::USD);
        $body = new Models\CreatePaymentRequest(
            $body_sourceId,
            $body_idempotencyKey,
            $body_amountMoney
        );
        $body->setCustomerId('VDKXEEKPJN48QDG3BGGFAK05P8');
        $body->setLocationId('LDSEGM7HAMR2J');
        $body->setReferenceId('123456');
        $body->setNote('Brief description');

        $apiResponse = $paymentsApi->createPayment($body);

        if ($apiResponse->isSuccess()) {
            $createPaymentResponse = $apiResponse->getResult();
            //dd($createPaymentResponse);
            $this->placeOrder($request);
            return redirect('/all_products')->with('msg','Yor order is placed and payment is take we will contact with you shortly');
        } else {
            $errors = $apiResponse->getErrors();
            return redirect('/all_products')->with('error','something went wrong with the payment');
        }
//        Stripe::setApiKey ( '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' );
//        $token = $request->get('reservation');
//       try {
////            \Stripe\Charge::create ( array (
////                "amount" => $request->get('org_price') * 100,
////                "currency" => "usd",
////                "source" => $token['stripe_token'], // obtained with Stripe.js
////                "description" => $request->get('first_name').' '.$request->get('last_name').' Do this payment'
////            ) );
         //   $this->placeOrder($request);
//
//            \Session::flash ( 'success-message', 'Payment done successfully !' );
//            return \Redirect::back ();
//        } catch ( \Exception $e ) {
//            \Session::flash ( 'fail-message', "Error! Please Try again." );
//            return \Redirect::back ();
//        }
    }
    public function placeOrder(Request $request){

        $order = [
            'first_name'=>$request->get('first_name'),
            'last_name'=>$request->get('last_name'),
            'company_name'=>$request->get('company_name'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'country_id'=>$request->get('country_id'),
            'state_id'=>$request->get('state_id'),
            'city_id'=>$request->get('city_id'),
            'order_note'=>$request->get('order_note'),
        ];

        $orderId = DB::table('orders')->insertGetId($order);
        $order['orderId'] = $orderId;
        $this->addOrderDetail($orderId);
        $this->deleteTempCartBySession();
        \Mail::send('email.order',array('record' => $order ),
            function ($message) use ($order)
            {
                $message->to($order['email'],'Syosset')->subject('Syosset Pharmacy New Order Email');
                $message->cc('onlyzainulabidin@gmail.com');
                $message->cc('Signup@delivermymeds.com');
//                   $message->cc('sc@delivermymeds.com');
//                   $message->cc('mian@delivermymeds.com');
               // $message->cc('waqas@kansassoft.com');
            });
        return true;
    }
    public function addOrderDetail($orderId){
        $final = [];
        $records = $this->getTempCartRecordsBySession();
        foreach ($records as $record){
            $product = $this->getProductById([$record->product_id]);
            $final[] = [
                'order_id'=>$orderId,
                'product_id'=>$record->product_id,
                'qty'=>$record->qty,
                'price'=>($record->qty * $product[0]->price),
                'session_id'=>$record->temp_id
            ];

        }
        DB::table('order_detail')->insert($final);
        return true;
    }

    public function covidTest(Request $request){
        return view('frontend.covid_test');
    }
    public function deleteTempCartBySession(){
        return DB::table('temp_cart')->where('temp_id',$_SESSION['cart_temp_id'])->delete();
    }
    public function getTempCartRecordsBySession(){
        return DB::table('temp_cart')->where('temp_id',$_SESSION['cart_temp_id'])->get();
    }
    public function productDetail($name){
        $product = $this->getProductDetailByName($name);
        return view('frontend.product_detail')
            ->with('product',$product)
            ->with('productCodes',$this->getProductCodes($product[0]->id))
            ->with('relatedProducts',$this->getRelatedProducts($product[0]->id));
    }
    public function getProductDetail($ids){
        return DB::table('products')
            ->select('products.*','category.name as catName')

            ->join('category','category.id','=','products.category_id')
            ->where('products.id',$ids)->get();
    }
    public function getProductDetailByName($name){
        return DB::table('products')
            ->select('products.*','category.name as catName')

            ->join('category','category.id','=','products.category_id')
            ->where('products.slug',$name)->get();
    }
    public function getProductCodes($productId){
        return DB::table('product_codes')
            ->select('product_codes.*')
            ->where('product_id',$productId)->get();
    }
    public function getRelatedProducts($productId){
        $product = Products::find($productId);
      return DB::table('products')->where('category_id',$product->category_id)->inRandomOrder()->limit(10)->get();
    }
    public function showServices(){
        
        
        return view('frontend.services')->with('services',Services::all());
    }
    public function showResources(){
        return view('frontend.resources')->with('resources',Resources::all());
    }
    public function pharmacySpecialtyMedications(){
        return view('frontend.special_medicine');
    }
    public function serviceDetail($name){
        return view('frontend.service_detail')->with('detail',Services::where('name',$name)->get());
    }
    public function letGetStarted(){
        return view('frontend.lets_get_started');
    }
    public function addLetsGetStarted(Request $request){
        $step = $request->get('step');

        switch ($step){
        case 1:
            $recordId = $this->stepOne($request);
            $this->sendEmailForLetGetStarted($recordId);
            return view('frontend.step_2')->with('recordId',$recordId);
        break;
        case 2:
            $this->stepTwo($request);
            return view('frontend.step_3')->with('recordId',$request->get('recordId'));
        break;
        case 3:
            $this->stepThree($request);
            return view('frontend.step_4')->with('recordId',$request->get('recordId'));
        break;
        case 4:
                $this->stepFour($request);
                return view('frontend.step_6')->with('recordId',$request->get('recordId'));
         break;
         case 5:
             // add you pharmacy

                $this->stepFive($request);
                return view('frontend.step_7')->with('recordId',$request->get('recordId'));
         break;
         case 6:
                $medicationId =$this->stepSix($request);
                if(isset($request->get('doctor_name')[0]) && $request->has('doctor_name')){
                    $this->addMedicationDoctor($request->get('recordId'),$medicationId,$request->all());
                }
                if(isset($request->get('pharmacy_name')[0]) &&$request->has('pharmacy_name')){
                    $this->addMedicationPatient($request->get('recordId'),$medicationId,$request->all());
                }

                return view('frontend.step_8')->with('recordId',$request->get('recordId'));
         break;
        case 7:

          //  $this->stepSix($request);
            return view('frontend.step_9')->with('recordId',$request->get('recordId'));
            break;
        case 8:

                  $this->stepEight($request);

                return view('frontend.step_11')
                    ->with('recordId',$request->get('recordId'))
                    ->with('doctor',DB::table('patient_doctor')->where('patient_id',$request->get('recordId'))->first())
                    ->with('pharmacy',DB::table('patient_pharmacy')->where('patient_id',$request->get('recordId'))->first())
                    ->with('medication',DB::table('patient_medication')->where('patient_id',$request->get('recordId'))->first())
                    ->with('insurance',DB::table('patient_insurance')->where('patient_id',$request->get('recordId'))->first());
                break;

        default:

        }
        return true;
    }
    public function addMedicationDoctor($patientId,$medicationId,$params){
        $records =[];
        foreach($params['doctor_name'] as $key=>$doctor){
            $records[] =[
                'patient_id'=>$patientId,
                'name'=>$doctor,
                'phone'=>$params['doctor_phone'][$key],
                'medication_id'=>$medicationId,

            ];
        }
        DB::table('patient_medication_doctor')->insert($records);
    }
    public function addMedicationPatient($patientId,$medicationId,$params){
        $records =[];
        foreach($params['pharmacy_name'] as $key=>$pharmacy){
            $records[] =[
                'patient_id'=>$patientId,
                'name'=>$pharmacy,
                'phone'=>$params['pharmacy_phone'][$key],
                'medication_id'=>$medicationId,

            ];
        }
        DB::table('patient_medication_pharmacy')->insert($records);
    }
    public function sendEmailForLetGetStarted($orderId){
            $patientDetail =DB::table('patient_detail')->where('id',$orderId)->first();

//            $doctor =DB::table('patient_doctor')->where('patient_id',$orderId)->first();
//            $pharmacy=DB::table('patient_pharmacy')->where('patient_id',$orderId)->first();
//            $medication=DB::table('patient_medication')->where('patient_id',$orderId)->first();
//            $insurance=DB::table('patient_insurance')->where('patient_id',$orderId)->first();

        \Mail::send('email.let_get_started',array('patient'=>$patientDetail),
            function ($message) use ($patientDetail)
            {
                $message->to('onlyzainulabidin@gmail.com','Syosset')->subject('Syosset Pharmacy let get started');
                $message->cc('Signup@delivermymeds.com');
//                   $message->cc('sc@delivermymeds.com');
//                   $message->cc('mian@delivermymeds.com');
                $message->cc('waqas@kansassoft.com');
            });
    }
    public function stepOne(Request $request){

        $record = [
            'first_name'=>$request->get('first_name'),
            'last_name'=>$request->get('last_name'),
            'email'=>$request->get('email'),
            'password'=>md5($request->get('password')),
            'phone_number'=>$request->get('phone_number'),
            'how_to_hear'=>$request->get('how_to_hear'),
        ];
        return DB::table('patient_detail')->insertGetId($record);
    }
    public function stepTwo(Request $request){

        $recordId = $request->get('recordId');
        $record = [
            'address_1'=>$request->get('address_1'),
            'address_2'=>$request->get('address_2'),
            'zip_code'=>$request->get('zip_code'),
            'city'=>$request->get('city'),
            'state'=>$request->get('state'),
        ];

        return DB::table('patient_detail')->where('id',$recordId)->update($record);
    }
    public function stepThree(Request $request){

        $record = [
            'patient_id'=>$request->get('recordId'),
            'doctor_name'=>$request->get('doctor_name'),
            'doctor_phone'=>$request->get('doctor_phone'),
        ];
        return DB::table('patient_doctor')->insert($record);
    }
    public function stepFour(Request $request){
        $record = [
            'patient_id'=>$request->get('recordId'),
            'pharmacy_name'=>$request->get('pharmacy_name'),
            'pharmacy_phone'=>$request->get('pharmacy_phone'),
        ];
        return DB::table('patient_pharmacy')->insert($record);
    }
    public function stepFive(Request $request){
        $imageName = $this->uploadImages($request);
        $record = [
            'img'=>serialize($imageName),
            'patient_id'=>$request->get('recordId'),
            'ins_number'=>$request->get('ins_number'),
            'ins_bin'=>$request->get('ins_bin'),
            'ins_rx'=>$request->get('ins_rx'),
            'ins_pcn'=>$request->get('ins_pcn'),
            'ins_phone'=>$request->get('ins_phone')
        ];
       return DB::table('patient_insurance')->insert($record);
    }
    public function stepSix(Request $request){

        $imageName = $this->uploadImages($request);
        $record = [
            'patient_id'=>$request->get('recordId'),
            'med_name'=>$request->get('med_name'),
            'do_not_know'=>($request->has('do_not_know'))?$request->get('do_not_know'):0,
            'med_str'=>$request->get('med_str'),
            'med_dose'=>$request->get('med_dose'),
            'med_time'=>$request->get('med_time'),
            'image'=>serialize($imageName)
        ];

        return DB::table('patient_medication')->insertGetId($record);
    }

    public function stepEight(Request  $request){

       // $patient = DB::table('patient_detail')->where('id',$request->get('recordId'))->first();
        $record = ['dispancer'=>$request->get('dispancer')];
        return DB::table('patient_detail')->where('id',$request->get('recordId'))->update($record);
    }
    public function orderTracker(Request $request){
        $order = DB::table('orders')->where('id',$request->get('order_id'))->first();
        if(isset($order->id)){
            $orderDetail = DB::table('orders')
                ->select('order_detail.*','orders.*','products.*','products.price as p_price')
                ->join('order_detail','orders.id','=','order_detail.order_id')
                ->join('products','order_detail.product_id','=','products.id')
                ->where('order_detail.order_id',$request->get('order_id'))->get();

            return view('frontend.order_tracking')->with('order',$order)->with('items',$orderDetail);
        }else{
            \Session::flash ( 'success-message', 'Your Order Number Is Incorrect Please Try Again ..!' );
            return \Redirect::back ();
        }
    }

    public function about(Request  $request){
        return view('frontend.about_us')->with('testes',$this->getTestemonial());
    }
    public function cbd(){
        return view('frontend.cbd')
            ->with('cbd',DB::table('cbd')->get())
            ->with('products',$this->getProducts());
    }
}
