<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view_product()
    {
        $products=Product::all();
        return view('frontend.pages.products.product',compact('products'));
    }

    public function show($id)
    {
        $product=Product::find($id);
        return view('frontend.pages.products.show',compact('product'));
    }
}
