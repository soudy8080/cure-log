<?php

namespace App\Http\Controllers\Admin;
use App\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubArea;
use App\Pharm;
use Faker\Provider\ro_MD\Address as FakerAddress;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::all();
        return view('admin.address.index',compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subareas = SubArea::all();
        $pharms = Pharm::all();
        return view('admin.address.create',compact('subareas','pharms'));
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
            'pharm'=>'required',
            'street' => 'required',
            'building' => 'required',
            'landmark' => 'required',
            'subarea' => 'required',
            
        ]);
        $address = new Address();
        $address->pharm_id = $request->pharm;
        $address->subarea_id = $request->subarea;
        $address->Street = $request->street;
        $address->Building = $request->building;
        $address->Landmark = $request->landmark;
        
        $address->save();
        return redirect()->route('address.index')->with('successMsg','Pharmacy Successfully Saved');

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
        $subareas = SubArea::all();
        $address = Address::Find($id);
        return view('admin.address.edit',compact('address','subareas'));
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
            'street' => 'required',
            'building' => 'required',
            'landmark' => 'required',
            'subarea' => 'required',
            
        ]);
        $address = Address::find($id);
        $address->Street = $request->street;
        $address->Building = $request->building;
        $address->subarea_id = $request->subarea;
        $address->save();
        return redirect()->route('address.index')->with('successMsg','address Successfully Saved');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address = Address::find($id);
        $address ->delete();
        return redirect()->back()->with('successMsg','Address Successfully Deleted');
    }
}
