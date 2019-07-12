<?php

namespace App\Http\Controllers\Admin;
use App\Pharm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubArea;
use App\Area;
use App\Address;
use App\Medecine;



class PharmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pharms = Pharm::all();
        $subareas = Subarea::all();
        $areas = Area::all();
        $addresses = Address::all();
        return view('admin.pharm.index',compact('pharms','addresses'));
        return view('welcome',compact('pharms','areas','subareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subareas = SubArea::all();
        return view('admin.pharm.create',compact('subareas'));
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
            'mobile' => 'required',
            'from' => 'required',
            'to' => 'required',
            'street' => 'required',
            'building' => 'required',
            'landmark' => 'required',
            'subarea' => 'required',
            
        ]);
        $pharm = new Pharm();
        $address = new Address();
        $newpharm = Pharm::create(['Name'=>$request->name,'Mobile'=>$request->mobile,'From'=>$request->from,'To'=>$request->to]);
        // $pharm->Name = $request->name;
        // $pharm->Mobile = $request->mobile;
        // $pharm->From = $request->from;
        // $pharm->To = $request->to;
        // $pharm->save();
        if($newpharm)
            $newAddress = Address::create(['subarea_id'=>$request->subarea,'pharm_id'=>$newpharm->id,'Street'=>$request->street,
                'Building'=>$request->building,'Landmark'=>$request->landmark]);
        //         $address->subarea_id = $request->subarea;
        // $address->pharm_id = $newpharm->id;
        // $address->Street = $request->street;
        // $address->Building = $request->building;
        // $address->Landmark = $request->landmark;
        
        
        // $address->save();
        return redirect()->route('pharm.index')->with('successMsg','Pharmacy Successfully Saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //$phmedecine::find($id)->pharms;
        //return $ph;
        $pharm = pharm::find($id);
        $medecine = pharm::find($id)->medecines;
         
        
         return view('admin.pharm.onepharm',compact('medecine','pharm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pharm = Pharm::find($id);
    
        return view('admin.pharm.edit',compact('pharm'));
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
            'mobile' => 'required',
            'from' => 'required',
            'to' => 'required',
            
        ]);
        $pharm = Pharm::find($id);
        $pharm->Name = $request->name;
        $pharm->Mobile = $request->mobile;
        $pharm->from = $request->from;
        $pharm->To = $request->to;
        $pharm->save();
        return redirect()->route('pharm.index')->with('successMsg','Pharmacy Successfully Saved');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pharm = Pharm::find($id);
        $pharm->delete();
        return redirect()->back()->with('successMsg','Pharmacy Successfully Deleted');
    }
}
