<?php

namespace App\Http\Controllers;

use Session;
use App\Module;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(Role::latest()->get())
                    ->addColumn('action', function($data){
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                        
                        <a class="dropdown-item" onclick="View('.$data->id.',`/setting/roles/`)">
                            View
                        </a>
                        <a class="dropdown-item" onclick="EditRole('.$data->id.')">
                            Edit
                        </a>
                        <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`setting/role/delete/`);">
                            Delete
                        </a>                        
                        <a class="dropdown-item" href="'.route('role.permission',$data->id).'">
                           Set Permission
                        </a>                        
                       
                        </div>
                    </div>
                    </div>';
                    return $button;
                    })
                    ->addColumn('time', function($data){
                        return date('d-M-Y',strtotime($data->created_at));
                        })
                    ->rawColumns(array('time','action'))
                    ->make(true);
        }
    }
    public function index()
    {
        return view('backend.role_permission.index');
    }

    public function show($id)
    {
        try {
            return Role::where('id',$id)->select('id','name',\DB::raw('DATE_FORMAT(created_at, "%d-%b-%Y") as date'))->first();
        } catch (\Exception $e) {
            return response()->json('fail');
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'name'=>'required|unique:roles|max:10',
            ]
        );
        try{
            $name = $request['name'];
            $role = new Role();
            $role->name = $name;
            $role->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/setting/roles');
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $this->validate($request, [
            'name'=>'required|max:30|unique:roles,name,'.$id,
        ]);
        try{
            $name = $request['name'];
            $role->name = $name;
            $role->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/setting/roles');
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }

    public function destroy($id)
    {
        try{
            $role = Role::findOrFail($id);
            $p_all = Permission::all();
            foreach ($p_all as $p) {                
                $role->revokePermissionTo($p);
            }
            $role->delete();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/setting/roles');
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }

    function permission($id){

        try{
            $data['role'] = Role::findOrFail($id);
            $data['permissions'] = Permission::all();
            $data['module'] = Module::all();
            return view('backend.role_permission.permission',compact('data'));
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }

    function setPermission(Request $request, $id){
     
        //return $request;
        try {
            $role = Role::findOrFail($id);     

            $input = $request->except(['permissions']);
            $permissions = $request['permissions'];
            $p_all = Permission::all();
            foreach ($p_all as $p) {                
                $role->revokePermissionTo($p);
            }
            foreach ($permissions as $permission) {
                $p = Permission::where('id', '=', $permission)->firstOrFail(); 
                $role->givePermissionTo($p);
            }
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/setting/roles');
        } catch (\Exception $e) {
            Toastr::error('Something went wrong!', 'Error');
            return redirect()->back(); 
        }
    }
}
