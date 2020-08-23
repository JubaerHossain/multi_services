<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function login(){ 
        if (Auth::check()) {
           return redirect()->route('admin.dashboard');
        }else {
            return view('auth.sign_in');
        }       
    }
}
