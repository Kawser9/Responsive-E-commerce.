<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

        $product=Product::with('images')->find($id);
        return view('frontend.pages.products.show',compact('product'));
    }

    public function categoryWiseProduct($id)
    {
        $singleCategory=Category::with('products')->find($id);
        
        return view('frontend.pages.products.category-wise-product',compact('singleCategory'));
    }
}
