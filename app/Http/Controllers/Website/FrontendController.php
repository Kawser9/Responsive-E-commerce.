<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slider;
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

   

    public function addToCard($id)
    {
        // dd($id);
        // card;
        $cart=Session()->get('cart');
        $product=Product::find($id);
        // dd($product);
        if (empty($cart))
        {
           $newCart[$id]=[

                'name'=>$product->name,
                'image'=>$product->image,
                'price'=>$product->price,
                'quantity'=>1,
                'sub_total'=>$product->price * 1
           ];
            session()->put('cart',$newCart);

        //    dd($cart);

        }
        else 
        {
            if (array_key_exists($id,$cart)) {
                
                $cart[$id]['quantity'] = $cart[$id]['quantity'] +1 ;
                $cart[$id]['sub_total'] =  $cart[$id]['quantity'] *  $cart[$id]['price'];

                session()->put('cart',$cart);


            } else {
                
                $cart[$id]=[

                    'name'=>$product->name,
                    'image'=>$product->image,
                    'price'=>$product->price,
                    'quantity'=>1,
                    'sub_total'=>$product->price * 1
               ];
                session()->put('cart',$cart);
            }
            
        }
        
        return redirect()->back()->with('msg','Product add to card successfully.');
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
        return redirect()->back();
    }

}
