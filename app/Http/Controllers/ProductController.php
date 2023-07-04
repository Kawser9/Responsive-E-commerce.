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

        //dd($request->all());//check data are coming or not
        $request->validate
            ([

                'name'=>'required',
                'price'=>'required|gt:100',
                'quantity'=>'required|gt:10',
                'image'=>'required'
            ]);    

            // dd($request->hasFile('image'));
            if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
                $image->storeAs('/products',$fileName);

            }
            Product::create
            ([
                'name'=>$request->name,
                'price'=>$request->price,
                'quantity'=>$request->quantity,
                'description'=>$request->descriptioon,
                'image'=>$fileName
            ]);
        return redirect()->route('product.list')->with('msg','Product Create Successfully.');
    }
}
