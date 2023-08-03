<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $customers=Customer::all();
        return view('backend.pages.customer.list',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function customerStore(Request $request)
    {
        $request->validate
            ([
                'name'=>'required',
                'email'=>'required|email|unique:customers',
                'password'=>'required|min:6',
                'confirm_password'=>'required|min:6'
            ]);
        Customer::create
            ([
                'name'              =>$request->name,
                'email'             =>$request->email,
                'password'          =>bcrypt($request->password)
            ]);
        // return redirect()->route('frontend.master');

        return redirect()->route('frontend.login')->with('msg','Registration Complete.');
    } 

    public function dologin(Request $request)
    {
        $request->validate
        ([
            'email'      =>'required|email',
            'password'   =>'required'
        ]);

        // dd($request->all());

        $credentials=$request->except('_token');
 
        // dd($credentials);

        if(auth()->guard('customer')->attempt($credentials))
        {
            return redirect()->intended()->with('msg','Login Success.');
        }
        return redirect()->back()->with('error','Login Failed Try Again.');
        // dd("invalid user");
    }
    public function logout()
    {
        auth()->guard('customer')->logout();
        return redirect()->route('home');
    }

    public function checkOut()
    {
        return view('frontend.pages.products.checkout');
    }


    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
