<?php

namespace App\Http\Controllers;

use App\Models\Widgets;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WidgetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $widgets = Widgets::latest()->get(); 
        return view('widgets.index', compact('widgets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('widgets.create');
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

        $widgets = New Widgets;
        $widgets->user_id=1;
        $widgets->title=$request->title;
        $widgets->slug= Str::slug($request->title);
        $widgets->content=$request->content;
        $widgets->position=$request->position;
        $widgets->status=$request->status;
        $widgets->save();

        return redirect()->route('widgets.index')->with('success','Widget created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Widgets  $widgets
     * @return \Illuminate\Http\Response
     */
    public function show(Widgets $widgets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Widgets  $widgets
     * @return \Illuminate\Http\Response
     */
    public function edit(Widgets $widgets)
    {
        return view('widgets.edit', compact('widgets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Widgets  $widgets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Widgets $widgets)
    {
        // dd($request->all());
        $widgets->user_id=1;
        $widgets->title=$request->title;
        $widgets->slug= Str::slug($request->title);
        $widgets->content=$request->content;
        $widgets->position=$request->position;
        $widgets->status=$request->status;
        $widgets->save();

        return redirect()->route('widgets.index')->with('success','Widget created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Widgets  $widgets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Widgets $widgets)
    {
        // dd($widgets->id);
        $widgets->delete();
        return redirect()->back()->with('success','Portfolio deleted successfully!');
    }
}
