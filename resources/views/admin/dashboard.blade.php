@extends('layouts.app')

@section('title','Dashboard')
    

@push('css')
    
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Number Of Pharmacy</p>
                <h3 class="card-title">20
                    <small>Ph</small>
                </h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="#">Get More Pharmacy...</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">store</i>
                </div>
                <p class="card-category">Posts/Day</p>
                <h3 class="card-title">15</h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                </div>
                <p class="card-category">Fixed Issues</p>
                <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from facebook
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                </div>
                <p class="card-category">Followers</p>
                <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                </div>
                </div>
            </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 col-md-12">
            
            </div>
            <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header card-header-warning">
                <h4 class="card-title">Medecine Stats</h4>
                <p class="card-category">New Medecine on 15th September, 2016</p>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                                <thead class="text-warning">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Salary</th>
                                <th>Pharmay</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Hemoklar</td>
                                    <td>$30</td>
                                    <td>Ezapy</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Minerva Hooper</td>
                                    <td>$5.9</td>
                                    <td>صيدليات</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>panadol </td>
                                    <td>$5.42</td>
                                    <td>المغربي</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td> Omega 3</td>
                                    <td>$38.5</td>
                                    <td>Saif</td>
                                </tr>
                                </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@push('script')
    
@endpush