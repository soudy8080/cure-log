<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>cure Log</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('frontend/css/linearicons.css')}} ">
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}} ">
        <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}} ">
        <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">					
        <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}} ">
        <link rel="stylesheet" href="{{asset('frontend/css/main.css')}} ">
    </head>
    <body>

          <header id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                  <div id="logo">
                  <a href="{{route('welcome')}}"><img src="{{asset('frontend/img/logo.png')}} " alt="" title="" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      <li class="menu-active"><a href="{{route('welcome')}}">Home</a></li>
                      <li><a href="">About Us</a></li>
                      <li><a href="">Category</a></li>
                    <li><a href="{{route('post')}}">Posts</a></li>
                      <li><a href="#">Contact</a></li>			          				          
                    </ul>
                  </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
          </header><!-- #header -->


        <!-- start banner Area -->
        <section class="banner-area relative" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="banner-content col-lg-12">
                        <h1 class="text-white">
                            Your <span>Medicine</span> Here .				
                        </h1>	
                        
                        <form action="search.html" class="serach-form-area">
                            <div class="row justify-content-center form-wrap">
                                
                                <div class="col-lg-3 form-cols">
                                    <div class="default-select" id="default-selects">
                                        
                                        <select type="text" id="selectArea" class="form-control" name="selectArea" >
                                                <option value="0" disable="true" selected="true">Select area</option>
                                                     @foreach ($areas as $area)
                                                     <option value="{{$area->id}}">{{$area->Name}}</option>
                                                    @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 form-cols">
                                    <div class="default-select" id="default-selects2">
                                        <select class="form-control" name="selectSubarea"  id="selectSubarea" >
                                            <option value="0" disable="true" selected="true">select subarea</option>  
                                                    @foreach ($subareas as $subarea)
                                                     <option value="{{$subarea->id}}">{{$subarea->Name}}</option>
                                                    @endforeach      
                                        </select>
                                    </div>										
                                </div>
                                <div class="col-lg-3 form-cols">
                                        <div class="default-select" id="default-selects2">
                                            <select class="form-control" name="medecine"  id="medecine" >
                                                <option value="0" disable="true" selected="true">select medecine</option>  
                                                        @foreach ($order_med as $med)
                                                         <option value="{{$med->id}}">{{$med->Name}}</option>
                                                        @endforeach      
                                            </select>
                                        </div>										
                                    </div>
                                {{-- <div class="col-lg-4 form-cols">
                                        <input type="text" class="form-control" name="q" id="q" placeholder="what are you looging for?">
                                    </div> --}}
                                <div class="col-lg-2 form-cols">
                                    <button type="submit" class="btn btn-info">
                                      <span class="lnr lnr-magnifier"></span> Search
                                    </button>
                                </div>
                                                           
                            </div>
                        </form>	
                        <p class="text-white"> <span>Search by tags:</span> Searching Aboute Your Midecine</p>
                    </div>											
                </div>
            </div>
        </section>
        <!-- End banner Area -->
 <!-- Start post Area -->
 <section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">
            <div class="col-lg-8 post-list">
                    
                    <div class="content">
                           <div class="container-fluid">
                             <div class="row">
                               <div class="col-md-12">
                                 <div class="card">
                                   <div class="card-header card-header-primary">
                                     <h4 class="card-title ">Add New Post</h4> 
                                   </div>
                                   <div class="card-body table-responsive">
                                       <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
                                           @csrf
                                           <div class="row">
                                               <div class="col-md-5">
                                                   <div class="form-group">
                                                       <label class="bmd-label-floating">User </label>
                                                       <input type="text" class="form-control" name="name" >
                                                       <br>
                                                   </div>        
                                               </div>
                                           </div>
                                           <div class="row">
                                                   <div class="col-md-8">
                                                       <div class="form-group">
                                                           <label class="bmd-label-floating">Post</label>
                                                           <input type="text" class="form-control" name="post">
                                                       </div>
                                                   </div>
                                           </div>
                                           <div class="row">
                                             <div class="col-md-8">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Phone</label>
                                                     <input type="text" class="form-control" name="phone">
                                                 </div>
                                             </div>
                                           </div>
                                           <div class="row">
                                             <div class="col-md-5">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Area </label>
                                                     <select type="text" class="form-control" name="area" >
                                                           <option value="0">...</option>
                                                         @foreach ($areas as $area)
                                                     <option value="{{$area->id}}">{{$area->Name}}</option>
                                                         @endforeach
                                                     </select>
                                                     <br>
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
                                                     <option value="{{$subarea->id}}">{{$subarea->Name}}</option>
                                                         @endforeach
                                                     </select>
                                                     <br>
                                                 </div>        
                                             </div>
                                         </div>
                                           <div class="row">
                                             <div class="col-md-8">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Address</label>
                                                     <input type="text" class="form-control" name="address">
                                                 </div>
                                             </div>
                                           </div>
                                           <div class="row">
                                                   <div class="col-md-8">
                                                       <label class="bmd-label-floating"> Image</label>
                                                       <input type="file" name="image" >
                                                   </div>
                                           </div>
                                           <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
                                           <button type="submit" class="btn btn-primary">Save</button>
                                       </form>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                 
                   
                   @push('scripts')
                   
                   @endpush
                   
                
            </div>

        </div>
    </div>	
</section>
<!-- End post Area -->
                        <script src="{{asset('frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
                        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}} " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                        <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}} "></script>			
                        <script type="text/javascript" src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA')}} "></script>
                          <script src="{{asset('frontend/js/easing.min.js')}} "></script>			
                        <script src="{{asset('frontend/js/hoverIntent.js')}} "></script>
                        <script src="{{asset('frontend/js/superfish.min.js')}} "></script>	
                        <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}} "></script>
                        <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}} "></script>	
                        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>			
                        <script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
                        <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>			
                        <script src="{{asset('frontend/js/parallax.min.js')}}"></script>		
                        <script src="{{asset('frontend/js/mail-script.js')}}"></script>	
                        <script src="{{asset('frontend/js/main.js')}}"></script>
                        
                        
                
                        <script type='text/javascript'>
                            $('#selectArea').on('change',function(e){
                
                                console.log(e);
                                var area_id = e.target.value;
                                $.get('/jason-subAreas?area_id=' + area_id,function(data){
                
                                    console.log(data);
                                    $('#selectSubarea').empty();
                                    $('#selectSubarea').append('<option value="0" disable="true" selected="true">select subarea</option>');
                
                                    $.each(data, function(index, subareasObj){
                
                                        $('#selectSubarea').append('<option value="'+ subareasObj.id +'">'+ subareasObj.Name + '</option>')
                                    });
                                });
                            });
                            </script>  
                
                
                    </body>
                </html>
@extends('layouts.app')

@section('title','slider')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">    
@endpush




