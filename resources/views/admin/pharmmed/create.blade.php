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
                  <h4 class="card-title ">Add New medecine</h4>
                </div>
                <div class="card-body table-responsive">
                    <form method="POST" action="{{route('pharmMed.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="bmd-label-floating">All Medecine </label>
                                    <select type="text" class="form-control" name="name" >
                                          <option value="0">...</option>
                                        @foreach ($medecines as $med)
                                    <option value="{{$med->id}}">{{$med->Name}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                </div>        
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Pharmacy</label>
                                    <input type="text" class="form-control" name="pharm" value="{{$pharm->id}}">
                                        <br>
                                    </div>        
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Price </label>
                                    <input type="text" class="form-control" name="price" >
                                    <br>
                                </div>        
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Quantity </label>
                                    <input type="text" class="form-control" name="quantity" >
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



