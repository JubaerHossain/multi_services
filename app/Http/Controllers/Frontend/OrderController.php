<?php

namespace App\Http\Controllers\Frontend;

use DB;
use App\User;
use App\Sales;
use App\Courses;
use App\GuestUser;
use App\GuestOrder;
use App\SaleCourse;
use App\ProductSale;
use App\SampleOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    
  
    function Cart($slug){       
        try{
            $course = Courses::where('slug',$slug)->first();
            return view('frontend.shop.cart_information',compact('course'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
 

    function CartInformationAdd(Request $request,$id){
       //  dd($request->all());         
             $this->validate($request, array(
                 'name' => 'required|max:200',
                 'email' => 'required|max:200',
                 'mobile' => 'required|max:200',
                 'company' => 'required|max:200',
                 'address' => 'required|max:200'
             ));
    
         DB::beginTransaction();
        try{
                $course = Courses::find($id);
                $g_user = new GuestUser();
                $g_user->name = $request->name;
                $g_user->email = $request->email;
                $g_user->mobile = $request->mobile;
                $g_user->company = $request->company;
                $g_user->note = $request->note;
                $g_user->address = $request->address;
                $g_user->total = $course->price;
                $g_user->save(); 

                $item_order = new SaleCourse();
                $item_order->user_id = $g_user->id;
                $item_order->qty = 1;
                $item_order->net_unit_cost = $course->price;
                $item_order->course_id = $course->id;
                $item_order->total = $course->price;
                $item_order->save();
             
            DB::commit();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/'); 
        
        } catch (\Exception $e) {
            dd($e);
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }

    }

}
