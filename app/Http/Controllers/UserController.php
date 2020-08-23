<?php

namespace App\Http\Controllers\admin\auth;

use File;
use Session;
use App\User;
use App\Account;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }

    
    public function index()
    {
        $users = User::all();
        $roles = Role::get();
        return view('backend.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_name'=>'required|max:120',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);
        DB::beginTransaction();
        try{
        $user = User::create([
            'user_name' => $request['user_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $user->verified=1;
        $user->save();
      
       
        
        Toastr::success('Admin '.$request->name.' added successfully','Success');
        Notification::send($user, new UserAdmin($user));

        $roles = $request['roles'];

        if (isset($roles)) {
            foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();                 
                $user->assignRole($role_r);                
            }
        }
        $type = 'User create';
        $user=[
            'ip'=>$request->getClientIp(),
            'user_id'=>$user->id,
            'user_name'=>$user->user_name,
        ];
        logCreatedActivity($user_profile,$type,$user);

        DB::commit(); 
        return redirect()->back();
    } catch (\Exception $e) {
        Toastr::error('Something went wrong try again!','Error');
        return redirect()->back();
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::get();

        return view('backend.auth.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $this->validate($request, [
            'user_name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required|min:6|confirmed'

        ]);
        $user->user_name=$request->user_name;
        $user->email=$request->email;
        $user->password=Hash::make($request['password']);
        $roles = $request['roles'];
        $user->save();
        Toastr::success('Admin '.$request->name.' edit successfully','Success');



        if (isset($roles)) {
            $user->roles()->sync($roles);
        }
        else {
            $user->roles()->detach();
        }

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Toastr::success('Admin '.$user->name.' delete successfully','Success');


        return redirect()->route('users.index');
    }

}
