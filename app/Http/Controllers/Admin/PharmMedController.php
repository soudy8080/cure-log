<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use App\medecine;
 use App\Pharm;
use Illuminate\Support\Facades\DB;
use App\medecine_pharm;

class PharmMedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pharm.onepharm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pharm = pharm::all();
        $medecines = medecine::all();
        return view('admin.pharmmed.create',compact('medecines','pharm'));
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
            'price'=>'required',
            'quantity'=>'required',
        ]);
        $medecine = new medecine_pharm();
        $medecine->Medecine_id = $request->name;
        $medecine->Pharm_id = $request->pharm;
        $medecine->Price = $request->price;
        $medecine->Quantity = $request->quantity;
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
    // public function get_id($id)
    // {
    //     $pharm = pharm::find($id);
        
    //     $medecines = medecine::all();
    //     return view('admin.pharmmed.create',compact('medecines','pharm'));
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pharm = pharm::find($id);
        
        $medecines = medecine::all();
        return view('admin.pharmmed.create',compact('medecines','pharm'));
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $med = medecine_pharm::where('Medecine_id','=',$id);
       
        $med->delete();
        return redirect()->back()->with('successMsg','medecine Successfully Deleted');
    }
}
