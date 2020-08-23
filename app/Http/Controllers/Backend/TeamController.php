<?php

namespace App\Http\Controllers\Backend;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class TeamController extends Controller
{
    public function index()
    {
        return view('backend.team.index');
    }

    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(Team::latest()->get())
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="'.route('team.show',$data->id).'">
                        View
                        </a>
                        <a class="dropdown-item" href="'.route('team.edit',$data->id).'">
                            Edit
                        </a>
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`admin/teams/delete/`);">
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
        return view('backend.team.create');
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
            $data = new Team();
            $data->name = $request->name;
            $data->sky_url = $request->sky_url;
            $data->fb_url = $request->fb_url;
            $data->tw_url = $request->tw_url;
            $data->ln_url = $request->ln_url;
            $data->status = $request->status;
            $data->designation = $request->designation;
            $data->description = $request->description;
            $file = $request->file('document'); 
            if($request->hasFile('document')){ 
                $pathImage = 'public/uploads/team';
                $fileName = imagePost($pathImage,$file);
                $data->image =  $fileName;           
            }
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/team');
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        try{
            $data['show'] = $team;
            return view('backend.team.show',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        try{
            $data['edit'] = $team;
            return view('backend.team.create',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:250',
            'status' => 'required|',
            'description' => 'required|',
            'designation' => 'required|',
            'document' => 'nullable|mimes:jpeg,png,jpg',
        ]);
        try {
            $data = Team::find($id);
            $data->name = $request->name;
            $data->sky_url = $request->sky_url;
            $data->fb_url = $request->fb_url;
            $data->tw_url = $request->tw_url;
            $data->ln_url = $request->ln_url;
            $data->status = $request->status;
            $data->designation = $request->designation;
            $data->description = $request->description;
            $file = $request->file('document'); 
            if($request->hasFile('document')){ 
                $pathImage = 'public/uploads/team';
                $fileName = imagePost($pathImage,$file);
                if (file_exists($data->image)) {
                    \File::delete($data->image);
                }
                $data->image =  $fileName;           
            }
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/team');
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = Team::find($id);
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
