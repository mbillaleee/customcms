<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Validator;
use Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.create');
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
            'designation' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'image' => 'required|image:jpg,jpeg,png',
            
        ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            // return 'ok';
        $team = New Team();

        $image = $request->file('image');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/team'), $imagename);
                $team->image=$imagename;
            }

            $team->name=$request->name;
            $team->designation=$request->designation;
            $team->email=$request->email;
            $team->phone=$request->phone;
            $team->facebook=$request->facebook;
            $team->twitter=$request->twitter;
            $team->instagram=$request->instagram;
            $team->linkedin=$request->linkedin;
            $team->description=$request->description;
            $team->status=$request->status;
            $team->save();

            // return 'ok';
            return redirect()->route('team.index')->with('success','Team created successfully!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'designation' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'image' => 'image:jpg,jpeg,png',
            
        ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            // return 'ok';

            $image = $request->file('image');
            if($image != '')
            {
                if($team->image != null){
                unlink(public_path('uploads/team/'.$team->image));
                }
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/team'), $imagename);
                $team->image=$imagename;
            }

            $team->name=$request->name;
            $team->designation=$request->designation;
            $team->email=$request->email;
            $team->phone=$request->phone;
            $team->facebook=$request->facebook;
            $team->twitter=$request->twitter;
            $team->instagram=$request->instagram;
            $team->linkedin=$request->linkedin;
            $team->description=$request->description;
            $team->status=$request->status;
            $team->save();

            // return 'ok';
            return redirect()->route('team.index')->with('success','Team update successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->back()->with('success','Team deleted successfully!');
    
    }
}
