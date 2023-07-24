<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function list()
    {
        $products=Product::with('catname','brand_name')->paginate(10);
        return view('backend.pages.product.list',compact('products'));
    }
    public function productCreate()
    {
        $brands=Brand::all();
        $categories=Category::all();
        return view('backend.pages.product.create',compact('categories','brands'));
    }
    public function productStore(Request $request)
    {

        //dd($request->all());//check data are coming or not
        $request->validate
            ([

                'name'          =>'required',
                'price'         =>'required|gt:100',
                'quantity'      =>'required|gt:10',
                'image'         =>'required',
                'category_id'   =>'required',
                'brand_id'      =>'required'
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
                'category_id'   =>$request->category_id,
                'brand_id'      =>$request->brand_id,
                'quantity'      =>$request->quantity,
                'description'   =>$request->descriptioon,
                'image'         =>$fileName
            ]);
        return redirect()->back()->with('msg','Product Create Successfully.');
    }

    public function edit($encryptID)
    {
        $id=Crypt::decrypt($encryptID);
        $brands=Brand::all();
        $categories=Category::all();
        $product=Product::find($id);
        return view('backend.pages.product.edit',compact(['product','categories','brands']));
    }

    public function update(Request $request, $encryptID)
    {

        $id=Crypt::decrypt($encryptID);
        $product=Product::find($id);
        

        $fileName=$product->image;
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
        $product->category_id   =$request->category_id;
        $product->brand_id      =$request->brand_id;
        $product->image         = $fileName;

        $product->save();


        return redirect()->route('product.list')->with('msg','Product Updated Successfully.');
    //     $data->name = $request->input('name');
    // $data->email = $request->input('email');
    

    }

    public function show($encryptID)
    {
        $id = Crypt::decrypt($encryptID);
        $product=Product::find($id);
        return view('backend.pages.product.show',compact('product'));
    }

    public function delete($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->back()->with('msg','Product Delete Successfully.');
    }



    public function image()
    {
        return view('backend.pages.product_image.list');
    }

    public function imageCreate()
    {
        $products=Product::all();
        $categories=Category::all();
        $brands=Brand::all();

        return view('backend.pages.product_image.create',compact('products','categories','brands'));
    }


    public function imageStore(Request $request)
    {
        $request->validate
        ([
                'category_id'   =>'required',
                'image'         =>'required',
                'category_id'   =>'required',
                'brand_id'      =>'required'
        ]);
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/product_images',$fileName);
        }

        Image::create
        ([
            'category_id'   =>$request->category_id,
            'brand_id'      =>$request->brand_id,
            'product_id'    =>$request->product_id,
            'image'         =>$fileName

        ]);
        return redirect()->back()->with('msg','Image store successfully.');

    }




}

