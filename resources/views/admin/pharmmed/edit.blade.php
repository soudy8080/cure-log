@extends('layouts.app')

@section('title','medecine')

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
                  <h4 class="card-title ">Edit medecine</h4> 
                </div>
                <div class="card-body table-responsive">
                    <form method="POST" action="{{ route('pharmMed.update', $medecine->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                          <div class="col-md-5">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Name </label>
                                  <input type="text" class="form-control" name="name" value=" {{$medecine->Name}} " >
                                  <br>
                              </div>        
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-5">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Price </label>
                              <input type="text" class="form-control" name="price" value="{{$medecine->Price}}">
                                  <br>
                              </div>        
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="bmd-label-floating">Quantity </label>
                            <input type="text" class="form-control" name="quantity" value="{{$medecine->Quantity}}">
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



