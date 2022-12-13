<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->get(); 
        return view('portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolio.create');
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
        $portfolio = New portfolio;

        $image = $request->file('image');
        $document = $request->file('document');
            if($image != '')
            {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/portfolioimage'), $imagename);
                $portfolio->image=$imagename;
            }
            if($document != '')
            {
                $documentname = pathinfo($document->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $document->getClientOriginalExtension();
                $document->move(public_path('uploads/portfoliodocument'), $documentname);
                $portfolio->document=$documentname;
            }

            $portfolio->user_id=1;
            $portfolio->title=$request->title;
            $portfolio->slug= Str::slug($request->title);
            $portfolio->desc=$request->desc;
            // $portfolio->date=$request->date;
            $portfolio->status=$request->status;
            $portfolio->save();

            return redirect()->route('portfolio.index')->with('success','Portfolio created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        // dd($request->all());
        $image = $request->file('image');
        $document = $request->file('document');
        if($image != '')
        {
            if($portfolio->image != null){
            unlink(public_path('uploads/portfolioimage/'.$portfolio->image));
            }
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/portfolioimage'), $imagename);
            $portfolio->image=$imagename;
        }

        if($document != '')
        {
            if($portfolio->document != null){
            unlink(public_path('uploads/portfoliodocument/'.$portfolio->document));
            }
            $documentname = pathinfo($document->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $document->getClientOriginalExtension();
            $document->move(public_path('uploads/portfoliodocument'), $documentname);
            $portfolio->document=$documentname;
        }

        $portfolio->user_id=1;
        $portfolio->title=$request->title;
        $portfolio->slug= Str::slug($request->title);
        $portfolio->desc=$request->desc;
        // $portfolio->date=$request->date;
        $portfolio->status=$request->status;
        $portfolio->save();

            return redirect()->route('portfolio.index')->with('success','portfolio update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->back()->with('success','Portfolio deleted successfully!');
    }
}
