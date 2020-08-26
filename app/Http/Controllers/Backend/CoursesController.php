<?php

namespace App\Http\Controllers\Backend;

use App\Courses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class CoursesController extends Controller
{
    
    public function index()
    {
        return view('backend.course.index');
    }
    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(Courses::latest()->get())
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="'.route('course.show', $data->slug).'">
                            View
                        </a>
                        <a class="dropdown-item" href="'.route('course.edit', $data->slug).'">
                            Edit
                        </a>
                       
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/courses/delete/`);">
                            Delete
                        </a>
                        </div>
                    </div>
                    </div>';
                    return $button;
                    }) 
                    ->editColumn('title', function ($data) {
                        return \Str::limit($data->title, 20);
                    })
                    ->addColumn('service', function($data){
                      return $data->seat_available;
                    })
                    ->addColumn('price', function($data){
                      return 'Tk.'.$data->price;
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
                    ->rawColumns(array('action','status','image'))
                    ->make(true);
        }
    }
    public function create()
    {
        return view('backend.course.create');
    }

    public function store(Request $request)
    {
           //return $request;
        $this->validate($request, array(
            'title' => 'required|max:250',
            'price' => 'nullable',
            'venue' => 'required|max:250',
            'date' => 'required|',
            'last_date' => 'required',
            'class_start' => 'required|',
            'status' => 'required|',
            'no_of_class' => 'required|',
            'total_hour' => 'required|',
            'seat_available' => 'required|',
            'who_can_join' => 'required|',
            'class_schedule' => 'required|',
            'desciption' => 'required|',
            'outline' => 'required|',
            'file' => 'required|mimes:jpeg,png,jpg',
        ));
        try { 
            $data = new Courses;
            $data->title = ucfirst($request->title);
            $data->slug = strtolower(str_replace(' ', '-',$request->title));        
            $data->venue = $request->venue;
            $data->price = $request->price;
            $data->date = $request->date;
            $data->last_date = $request->last_date;
            $data->class_start = $request->class_start;
            $data->status = $request->status;
            $data->no_of_class = $request->no_of_class;
            $data->total_hour = $request->total_hour;
            $data->seat_available = $request->seat_available;
            $data->who_can_join = $request->who_can_join;
            $data->class_schedule = $request->class_schedule;
            $data->desciption = $request->desciption;
            $data->outline = $request->outline;
        
            //upload image
            $file = $request->file('file'); 
            if($request->hasFile('file')){ 
                $pathImage = 'public/uploads/course';
                $fileName = imagePost($pathImage,$file);
                $data->image =  $fileName;
            }
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect()->route('course.index');
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }


    public function show($slug)
    {
        $data['show'] = Courses::where('slug',$slug)->first();
        if ($data['show']) {
            return view('backend.course.show', compact('data'));
            } else {
                return redirect()->back(); 
            }
    }

 
    public function edit($slug)
    {
        $data['edit'] = Courses::where('slug',$slug)->first();
        if ($data['edit']) {
            return view('backend.course.create', compact('data'));
            } else {
                return redirect()->back(); 
            }
    }

  
    public function update(Request $request,$id)
    {
            // return $request;
         $this->validate($request, array(
             'title' => 'required|max:250',
             'price' => 'nullable',
             'venue' => 'required|max:250',
             'date' => 'required|',
             'last_date' => 'required',
             'class_start' => 'required|',
             'status' => 'required|',
             'no_of_class' => 'required|',
             'total_hour' => 'required|',
             'seat_available' => 'required|',
             'who_can_join' => 'required|',
             'class_schedule' => 'required|',
             'desciption' => 'required|',
             'outline' => 'required|',
             'file' => 'nullable|mimes:jpeg,png,jpg',
         ));
         try { 
             $data = Courses::find($id);
             $data->title = ucfirst($request->title);
             $data->slug = strtolower(str_replace(' ', '-',$request->title));        
             $data->venue = $request->venue;
             $data->price = $request->price;
             $data->date = $request->date;
             $data->last_date = $request->last_date;
             $data->class_start = $request->class_start;
             $data->status = $request->status;
             $data->no_of_class = $request->no_of_class;
             $data->total_hour = $request->total_hour;
             $data->seat_available = $request->seat_available;
             $data->who_can_join = $request->who_can_join;
             $data->class_schedule = $request->class_schedule;
             $data->desciption = $request->desciption;
             $data->outline = $request->outline;
         
             //upload image
             $file = $request->file('file'); 
             if($request->hasFile('file')){ 
                 $pathImage = 'public/uploads/course';
                 $fileName = imagePost($pathImage,$file);
                 if (file_exists($data->image)) {
                    \File::delete($data->image);
                }
                 $data->image =  $fileName;
             }
             $data->save();
             Toastr::success('Operation Successfull', 'Success');
             return redirect()->route('course.index');
         } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }
    }

 
    public function destroy($id)
    {
        try {
            $product = Courses::find($id);
            if (file_exists($product->image)) {
                \File::delete($product->image);
            }
            $product->delete();
            Toastr::success('Operation Successfull', 'Success');
            return redirect()->route('course.index');

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
}
