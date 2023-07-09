<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    // category table...............................


    public function list()
    {
        $categories=Category::latest()->get();
        return view('backend.pages.category.list',compact('categories'));
    }
    // create form..............................................


    public function categoryCreate()
    {
        return view('backend.pages.category.category-create');
    }

    // category store .............................................


    public function categoryStore(Request $request)
    {
        $request->validate
            ([
                'category_name'     =>'required',
                'image'             =>'required'
            ]);

        if($request->hasFile('image')) 
        {

            $image=$request->file('image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/category',$fileName);

        }   
        Category::create
        ([
                'name'          =>$request->category_name,
                'description'   =>$request->descriptioon,
                'image'         =>$fileName
        ]);
        return redirect()->route('category.list')->with('msg','Category Created Successfully.');
    }

    // update.................................

    public function edit($id)
    {
        $category=Category::find($id);
        return view('backend.pages.category.category-edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category=Category::find($id);


            if ($request->hasFile('image'))
            {
                if ($category->image)
                {
                    Storage::delete($category->image);

                }
                    $image=$request->file('image');
                    $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
                    $image->storeAs('/category',$fileName);
            }


        $category->name             =$request->category_name;
        $category->description      =$request->description;
        $category->status           =$request->status;
        $category->image            =$fileName;

        
        $category->save();

        return redirect()->route('category.list')->with('msg','Category Update Successfully.');

    }

    // show......................................



    public function show($id)
    {
        $category=Category::find($id);
        return view('backend.pages.category.show',compact('category'));
    }


    // delete..................................

    public function delete($id)
    {

        $category=Category::find($id);
        $category->delete();
        return redirect()->route('category.list')->with('msg','Category Delete Successfully.');

    }

}
