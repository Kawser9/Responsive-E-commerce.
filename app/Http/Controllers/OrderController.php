<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Function_;
use Throwable;

class OrderController extends Controller
{
    public function list()
    {
        $orders=Order::all();
        return view('backend.pages.order.list',compact('orders'));
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


    public function placeOrder(Request $request)
    {
        // dd($request);
        $request->validate([

        ]);

        $myCart=session()->get('cart');
        // dd($myCart);
        try
        {
          DB::beginTransaction();
        //   For order create
          $order=Order::create([
              'customer_id'=>auth('customer')->user()->id,
              'name'=>$request->firstName . ' ' . $request->lastName,
              'email'=>$request->email,
              'address'=>$request->address,
              'payment_method'=>$request->paymentMethod,
              'total'=>array_sum(array_column($myCart,'sub_total')),
            ]);
  
  
            //For order details create 

            foreach($myCart as $key=>$cart)
            {
  
              OrderDetail::create([
                'order_id'=>$order->id,
                'product_id'=>$key,
                'price'=>$cart['price'],
                'qty'=>$cart['quantity'],
                'subtotal'=>$cart['sub_total'],
              ]);
  
            }
            DB::commit();
            return redirect()->back()->with('msg','Order is Place.');
        }catch(Throwable $e)
        {
          DB::rollBack();
          return redirect()->back()->with('msg','Something went wrong');
  
        }
  
  
  
    }
    public Function orderDetails($id)
    {
        $orderDetail=OrderDetail::where('order_id', $id);
        return view('backend.pages.order.orderDetails',compact('orderDetail'));
    }



}
