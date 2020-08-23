<?php

namespace App\Http\Controllers\Backend;
use App\Service;
use App\Portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('backend.portfolio.index');
    }

    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(Portfolio::latest()->get())
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="'.route('portfolio.show',$data->id).'">
                        View
                        </a>
                        <a class="dropdown-item" href="'.route('portfolio.edit',$data->id).'">
                            Edit
                        </a>
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/portfolios/delete/`);">
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
        return view('backend.portfolio.create',compact('data'));
    }

 
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:250',
            'status' => 'required|',
            'service_id' => 'required|',
            'document' => 'required|mimes:jpeg,png,jpg',
        ]);
        try {
            $data = new Portfolio();
            $data->title = $request->title;
            $data->status = $request->status;
            $data->service_id = $request->service_id;
            $file = $request->file('document'); 
            if($request->hasFile('document')){ 
                $pathImage = 'public/uploads/portfolio';
                $fileName = imagePost($pathImage,$file);
                $data->image =  $fileName;           
            }
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/portfolio');
    
         } catch (\Exception $e) {
             dd($e);
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        try{
            $data['show'] = $portfolio;
            return view('backend.portfolio.show',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        try{
            $data['edit'] = $portfolio;
            $data['service'] = Service::pluck('title', 'id');
            return view('backend.portfolio.create',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|',
            'service_id' => 'required|',
            'status' => 'required|',
            'document' => 'nullable|mimes:jpeg,png,jpg',
        ]);
        try {
            $data = Portfolio::find($id);
            $data->title = $request->title;
            $data->status = $request->status;
            $data->service_id = $request->service_id;
            $file = $request->file('document'); 
            if($request->hasFile('document')){ 
                $pathImage = 'public/uploads/portfolio';
                $fileName = imagePost($pathImage,$file);
                if (file_exists($data->image)) {
                    \File::delete($data->image);
                }
                $data->image =  $fileName;           
            }
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/portfolio');
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = Portfolio::find($id);
            if (file_exists($data->image)) {
                \File::delete($data->image);
            }
            $data->delete();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/portfolio');

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
}
