<?php

namespace App\Http\Controllers\Backend;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PageController extends Controller
{
    
    public function index()
    {
        return view('backend.page.index');    
    }
    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(Page::latest()->get())
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="'.route('page.show', $data->id).'">
                            View
                        </a>
                        <a class="dropdown-item" href="'.route('page.edit', $data->id).'">
                            Edit
                        </a>
                       
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/pages/delete/`);">
                            Delete
                        </a>
                        </div>
                    </div>
                    </div>';
                    return $button;
                    }) 
                    ->editColumn('title', function ($data) {
                        return $data->title;
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
                    ->rawColumns(array('action','status','date'))
                    ->make(true);
        }
    }
    public function create()
    {
        return view('backend.page.create');
    }

  
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'title' => 'required|unique:pages,title,',
            'status' => 'required|',
            'content' => 'required|',
        ]);
        try {
            $data = new Page();
            $data->title = $request->title;
            $data->status = $request->status;
            $data->content = $request->content;
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/page');
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }
    }

 
    public function show($id)
    {
        try{
            $data['show'] = Page::find($id);
            return view('backend.page.show',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $data['edit'] = Page::find($id);
            return view('backend.page.create',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }


    public function update(Request $request, $id)
    {
            //dd($request->all());
            $this->validate($request, [
                'title' => 'required|unique:pages,title,'.$id,
                'status' => 'required|',
                'content' => 'required|',
            ]);
            try {
                $data = Page::find($id);
                $data->title = $request->title;
                $data->status = $request->status;
                $data->content = $request->content;
                $data->save();
                Toastr::success('Operation Successfull', 'Success');
                return redirect('/admin/page');
        
             } catch (\Exception $e) {
                 Toastr::error('Something went wrong!', 'Error');
                 return redirect()->back(); 
             }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = Page::find($id);
            $data->delete();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/page');

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
}
