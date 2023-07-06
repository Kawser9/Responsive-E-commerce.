<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function login()
    {
        return view('backend.pages.login');
    }

    public function val(Request $request)
    {

        // dd($request->all());
        // $request->Validate
        // ([
        //     'email'=>'required',
        //     'password'=>'required'
        // ]);
        if(auth()->attempt(request()->only(['email','password']))){
            return redirect()->route('dashboard');
        }
        return redirect()->route('admin.login');
    }
    // if(Auth::guard()->attempt(['email'=>$request->email,'password'=>$request->password])){
    //     return redirect()->route('dashboard');
    //     return redirect('/admin/dashboard');
    // }
    // return redirect()->route('admin.login');

}
