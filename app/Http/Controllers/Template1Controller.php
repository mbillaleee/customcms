<?php

namespace App\Http\Controllers;

use App\Models\Template1;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use Auth;

class Template1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $template1s = Template1::latest()->get();
        return view('template1.index', compact('template1s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $template1s = Template1::latest()->get();
        return view('template1.create', compact('template1s'));
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

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'thumb' => 'required|image:jpg,jpeg,png',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $template1 = New Template1;

        $thumb = $request->file('thumb');
            if($thumb != '')
            {
                $imagename = pathinfo($thumb->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $thumb->getClientOriginalExtension();
                $thumb->move(public_path('uploads/template1'), $imagename);
                $template1->thumb=$imagename;
            }

            $template1->user_id=Auth::user()->id;
            $template1->title=$request->title;
            $template1->slug= Str::slug($request->title);
            $template1->content=$request->content;
            $template1->status=$request->status;
            $template1->save();

            return redirect()->route('template1.index')->with('success','Template created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Template1  $template1
     * @return \Illuminate\Http\Response
     */
    public function show(Template1 $template1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Template1  $template1
     * @return \Illuminate\Http\Response
     */
    public function edit(Template1 $template1)
    {
        return view('template1.edit', compact('template1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Template1  $template1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Template1 $template1)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'thumb' => 'image:jpg,jpeg,png',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $thumb = $request->file('thumb');
        if($thumb != '')
        {
            if($template1->thumb == null){
            unlink(public_path('uploads/template1/'.$template1->thumb));
            }
            $imagename = pathinfo($thumb->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $thumb->getClientOriginalExtension();
            $thumb->move(public_path('uploads/template1'), $imagename);
            $template1->thumb=$imagename;
        }
        
        $template1->user_id=1;
        $template1->title=$request->title;
        $template1->slug= Str::slug($request->title);
        $template1->content=$request->content;
        $template1->status=$request->status;
        $template1->save();

        return redirect()->route('template1.index')->with('success','Template Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Template1  $template1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template1 $template1)
    {
        $template1->delete();
        return redirect()->back()->with('success','Template deleted successfully!');
    }
}
