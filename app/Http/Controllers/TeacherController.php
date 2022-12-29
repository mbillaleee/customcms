<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::latest()->get();
        return view('teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
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

        $teacher = New Teacher();

        $image = $request->file('image');
        if($image != '')
        {
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/teacher'), $imagename);
            $teacher->image=$imagename;
        }

        $teacher->user_id=1;
        $teacher->name=$request->name;
        $teacher->subject=$request->subject;
        $teacher->slug= Str::slug($request->name);
        $teacher->phone=$request->phone;
        $teacher->email=$request->email;
        $teacher->skype=$request->skype;
        $teacher->degree=$request->degree;
        $teacher->experience=$request->experience;
        $teacher->hobbies=$request->hobbies;
        $teacher->my_courses=$request->my_courses;
        $teacher->projects=$request->projects;
        $teacher->description=$request->description;
        $teacher->social_link1=$request->social_link1;
        $teacher->social_link2=$request->social_link2;
        $teacher->social_link3=$request->social_link3;
        $teacher->social_link4=$request->social_link4;
        $teacher->status=$request->status;
        $teacher->save();

        return redirect()->route('teacher.index')->with('success','Teacher created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        // dd($request->all());

        $image = $request->file('image');
        if($image != '')
        {
            if($teacher->image == null){
            unlink(public_path('uploads/teacher/'.$teacher->image));
            }
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/teacher'), $imagename);
            $teacher->image=$imagename;
        }

        $teacher->user_id=1;
        $teacher->name=$request->name;
        $teacher->subject=$request->subject;
        $teacher->slug= Str::slug($request->name);
        $teacher->phone=$request->phone;
        $teacher->email=$request->email;
        $teacher->skype=$request->skype;
        $teacher->degree=$request->degree;
        $teacher->experience=$request->experience;
        $teacher->hobbies=$request->hobbies;
        $teacher->my_courses=$request->my_courses;
        $teacher->projects=$request->projects;
        $teacher->description=$request->description;
        $teacher->social_link1=$request->social_link1;
        $teacher->social_link2=$request->social_link2;
        $teacher->social_link3=$request->social_link3;
        $teacher->social_link4=$request->social_link4;
        $teacher->status=$request->status;
        $teacher->save();

        return redirect()->route('teacher.index')->with('success','Teacher created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->back()->with('success','Teacher deleted successfully!');
    }
}
