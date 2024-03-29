<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Auth;
use Auth;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get(); 
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('category.create');
    
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
            'category_type' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required|image:jpg,jpeg,png',            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $category = New Category;
        $image = $request->file('image');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/category'), $imagename);
                $category->image=$imagename;
            }

            $category->category_type=$request->category_type;
            $category->name=$request->name;
            $category->user_id=1;
            $category->slug= Str::slug($request->name);
            $category->desc=$request->desc;
            $category->status=$request->status;
            $category->save();

            return redirect()->route('category.index')->with('success','Category created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category) 
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // dd($request->all());
        $image = $request->file('image');
        if($image != '')
        {
            if($category->image == null){
            unlink(public_path('uploads/category/'.$category->image));
            }
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/category'), $imagename);
            $category->image=$imagename;
        }
            $category->category_type=$request->category_type;
            $category->name=$request->name;
            $category->user_id=1;
            $category->slug= Str::slug($request->name);
            $category->desc=$request->desc;
            $category->status=$request->status;
            $category->save();

            return redirect()->route('category.index')->with('success','Category update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success','Category deleted successfully!');
    }
}
