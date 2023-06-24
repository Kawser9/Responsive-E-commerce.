<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        $categories=Category::all();
        return view('backend.pages.category.list',compact('categories'));
    }

    public function categoryCreate()
    {
        return view('backend.pages.category.category-create');
    }


    public function categoryStore(Request $request)
    {
        $request->validate
            ([
                'name'=>'required'
            ]);
        Category::create
        ([
                'name'=>$request->category_name,
                'description'=>$request->descriptioon
        ]);
        return redirect()->route('category.list');
    }

}
