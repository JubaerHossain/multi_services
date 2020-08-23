<?php

namespace App\Http\Controllers\Backend;

use App\PricePlan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PlanController extends Controller
{
    public function index()
    {
        return view('backend.plan.index');
    }

    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(PricePlan::latest()->get())
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="'.route('plan.show',$data->id).'">
                        View
                        </a>
                        <a class="dropdown-item" href="'.route('plan.edit',$data->id).'">
                            Edit
                        </a>
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/plans/delete/`);">
                            Delete
                        </a>
                        </div>
                    </div>
                    </div>';
                    return $button;
                    }) 
                    ->addColumn('price', function($data){
                        $price ='Tk'. $data->price;
                        return $price;
                        })
                    ->addColumn('status', function($data){
                         if ($data->status == 1) {
                            $status = 'Active';
                         }
                         else {
                             $status = 'Deactive';
                         }
                        return $status;
                        })
                    ->addColumn('type', function($data){
                         if ($data->type == 1) {
                            $type = 'Yearly';
                         }
                         else {
                             $type = 'Monthly';
                         }
                        return $type;
                        })
                    ->rawColumns(array('action','status','price','type'))
                    ->make(true);
        }
    }
    public function create()
    {
       
       return view('backend.plan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|',
            'status' => 'required|',
            'price' => 'required|',
            'type' => 'required|',
            'features' => 'required|',
        ]);


        try {
            $data = new PricePlan();
            $data->title  = $request->title;
            $data->type = $request->type;
            $data->status = $request->status;
            $data->price = $request->price;
            $data->features = $request->features;
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/plan');
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         } 
    }

    public function show($id)
    {
        $data['show'] = PricePlan::find($id);  
        if ($data['show']) {
            return view('backend.plan.show',compact('data'));
        }
        else {
            return redirect('/admin/plan');
        } 
    }

    public function edit($id)
    {
        $data['edit'] = PricePlan::find($id);   
        if ($data['edit']) {
            return view('backend.plan.create',compact('data'));
        }
        else {
            return redirect('/admin/plan');
        }
    }

    public function update(Request $request, $id)
    {
        {
            $this->validate($request, [
                'title' => 'required|',
                'status' => 'required|',
                'price' => 'required|',
                'type' => 'required|',
                'features' => 'required|',
            ]);
    
            try {
                $data = PricePlan::find($id);
                $data->title  = $request->title;
                $data->type = $request->type;
                $data->status = $request->status;
                $data->price = $request->price;
                $data->features = $request->features;
                $data->save();
                Toastr::success('Operation Successfull', 'Success');
                return redirect('/admin/plan');
        
             } catch (\Exception $e) {
                 Toastr::error('Something went wrong!', 'Error');
                 return redirect()->back(); 
             } 
        }
    }

    public function destroy($id)
    {
        try {
            $data = PricePlan::find($id);
            $data->delete();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/plan');

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
}
