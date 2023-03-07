<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::latest()->get(); 
        return view('sub-category.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get(); 
        return view('sub-category.create', compact('categories'));
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

         $SubCategory = New SubCategory;

         $image = $request->file('image');
             if($image != '')
             {
                 $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                 $image->move(public_path('uploads/subcategory'), $imagename);
                 $SubCategory->image=$imagename;
             }
 
             $SubCategory->category_id=$request->category_id;
             $SubCategory->name=$request->name;
             $SubCategory->user_id=1;
             $SubCategory->slug= Str::slug($request->name);
             $SubCategory->desc=$request->desc;
             $SubCategory->status=$request->status;
             $SubCategory->save();
 
             return redirect()->route('subcategory.index')->with('success','Sub Category created successfully!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        $categories = Category::latest()->get(); 
        return view('sub-category.edit', compact('categories', 'subCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        // dd($request->all());
        $image = $request->file('image');
        if($image != '')
        {
            if($subCategory->image == null){
            unlink(public_path('uploads/subcategory/'.$subCategory->image));
            }
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/subcategory'), $imagename);
            $subCategory->image=$imagename;
        }
        


            $subCategory->category_id= $request->category_id;
            $subCategory->name=        $request->name;
            $subCategory->user_id=     1;
            $subCategory->slug=        Str::slug($request->name);
            $subCategory->desc=        $request->desc;
            $subCategory->status=      $request->status;
            $subCategory->save();

            return redirect()->route('subcategory.index')->with('success','Sub Category created successfully!');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->back()->with('success','Sub Category deleted successfully!');
    
    }
}
