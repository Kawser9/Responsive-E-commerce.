<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function list()
    {
        $products=Product::latest()->get();
        return view('backend.pages.product.list',compact('products'));
    }
    public function productCreate()
    {
        return view('backend.pages.product.create');
    }
    public function productStore(Request $request)
    {
        $request->validate
            ([
                'product_name'=>'required'
            ]);
        Product::create
        ([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'description'=>$request->descriptioon,
            'image'=>$request->image
        ]);
        return redirect()->route('product.list');
    }
}
