<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
            'image' => 'required|image:jpg,jpeg,png',
            
        ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        // dd($request->all());
        $blog = New Blog;

        $image = $request->file('image');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/blog'), $imagename);
                $blog->image=$imagename;
            }

            $blog->user_id=1;
            $blog->category_id=$request->category_id;
            $blog->title=$request->title;
            $blog->content=$request->content;
            $blog->slug= Str::slug($request->title);
            $blog->status=$request->status;
            $blog->save();

            return redirect()->route('blog.index')->with('success','Blog created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::latest()->get();
        return view('blog.edit', compact('blog','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        // dd($request->all());
        $image = $request->file('image');
        if($image != '')
        {
            if($blog->image == null){
            unlink(public_path('uploads/blog/'.$blog->image));
            }
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/blog'), $imagename);
            $blog->image=$imagename;
        }

            $blog->user_id=1;
            $blog->title=$request->title;
            $blog->category_id=$request->category_id;
            $blog->slug= Str::slug($request->name);
            $blog->content=$request->content;
            $blog->status=$request->status;
            $blog->save();

            return redirect()->route('blog.index')->with('success','blog update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with('success','Blog deleted successfully!');
    }
}
