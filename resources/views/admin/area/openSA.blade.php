@extends('layouts.app')

@section('title','Area')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">    
@endpush

@section('content')
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <a href="{{ route('subarea.create') }}" class="btn btn-primary">Add New SubArea</a>
                @include('layouts.partial.msg')
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All SubArea</h4> 
                </div>
                <div class="card-body table-responsive">
                    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%" >
                      <thead class=" text-primary">
                          <th>ID</th>
                          <th>Name</th>
                          <th>Actions</th>
                          
                      </thead>
                      <tbody>
                        @foreach ($subareas as $sa)
                          <tr>
                          <td>{{$sa->id}}</td>
                          <td>{{$sa->Name}}</td>
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
@endpush



