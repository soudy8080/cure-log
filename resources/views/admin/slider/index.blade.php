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
                <a href="{{ route('slider.create') }}" class="btn btn-primary">Add New Post</a>
                @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Posts</h4> 
                </div>
                <div class="card-body table-responsive">
                    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                      <thead class=" text-primary">
                          <th>ID</th>
                          <th>Name</th>
                          <th>Post</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Area</th>
                          <th>Subarea</th>
                          <th>Image</th>
                          <th>Created At</th>
                          <th>Updated At</th>
                          <th>Action</th>
                      </thead>
                      <tbody>
                        @foreach ($posts as $post)
                          <tr>
                          <td>{{$post->id}}</td>
                          <td>{{$post->Name}}</td>
                          <td>{{$post->Post}}</td>
                          <td>{{$post->Phone}}</td>
                          <td>{{$post->Address}}</td>
                          <td>{{$post->Area_id}}</td>
                          <td>{{$post->subarea_id}}</td>
                          <td>{{$post->image}}</td>
                          <td>{{$post->created_at}}</td>
                          <td>{{$post->updated_at}}</td>
                          <td>
                              <a href="{{ route('slider.edit',$post->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                              <form id="delete-form-{{ $post->id }}" action="{{ route('slider.destroy',$post->id) }}" style="display: none;" method="POST">
                                  @csrf
                                  @method('DELETE')
                              </form>
                              <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                  event.preventDefault();
                                  document.getElementById('delete-form-{{ $post->id }}').submit();
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



