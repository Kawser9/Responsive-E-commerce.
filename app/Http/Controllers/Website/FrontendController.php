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


    public function getByType($type)
    {
        $sliders=Slider::all();
        $products=Product::where('type',$type)->get();
        return view('frontend.pages.home',compact('products','sliders','type'));
    }

}
