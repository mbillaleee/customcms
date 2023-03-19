<?php

namespace App\Http\Controllers;

use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use Auth;


class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video_galleries = VideoGallery::latest()->get();
        return view('videogallery.index', compact('video_galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videogallery.create');
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
            'code' => 'required',
            'desc' => 'required',
            'image' => 'required|image:jpg,jpeg,png',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $videogallery = New VideoGallery;

        $image = $request->file('image');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/videogallery'), $imagename);
                $videogallery->image=$imagename;
            }

            $videogallery->title=$request->title;
            $videogallery->code=$request->code;
            $videogallery->user_id=Auth::user()->id;
            $videogallery->desc=$request->desc;
            $videogallery->type=$request->type;
            $videogallery->status=$request->status;
            $videogallery->save();

            return redirect()->route('videogallery.index')->with('success','Video insert successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideoGallery  $videoGallery
     * @return \Illuminate\Http\Response
     */
    public function show(VideoGallery $videoGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideoGallery  $videoGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoGallery $videoGallery)
    {
        return view('videogallery.edit', compact('videoGallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VideoGallery  $videoGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideoGallery $videoGallery)
    {
        //


        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'code' => 'required',
            'desc' => 'required',
            'image' => 'image:jpg,jpeg,png',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $image = $request->file('image');
        if($image != '')
        {
            if($videoGallery->image == null){
            unlink(public_path('uploads/videogallery/'.$videoGallery->image));
            }
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/videogallery'), $imagename);
            $videoGallery->image=$imagename;
        }
        $videoGallery->title=$request->title;
        $videoGallery->code=$request->code;
        $videoGallery->user_id=Auth::user()->id;
        $videoGallery->desc=$request->desc;
        $videoGallery->type=$request->type;
        $videoGallery->status=$request->status;
        $videoGallery->save();

        return redirect()->route('videogallery.index')->with('success','video update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideoGallery  $videoGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoGallery $videoGallery)
    {
        $videoGallery->delete(); 
        return redirect()->back()->with('success','Video deleted successfully!');
    }
}
