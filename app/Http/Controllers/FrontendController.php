<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function master()
    {
        $products=Product::all();
        return view('frontend.master',compact('products'));
    }
}
