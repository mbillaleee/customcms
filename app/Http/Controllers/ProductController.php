<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('product.create', compact('categories'));
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
        
        $product = New Product;

        $image = $request->file('image');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/product'), $imagename);
                $product->image=$imagename;
            }

            $product->user_id=1;
            $product->category_id=$request->category_id;
            $product->name=$request->name;
            $product->slug= Str::slug($request->name);
            $product->desc=$request->desc;
            $product->short_desc=$request->short_desc;
            $product->status=$request->status;
            $product->save();

            return redirect()->route('product.index')->with('success','Product created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::latest()->get();
        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd($request->all());

        $image = $request->file('image');
        if($image != '')
        {
            if($product->image == null){
            unlink(public_path('uploads/product/'.$product->image));
            }
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/product'), $imagename);
            $product->image=$imagename;
        }
        $product->user_id=1;
        $product->category_id=$request->category_id;
        $product->name=$request->name;
        $product->slug= Str::slug($request->name);
        $product->desc=$request->desc;
        $product->short_desc=$request->short_desc;
        $product->status=$request->status;
        $product->save();

        return redirect()->route('product.index')->with('success','Product Udate successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('success','Product deleted successfully!');
    }
}
