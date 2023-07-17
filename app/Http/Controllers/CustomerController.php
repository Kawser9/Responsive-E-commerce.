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

        return redirect()->route('home')->with('msg','Registration Complete.');
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
            return redirect()->route('home');
        }
        return redirect()->back()->with('msg','Login Failed Try Again.');
        // dd("invalid user");
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
