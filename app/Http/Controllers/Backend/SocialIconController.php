<?php

namespace App\Http\Controllers\Backend;

use App\SocialIcon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SocialIconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.social.index');
    }

    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(SocialIcon::latest()->get())
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="'.route('social-icon.edit',$data->id).'">
                            Edit
                        </a>
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/frontend-setting/social-icons/delete/`);">
                            Delete
                        </a>
                        </div>
                    </div>
                    </div>';
                    return $button;
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
                    ->rawColumns(array('action','status'))
                    ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.social.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|max:250',
            'status' => 'required|',
            'icon' => 'required|',
            'url' => 'required|',
        ]);
        try {
            $data = new SocialIcon();
            $data->name = $request->name;
            $data->status = $request->status;
            $data->icon = $request->icon;
            $data->url = $request->url;
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/frontend-setting/social-icon');
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SocialIcon  $socialIcon
     * @return \Illuminate\Http\Response
     */
    public function show(SocialIcon $socialIcon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SocialIcon  $socialIcon
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialIcon $socialIcon)
    {
        try{
            $data['edit'] = $socialIcon;
            return view('backend.social.create',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocialIcon  $socialIcon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {
            // dd($request->all());
            $this->validate($request, [
                'name' => 'required|max:250',
                'status' => 'required|',
                'icon' => 'required|',
                'url' => 'required|',
            ]);
            try {
                $data = SocialIcon::find($id);
                $data->name = $request->name;
                $data->status = $request->status;
                $data->icon = $request->icon;
                $data->url = $request->url;
                $data->save();
                Toastr::success('Operation Successfull', 'Success');
                return redirect('/admin/frontend-setting/social-icon');
        
             } catch (\Exception $e) {
                 Toastr::error('Something went wrong!', 'Error');
                 return redirect()->back(); 
             }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SocialIcon  $socialIcon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = SocialIcon::find($id);
            $data->delete();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/frontend-setting/social-icon');

        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
}
