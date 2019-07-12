@extends('layouts.app')

@section('title','Pharmacy')

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
                  <h4 class="card-title ">Add New Pharmacy</h4> 
                </div>
                <div class="card-body table-responsive">
                    <form method="POST" action="{{route('pharm.store')}}" enctype="multipart/form-data">
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
                                    <label class="bmd-label-floating">Mobile </label>
                                    <input type="text" class="form-control" name="mobile" >
                                    <br>
                                </div>        
                            </div>
                        </div>  
                        <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Street Name</label>
                                  <input type="text" class="form-control" name="street">
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Building Number</label>
                                  <input type="text" class="form-control" name="building">
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Landmark</label>
                                  <input type="text" class="form-control" name="landmark">
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8">
                              <div class="form-group">
                                  <label class="bmd-label-floating">SubArea</label>
                                  <select type="text" class="form-control" name="subarea" >
                                      <option value="">...</option>
                                      @foreach ($subareas as $subarea)
                                      <option value="{{$subarea->id}}">{{$subarea->Name}}</option>

                                      @endforeach
                              </select>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-5">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Work From </label>
                                  <input type="text" class="form-control" name="from" >
                                  <br>
                              </div>        
                          </div>
                        </div>
                        <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Work To</label>
                                        <input type="text" class="form-control" name="to">
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



