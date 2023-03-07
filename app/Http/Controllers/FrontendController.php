<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Menu;
use App\Models\Blog;
use App\Models\PhotoGallery;
use App\Models\Category;
use App\Models\Teacher;
use App\Models\OurClass;
use App\Models\Tag;
use App\Models\Template1;
use App\Models\Widgets;
use App\Models\ContuctUs;


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
        $activity_area = Widgets::where('position', 1)->first();
        $advertise_area = Widgets::where('position', 2)->first();
        $service_area = Widgets::where('position', 3)->first();
        $footer_area = Widgets::where('position', 6)->first();
        $google_map_area = Widgets::where('position', 7)->first();
        $categories = Category::where('category_type',2)->get();
        $menus = Menu::with('childs')->where('parent_id', null)->get();
        return view('template.education.index', compact('sliders', 'blogs', 'photogallery', 'teachers', 'ourclasses', 'activity_area', 'advertise_area', 'service_area', 'footer_area', 'google_map_area', 'categories', 'menus'));
        }elseif($activetemplate->id == 2){
            return view('template.ecommerce.index');
        }elseif($activetemplate->id == 3){

        }elseif($activetemplate->id == 4){
            
        }
    }

    public function teachers()
    {
        $activetemplate = Template1::where('status', 1)->first();
        if($activetemplate->id == 1){
            $sliders = Slider::all();
            $teachers = Teacher::all();
            $footer_area = Widgets::where('position', 6)->first();
            return view('template.education.teacher', compact('teachers', 'footer_area'));
            }
    }

    public function teachersInfo()
    {
        $activetemplate = Template1::where('status', 1)->first();
        if($activetemplate->id == 1){
            $sliders = Slider::all();
            $teachers = Teacher::all();
            $footer_area = Widgets::where('position', 6)->first();
            return view('template.education.teacher-info', compact('teachers', 'footer_area'));
            }
    }

    public function classgrid()
    {
        $activetemplate = Template1::where('status', 1)->first();
        if($activetemplate->id == 1){
            $sliders = Slider::all();
            $ourclasses = OurClass::all();
            $footer_area = Widgets::where('position', 6)->first();
            return view('template.education.class-grid', compact('ourclasses', 'footer_area'));
        }
    }
    public function classlist()
    {
        $activetemplate = Template1::where('status', 1)->first();
        if($activetemplate->id == 1){
            $sliders = Slider::all();
            $ourclasslists = OurClass::all();
            $footer_area = Widgets::where('position', 6)->first();
            return view('template.education.class-list', compact('ourclasslists', 'footer_area'));
        }
    }

    public function about()
    {
        $activetemplate = Template1::where('status', 1)->first();
        if($activetemplate->id == 1){
            $teachers = Teacher::all();
            $activity_area = Widgets::where('position', 1)->first();
            $about_area = Widgets::where('position', 4)->first();
            $footer_area = Widgets::where('position', 6)->first();
            $skill_and_experience_area = Widgets::where('position', 8)->first();
            return view('template.education.about', compact('teachers', 'about_area', 'skill_and_experience_area', 'activity_area', 'footer_area'));
        }
    }

    public function blogdetails($id)
    {
        $activetemplate = Template1::where('status', 1)->first();
        if($activetemplate->id == 1){
            $sliders = Slider::all();
            
            $blogs = Blog::all();
            $ourclasses = OurClass::all();
            $footer_area = Widgets::where('position', 6)->first();
            return view('template.education.blog-details', compact('blogs', 'ourclasses', 'footer_area'));
        }
    }

    public function photogallery()
    {
        $activetemplate = Template1::where('status', 1)->first();
        if($activetemplate->id == 1){
            $sliders = Slider::all();
            $blogs = Blog::all();
            $ourclasses = OurClass::all();
            $categories = Category::where('category_type',2)->get();
            $photogallery = PhotoGallery::all();
            $footer_area = Widgets::where('position', 6)->first();
            return view('template.education.gallery', compact('blogs', 'photogallery','categories', 'footer_area'));
        }
    }

    public function contact()
    {
        $activetemplate = Template1::where('status', 1)->first();
        if($activetemplate->id == 1){
            $footer_area = Widgets::where('position', 6)->first();
            return view('template.education.contact', compact('footer_area'));
        }
    }



    public function storecontuctus(Request $request)
    {
        // dd($request->all());
        
        $contuctus = New ContuctUs();
            $contuctus->name=$request->name;
            $contuctus->email=$request->email;
            $contuctus->subject=$request->subject;
            $contuctus->message=$request->message;
            $contuctus->save();
            return redirect()->route('education.index')->with('success','Message Send successfully!');
    }

    

}
