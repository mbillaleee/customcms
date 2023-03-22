<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Validator;
use Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
            'icon' => 'required',
            'description' => 'required',
            'image' => 'required|image:jpg,jpeg,png',
            
        ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            // return 'ok';
        $service = New Service();

        $image = $request->file('image');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/service'), $imagename);
                $service->image=$imagename;
            }
            $service->user_id=Auth::user()->id;
            $service->title=$request->title;
            $service->icon=$request->icon;
            $service->description=$request->description;
            $service->status=$request->status;
            $service->save();

            // return 'ok';
            return redirect()->route('service.index')->with('success','Service created successfully!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
            'image' => 'image:jpg,jpeg,png',
            
        ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $image = $request->file('image');
            if($image != '')
            {
                if($service->image == null){
                unlink(public_path('uploads/service/'.$service->image));
                }
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/service'), $imagename);
                $service->image=$imagename;
            }
            
            $service->title=$request->title;
            $service->icon=$request->icon;
            $service->description=$request->description;
            $service->status=$request->status;
            $service->save();

            // return 'ok';
            return redirect()->route('service.index')->with('success','Service update successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('success','Service deleted successfully!');
    
    }
}
