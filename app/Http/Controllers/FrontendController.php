<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\PhotoGallery;
use App\Models\Teacher;
use App\Models\OurClass;
use App\Models\Tag;
use App\Models\Template1;


class FrontendController extends Controller
{
    public function index()
    {
        $activetemplate = Template1::where('status', 1)->first();
        // dd($activetemplate);
        if($activetemplate->id == 1){
        $sliders = Slider::all();
        $blogs = Blog::all();
        $photogallery = PhotoGallery::all();
        $teachers = Teacher::all();
        $ourclasses = OurClass::all();
        return view('template.education.index', compact('sliders', 'blogs', 'photogallery', 'teachers', 'ourclasses'));
        }elseif($activetemplate->id == 2){
            return view('template.ecommerce.index');
        }elseif($activetemplate->id == 3){

        }elseif($activetemplate->id == 4){
            
        }
    }
}
