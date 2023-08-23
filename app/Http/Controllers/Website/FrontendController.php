<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slider;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Contracts\Session\Session;

class FrontendController extends Controller
{
    public function master()
    {
        $sliders=Slider::all();
        $products=Product::latest()->take(6)->get();
        return view('frontend.pages.home',compact('products','sliders'));
    }

    public function contact()
    {
        return view('frontend.pages.contact.contact');
    }

    public function customerProfile()
    {
        return view('frontend.pages.registration.profile');
    }
    public function myOrder($id)
    {
        $orders=Order::where('customer_id',$id)->get();
        // dd($orders);
        return view('frontend.pages.registration.myorder',compact('orders'));
    }
    public Function orderDetails($id)
    {
      // dd($id);
        $detail=Order::find($id);
        $orderDetail=OrderDetail::with('product')->where('order_id',$id)->get();
        return view('frontend.pages.registration.orderDetails',compact('orderDetail','detail'));
    }


    public function search()
    {
        $searchKey=request()->search;

         // where('column_name','comparison','value')
      // example: where('price','=',100);
      // example: where('name','habijabi');

      //LIKE % Tushar      ---->matching from right side
      //LIKE Tushar %      ----->matching from left side

        $products=Product::where('name','LIKE','%'.$searchKey.'%')->get();

        return view('frontend.pages.products.search-product',compact('products','searchKey'));
    }

    public function searchByPrice(Request $request)
    {
        $request->validate([
            'start_price' => 'required',
            'end_price' => 'required|after_or_equal:start_price',
        ]);
        $from=$request->start_price;
        $to=$request->end_price;
        $products=Product::whereBetween('price',[$from , $to])->get();
        return view('frontend.pages.products.search-by-price-product',compact('products'));
    }

    public function getByType($type)
    {
        $sliders=Slider::all();
        $products=Product::where('type',$type)->get();
        return view('frontend.pages.home',compact('products','sliders','type'));
    }

   

    public function addToCard(Request $request )
    {
        // dd($id);
        // card;
        $id=$request->id;
        $cart=Session()->get('cart');
        $product=Product::find($id);
        // dd($product);
        if (empty($cart))
        {
           $newCart[$id]=[

                'name'=>$product->name,
                'image'=>$product->image,
                'price'=>$product->price,
                'quantity'=>$request->quantity,
                'sub_total'=>$product->price * (int)request()->quantity
           ];
            session()->put('cart',$newCart);

        //    dd($cart);

        }
        else 
        {
            if (array_key_exists($id,$cart)) {
                
                $cart[$id]['quantity'] = $cart[$id]['quantity'] + $request->quantity;
                $cart[$id]['sub_total'] =  $cart[$id]['quantity'] *  $cart[$id]['price'];

                session()->put('cart',$cart);


            } else {
                
                $cart[$id]=[

                    'name'=>$product->name,
                    'image'=>$product->image,
                    'price'=>$product->price,
                    'quantity'=>$request->quantity,
                    'sub_total'=>$product->price * (int)request()->quantity
               ];
                session()->put('cart',$cart);
            }
            
        }
        Toastr::success('Product add to card successfully.', 'Cart', ['options']);
        return redirect()->back();
    }

    public function card()
    {
        $cartData=session()->get('cart');
        return view('frontend.pages.products.addToCard',compact('cartData'));
    }

    public function removeItem($id)
    {
        $cart=session()->get('cart');
        unset($cart[$id]);
        session()->put('cart',$cart);
        Toastr::success('One item remove successfully.', 'Cart', ['options']);
        return redirect()->back();
    }

    public function clearCart()
    {
        session()->forget('cart');
        Toastr::success('Cart clear successfully.', 'Cart', ['options']);
        return redirect()->back();
    }




}
