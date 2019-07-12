<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\medecine;
use App\pharm;

class MedecineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medecines = Medecine::all();
        return view('admin.medecine.index',compact('medecines')); 
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.medecine.create');
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
            'Description'=>'reqquired',
        ]);
        $medecine = new medecine();
        $medecine->Name = $request->name;
        $medecine->Description = $request->desc;
        $medecine->save();
        return redirect()->route('medecine.index')->with('successMsg','medecine Successfully Saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medecine = Medecine::find($id);
        return view('admin.medecine.edit',compact('medecine'));
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
            'Description'=>'reqquired',
        ]);
        $medecine = Medecine::find($id);
        $medecine->Name = $request->name;
        $medecine->Description = $request->desc;
        $medecine->save();
        return redirect()->route('medecine.index')->with('successMsg','medecine Successfully Saved');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medecine = medecine::find($id);
        $medecine->delete();
        return redirect()->back()->with('successMsg','medecine Successfully Deleted');
    }
}
