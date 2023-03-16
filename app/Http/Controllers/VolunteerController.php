<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;
use Validator;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "ok";
        $volunteers = Volunteer::all();
        return view('volunteer.index', compact('volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteer.create');
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
            'name' => 'required',
            'email' => 'required|email|unique:volunteers',
            'phone' => 'required|numeric|digits:11||unique:volunteers',
            'address' => 'required',
            'image' => 'nullable|image:jpg,jpeg,png',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $volunteer = New Volunteer;

        $image = $request->file('image');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/volunteer'), $imagename);
                $volunteer->image=$imagename;
            }

            $volunteer->name          =$request->name;
            $volunteer->email         =$request->email;
            $volunteer->phone         =$request->phone;
            $volunteer->address       =$request->address;
            $volunteer->occupation    =$request->occupation;
            $volunteer->message       =$request->message;
            $volunteer->area_of_work  =$request->area_of_work;
            $volunteer->status        =$request->status;
            $volunteer->save();

            return redirect()->route('volunteer.index')->with('success','Volunteer created successfully!');
    }
    public function volenteerstore(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:volunteers',
            'phone' => 'required|numeric|digits:11|unique:volunteers',
            'address' => 'required',
            'image' => 'nullable|image:jpg,jpeg,png',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // dd($request->all());
        $volunteer = New Volunteer;

        $image = $request->file('image');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/volunteer'), $imagename);
                $volunteer->image=$imagename;
            }

            $volunteer->name          =$request->name;
            $volunteer->email         =$request->email;
            $volunteer->phone         =$request->phone;
            $volunteer->address       =$request->address;
            $volunteer->occupation    =$request->occupation;
            $volunteer->message       =$request->message;
            $volunteer->area_of_work  =$request->area_of_work;
            $volunteer->status        =$request->status;
            $volunteer->save();

            return redirect()->away('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteer $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
        return view('volunteer.edit', compact('volunteer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        // dd($request->all());
        $image = $request->file('image');
        if($image != '')
        {
            if($volunteer->image != null){
            unlink(public_path('uploads/volunteer/'.$volunteer->image));
            }
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/volunteer'), $imagename);
            $volunteer->image=$imagename;
        }

        $volunteer->name          =$request->name;
        $volunteer->email         =$request->email;
        $volunteer->phone         =$request->phone;
        $volunteer->address       =$request->address;
        $volunteer->occupation    =$request->occupation;
        $volunteer->message       =$request->message;
        $volunteer->area_of_work  =$request->area_of_work;
        $volunteer->status        =$request->status;
        $volunteer->save();

        return redirect()->route('volunteer.index')->with('success','Volunteer update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {
        $volunteer->delete();
        return redirect()->back()->with('success','Volunteer deleted successfully!');
    }
}
