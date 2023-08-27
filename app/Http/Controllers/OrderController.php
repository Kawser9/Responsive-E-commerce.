<?php

namespace App\Http\Controllers;

use App\Library\SslCommerz\SslCommerzNotification;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Function_;
use Throwable;

class OrderController extends Controller
{
    public function list()
    {
        $orders=Order::with('customer')->latest()->get();
        return view('backend.pages.order.list',compact('orders'));
    }
    public Function orderDetails($id)
    {
      // dd($id);
        $detail=Order::find($id);
        $orderDetail=OrderDetail::with('product')->where('order_id',$id)->get();
        return view('backend.pages.order.orderDetails',compact('orderDetail','detail'));
    }
    public function updateOrder(Request $request,$id)
    {
        // dd($id);
        $order=Order::find($id);
        $order->update([
          'order_status'=>$request->order_status,
          'payment_status'=>$request->payment_status,

        ]);
        Toastr::success('Updated Successfully.', 'Order Status ');
        // return redirect()->route('order.list');
        return redirect()->back();
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
        session()->forget('cart');

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
              'number'=>$request->number,
              'payment_method'=>$request->paymentMethod,
              'total'=>array_sum(array_column($myCart,'sub_total')),
              'payment_status'=>'pending',
              'order_status'=>'pending'
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

              $product=Product::find($key);
              
              $product->decrement('quantity',$cart['quantity']);
            }
            DB::commit();


            if($request->paymentMethod == 'SSL')
            {
              // dd('this is ssl');
  
              // redirect to payment page
              $this->payNow($order);
            }
            Toastr::success('Order is Placed.', 'Order');
            return redirect()->back();
        }catch(Throwable $e)
        {
          DB::rollBack();
          Toastr::warning('Something went wrong.', 'Order');
          return redirect()->back();
  
        }
  
  
  
    }
    public function payNow($orderData)
    {
      // dd($orderData);
        $post_data = array();
        $post_data['total_amount'] = $orderData->total; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $orderData->id; // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $orderData->name;
        $post_data['cus_email'] = $orderData->email;
        $post_data['cus_add1'] = $orderData->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";



        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }

   



}
