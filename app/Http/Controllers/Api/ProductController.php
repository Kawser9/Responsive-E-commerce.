<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResources;
use App\Models\Product;
// use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getProduct()
    {
        $products=Product::with('catname')->get();
        // return $this->responseWithSuccess($products,'All product list.');
        return $this->responseWithSuccess(ProductResources::collection($products),'all product list.');
    }
    public function productView($id)
    {
        $product=Product::find($id);
        return $this->responseWithSuccess(ProductResources::make($product),'single product');
    }
    

    public function productCreate(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'product_name'=>'required',
            'product_image'=>'required',
            'product_price'=>'required|gt:100',
            'product_stock'=>'required|gt:10',
            'category_id'=>'required'
        ]);
    

        if($validate->fails())
        {
            return $this->responseWithError($validate->getMessageBag());  
            
            if($request->hasFile('product_image'))
            {
                $image=$request->file('product_image');
                $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
                $image->storeAs('/products',$fileName);
            }
            $product=Product::create([
                'name'=>$request->product_name,
                'category_id'=>$request->category_id,
                'price'=>$request->product_price,
                'quantity'=>$request->product_stock,
                'image'=>$fileName
            ]);
            return $this->responseWithSuccess($product,"Product created successfull.");
        }
    }

}
