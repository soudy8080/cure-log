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
                  <h4 class="card-title ">Edit Pharmacy</h4> 
                </div>
                <div class="card-body table-responsive">
                    <form method="POST" action="{{ route('pharm.update', $pharm->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                          <div class="col-md-5">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Name </label>
                                  <input type="text" class="form-control" name="name" value=" {{$pharm->Name}} " >
                                  <br>
                              </div>        
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-5">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Mobile </label>
                              <input type="text" class="form-control" name="mobile" value="{{$pharm->Mobile}}">
                                  <br>
                              </div>        
                          </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="bmd-label-floating">Work From </label>
                            <input type="text" class="form-control" name="from" value="{{$pharm->From}}">
                                <br>
                            </div>        
                        </div>
                      </div>
                      <div class="row">
                              <div class="col-md-8">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Work To</label>
                                      <input type="text" class="form-control" name="to" value="{{$pharm->To}}">
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



