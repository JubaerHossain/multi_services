<?php

namespace App\Http\Controllers\Backend;

use App\SampleOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetSampleController extends Controller
{
    public function index()
    {
        return view('backend.sample.index');  
    }

    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(SampleOrder::latest()->get())            
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">                        
                        <a class="dropdown-item" href="'.route('sample.show', $data->id).'">
                            View
                        </a>
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/sample/sale/delete/`);">
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
                        return $data->name; 
                        })
                    ->addColumn('phone', function($data){
                        return $data->mobile; 
                        })
                    ->addColumn('address', function($data){
                        return $data->address; 
                        })
                    ->addColumn('email', function($data){
                        return $data->email; 
                        })
                    ->addColumn('grand_total', function($data){
                        return 'Tk.'.$data->product->price; 
                        })
                    ->rawColumns(array('date','action'))
                    ->make(true);
        }
    }
     
    public function show($id)
    {
        $data['show'] = SampleOrder::find($id);
        if ( $data['show']) {
            return view('backend.sample.show',compact('data'));
        } else {
            Toastr::error('Data not found!', 'Error');
            return redirect()->back(); 
        }
        
    }
    public function destroy($id)
    {
        try {
            $product = SampleOrder::find($id);
            $product->delete();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/sample/sale');

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
}
