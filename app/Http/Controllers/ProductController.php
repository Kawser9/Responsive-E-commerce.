<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

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

                'name'      =>'required',
                'price'     =>'required|gt:100',
                'quantity'  =>'required|gt:10',
                'image'     =>'required'
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
                'name'          =>$request->name,
                'price'         =>$request->price,
                'quantity'      =>$request->quantity,
                'description'   =>$request->descriptioon,
                'image'         =>$fileName
            ]);
        return redirect()->route('product.list')->with('msg','Product Create Successfully.');
    }

    public function edit($id)
    {
        $product=Product::find($id);
        return view('backend.pages.product.edit',compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product=Product::find($id);


        if ($request->hasFile('image')) 
        {
            // Delete the previous image if it exists
            if ($product->image) {
                Storage::delete($product->image);
            }
    
            // Store the new image
            $image=$request->file('image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/products',$fileName);
        }

        // variable-> database collumn name = $request->input field name
    
        $product->name          =$request->name;
        $product->price         =$request->price;
        $product->quantity      =$request->quantity;
        $product->status        =$request->status;
        $product->description   =$request->descriptioon;
        $product->image         = $fileName;

        $product->save();


        return redirect()->route('product.list')->with('msg','Product Updated Successfully.');
    //     $data->name = $request->input('name');
    // $data->email = $request->input('email');
    

    }

    public function show($id)
    {
        $product=Product::find($id);
        return view('backend.pages.product.show',compact('product'));
    }

    public function delete($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->back()->with('msg','Product Delete Successfully.');
    }

}
// ->with('product',$product)
