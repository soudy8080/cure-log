@extends('layouts.app')

@section('title','Address')

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
                  <h4 class="card-title ">Add New address</h4> 
                </div>
                <div class="card-body table-responsive">
                    <form method="POST" action="{{route('address.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-md-5">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Pharmacy </label>
                                  <select type="text" class="form-control" name="pharm" >
                                        <option value="0">...</option>
                                      @foreach ($pharms as $pharm)
                                  <option value="{{$pharm->id}}">{{$pharm->Name}}</option>
                                      @endforeach
                                  </select>
                                  <br>
                              </div>        
                          </div>
                      </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Street </label>
                                    <input type="text" class="form-control" name="street" >
                                    <br>
                                </div>        
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Building </label>
                                    <input type="text" class="form-control" name="building" >
                                    <br>
                                </div>        
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-5">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Landmark</label>
                                  <input type="text" class="form-control" name="landmark" >
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
                      
                        <a href="{{route('pharm.index')}}" class="btn btn-danger">Back</a>
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



