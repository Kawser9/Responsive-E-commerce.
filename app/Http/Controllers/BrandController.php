<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $brands=Brand::all();
        $brands=Brand::latest()->get();
        return view('backend.pages.brand.list',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate
            ([
                'name'=>'required'
            ]);
        Brand::create
            ([
                'name'          =>$request->name,
                'description'   =>$request->description,

            ]);
        return redirect()->route('brand.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand=Brand::find($id);
        return view('backend.pages.brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $brand=Brand::find($id);


        // variable-> database collumn name = $request->input field name
    
        $brand->name          =$request->name;
        $brand->status        =$request->status;
        $brand->description   =$request->descriptioon;

        $brand->save();


        return redirect()->route('brand.list')->with('msg','Brand Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $brand=Brand::find($id);
        $brand->delete();
        return redirect()->back()->with('msg','Brand Delete Successfully.');
    }
}
