<?php

namespace App\Http\Controllers\Backend;

use App\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;
class ServiceController extends Controller
{
    public function index()
    {
        return view('backend.service.index');
    }

    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(Service::latest()->get())
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="'.route('service.show',$data->id).'">
                        View
                        </a>
                        <a class="dropdown-item" href="'.route('service.edit',$data->id).'">
                            Edit
                        </a>
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/services/delete/`);">
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
       
       return view('backend.service.create_service');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:services,title,',
            'status' => 'required|',
            'description' => 'required|',
            'document' => 'required|mimes:jpeg,png,jpg',
        ]);


        try {
            $data = new Service();
            $data->title  = $request->title;
            $data->slug  = strtolower(str_replace(' ', '-',$data->title));
            $data->status = $request->status;
            $data->description = $request->description;
            $file = $request->file('document'); 
            if($request->hasFile('document')){ 
                $pathImage = 'public/uploads/service';
                $fileName = imagePost($pathImage,$file);
                $data->image =  $fileName;           
            }
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/service');
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         } 
    }

    public function show($id)
    {
        $data['show'] = Service::find($id);  
        if ($data['show']) {
            return view('backend.service.show_service',compact('data'));
        }
        else {
            return redirect('/admin/service');
        } 
    }

    public function edit($id)
    {
        $data['edit'] = Service::find($id);   
        if ($data['edit']) {
            return view('backend.service.create_service',compact('data'));
        }
        else {
            return redirect('/admin/service');
        }
    }

    public function update(Request $request, $id)
    {
        {
            $this->validate($request, [
                'title' => 'required|unique:services,title,'.$id,
                'status' => 'required|',
                'document' => 'nullable|mimes:jpeg,png,jpg',
            ]);
    
            try {
                $data = Service::find($id);
                $data->title  = $request->title;
                $data->slug  = strtolower(str_replace(' ', '-',$data->title));
                $data->status = $request->status;
                $file = $request->file('document'); 
                if($request->hasFile('document')){ 
                    $pathImage = 'public/uploads/service';
                    $fileName = imagePost($pathImage,$file);
                    if (file_exists($data->image)) {
                        \File::delete($data->image);
                    }
                    $data->image =  $fileName;           
                }
                $data->save();
                Toastr::success('Operation Successfull', 'Success');
                return redirect('/admin/service');
        
             } catch (\Exception $e) {
                 Toastr::error('Something went wrong!', 'Error');
                 return redirect()->back(); 
             } 
        }
    }

    public function destroy($id)
    {
        try {
            $data = Service::find($id);
            if (file_exists($data->image)) {
                \File::delete($data->image);
            }
            $data->delete();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/service');

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
}
