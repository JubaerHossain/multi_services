<?php

namespace App\Http\Controllers\Backend;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SliderController extends Controller
{
   
    public function index()
    {
        return view('backend.sliders.index');
    }

    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(Slider::latest()->get())
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="'.route('slider.show',$data->id).'">
                        View
                        </a>
                        <a class="dropdown-item" href="'.route('slider.edit',$data->id).'">
                            Edit
                        </a>
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/sliders/delete/`);">
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
        return view('backend.sliders.create');
    }

   
    public function store(Request $request)
    {
       
        $this->validate($request, [
            'title' => 'required|',
            'status' => 'required|',
            'btn1' => 'required',
            'btn2' => 'required',
            'document' => 'required|mimes:jpeg,png,jpg',
        ]);
        try {
            $data = new Slider();
            $data->title = $request->title;
            $data->btn_01_url = $request->btn1;
            $data->btn_02_url = $request->btn2;
            $data->description = $request->description;
            $data->status = $request->status;
            $file = $request->file('document'); 
            if($request->hasFile('document')){ 
                $pathImage = 'public/uploads/slider';
                $fileName = imagePost($pathImage,$file);
                $data->image =  $fileName;           
            }
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/slider');
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }
    }

  
    public function show(Slider $slider)
    {
        try{
            $data['show'] = $slider;
            return view('backend.sliders.show',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }


    public function edit(Slider $slider)
    {
        try{
            $data['edit'] = $slider;
            return view('backend.sliders.create',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|',
            'status' => 'required|',
            'btn1' => 'required',
            'btn2' => 'required',
            'document' => 'nullable|mimes:jpeg,png,jpg',
        ]);
        try {
            $data = Slider::find($id);
            $data->title = $request->title;
            $data->btn_01_url = $request->btn1;
            $data->btn_02_url = $request->btn2;
            $data->description = $request->description;
            $data->status = $request->status;

            $file = $request->file('document'); 
            if($request->hasFile('document')){ 
                $pathImage = 'public/uploads/slider';
                $fileName = imagePost($pathImage,$file);
                if (file_exists($data->image)) {
                    \File::delete($data->image);
                }
                $data->image =  $fileName;           
            }
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/slider');
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }
    }


    public function destroy($id)
    {
        try {
            $data = Slider::find($id);
            if (file_exists($data->image)) {
                \File::delete($data->image);
            }
            $data->delete();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/slider');

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
}
