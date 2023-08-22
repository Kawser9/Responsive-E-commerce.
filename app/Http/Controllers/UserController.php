<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
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
            Toastr::success('Login successfully.', 'ADMIN', ['options']);
            return redirect()->route('dashboard');
        }
            Toastr::warning('Login faild,try again.', 'ADMIN', ['options']);
            return redirect()->route('admin.login');
    }

    public function destroy()
    {
        Auth::logout();
        Toastr::success('Logeout successfully.', 'ADMIN', ['options']);
        return redirect()->route('admin.login')->with('logout','Logeout success.');
    }
    // if(Auth::guard()->attempt(['email'=>$request->email,'password'=>$request->password])){
    //     return redirect()->route('dashboard');
    //     return redirect('/admin/dashboard');
    // }
    // return redirect()->route('admin.login');

}
