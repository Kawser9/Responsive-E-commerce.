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
    
    public function authenticate(Request $request)
    {

        // dd($request->all());
        $request->validate
        ([
            'email'      =>'required|email',
            'password'   =>'required'
        ]);
        if(auth()->attempt(request()->only(['email','password'])))
        {
            return redirect()->route('dashboard')->with('msg','Login successfully.');
        }
            return redirect()->route('admin.login')->with('msg','Login faild,try again.');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('msg','Logeout success.');
    }
    // if(Auth::guard()->attempt(['email'=>$request->email,'password'=>$request->password])){
    //     return redirect()->route('dashboard');
    //     return redirect('/admin/dashboard');
    // }
    // return redirect()->route('admin.login');

}
