<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ProductCodes;
use App\Products;
use App\Resources;
use App\Services;
use App\Status;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function __construct()
    {

    }
    public function loginPage(){
        return view('backend.login');
    }
    public function loginUser(Request $request){
        $password = md5($request->get('password'));
       $user =  DB::table('users')->where('email',$request->get('email'))->first();
       if(isset($user->email) && $password == $user->password){
            return \redirect('/list-products');
       }else{
         return \redirect('/admin')->with('message', 'Email or Password is incorrect please try again!');
       }
    }
    public function index(){
        return view('backend.dashboard');
    }
    public function addProducts(){
        return view('backend.product')->with('categories',$this->getCategories());
    }
    public function getCategories(){
        return DB::table('category')
            ->where('is_active',1)
            ->get();
    }
    public function saveProducts(Request $request){
       $imageName = $this->uploadImages($request);

       $records = [
           'name'=>$request->get('name'),
           'title'=>$request->get('title'),
           'avaliabilty'=>$request->get('availability'),
           'category_id'=>$request->get('category_id'),
           'status_id'=>1,
           'description'=>$request->get('textarea'),
           'size'=>$request->get('size'),
           'price'=>$request->get('price'),
           'stock'=>$request->get('stock'),
           'images'=>serialize($imageName),
       ];
       $productId = DB::table('products')->insertGetId($records);
       $this->insertProductCodes($request->all(),$productId);
      return Redirect::back();
    }
    public function insertProductCodes($records,$productId){
        $final = [];
        foreach ($records['pr_name'] as $key=>$record){
            $final[] = ['name'=>$record ,'code'=>$records['pr_code'][$key],'product_id'=>$productId];
        }
        DB::table('product_codes')->insert($final);
        return true;
    }



    public function listProducts(){
        return view('backend.product_list')
            ->with('products',$this->getProductsList())
            ->with('status',Status::all());
    }
    public function getProductsList(){
        return Products::all();
    }
    public function showUpdatePage($id){
        return view('backend.update_product')
            ->with('product',Products::find($id))
            ->with('productCodes',ProductCodes::where('product_id',$id)->get())
            ->with('categories',$this->getCategories());
    }
    public function updateProducts(Request $request){
        if ($request->hasFile('image')) {
            $imageName = $this->uploadImages($request);
        }else{
            $record = DB::table('products')->where('id',$request->get('product_id'))->first();
            $imageName = unserialize($record->images);
        }

        $records = [
            'name'=>$request->get('name'),
            'title'=>$request->get('title'),
            'avaliabilty'=>$request->get('availability'),
            'category_id'=>$request->get('category_id'),
            'status_id'=>1,
            'description'=>$request->get('textarea'),
            'size'=>$request->get('size'),
            'price'=>$request->get('price'),
            'stock'=>$request->get('stock'),
            'images'=>serialize($imageName),
        ];
        $productId = DB::table('products')->where('id',$request->get('product_id'))->update($records);
        DB::table('product_codes')->where('product_id',$request->get('product_id'))->delete();
        $this->insertProductCodes($request->all(),$productId);

    return \redirect('list-products');
}
    public function changeProductStatus(Request $request){
        $value =$request->get('id');

        $productId = $request->get('productId');
        $this->updateProductStatus(['status_id'=>$value],$productId);
        return 'true';
    }
    public function changeOrderStatus(Request $request){
        $value =$request->get('id');

        $productId = $request->get('productId');
        $this->updateOrderStatus(['status_id'=>$value],$productId);
        $record =['orderId'=>$productId];

        \Mail::send('email.order_status_change',array('record' => $record ),
            function ($message) use ($record)
            {
                $message->to('onlyzainulabidin@gmail.com','Syosset')->subject('Syosset Pharmacy Order Status Change');

//                   $message->cc('sc@delivermymeds.com');
//                   $message->cc('mian@delivermymeds.com');
                $message->cc('waqas@kansassoft.com');
            });
        return 'true';
    }
    public function updateOrderStatus($record,$productId){
        DB::table('orders')
            ->where('id',$productId)
            ->update($record);
        return true;
    }
    public function updateProductStatus($record,$productId){
        DB::table('products')
            ->where('id',$productId)
            ->update($record);
        return true;
    }
    public function showContactUsRecord(Request $request){
        return view('backend.contact_us_list')->with('contacts',$this->getContactUsRecords());
    }
    public function getContactUsRecords(){
        return DB::table('contact_us')->orderBy('id','DESC')->where('is_deleted',0)->get();
    }
        public function getInquiryRecords(){
        return DB::table('inquiry')->orderBy('id','DESC')->where('is_deleted',0)->get();
    }
    public function showInquiry(){
        return view('backend.inquiry_list')->with('inquiries',$this->getInquiryRecords());
    }
    public function showTesimonialPage(){
        return view('backend.testemoniel');
    }
    public function deleteItems(Request $request){
        DB::table($request->get('table'))->where('id',$request->get('id'))->update(['is_deleted'=>1]);
        return \redirect($request->get('red'));
    }
    public function addTesimonial(Request $request){
        $imageName = '';
        $imageName = $this->uploadImages($request);


        $records = [
            'name'=>$request->get('name'),
            'title'=>$request->get('title'),
            'designation'=>$request->get('designation'),
            'image'=>serialize($imageName),
        ];
        DB::table('testimonial')->insert($records);
        return \redirect('/show-testimonial-page');
    }
    public function showTesimonialList(){
        return view('backend.testemoniel_list')->with('lists',DB::table('testimonial')->where('is_deleted',0)->get());
    }
    public function showTesimoniaUpdatePage($id){
        return view('backend.testemoniel_update_page')
            ->with('testmonial',DB::table('testimonial')->where('id',$id)->first());
    }
    public function updateTestiminol(Request $request){
        $imageName ='';
        $id = $request->get('id');
        $teste = DB::table('testimonial')->where('id',$id)->first();
        if ($request->hasFile('image')) {
            $imageName = $this->uploadImages($request);
        }else{
            $imageName = unserialize($teste->image);
        }
        $records = [
            'name'=>$request->get('name'),
            'title'=>$request->get('title'),
            'designation'=>$request->get('designation'),
            'image'=>serialize($imageName),
        ];
        DB::table('testimonial')->where('id',$id)->update($records);
        return \redirect('/list-testimonial');
    }
    public function orderLists(){
        return view('backend.order_list')
            ->with('orders',$this->getOrderlist())
             ->with('status',Status::all());
    }
    public function getOrderList(){
        return DB::table('orders')->orderBy('id','DESC')->get();
    }
    public function orderDetail($orderId){

    }
    public function showServicsPage(){
        return view('backend.services');
    }
    public function saveServices(Request $request){
        $imageName = $this->uploadImages($request);

        $record = [
            'name'=>$request->get('name'),
            'title'=>$request->get('title'),
            'description'=>$request->get('textarea'),
            'image'=>serialize($imageName)
        ];
        DB::table('services')->insert($record);
        return \redirect('show-services-page');
    }
    public function servicesList(){
        return view('backend.services_list')->with('lists',DB::table('services')->get());
    }
    public function showUpdatePageForServices($id){
        return view('backend.update_services')->with('service',Services::find($id));
    }
    public function updateService(Request $request){

        if ($request->hasFile('image')) {
            $imageName = $this->uploadImages($request);
        }else{
            $record = DB::table('services')->where('id',$request->get('service_id'))->first();
            $imageName = unserialize($record->image);
        }

        $record = [
            'name'=>$request->get('name'),
            'title'=>$request->get('title'),
            'description'=>$request->get('textarea'),
            'image'=>serialize($imageName)
        ];
        DB::table('services')->where('id',$request->get('service_id'))->update($record);
        return \redirect('list-services');
    }
    public function deleteService($id){
        DB::table('services')->where('id',$id)->delete();
        return \redirect('list-services');
    }

    public function cbdPage(){
        return view('backend.cbd');
    }
    public function saveCbd(Request $request){

        $record = [
            'name'=>$request->get('name'),
            'title'=>$request->get('title'),
            'description'=>$request->get('textarea')
        ];
        DB::table('cbd')->insert($record);
        return \redirect('show-cbd-page');
    }

    public function cbdList(){
        return view('backend.cbd_list')->with('lists',DB::table('cbd')->get());
    }

    public function showResourcesPage(){
        return view('backend.resources');
    }
    public function saveResources(Request $request){
        $imageName = $this->uploadImages($request);

        $record = [
            'name'=>$request->get('name'),
            'link'=>$request->get('link'),
            'image'=>serialize($imageName)
        ];
        DB::table('resources')->insert($record);
        return \redirect('show-resources-page');
    }
    public function resourcesList(){
        return view('backend.resources_list')->with('lists',DB::table('resources')->get());
    }
    public function showUpdatePageForResources($id){
        return view('backend.update_resources')->with('resource',Resources::find($id));
    }
    public function updateResources(Request $request){

        if ($request->hasFile('image')) {
            $imageName = $this->uploadImages($request);
        }else{
            $record = DB::table('resources')->where('id',$request->get('resource_id'))->first();
            $imageName = unserialize($record->image);
        }

        $resources = [
            'name'=>$request->get('name'),
            'link'=>$request->get('link'),
            'image'=>serialize($imageName)
        ];
        DB::table('resources')->where('id',$request->get('resource_id'))->update($resources);
        return \redirect('list-resources');
    }
    public function deleteResources($id){
        DB::table('services')->where('id',$id)->delete();
        return \redirect('list-services');
    }

    public function showListGetStarted(Request $request){
        return view('backend.letmegetstarted')->with('lists',$this->getLetStarted());
    }
    public function getLetStarted(){
        return DB::table('patient_detail')
            ->leftjoin('patient_doctor','patient_doctor.patient_id','=','patient_detail.id')
            ->leftjoin('patient_insurance','patient_insurance.patient_id','=','patient_detail.id')
            ->leftjoin('patient_medication','patient_medication.patient_id','=','patient_detail.id')
            ->leftjoin('patient_pharmacy','patient_pharmacy.patient_id','=','patient_detail.id')
            ->get();
    }
//    public function getProduct($id){
//        return DB::table('products')
//            ->where('products.id',$id)
//            ->first();
//    }
//

//
//    public function deleteProducts($id){
//        DB::table('products')->where('id',$id)->delete();
//        return \redirect('list-products');
//    }




//
//    public function showBranPage(){
//        return view('backend.brand')->with('brands',DB::table('types')->where('parent_id',0)->get());
//    }
//
//    public function showBranPageList(){
//        return view('backend.brand_list')->with('brands',$this->getBrandList());
//    }
//    public function getBrandList(){
//        return DB::table('types')->where('parent_id',0)->get();
//    }
//    public function addBrands(Request $request){
//        $imageName = $this->uploadMovie($request);
//        $record = [
//            'name'=>$request->get('name'),
//            'parent_id'=>($request->get('parent_id') == 0)?0:$request->get('parent_id'),
//            'image'=>$imageName
//        ];
//        DB::table('types')->insert($record);
//        return \redirect('show-brand-category');
//    }
//
//    public function getSubCategories(Request $request){
//       return DB::table('types')->where('parent_id',$request->get('id'))->get();
//    }
//


//
//    public function showPartnerPage(){
//        return view('backend.partner');
//    }
//
//    public function addPartner(Request $request){
//        $name = $this->uploadMovie($request);
//        $record =[
//            'name'=>$request->get('name'),
//            'image'=>$name
//        ];
//        DB::table('partners')->insert($record);
//        return \redirect('show-partner-page');
//    }
//
//    public function partnerList(){
//        return view('backend.partner_list')->with('partners',DB::table('partners')->where('is_deleted',0)->get());
//    }
//
    public function deletePartner($partnerid){
        DB::table('partners')->where('id',$partnerid)->update(['is_deleted'=>1]);
        return \redirect('show-partner-list');
    }
//
//    public function changeBrandStatus(Request $request){
//        DB::table('types')
//            ->where('id',$request->get('brandId'))
//            ->update(['famous_brand'=>$request->get('id')]);
//        return 'true';
//    }
//
//    public function updateBrandName(Request $request){
//        DB::table('types')
//            ->where('id',$request->get('brandId'))
//            ->update(['name'=>$request->get('value')]);
//        return 'true';
//    }
}
