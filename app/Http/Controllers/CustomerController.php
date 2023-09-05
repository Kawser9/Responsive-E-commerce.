<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Brian2694\Toastr\Facades\Toastr;
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
                
            ]);

            if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
                $image->storeAs('/customers',$fileName);

            }

        Customer::create
            ([
                'name'              =>$request->name,
                'email'             =>$request->email,
                'phone'             =>$request->phone,
                'address'           =>$request->address,
                'image'             =>$fileName,
                'password'          =>bcrypt($request->password)
            ]);
        // return redirect()->route('frontend.master');
        Toastr::success('Registration Complete.', 'Customer', ['options']);
        return redirect()->route('frontend.login');
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
            Toastr::success('Login Success.', "Customer");
            return redirect()->route('home');
        }
        Toastr::warning('Login Failed Try Again.', 'Customer');
        return redirect()->back();
        // dd("invalid user");
    }
    public function logout()
    {
        auth()->guard('customer')->logout();
        Toastr::success('Logout Success.', 'Customer');
        return redirect()->route('home');
    }

    public function checkOut()
    {
        return view('frontend.pages.products.checkout');
    }


    public function placeOrder(Request $request)
    {
        // dd($request->all());

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
