<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductEventGallery;
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
            $product->specification=$request->specification;
            $product->status=$request->status;
            // $product->save();

            if($product->save()){
                $id=$product->id;
                foreach ($request->multi_image as $key => $vl){ 
                    $multi_image = $request->file('multi_image')[$key] ?? '';
                    if($multi_image != '')
                    {
                        $imagename = pathinfo($multi_image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $multi_image->getClientOriginalExtension();
                        $multi_image->move(public_path('uploads/productsmultiimage'), $imagename);
                        $multi_image=$imagename;
                    }else{
                        $multi_image=null;
                    }
                
                    $data = array(
                        'user_id'=>1,
                        'reference_id'=>$id,
                        'title'=>$request->name,
                        'multi_image'=>$multi_image,
        
                    );
                    ProductEventGallery::insert($data);
                }
            }



            // if($product->save()){
            //     $id=$product->id;
            //     $title=$product->name;
            //     $flag = 1;
            //     foreach($request->file('multi_image') as $product_multiple_photo){
            //     $uploaded_photo = $product_multiple_photo;
            //     $new_name = $product . '-' . $flag .'.'.$uploaded_photo->getClientOriginalExtension();
            //     $new_upload_location = base_path('public/uploads/multi_image/' . $new_name);
            //     //photo upload end
            //     ProductEventGallery::insert([
            //         'reference_id ' => $id,
            //         'title' => $title,
            //         'multi_image'  => $new_name,
            //     ]);
            //     $flag++;
            //     }
            // }

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
        $multiimages = ProductEventGallery::where('reference_id', $product->id )->get();
        // dd( $multiimages);
        return view('product.edit', compact('product', 'categories', 'multiimages'));
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
        $product->specification=$request->specification;
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

    // public function multiDestroy($id){
    //     dd($id);
   
    //     ProductEventGallery::find($id)->delete($id);
      
    //     return response()->json([
    //         'success' => 'Record deleted successfully!'
    //     ]);
    // }

//     public function multiDestroy($id)
// {   //For Deleting Users
//     $multiimagedelete = new ProductEventGallery;
//     $multiimagedelete = ProductEventGallery::find($id);
//     $multiimagedelete->delete($id);
//     dd($multiimagedelete);
//     return response()->json([
//         'success' => 'Record has been deleted successfully!'
//     ]);
// }

// public function multiDestroy(Request $request)
//     {
//         $id=$request['id'];
//         ProductEventGallery::where('id', $id)->delete();
//         return response()->json(['articleDelete' => 'success']);
//     }

// public function multiDestroy($multiimage)
//     {
//         ProductEventGallery::where('id', $multiimage)->delete();
//         return response()->json([
//             'success' => 'Record deleted successfully!'
//         ]);
//     }

// public function multiDestroy($id)
// {
//     ProductEventGallery::where('id', $id)->delete($id);

//     return response()->json(['success'=>'success']);
// }
public function multiDestroy($id)
{
    // ProductEventGallery::find($id);
    // ProductEventGallery::destroy($id);
    //     return response()->json(['success' => ProductEventGallery::all()], Response::HTTP_OK);

    $promulimg = ProductEventGallery::find($id);
    $promulimg ->delete();
    return response()->json(['sucess'=>'delete']);

}


}
