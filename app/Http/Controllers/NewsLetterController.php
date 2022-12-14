<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletters = NewsLetter::latest()->get(); 
        return view('newsletter.index', compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newsletter.create');
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
        
        $newsletter = New NewsLetter;

        $image = $request->file('image');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/newsletter'), $imagename);
                $newsletter->image=$imagename;
            }

            $newsletter->title=$request->title;
            $newsletter->user_id=1;
            $newsletter->slug= Str::slug($request->title);
            $newsletter->content=$request->content;
            $newsletter->pub_date=$request->pub_date;
            $newsletter->status=$request->status;
            $newsletter->save();

            return redirect()->route('newsletter.index')->with('success','News Letter created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function show(NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsLetter $newsletter)
    {
        return view('newsletter.edit', compact('newsletter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsLetter $newsletter)
    {
        // dd($request->all());
        $image = $request->file('image');
        if($image != '')
        {
            if($newsletter->image == null){
            unlink(public_path('uploads/newsletter/'.$newsletter->image));
            }
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/newsletter'), $imagename);
            $newsletter->image=$imagename;
        }

        $newsletter->title=$request->title;
        $newsletter->user_id=1;
        $newsletter->slug= Str::slug($request->title);
        $newsletter->content=$request->content;
        $newsletter->pub_date=$request->pub_date;
        $newsletter->status=$request->status;
        $newsletter->save();

            return redirect()->route('newsletter.index')->with('success','News Letter update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsLetter $newsletter)
    {
        $newsletter->delete();
        return redirect()->back()->with('success','News Letter deleted successfully!');
    }
}
