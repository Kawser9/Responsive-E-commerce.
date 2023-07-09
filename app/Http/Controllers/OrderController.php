<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function list()
    {
        return view('backend.pages.order.list');
    }

    public function create()
    {
        return view('backend.pages.order.create');
    }

    public function store(Request $request)
    {
        $request->validate
        ([
            'product'   =>'required',
            'total'     =>'required'
        ]);

        Order::create
        ([
            'product'   =>$request->product,
            'total'     =>$request->total
        ]);
        return redirect()->route('order.list');
    }

}
