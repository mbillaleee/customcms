<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use Auth;

class PhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo_galleries = PhotoGallery::latest()->get();
        return view('photogallery.index', compact('photo_galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('photogallery.create', compact('categories'));
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
            'desc' => 'required',
            'image' => 'required|image:jpg,jpeg,png',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $photogallery = New PhotoGallery;

        $image = $request->file('image');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/photogallery'), $imagename);
                $photogallery->image=$imagename;
            }

            $photogallery->category_id=$request->category_id;
            $photogallery->title=$request->title;
            $photogallery->user_id=Auth::user()->id;
            $photogallery->slug= Str::slug($request->title);
            $photogallery->desc=$request->desc;
            $photogallery->status=$request->status;
            $photogallery->save();

            return redirect()->route('photogallery.index')->with('success','photogallery created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoGallery $photoGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(PhotoGallery $photoGallery)
    {
        $categories = Category::latest()->get();
        return view('photogallery.edit', compact('photoGallery', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhotoGallery $photoGallery)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
            'image' => 'image:jpg,jpeg,png',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $image = $request->file('image');
        if($image != '')
        {
            if($photoGallery->image == null){
            unlink(public_path('uploads/photoGallery/'.$photoGallery->image));
            }
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/photoGallery'), $imagename);
            $photoGallery->image=$imagename;
        }

            $photoGallery->title=$request->title;
            $photoGallery->user_id=1;
            $photoGallery->slug= Str::slug($request->title);
            $photoGallery->desc=$request->desc;
            $photoGallery->status=$request->status;
            $photoGallery->save();

            return redirect()->route('photogallery.index')->with('success','photo Gallery update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoGallery $photoGallery)
    {
        $photoGallery->delete();
        return redirect()->back()->with('success','photo Gallery deleted successfully!');
    }
}
