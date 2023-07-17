<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slider;

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

}
