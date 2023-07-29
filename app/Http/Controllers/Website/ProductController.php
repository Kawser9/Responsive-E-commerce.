<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    public function view_product()
    {
        $products=Product::all();
        return view('frontend.pages.products.allProduct',compact('products'));
    }

    public function show($encryptID)
    {
        $id=Crypt::decrypt($encryptID);
        
        $product=Product::with('images')->find($id);
        return view('frontend.pages.products.show',compact('product'));
    }

    public function categoryWiseProduct($encryptID)
    {
        $id = Crypt::decrypt($encryptID);
        $singleCategory=Category::with('products')->find($id);
        
        return view('frontend.pages.products.category-wise-product',compact('singleCategory'));
    }
    public function filteByType($type)
    {
        $products=Product::where('type',$type)->get();
        return view('frontend.pages.products.filterProduct',compact('products','type'));
    }
}