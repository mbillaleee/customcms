<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Template1;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::with('childs')->where('parent_id', null)->get();
 
        // $men = Menu::where('parent_id', null)->first();
        // $sub_menus = Menu::where('parent_id', $men->id)->get();

        // dd($men);
        
        return view('menu.index', compact('menus'));
    }

    public function order(Request $request,$id){
        $menuItemOrder = json_decode($request->get('order'));
        $this->ordermenu($menuItemOrder,null);
    }
 
    private function ordermenu(array $menuItems, $parentId){
        foreach ($menuItems as $index => $item){
            $menuItem = MenuItem::findOrFail($item->id);
 
            $menuItem->update([
               'order' => $index+1,
               'parent_id' => $parentId
            ]);
            if(isset($item->children)){
                $this->ordermenu($item->children,$menuItem->id);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::where('parent_id', null)->get();
        $Template1 = Template1::all();
        return view('menu.create', compact('menu', 'Template1'));
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
        
        $menu = New Menu;
        $menu->user_id=1;
        $menu->title=$request->title;
        $menu->slug= Str::slug($request->title);
        $menu->order=$request->order;
        $menu->url=$request->url;
        $menu->template_id=$request->template_id;
        $menu->parent_id=$request->parent_id;
        $menu->target=$request->target;
        $menu->status=$request->status;
        $menu->save();
        return redirect()->route('menu.index')->with('success','Menu created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $menu->user_id=1;
        $menu->name=$request->name;
        $menu->slug= Str::slug($request->name);
        $menu->position=$request->position;
        $menu->status=$request->status;
        $menu->save();
        return redirect()->route('menu.index')->with('success','Menu created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->back()->with('success','Menu deleted successfully!');
    }
}
