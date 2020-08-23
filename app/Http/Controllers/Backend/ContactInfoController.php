<?php

namespace App\Http\Controllers\Backend;

use App\ContactInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.contact_info.index');  
    }

   
    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(ContactInfo::latest()->get())            
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">                        
                        <a class="dropdown-item" href="'.route('contact_info.show', $data->id).'">
                            View
                        </a>
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/contact-info/delete/`);">
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
                    ->addColumn('seen', function($data){
                        if ($data->status == 1) {
                           $seen = '<b><font color="grey">Seen</font></b>';
                        }else {
                            $seen = '<b><font color="green">New</font></b>';                            
                        }
                        return $seen; 
                        })
                    ->rawColumns(array('date','action','seen'))
                    ->make(true);
        }
    }
     
    public function show($id)
    {
        $contact = ContactInfo::find($id);
        if ( $contact) {
             if ($contact->status == 0) {
                $contact->status = 1;
                $contact->save();
             }
             $data['show'] = $contact;
            return view('backend.contact_info.show',compact('data'));
        } else {
            Toastr::error('Data not found!', 'Error');
            return redirect()->back(); 
        }
        
    }
    public function destroy($id)
    {
        try {
            $product = ContactInfo::find($id);
            $product->delete();
            Toastr::success('Operation Successfull', 'Success');
            return redirect()->back(); 

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
}
