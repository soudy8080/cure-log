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
                <a href="{{ route('pharm.create') }}" class="btn btn-primary">Add New Pharmacy</a>
                @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Pharmacy</h4> 
                </div>
                <div class="card-body table-responsive">
                    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                      <thead class=" text-primary">
                          <th>ID</th>
                          <th>Name</th>
                          <th>Mobile</th>
                          <th>From</th>
                          <th>To</th>
                          <th>Actions</th>
                          
                      </thead>
                      <tbody>
                        @foreach ($pharms as $pharm)
                          <tr>
                          <td>{{$pharm->id}}</td>
                          <td>
                            <a href="{{route('pharm.show',$pharm->id)}}">{{$pharm->Name}}</a>
                          </td>
                          <td>{{$pharm->Mobile}}</td>
                          <td>{{$pharm->From}}</td>
                          <td>{{$pharm->To}}</td>
                          
                          <td>
                              <a href="{{ route('pharm.edit',$pharm->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                              <form id="delete-form-{{ $pharm->id }}" action="{{ route('pharm.destroy',$pharm->id) }}" style="display: none;" method="POST">
                                  @csrf
                                  @method('DELETE')
                              </form>
                              <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{ $pharm->id }}').submit();
                              }else {
                                  event.preventDefault();
                                      }"><i class="material-icons">delete</i></button>
                            </td>
                          </tr>
                            
                        @endforeach
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
       $(document).ready(function() {
    $('#table').DataTable();
    } );
    </script> 
@endpush



