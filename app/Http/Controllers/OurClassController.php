<?php

namespace App\Http\Controllers;

use App\Models\OurClass;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OurClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourclasses = OurClass::latest()->get(); 
        return view('our-class.index', compact('ourclasses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::latest()->get(); 
        return view('our-class.create', compact('teachers'));
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

        $ourClass = New OurClass();

        $image = $request->file('image');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/ourclass'), $imagename);
                $ourClass->image=$imagename;
            }

            $ourClass->user_id=1;
            $ourClass->teacher_id=$request->teacher_id;
            $ourClass->title=$request->title;
            $ourClass->slug= Str::slug($request->title);
            $ourClass->class_size=$request->class_size;
            $ourClass->class_size=$request->class_size;
            $ourClass->class_duration=$request->class_duration;
            $ourClass->transport=$request->transport;
            $ourClass->morning_food=$request->morning_food;
            $ourClass->class_starff=$request->class_starff;
            $ourClass->age_range=$request->age_range;
            $ourClass->class_date=$request->class_date;
            $ourClass->content=$request->content;
            $ourClass->status=$request->status;
            $ourClass->save();

            // return 'ok';
            return redirect()->route('ourclass.index')->with('success','ourClass created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurClass  $ourClass
     * @return \Illuminate\Http\Response
     */
    public function show(OurClass $ourClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurClass  $ourClass
     * @return \Illuminate\Http\Response
     */
    public function edit(OurClass $ourClass)
    {
        return view('our-class.edit', compact('ourClass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurClass  $ourClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurClass $ourClass)
    {
        // dd($request->all());


        $image = $request->file('image');
        if($image != '')
        {
            if($ourClass->image == null){
            unlink(public_path('uploads/ourclass/'.$ourClass->image));
            }
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/ourclass'), $imagename);
            $ourClass->image=$imagename;
        }

        $ourClass->user_id=1;
        $ourClass->title=$request->title;
        $ourClass->class_size=$request->class_size;
        $ourClass->age_range=$request->age_range;
        $ourClass->class_date=$request->class_date;
        // $ourClass->slug= Str::slug($request->title);
        $ourClass->content=$request->content;
        $ourClass->status=$request->status;
        $ourClass->save();

        // return 'ok';
        return redirect()->route('ourclass.index')->with('success','ourClass created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurClass  $ourClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurClass $ourClass)
    {
        $ourClass->delete();
        return redirect()->back()->with('success','Slider deleted successfully!');
    }
}
