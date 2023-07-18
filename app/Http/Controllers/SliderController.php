<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $sliders=Slider::paginate(10);
        return view('backend.pages.slider.list',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate
        ([
            'title'         =>'required',
            'description'   =>'required',
            'image'         =>'required'
        ]);
        
        if($request->hasFile('image'))
            {
                $image=$request->file('image');
                $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
                $image->storeAs('/sliders',$fileName);

            }
        Slider::create
        ([
            'title'             =>$request->title,
            'description'       =>$request->description,
            'image'             =>$fileName

        ]);
            return redirect()->back()->with('msg','Slider Create Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $slider=Slider::find($id);
        return view('backend.pages.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $slider=Slider::find($id);

        $fileName=$slider->image;
        if ($request->hasFile('image')) 
        {
            // Delete the previous image if it exists
            if ($slider->image) {
                Storage::delete($slider->image);
            }
    
            // Store the new image
            $image=$request->file('image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/sliders',$fileName);
        }

        
        $slider->title          =$request->title;
        $slider->description    =$request->description;
        $slider->image          =$fileName;


        $slider->save();

        return redirect()->route('slider.list')->with('msg','Slider Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $sliders=Slider::find($id);
        $sliders->delete();
        return redirect()->back()->with('msg','Slider Delete Successfully.');
    }
}
