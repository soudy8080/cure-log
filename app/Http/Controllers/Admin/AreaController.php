<?php

namespace App\Http\Controllers\Admin;
use App\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubArea;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $areas = Area::all();
        return view('admin.area.index',compact('areas'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
        $areas = new Area();
        $areas->NAme = $request->name;
        $areas->save();
        return redirect()->route('area.index')->with('successMsg','Area Successfully Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subareas= SubArea::all();
        $area = Area::find($id);
        return view ('admin.area.openSA',compact('area','subareas'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $areas = Area::find($id);
        return view('admin.area.edit',compact('areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);

        $areas = Area::find($id);
        $areas->Name = $request->name;
        $areas->save();
        return redirect()->route('area.index')->with('successMsg','Area Successfully Saved');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $areas = Area::find($id);
        $areas->delete();
        return redirect()->back()->with('successMsg','Area Successfully Deleted');
    }
}
