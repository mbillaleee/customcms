<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
        $slider = New Slider;

        $image = $request->file('image');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/slider'), $imagename);
                $slider->image=$imagename;
            }

            $slider->user_id=1;
            $slider->title=$request->title;
            $slider->button_name=$request->button_name;
            $slider->button_link=$request->button_link;
            // $slider->slug= Str::slug($request->title);
            $slider->content=$request->content;
            $slider->status=$request->status;
            $slider->save();

            return redirect()->route('slider.index')->with('success','Slider created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        // dd($request->all());


        $image = $request->file('image');
        if($image != '')
        {
            if($slider->image == null){
            unlink(public_path('uploads/slider/'.$slider->image));
            }
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/slider'), $imagename);
            $slider->image=$imagename;
        }

        $slider->user_id=1;
        $slider->title=$request->title;
        $slider->button_name=$request->button_name;
        $slider->button_link=$request->button_link;
        // $slider->slug= Str::slug($request->title);
        $slider->content=$request->content;
        $slider->status=$request->status;
        $slider->save();

        return redirect()->route('slider.index')->with('success','Slider update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->back()->with('success','Slider deleted successfully!');
    }
}
