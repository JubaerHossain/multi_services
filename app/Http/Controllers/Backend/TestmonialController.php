<?php

namespace App\Http\Controllers\Backend;

use App\Testmonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class TestmonialController extends Controller
{
    public function index()
    {
        return view('backend.testmonial.index');
    }

    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(Testmonial::latest()->get())
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="'.route('testmonial.show',$data->id).'">
                        View
                        </a>
                        <a class="dropdown-item" href="'.route('testmonial.edit',$data->id).'">
                            Edit
                        </a>
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/testmonials/delete/`);">
                            Delete
                        </a>
                        </div>
                    </div>
                    </div>';
                    return $button;
                    }) 
                    ->addColumn('image', function($data){
                        $image ='<img src="'. asset($data->image).'" alt="" width="80">';
                        return $image;
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
                    ->addColumn('date', function($data){
                        return date('d-M-Y', strtotime($data->created_at));
                        })
                    ->rawColumns(array('action','status','image','date'))
                    ->make(true);
        }
    }
    public function create()
    {
        return view('backend.testmonial.create');
    }

 
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:250',
            'status' => 'required|',
            'description' => 'required|',
            'designation' => 'required|',
            'document' => 'required|mimes:jpeg,png,jpg',
        ]);
        try {
            $data = new Testmonial();
            $data->name = $request->name;
            $data->status = $request->status;
            $data->designation = $request->designation;
            $data->description = $request->description;
            $file = $request->file('document'); 
            if($request->hasFile('document')){ 
                $pathImage = 'public/uploads/testmonial';
                $fileName = imagePost($pathImage,$file);
                $data->image =  $fileName;           
            }
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/testmonial');
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }
    }

    public function show(Testmonial $testmonial)
    {
        try{
            $data['show'] = $testmonial;
            return view('backend.testmonial.show',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }


    public function edit(Testmonial $testmonial)
    {
        try{
            $data['edit'] = $testmonial;
            return view('backend.testmonial.create',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }

 
    public function update(Request $request, $id)
    {
        {
            $this->validate($request, [
                'name' => 'required|max:250',
                'status' => 'required|',
                'description' => 'required|',
                'designation' => 'required|',
                'document' => 'nullable|mimes:jpeg,png,jpg',
            ]);
            try {
                $data = Testmonial::find($id);
                $data->name = $request->name;
                $data->status = $request->status;
                $data->designation = $request->designation;
                $data->description = $request->description;
                $file = $request->file('document'); 
                if($request->hasFile('document')){ 
                    $pathImage = 'public/uploads/testmonial';
                    $fileName = imagePost($pathImage,$file);
                    $data->image =  $fileName;           
                }
                $data->save();
                Toastr::success('Operation Successfull', 'Success');
                return redirect('/admin/testmonial');
        
             } catch (\Exception $e) {
                 Toastr::error('Something went wrong!', 'Error');
                 return redirect()->back(); 
             }
        }
    }

    public function destroy($id)
    {
        try {
            $data = Testmonial::find($id);
            if (file_exists($data->image)) {
                \File::delete($data->image);
            }
            $data->delete();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/testmonial');

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
}
