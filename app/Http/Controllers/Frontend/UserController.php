<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use DB;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|',
            'password' => 'required|string|min:8',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();           
            return response()->json(['success' => true ], 200);
        } else {
            return response()->json(['error' => 'These credentials do not match our records.'], 201);
        }
    }
    function Mail_Check($email){
        $data = User::where('email',$email)->count();
        if ($data > 0) {
            return response()->json('This email is already used!',400);
          }else {             
              return response()->json('success',200);
        }
  }

  public function user_logout()
  {
      Auth::logout();
      return redirect('/');
  }

  function user_login(){
    return view('frontend.auth.login');
  }
}
