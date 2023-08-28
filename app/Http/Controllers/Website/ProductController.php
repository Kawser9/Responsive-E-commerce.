<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    public function view_product()
    {
        $products=Product::latest()->get();
        return view('frontend.pages.products.allProduct',compact('products'));
    }

    public function show($encryptID)
    {
        $id=Crypt::decrypt($encryptID);
        $comments = Comment::with('customer')->where('product_id',$id)->latest()->get();
        $product=Product::with('images')->find($id);
        return view('frontend.pages.products.show',compact('product','comments'));
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