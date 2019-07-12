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
                        <form action="#" class="serach-form-area">
                                <div class="row justify-content-center form-wrap">
                    
                                    <div class="col-lg-9 form-cols">
                                        <a href="{{ route('post.create') }}" class="btn btn-primary">Add New Post</a>

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
               
                @foreach ($posts as $key => $post)
                    
               
                <div class="single-post d-flex flex-row">
                    <div class="details">
                        <div class="title d-flex flex-row justify-content-between">
                            <div class="titles"><br>
                                <h4>{{$post->Name}}</h4><br><br>
                                <h3>{{$post->Post}}</h3>					
                            </div>
                        </div>
                        <h5>Details : {{$post->Address}}</h5>
                        <p class="address"><span class="lnr lnr-map"></span> Address</p>
                        <p>{{$post->Address}}</p>
                        <p class="address"><span class="lnr lnr-database"></span> price</p>
                        <p>{{$post->Price}}</p>
                        <div class="meta justify-content-between d-flex">
                                <p>02 Hours ago</p>
                                <p>
                                    <span class="lnr lnr-heart"></span>06
                                    <span class="lnr lnr-bubble"></span>02
                                </p>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
                <a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a>

            </div>
            <div class="col-lg-4 sidebar">
                <div class="single-slidebar">
                   
                        
                   
                    <h4>Pharmacy by Location</h4>
                    <ul class="cat-list">
                            @foreach ($areas as $area)
                        <li><a class="justify-content-between d-flex" href=""><p>{{$area->Name}}</p><span>37</span></a></li>
                        @endforeach
                    </ul>
                    
                </div>
                

                <div class="single-slidebar">
                    <h4>Top rated  posts</h4>
                    <!-- Start  show latest post -->
                    <div class="active-relatedjob-carusel">
                            @foreach ($posts as $key => $post)
                        <div class="single-rated">
                            
                            <div class="single-post d-flex flex-row">
                                <div class="details">
                                    <div class="title d-flex flex-row justify-content-between">
                                        <div class="titles"><br>
                                            <h4>{{$post->Name}}</h4><br><br>
                                            <h3>{{$post->Post}}</h3>					
                                        </div>
                                    </div>
                                    <h5>Details : {{$post->Address}}</h5>
                                    <p class="address"><span class="lnr lnr-map"></span> Address</p>
                                    <p>{{$post->Address}}</p>
                                    <p class="address"><span class="lnr lnr-database"></span> price</p>
                                    <div class="meta justify-content-between d-flex">
                                            <p>02 Hours ago</p>
                                            <p>
                                                <span class="lnr lnr-heart"></span>06
                                                <span class="lnr lnr-bubble"></span>02
                                            </p>
                                    </div>
                                </div>
                               
                            </div>
                           
                        </div>
                        @endforeach																
                    </div>
                </div>							

                <div class="single-slidebar">
                    <h4>Jobs by Category</h4>
                    <ul class="cat-list">
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Technology</p><span>37</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Media & News</p><span>57</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Goverment</p><span>33</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Medical</p><span>36</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Restaurants</p><span>47</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Developer</p><span>27</span></a></li>
                        <li><a class="justify-content-between d-flex" href="category.html"><p>Accounting</p><span>17</span></a></li>
                    </ul>
                </div>

                
            </div>
        </div>
    </div>	
</section>
<!-- Start callto-action Area -->
<section class="callto-action-area section-gap" id="join">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-10 text-white">Join us today without any hesitation</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <a class="primary-btn" href="#">I am a Candidate</a>
                    </div>
                </div>
            </div>	
        </div>	
    </section>
    <!-- End calto-action Area -->

    
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