<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::where('status', 1)->get();
        // dd($setting[0]->blog_show);
        return view('setting.index', compact('setting'));
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
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        // dd($request->all());
        DB::table('settings')
        ->update(
            [
                'title' => $request->title,
            'domain' => $request->domain,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'email' => $request->email,
             'favicon' => $request->favicon,
             'logo' => $request->logo,
             'facebook_url' => $request->facebook_url,
             'twitter_url' => $request->twitter_url,
             'youtube_url' => $request->youtube_url,
             'copy_right' => $request->copy_right,
             'blog_show' => $request->blog_show,
             'mission' => $request->mission,
             'vission' => $request->vission,
             'values' => $request->values,
             'donation' => $request->donation,
             'sponsor_child' => $request->sponsor_child,
             'status' => 1,
             ]
        );

    return redirect()->route('setting.index')->with('success','Setting  update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
