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
                  <h4 class="card-title ">Edit Address</h4> 
                </div>
                <div class="card-body table-responsive">
                    <form method="POST" action="{{ route('address.update', $address->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                       
                      <div class="row">
                          <div class="col-md-5">
                              <div class="form-group">
                                  <label class="bmd-label-floating">Street </label>
                              <input type="text" class="form-control" name="street" value="{{$address->Street}}">
                                  <br>
                              </div>        
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="bmd-label-floating">Building </label>
                            <input type="text" class="form-control" name="building" value="{{$address->Building}}">
                                <br>
                            </div>        
                        </div>
                      </div>
                      <div class="row">
                              <div class="col-md-8">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Landmark</label>
                                      <input type="text" class="form-control" name="landmark" value="{{$address->Landmark}}">
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
                                    <option value="{{$subarea->id}}">{{$subarea->Name}}
                                      
                                    </option>

                                  @endforeach
                              </select>
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



