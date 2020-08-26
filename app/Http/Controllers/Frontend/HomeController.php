<?php

namespace App\Http\Controllers\Frontend;

use DB;
use App\Blog;
use App\Menu;
use App\Team;
use App\Client;
use App\Courses;
use App\Service;
use App\Products;
use App\StaticPage;
use App\Testmonial;
use App\ContactInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class HomeController extends Controller
{
    function index(){
         $data['blogs'] = Blog::where('status',1)->latest()->get()->take(6);
         $data['clients'] = Client::where('status',1)->latest()->get();
         $data['testmonial'] = Testmonial::where('status',1)->latest()->get()->take(15);
        return view('frontend.index',compact('data'));
    }

    function GetService(){
        $data =  DB::table('services')->where('status',1)->select('title','slug','image')->where('status',1)->OrderBy('id', 'DESC')->get();
        return response()->json($data);
    }
    function GetWork(){
        $data =  DB::table('works')->select('title','image','description')->where('status',1)->OrderBy('id', 'DESC')->get()->take(20);
        return response()->json($data);
    }
    function GetTeam(){
        $data =  DB::table('teams')->where('status',1)->OrderBy('id', 'DESC')->get();
        return response()->json($data);
    }
    function GetPortfolio(){
        $data['services'] =  DB::table('services')->where('status',1)->select('title','id')->where('status',1)->OrderBy('id', 'DESC')->get();
        $data['portfolios'] =  DB::table('portfolios')->where('status',1)->select('title','service_id','image')->where('status',1)->OrderBy('id', 'DESC')->get();
        return response()->json($data);
    }

    function shop_index(){
        $data['shop'] = Products::where('status',1)->OrderBy('id', 'DESC')->get();
        return view('frontend.shop.shop_index',compact('data'));
    }
    function single_shop($slug){
        try {
            $data['shop'] = Products::where('status',1)->where('slug',$slug)->first();
            if (!$data['shop']) {
                Toastr::error('Product  not found!!', 'Error');
                return redirect()->back(); 
            }
            return view('frontend.shop.product_details',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
    function product_service($slug){
        try {
            $service = Service::where('status',1)->where('slug',$slug)->first();
            if (!$service) {
                Toastr::error('Product  not found!!', 'Error');
                return redirect()->back(); 
            }
            $data['service'] = $service;
            $data['shop'] = $service->products;
            return view('frontend.shop.shop_index',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }


    function about_us(){
        try {           
              $data['testmonial'] = Testmonial::latest()->get()->take(15);    
              return view('frontend.pages.about',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
    function contact_us(){
        try {               
            return view('frontend.pages.contact');
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
    function BlogAll(){
        return view('frontend.blog.index');
    }
    function BlogDetails($slug){
        $data = Blog::where('slug',$slug)->first();
        return view('frontend.blog.blog_details',compact('data'));
    }
    function Blog($slug){
        $service = Service::where('status',1)->where('slug',$slug)->first();
        if (!$service) {
            Toastr::error('Blog  not found!!', 'Error');
            return redirect()->back(); 
        }
        $data['service'] = $service;
        return view('frontend.blog.index',compact('data'));
    }
    function Faq(){
        try {               
            return view('frontend.pages.faq');
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
    function Term_Conditions(){
          try {
            $data = StaticPage::where('type','term_condition')->first();
              return view('frontend.pages.page',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back();
        }
         
    }
    function privacy_policy(){
          try {
            $data = StaticPage::where('type','privacy_policy')->first();
              return view('frontend.pages.page',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back();
        }
         
    }
    function domain(){
          try {
              return view('frontend.pages.domain');
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back();
        }
         
    }
    function hosting(){
          try {
              return view('frontend.pages.hosting');
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back();
        }
         
    }
    function course($slug){
          try {
              $course = Courses::where('slug',$slug)->first();
              if ($course) {
                  return view('frontend.pages.course',compact('course'));
              }
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back();
        }
         
    }
    function login(){
          try {
              return view('frontend.auth.login');
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back();
        }
         
    }
    function register(){
          try {
              return view('frontend.auth.register');
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back();
        }
         
    }
    function allservice(){
          try {
              $service = DB::table('services')->where('status',1)->orderBy('id','asc')->get();
              return view('frontend.pages.service',compact('service'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back();
        }         
    }
    function service($slug){
          try {
              $service = DB::table('services')->where('slug',$slug)->first();
              return view('frontend.pages.service_details',compact('service'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back();
        }         
    }
    function Pages($url){
        try {
            $menu = Menu::where('url',$url)->first();
              $data =   @$menu->page;
              return view('frontend.pages.page',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }

    function GetBlog(Request $request){
        $data = DB::table('blogs')
        ->join('users','blogs.user_id','=','users.id')
        ->select('blogs.id','blogs.title','users.name as name','blogs.slug','blogs.image','blogs.summary','blogs.content','blogs.status',\DB::raw('DATE_FORMAT(blogs.created_at, "%d %M %y") as date'))
        ->where('status', 1)
        ->orderBy('id','desc');
        if (@$request->_categor_id) {
            $data = $data->where('service_id', $request->_categor_id);
        }
        if (@$request->key) {
            $data = $data->where('blogs.title', 'like', '%' . $request->key . '%');
        }
        $data=$data->paginate(6);
        return response()->json($data,200);
    }
    function AjaxProduct(Request $request){
        $data = Products::select('id','title','slug','image','price')
        ->where('status', 1)
        ->orderBy('id','desc');
        if (@$request->_categor_id) {
            $data = $data->where('service_id', $request->_categor_id);
        }
        if (@$request->key) {
            $data = $data->where('title', 'like', '%' . $request->key . '%')->orWhere('summary', 'like', '%' . $request->key . '%');
        }
        $data=$data->paginate(20);
        return response()->json($data,200);
    }


    function contact_info(Request $request){
        $this->validate($request, [
            'name' => 'required|',
            'email' => 'required|',
            'phone' => 'required|',
            'message' => 'required|',
            'subject' => 'required|',
        ]);

        try {
            
             $data = new ContactInfo();
             $data->name = $request->name;
             $data->email = $request->email;
             $data->phone = $request->phone;
             $data->description = $request->message;
             $data->subject = $request->subject;
             $data->save();
             Toastr::success('Operation Successfull', 'Success');
             return redirect()->back(); 
            } catch (\Exception $e) {
                Toastr::error('Something went wrong!', 'Error');
                return redirect()->back(); 
            } 
    }

}
