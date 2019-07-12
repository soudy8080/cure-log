<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Slider;
use App\SubArea;
use App\Area;
use App\medecine;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts = Slider::orderby('Created_at','DESC')->get();
       $areas = Area::all();
    $subareas = SubArea::all();
    $order_med = Medecine::orderby('Name','Asc')->get();

        return view('post.index',compact('posts','areas','subareas','order_med'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        $subareas = SubArea::all();
        $order_med = Medecine::orderby('Name','Asc')->get();
        return view('post.create',compact('areas','subareas','order_med'));
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
            'post' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'area' => 'required',
            'subarea' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/slider'))
            {
                mkdir('uploads/slider', 0777 , true);
            }
            $image->move('uploads/slider',$imagename);
        }else {
            $imagename = 'dafault.png';
        }
        $post = new Slider();
        $post->Name = $request->name;
        $post->Post = $request->post;
        $post->Address = $request->address;
        $post->Phone = $request->phone;
        $post->subarea_id = $request->subarea;
        $post->Area_id = $request->area;
        $post->image = $imagename;
        $post->save();
        return redirect()->route('post.index')->with('successMsg','Slider Successfully Saved');

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
        $slider = Slider::find($id);
        $areas = Area::all();
        $subareas = SubArea::all();
        return view('post.edit',compact('slider','areas','subareas'));
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
            'post' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'area' => 'required',
            'subarea' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->Name);
        $post = Slider::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/slider'))
            {
                mkdir('uploads/slider', 0777 , true);
            }
            $image->move('uploads/slider',$imagename);
        }else {
            $imagename = $post->image;
        }
        $post->Name = $request->name;
        $post->Post = $request->post;
        $post->Address = $request->address;
        $post->Phone = $request->phone;
        $post->subarea_id = $request->subarea;
        $post->Area_id = $request->area;
        $post->image = $imagename;
        $post->save();
        return redirect()->route('post.index')->with('successMsg','Slider Successfully Updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Slider::find($id);
        if(file_exists('uploads/slider/'.$post->image))
        {
            unlink('uploads/slider/'. $post->image);
        }
        $post->delete();
        return redirect()->back()->with('successMsg','Slider Successfully Deleted');
    }
}
