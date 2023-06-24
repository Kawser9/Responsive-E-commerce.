<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $suppliers=Supplier::all();
        return view('backend.pages.supplier.list',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function supplierStore(Request $request)
    {
        $request->validate
            ([
                'name'=>'required'
            ]);
        Supplier::create
        ([
            'name'=>$request->supplier_name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'image'=>$request->image

        ]);
        return redirect()->route('supplier.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
