<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{


    public function index()
    {
        // return User::with('roles')->first()->roles['0'];
        return view('backend.users.index');
    }

    function getData(){
        if(request()->ajax())
        {
            return datatables()->of(User::with('roles')->get())
                    ->addColumn('action', function($data){
                    if ( $data->roles[0]->name != 'Super Admin') {
                      $edit = '<a class="dropdown-item" href="'.route('user.edit', $data->id).'">
                      Edit
                      </a>';
                      $delete = ' <a class="dropdown-item" onclick="GlobaldeleteId('.$data->id.',`users/delete/`);">
                      Delete
                     </a>'; 
                    }
                    else {
                        $edit = '';
                        $delete = ''; 
                    }
                    $button = '<div class="text-right flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                       
                        <a class="dropdown-item" href="'.route('user.show', $data->id).'">
                            View
                        </a>
                         '.$edit.''.$delete.'
                       
                        </div>
                    </div>
                    </div>';
                   
                    return $button;
                    })    
                    ->addColumn('role', function($data){
                        return $data->roles[0]->name;
                        })
                    ->addColumn('date', function($data){
                        return date('d-M-Y',strtotime($data->create_at));
                        })
                    ->rawColumns(array('date','role','action'))
                    ->make(true);
        }
    }

    public function create()
    {
        $data['roles'] = Role::where('name','!=','Super Admin')->pluck('name', 'id');
        return view('backend.users.create_user',compact('data'));
    }


  
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:50',
            'email' => 'required|max:100|unique:users',
            'password' => 'required|max:100',
            'phone' => 'required|max:100',
            'file' => 'nullabe|mimes:jpeg,png,jpg',
        ));
        DB::beginTransaction();
        try{
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->phone_number = $request->phone;
        $user->date_of_birth = $request->date;
        $user->company = $request->company;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $file = $request->file('file'); 
        if($request->hasFile('file')){ 
            $pathImage = 'public/uploads/profile';
            $fileName = imagePost($pathImage,$file);
            $data->avatar =  $fileName;
        }
        else {
            $data->avatar =  'public/uploads/profile/default.jpg';
        }
        $user->save();
        $role = Role::find($request->role);
        $user->assignRole($role);
        DB::commit(); 
        Toastr::success('Operation Successfull', 'Success');
        return redirect('user');
        
    } catch (\Exception $e) {
        Toastr::error('Something went wrong!', 'Error');
        return redirect()->back(); 
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = DB::table('users')
            ->select('users.id', 'users.name', 'users.email', 'users.created_at', 'users.updated_at', 'roles_user.roles_id', 'roles_user.user_id')
            ->join('roles_user', 'users.id', '=', 'roles_user.user_id')
            ->where('users.id', $id)
            ->first();
        return view('users.edit')->withusers($users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required|max:50',
            'email' => 'required|max:100'
        ));

        session()->flash('success', 'Your account has been updated!');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        return response(['msg' => 'Failed deleting the product', 'status' => 'failed']);
}
}

