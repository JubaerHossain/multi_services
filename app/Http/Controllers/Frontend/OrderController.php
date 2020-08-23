<?php

namespace App\Http\Controllers\Frontend;

use DB;
use App\User;
use App\Sales;
use App\Products;
use App\GuestUser;
use App\GuestOrder;
use App\ProductSale;
use App\SampleOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    
    function product_get_sample(Request $request){

        $this->validate($request, array(
            'name' => 'required|max:200',
            'email' => 'required|max:200',
            'mobile' => 'required|max:200',
            'company' => 'required|max:200',
            'address' => 'required|max:200'
        ));
        try{
            $data = new SampleOrder();
            $data->product_id = $request->_id;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->mobile = $request->mobile;
            $data->company = $request->company;
            $data->note = $request->note;
            $data->address = $request->address;
            $data->save();            
            Toastr::success('Operation Successfull', 'Success');
            return redirect()->back(); 
        
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
    function AddToCart(Request $request){       
        try{
           // return $request;
            $item = Products::find($request->id);
            if (!$item) {
               return response()->json(['error'=>'Product not found!']);
            }
            Cart::add(['id' => bin2hex(random_bytes(4)), 'name' => $item->title, 'qty' => $request->qty, 'price' => $request->price, 'weight' => 0, 'options' => 
            ['item_id'=>$request->id, 'description'=> $item->desc,'price'=> $item->price,'qty_sft'=>$request->qty_sft,'main_length'=>$request->main_length,'main_heigth'=>$request->main_heigth, 'user_id'=>@$request->user_id,'user_name'=>@$request->user_name,'image'=>$item->image]]);
            return response()->json(['success'=>'Product added successfully!','cart' => count(Cart::content())]);
        } catch (\Exception $e) {
            return response()->json(['error'=>$e]);
            return redirect()->back(); 
        }
    }
    function Cart(){       
        try{
           // return Cart::content();
           return view('frontend.shop.cart');
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
    function CartInformation(){       
        try{
           // return Cart::content();
           return view('frontend.shop.cart_information');
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
    function CartDelete($rowId){       
        try{
            Cart::remove($rowId); 
            Toastr::success('Operation Successfull', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }

    function CartInformationAdd(Request $request){
       //  dd($request->all());
         if ($request->_tab_check == 1) {            
             $this->validate($request, array(
                 'g_name' => 'required|max:200',
                 'g_email' => 'required|max:200',
                 'g_mobile' => 'required|max:200',
                 'g_company' => 'required|max:200',
                 'g_address' => 'required|max:200'
             ));
         }
         if ($request->_tab_check == 2) {
             $this->validate($request, array(
                 'name' => 'required|max:200',
                 'mobile' => 'required|max:200',
                 'company' => 'required|max:200',
                 'address' => 'required|max:200',
                 'email' => 'required|string|email|max:255|unique:users,email',
                 'password' => 'required|string|min:8|confirmed',
             ));
         }
         DB::beginTransaction();
        try{
            if ($request->_tab_check == 1) { 
                $g_user = new GuestUser();
                $g_user->name = $request->g_name;
                $g_user->email = $request->g_email;
                $g_user->mobile = $request->g_mobile;
                $g_user->company = $request->g_company;
                $g_user->note = $request->note;
                $g_user->address = $request->g_address;
                $g_user->total = Cart::subtotal();
                $g_user->save(); 
                foreach (Cart::content() as $key => $value) {
                    $item_order = new GuestOrder();
                    $item_order->user_id = $g_user->id;
                    $item_order->qty = $value->qty;
                    $item_order->qty_sft = $value->options['qty_sft'];
                    $item_order->length = $value->options['main_length'];
                    $item_order->heigth = $value->options['main_heigth'];
                    $item_order->net_unit_cost = $value->options['price'];
                    $item_order->product_id = $value->options['item_id'];
                    $item_order->subtotal = $value->price;
                    $item_order->save();
                } 
             } 
             else {
                 if ($request->_tab_check == 2) {
                    $user = new User();
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->password = bcrypt($request->password);
                    $user->phone_number = $request->mobile;
                    $user->company = $request->company;
                    $user->address = $request->address;
                    $user->gender = $request->gender;
                    $user->save();
                    if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
                        $user = Auth::user();
                    }
                 }
                 if ($request->_tab_check == 2) {
                     if (!Auth::check()) {
                        Toastr::error('Login first or register!', 'Error');
                        return redirect()->back(); 
                     }
                 }

                $sale = new Sales();
                $sale->user_id = Auth::id();
                $sale->total = Cart::subtotal();
                $sale->save(); 
                foreach (Cart::content() as $key => $value) {
                    $item_order = new ProductSale();
                    $item_order->product_id = $value->options['item_id'];
                    $item_order->qty = $value->qty;
                    $item_order->qty_sft = $value->options['qty_sft'];
                    $item_order->net_unit_cost = $value->options['price'];
                    $item_order->length = $value->options['main_length'];
                    $item_order->heigth = $value->options['main_heigth'];
                    $item_order->sale_id = $sale->id;
                    $item_order->user_id = Auth::id();
                    $item_order->subtotal = $value->price;
                    $item_order->save();
                }
             }
             Cart::destroy();
             DB::commit();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/'); 
        
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }

    }

}
