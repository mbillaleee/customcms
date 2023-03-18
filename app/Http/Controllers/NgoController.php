<?php

namespace App\Http\Controllers;

use App\Models\Ngo;
use App\Models\PhotoGallery;
use App\Models\Blog;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class NgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo_galleries = PhotoGallery::where('status', 1)->take(6)->get();
        $blogs = Blog::where('status', 1)->take(4)->get();
        $blogs_foot = Blog::where('status', 1)->take(3)->get();
        return view('template/ngo/index', compact('photo_galleries', 'blogs', 'blogs_foot'));
    }
    public function about()
    {
        $volunteers = Volunteer::where('status', 1)->take(10)->get();
        return view('template/ngo/about', compact('volunteers'));
    }
    public function volounteer()
    {
        $volunteers = Volunteer::where('status', 1)->take(10)->get();
        return view('template/ngo/volounteer', compact('volunteers'));
    }
    public function religiousProgram()
    {
        $blogs = Blog::where('status', 1)->take(20)->get();
        return view('template/ngo/religious-program', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ngo  $ngo
     * @return \Illuminate\Http\Response
     */
    public function show(Ngo $ngo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ngo  $ngo
     * @return \Illuminate\Http\Response
     */
    public function edit(Ngo $ngo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ngo  $ngo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ngo $ngo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ngo  $ngo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ngo $ngo)
    {
        //
    }
    
}
