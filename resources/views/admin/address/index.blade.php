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
                <a href="{{ route('address.create') }}" class="btn btn-primary">Add New Address</a>
                @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Address For pharmacy</h4> 
                </div>
                <div class="card-body table-responsive">
                    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Pharm Name</th>
                        <th>Street</th>
                        <th>Bulding</th>
                        <th>Landmark</th>
                        <th>Subarea</th>                      
                        <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach ($addresses as $address)
                        <tr>
                        <td>{{$address->id}}</td>
                        <td>{{$address->pharm_id}}</td>
                        <td>{{$address->Street}}</td>
                        <td>{{$address->Building}}</td>
                        <td>{{$address->Landmark}}</td>
                        <td>{{$address->subarea_id}}</td>
                        
                          <td>
                              <a href="{{ route('address.edit',$address->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                              <form id="delete-form-{{ $address->id }}" action="{{ route('address.destroy',$address->id) }}" style="display: none;" method="POST">
                                  @csrf
                                  @method('DELETE')
                              </form>
                              <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{ $address->id }}').submit();
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







