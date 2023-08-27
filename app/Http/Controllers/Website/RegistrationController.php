<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Frontend\Registration;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('frontend.pages.registration.registration');
    }
    
    public function login()
    {
        return view('frontend.pages.registration.login');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_id' => 'required',
            'comment' => 'required|string',
        ]);
        

        Comment::create
            ([
                'product_id'          =>$request->product_id,
                'customer_id'         =>$request->customer_id,
                'comment'             =>$request->comment
            ]);

        Toastr::success('Comment added successfully!', 'Customer ');
        return redirect()->back();
    }
}
