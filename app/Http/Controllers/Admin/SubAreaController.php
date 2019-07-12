<?php

namespace App\Http\Controllers\Admin;
use App\SubArea;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Area;

class SubAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subareas = SubArea::all();
        return view('admin.subarea.index',compact('subareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();

        return view('admin.subarea.create',compact('areas'));

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
            'area' => 'required',
        ]);
        $subareas = new SubArea();
        $subareas->Name = $request->name;
        $subareas->Area_id = $request->area;
        $subareas->save();
        return redirect()->route('subarea.index')->with('successMsg','SubArea Successfully Saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $areas = Area::all();
        $subareas = SubArea::find($id);
        return view('admin.subarea.edit',compact('subareas','areas'));
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
            'area' => 'required',
        ]);
        $subareas = SubArea::find($id);
        $subareas->Name =$request ->name;
        $subareas->Area_id =$request ->area;
        $subareas ->save();
        return redirect()->route('subarea.index')->with('successMsg','Subarea Successfully Saved');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subareas = SubArea::find($id);
        $subareas->delete();
        return redirect()->back()->with('successMsg','SubArea Successfully Deleted');
    }
}
