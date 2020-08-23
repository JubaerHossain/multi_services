<?php

namespace App\Http\Controllers\Backend;

use PDF;
use App\Sales;
use App\Products;
use App\ProductSale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
class SalesController extends Controller
{
    
    public function index()
    {
        return view('backend.pos.pos');  
    }
    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(Sales::latest()->get())            
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">                        
                        <a class="dropdown-item" href="'.route('sale.show', $data->id).'">
                            View
                        </a>
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/sales/delete/`);">
                            Delete
                        </a>
                        </div>
                    </div>
                    </div>';
                    return $button;
                    })
                    ->addColumn('date', function($data){
                        return date('d-M-Y', strtotime($data->created_at)); 
                        })
                    ->addColumn('customer', function($data){
                        return $data->user->name; 
                        })
                    ->addColumn('phone', function($data){
                        return $data->user->phone_number; 
                        })
                    ->addColumn('address', function($data){
                        return $data->user->address; 
                        })
                    ->addColumn('email', function($data){
                        return $data->user->email; 
                        })
                    ->addColumn('grand_total', function($data){
                        return 'Tk.'.$data->total; 
                        })
                    ->rawColumns(array('date','action'))
                    ->make(true);
        }
    }
 


    
    public function show($id)
    {
        $pos = Sales::find($id);
        if ( $pos) {
            return view('backend.pos.show',compact('pos'));
        } else {
            Toastr::error('Data not found!', 'Error');
            return redirect()->back(); 
        }
        
    }
    public function invoice($invoice)
    {
        $purchase = Sales::where('invoice',$invoice)->first();
        if ( $purchase) {
            return view('backend.pos.invoice',compact('purchase'));
        } else {
            Toastr::error('Data not found!', 'Error');
            return redirect()->back(); 
        }
    }



    public function destroy($id)
    {
        try {
            $product = Sales::find($id);
            $product->delete();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/sale');

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
}