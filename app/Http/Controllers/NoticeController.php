<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NoticeController extends Controller
{
    /**notice
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::latest()->get(); 
        return view('notice.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notice.create');
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
        $notice = New Notice;

        $document = $request->file('document');
            if($document != '')
            {
                $documentname = pathinfo($document->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $document->getClientOriginalExtension();
                $document->move(public_path('uploads/noticedocument'), $documentname);
                $notice->document=$documentname;
            }

            $notice->user_id=1;
            $notice->title=$request->title;
            $notice->slug= Str::slug($request->title);
            $notice->desc=$request->desc;
            $notice->date=$request->date;
            $notice->status=$request->status;
            $notice->save();

            return redirect()->route('notice.index')->with('success','Notice created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        return view('notice.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        // dd($request->all());
        $document = $request->file('document');
        if($document != '')
        {
            if($notice->document != null){
            unlink(public_path('uploads/noticedocument/'.$notice->document));
            }
            $documentname = pathinfo($document->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $document->getClientOriginalExtension();
            $document->move(public_path('uploads/noticedocument'), $documentname);
            $notice->document=$documentname;
        }

        $notice->user_id=1;
        $notice->title=$request->title;
        $notice->slug= Str::slug($request->title);
        $notice->desc=$request->desc;
        $notice->date=$request->date;
        $notice->status=$request->status;
        $notice->save();

            return redirect()->route('notice.index')->with('success','notice update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        $notice->delete();
        return redirect()->back()->with('success','Notice deleted successfully!');
    }
}
