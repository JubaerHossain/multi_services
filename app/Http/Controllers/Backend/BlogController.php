<?php

namespace App\Http\Controllers\Backend;

use App\Tag;
use App\Blog;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        return view('backend.blog.index');
    }
    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(Blog::latest()->get())
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="'.route('blog.show',$data->slug).'">
                        View
                        </a>
                        <a class="dropdown-item" href="'.route('blog.edit',$data->id).'">
                            Edit
                        </a>
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/blogs/delete/`);">
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
       $data['service'] = Service::pluck('title', 'id');
        return view('backend.blog.create', compact('data'));
    }
    function GetTag(Request $request){
        $data = Tag::where('name','like',  '%' . $request->searchTerm . '%')->select('id','name as text')->get()->take(20);
        return json_encode($data);
    }

    public function store(Request $request)
    {
        //validate data
        // return $request;
        $this->validate($request, array(
            'title' => 'required|max:70',
            'content' => 'nullable',
            'service_id' => 'required|max:70',
            'tags' =>'required',
            'summary' => 'required|',
            'status' => 'required|',
            'file' => 'required|mimes:jpeg,png,jpg',

        ));
        try { 
            //store data
            $taggs=[];
            $tags = implode(',', $request->tags);
            foreach($request->tags as $t){                
                $tt=Tag::where('id',$t)->first();
                if ($tt) {                    
                   array_push($taggs,$tt->name);
                }
                else {
                    $tag = new Tag();
                    $tag->name = $t;
                    $tag->save();
                    array_push($taggs,$t);  
                }
            }
            $blog = new Blog;
            $blog->title = ucfirst($request->title);
            $blog->slug = strtolower(str_replace(' ', '-',$blog->title));
            $blog->tags = implode(',', $taggs);
            $blog->status = $request->status;
            $blog->service_id = $request->service_id;
            $blog->content = $request->content;
            $blog->summary = $request->summary;           
            $blog->user_id = Auth::id();
          
            //upload image
            $file = $request->file('file'); 
            if($request->hasFile('file')){ 
                $pathImage = 'public/uploads/blog/main';
                $fileName = imagePost($pathImage,$file);
                $blog->image =  $fileName;
            }
            $blog->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect()->route('blog.index');
            } catch (\Exception $e) {
                dd($e);
                Toastr::error('Something went wrong!', 'Error');
                return redirect()->back(); 
            }
    }
    public function show($slug)
    {
        $data['show'] = Blog::where('slug',$slug)->first();
        if ($data['show']) {
            return view('backend.blog.show', compact('data'));
            } else {
                return redirect()->back(); 
            }
    }

    
    public function edit($id)
    {
        $data['edit'] = Blog::find($id);
        if ($data['edit']) {
            $data['service'] = Service::pluck('title', 'id');
            return view('backend.blog.create', compact('data'));
            } else {
                return redirect()->back(); 
            }
    }

    function update(Request $request,$id){
        
        //validate data
        // return $request;
        $this->validate($request, array(
            'title' => 'required|max:70',
            'content' => 'nullable',
            'service_id' => 'required|max:70',
            'tags' =>'required',
            'summary' => 'required|',
            'status' => 'required|',
            'file' => 'nullable|mimes:jpeg,png,jpg',

        ));
        try { 
            //store data
            $taggs=[];
            $tags = implode(',', $request->tags);
            foreach($request->tags as $t){                
                $tt=Tag::where('id',$t)->first();
                if ($tt) {                    
                   array_push($taggs,$tt->name);
                }
                else {
                    $tag = new Tag();
                    $tag->name = $t;
                    $tag->save();
                    array_push($taggs,$t);  
                }
            }
            $blog =  Blog::find($id);
            $blog->title = ucfirst($request->title);
            $blog->slug = strtolower(str_replace(' ', '-',$blog->title));
            $blog->tags = implode(',', $taggs);
            $blog->status = $request->status;
            $blog->service_id = $request->service_id;
            $blog->content = $request->content;
            $blog->summary = $request->summary;           
            $blog->user_id = Auth::id();
          
            //upload image
            $file = $request->file('file'); 
            if($request->hasFile('file')){ 
                $pathImage = 'public/uploads/blog/main';
                $fileName = imagePost($pathImage,$file);
                if (file_exists($blog->image)) {
                    \File::delete($blog->image);
                }
                $blog->image =  $fileName;
            }
            $blog->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect()->route('blog.index');
            } catch (\Exception $e) {
                dd($e);
                Toastr::error('Something went wrong!', 'Error');
                return redirect()->back(); 
            }
    }
}
