@extends('layouts.app')

@section('title','subArea')

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
                  <h4 class="card-title ">Add New Subarea</h4> 
                </div>
                <div class="card-body table-responsive">
                    <form method="POST" action="{{route('subarea.store')}}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Name </label>
                                    <input type="text" class="form-control" name="name" >
                                    <br>
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
                      
                        <a href="{{route('subarea.index')}}" class="btn btn-danger">Back</a>
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



