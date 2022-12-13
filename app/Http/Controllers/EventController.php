<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->get(); 
        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
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
        $event = New Event;

        $image = $request->file('image');
        $document = $request->file('document');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/eventimage'), $imagename);
                $event->image=$imagename;
            }
            if($document != '')
            {
                $documentname = pathinfo($document->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $document->getClientOriginalExtension();
                $document->move(public_path('uploads/eventdocument'), $documentname);
                $event->document=$documentname;
            }

            $event->user_id=1;
            $event->title=$request->title;
            $event->slug= Str::slug($request->title);
            $event->desc=$request->desc;
            $event->date_time=$request->date_time;
            $event->status=$request->status;
            $event->save();

            return redirect()->route('event.index')->with('success','Event created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        // dd($request->all());
        $image = $request->file('image');
        $document = $request->file('document');
        if($image != '')
        {
            if($event->image != null){
            unlink(public_path('uploads/eventimage/'.$event->image));
            }
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/eventimage'), $imagename);
            $event->image=$imagename;
        }
        if($document != '')
        {
            if($event->document != null){
            unlink(public_path('uploads/event/'.$event->document));
            }
            $documentname = pathinfo($document->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $document->getClientOriginalExtension();
            $document->move(public_path('uploads/event'), $documentname);
            $event->document=$documentname;
        }

        $event->user_id=1;
        $event->title=$request->title;
        $event->slug= Str::slug($request->title);
        $event->desc=$request->desc;
        $event->date_time=$request->date_time;
        $event->status=$request->status;
        $event->save();

            return redirect()->route('event.index')->with('success','Event update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back()->with('success','Event deleted successfully!');
    }
}
