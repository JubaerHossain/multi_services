<?php

namespace App\Http\Controllers\Backend;

use App\User;
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
                        if ($data->price_type == 1) {
                            $price = 'Tk.'.$data->price;
                        } else {
                            $price = 'Free';
                        }
                        
                      return  $price;
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
        $data['trainer'] = User::Role('Trainer')->pluck('name', 'id');
        $data['mentor'] = User::Role('Mentor')->pluck('name', 'id');
        return view('backend.course.create',compact('data'));
    }

    public function store(Request $request)
    {
          // return $request;
                     
           $this->validate($request, array(
            'title' => 'required|max:250',
            'venue' => 'required|max:250',
            'date' => 'required|',
            'last_date' => 'required',
            'class_start' => 'required|',
            'status' => 'required|',
            'no_of_class' => 'required|',
            'total_hour' => 'required|',
            'price_type' => 'required|',
            'seat_available' => 'required|',
            'mentor_id' => 'required|',
            'trainer_id' => 'required|',
            'class_schedule' => 'required|',
            'desciption' => 'required|',
            'outline' => 'required|',
            'file' => 'required|mimes:jpeg,png,jpg',
        ));
        if ($request->price_type == 1) {
            $this->validate($request, array(
                'price' => 'required',
            ));
           } 
       
        try { 
            $data = new Courses;
            $data->title = ucfirst($request->title);
            $data->slug = strtolower(str_replace(' ', '-',$request->title));        
            $data->venue = $request->venue;
            $data->price = ($request->price_type) ? $request->price : null;
            $data->trainer_id = $request->trainer_id;
            $data->price_type = $request->price_type;
            $data->mentor_id = $request->mentor_id;
            $data->date = $request->date;
            $data->last_date = $request->last_date;
            $data->class_start = $request->class_start;
            $data->status = $request->status;
            $data->no_of_class = $request->no_of_class;
            $data->total_hour = $request->total_hour;
            $data->seat_available = $request->seat_available;
            // $data->who_can_join = $request->who_can_join;
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
            $data['trainer'] = User::Role('Trainer')->pluck('name', 'id');
            $data['mentor'] = User::Role('Mentor')->pluck('name', 'id');
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
            'venue' => 'required|max:250',
            'date' => 'required|',
            'last_date' => 'required',
            'class_start' => 'required|',
            'status' => 'required|',
            'no_of_class' => 'required|',
            'total_hour' => 'required|',
            'seat_available' => 'required|',
            'mentor_id' => 'required|',
            'trainer_id' => 'required|',
            'class_schedule' => 'required|',
            'desciption' => 'required|',
            'outline' => 'required|',
            'file' => 'nullable|mimes:jpeg,png,jpg',
        ));
        if ($request->price_type == 1) {
            $this->validate($request, array(
                'price' => 'required',
            ));
           } 
       
        try { 
            $data = Courses::find($id);
            $data->title = ucfirst($request->title);
            $data->slug = strtolower(str_replace(' ', '-',$request->title));        
            $data->venue = $request->venue;
            $data->price = ($request->price_type) ? $request->price : null;
            $data->price_type = $request->price_type;
            $data->trainer_id = $request->trainer_id;
            $data->mentor_id = $request->mentor_id;
            $data->date = $request->date;
            $data->last_date = $request->last_date;
            $data->class_start = $request->class_start;
            $data->status = $request->status;
            $data->no_of_class = $request->no_of_class;
            $data->total_hour = $request->total_hour;
            $data->seat_available = $request->seat_available;
            // $data->who_can_join = $request->who_can_join;
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
