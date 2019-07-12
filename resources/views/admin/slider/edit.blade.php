@extends('layouts.app')

@section('title','slider')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">    
@endpush

@section('content')
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Add New Slides</h4> 
                </div>
                <div class="card-body table-responsive">
                    <form method="POST" action="{{ route('slider.update', $slider->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="bmd-label-floating">User </label>
                                <input type="text" class="form-control" name="name" value="{{$slider->Name}}" >
                                    <br>
                                </div>        
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Post</label>
                                    <input type="text" class="form-control" name="post" value="{{$slider->Post}}">
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Phone</label>
                                <input type="text" class="form-control" name="phone" vlaue="{{$slider->Phone}}">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Area </label>
                                    <select type="text" class="form-control" name="area" >
                                          <option value="0">...</option>
                                        @foreach ($areas as $area)
                                    <option value="{{$area->id}}">{{$area->Name}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                </div>        
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="bmd-label-floating">subArea </label>
                                    <select type="text" class="form-control" name="subarea" >
                                          <option value="0">...</option>
                                        @foreach ($subareas as $subarea)
                                    <option value="{{$subarea->id}}">{{$subarea->Name}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                </div>        
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Address</label>
                                <input type="text" class="form-control" name="address" vlaue="{{$slider->Address}}">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                                  <div class="col-md-8">
                                      <label class="bmd-label-floating"> Image</label>
                                      <input type="file" name="image" >
                                  </div>
                          </div>
                        <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('scripts')

@endpush



