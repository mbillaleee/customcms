<?php

namespace App\Http\Controllers;

use App\Models\ContuctUs;
use Illuminate\Http\Request;

class ContuctUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_us = ContuctUs::all();
        return view('contact-us.index', compact('contact_us'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContuctUs  $contuctUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContuctUs $contuctUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContuctUs  $contuctUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContuctUs $contuctUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContuctUs  $contuctUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContuctUs $contuctUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContuctUs  $contuctUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContuctUs $contuctUs)
    {
        $contuctUs->delete();
        return redirect()->back()->with('success','Event deleted successfully!');
    }
}
