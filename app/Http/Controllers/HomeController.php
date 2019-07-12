<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\slider;
use App\Area;
use App\subarea;
use App\medecine;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $order_med = Medecine::orderby('Name','Asc')->get();
        $areas = Area::all();
        $sliders = slider::all();
        $getPharms = DB::table('medecine_pharm as M')
        ->select('A.Street','A.Building','A.Landmark','M.Medecine_id','P.Name','P.Mobile')
        ->join('addresses as A','M.Pharm_id','=','A.pharm_id')
        ->join('pharms as P','p.id','=','M.Pharm_id')
        ->where('M.Medecine_id','=','0')->get();

        return view('welcome',compact('sliders','areas','order_med','getPharms'));

    }
    public function getSubarea()
    {
        $areas_id = Input::get('area_id');
        $subareas = subarea::where('Area_id','=',$areas_id)->get();
        return response()->json($subareas);
    }

        public function getpharm(Request $request)
    {
        $sliders = slider::all();
         $areas = area::all();
         $order_med = Medecine::orderby('Name','Asc')->get();
        $getPharms = DB::table('medecine_pharm as M')
        ->select('A.Street','A.Building','A.Landmark','M.Price','P.Name','P.Mobile')
        ->join('addresses as A','M.Pharm_id','=','A.pharm_id')
        ->join('pharms as P','p.id','=','M.Pharm_id')
        ->where('M.Medecine_id','=',$request->medecine)->get();
      
        return view('welcome',compact('getPharms','areas','order_med','sliders'));


            
    }
    public function store(Request $request)
    {
        // if($request->ajax()){

    	// 	$subareas = DB::table('sub_areas')->where('area_id',$request->Area_id)->pluck("name","id")->all();

    	// 	$data = view('ajax-select',compact('subareas'))->render();

    	// 	return response()->json(['options'=>$data]);
        //     }
    }
    
    // public function search(Request $request )
    //  {
    //      $request->validate([
    //          'q'=>'required', 
    //      ]);
    //      $q = $request->q;
    //          $filterMed = Medecine::where('Name','like','%' . $q . '%')->get();
                                   
    //             dd(filterMed);
                        
    //  }
}

