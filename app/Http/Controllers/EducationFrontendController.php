<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\PhotoGallery;
use App\Models\Teacher;
use App\Models\OurClass;
use App\Models\Tag;

class EducationFrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $blogs = Blog::all();
        $photogallery = PhotoGallery::all();
        $teachers = Teacher::all();
        $ourclasses = OurClass::all();
        return view('frontend-template1.index', compact('sliders', 'blogs', 'photogallery', 'teachers', 'ourclasses'));
    }
    public function galleryindex()
    {
        $sliders = Slider::all();
        $blogs = Blog::all();
        $photogallery = PhotoGallery::all();
        return view('frontend-template1.index', compact('sliders', 'blogs', 'photogallery'));
    }

    public function teachers()
    {
        $sliders = Slider::all();
        
        $teachers = Teacher::all();
        return view('frontend-template1.teacher', compact('teachers'));
    }

    public function classgrid()
    {
        $sliders = Slider::all();
        
        $ourclasses = OurClass::all();
        return view('frontend-template1/class-grid', compact('ourclasses'));
    }
    public function classlist()
    {
        $sliders = Slider::all();
        
        $ourclasslists = OurClass::all();
        return view('frontend-template1/class-list', compact('ourclasslists'));
    }

    public function aboutteachers()
    {
        $sliders = Slider::all();
        
        $teachers = Teacher::all();
        return view('frontend-template1/about', compact('teachers'));
    }

    public function blogdetails()
    {
        $sliders = Slider::all();
        
        $blogs = Blog::all();
        $ourclasses = OurClass::all();
        return view('frontend-template1/blog-details', compact('blogs', 'ourclasses'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
