<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- mobile meta -->
	<meta name="robots" content="index, follow">
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<META NAME="robots" CONTENT="index, follow">
<meta name="robots" CONTENT="all">

    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- bootstrap css file -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="{{  asset('/css/owl.carousel.min.css ') }}  ">
    <link rel="stylesheet" href="{{  asset('/css/owl.theme.default.min.css') }} ">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href=" {{  asset('/images/apple-touch-icon.png') }} ">
    <link rel="icon" type="image/png" sizes="32x32" href="{{  asset('/images/favicon-32x32.png ') }} ">
    <link rel="icon" type="image/png" sizes="16x16" href=" {{  asset('/images/favicon-16x16.png') }} ">
    <link rel="manifest" href=" {{  asset('/images/site.webmanifest') }} ">
    <link rel="mask-icon" href="{{  asset('/images/safari-pinned-tab.svg') }} " color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- main css file -->
    <link rel="stylesheet" href=" {{  asset('/css/main.css ') }} ">
</head>

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href=" {{ URL::to('/').'/'.App::getLocale() }} ">
                    
                        <img src=" {{  asset('/images/200-90.png') }} " alt="">
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ URL::to('/').'/'.App::getLocale() }}">{{ trans('langsite.Home')}} 
							<span class="sr-only"> {{ trans('langsite.Home')}}</span></a>
                            <div class="line"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ URL::to('/').'/'.App::getLocale().'/About/'}} ">   من نحن </a>
                            <div class="line"></div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
							role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ماذا نقدم</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 
                               
								
								
								
								
								 @foreach($services as $NEWSs_val)
            @foreach(  $NEWSs_val->get_NEWS_description  as  $NEWSs_val_dec)
		
                                <a class="dropdown-item" href="{!! $NEWSs_val->get_NEWS_path()  !!}">   {{  $NEWSs_val_dec->title}}   </a>
 								 	  <div class="dropdown-divider"></div>
            @endforeach
            @endforeach
			
			
			
			
                             </div>
                            <div class="line"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ URL::to('/').'/'.App::getLocale().'/all_news/'.trans('langsite.News').'/2/'}} ">الأخبار</a>
                            <div class="line"></div>
                        </li>
						
						
						   <li class="nav-item">
                            <a class="nav-link" href=" {{ URL::to('/').'/'.App::getLocale().'/all_news/'.trans('langsite.Projects').'/3/'}} ">سابقة الأعمال</a>
                            <div class="line"></div>
                        </li>
						
						
						
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('/').'/'.App::getLocale().'/Contact/'}}">تواصل معنا</a>
                            <div class="line"></div>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item nav-info-links">
                            <a href="tel:{!! site_settings('phone')  !!} " class="nav-link">  {!! site_settings('phone')  !!}  
							<img src=" {{  asset('/images/phone-icon.png ') }}" alt=""></a>
                        </li>
                        <li class="nav-item nav-info-links">
                            <a href="mailto:  {!! site_settings('Mail')  !!}  " class="nav-link">  {!! site_settings('Mail')  !!} 
							<img src=" {{  asset('/images/close-envelope.png') }}" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
		
		
		
		
        @yield('content')	


		
        <section id="footer">
          
            <div class="footer">
                <div class="row">
                        <div class="col-md-3">
                            <div class="about-footer">
                                <div class="footer-logo"><img src=" {{  asset('/images/200-90.png') }}" alt=""></div>
                                <p>   {!! site_settings('About_Us')  !!} </p>
                                <ul class="list-inline">
                                    <li class="social-facebook"><a target="_blank" href="  {!! site_settings('facebook')  !!}"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li class="social-twitter"><a target="_blank" href= " {!! site_settings('twitter')  !!} "><i class="fab fa-twitter"></i></a>
                                    </li>
                                   
                                    <li class="social-instagram"><a target="_blank" href="  {!! site_settings('instagram')  !!} "><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="social-youtube"><a target="_blank" href="  {!! site_settings('youtube')  !!}"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div> 
                        </div>

                        <div class="col-md-3">
                            <p class="footer-head">نرشح لك صفحات</p>
                            <div class="footer-links">
                                <li>
                                    <a href="{{ URL::to('/').'/'.App::getLocale() }}">الرئيسية</a>
                                </li>

                                <li>
                                    <a href=" {{ URL::to('/').'/'.App::getLocale().'/About/'}} ">من نحن</a>
                                </li>

                                <li>
                                    <a href=" {{ URL::to('/').'/'.App::getLocale().'/all_news/'.trans('langsite.News').'/2/'}} ">الأخبار</a>
                                </li>
                                
                                <li>
                                    <a href=" {{ URL::to('/').'/'.App::getLocale().'/Contact/'}} ">تواصل معنا</a>
                                </li>               
                            </div>
                        </div>

                        <div class="col-md-3">
                        <p class="footer-head">تواصل معنا</p> 
                        <div class="footer-links">
                            <li>
                                <a href="tel:  {!! site_settings('phone')  !!} "><img src=" {{  asset('/images/phone-icon.png ') }}" alt="">   {!! site_settings('phone')  !!} </a>
                            </li>

                            <li>
                                <a href="mailto:  {!! site_settings('Mail')  !!}  "><img src="  {{  asset('/images/close-envelope.png') }} " alt="">  {!! site_settings('Mail')  !!} </a>
                            </li>
                        </div>
                        </div>

                        <div class="col-md-3">
                            <div class="map-footer">
{!! site_settings('google_maps')  !!}                             </div>
                            <p class="home">
                                <i class="fa fa-home"></i>
{!! site_settings('Location')  !!}                             </p>
                        </div>                    
                </div>
            </div>

            <div class="copyrights">
                <p class="text-center"> Copyright 2019 | All Rights Reserved developed and designed by <a href="https://corddigital.com/" target="_blank">Cord digital</a> <span>@ {!! site_settings('Web_site_name')  !!}    </span></p>
            </div>
        </section>

        <div class="fixed-social-media animated fadeInDown delay-.5s slowe">
            <div class="social">
                <a class="phone" href="tel:   {!! site_settings('phone')  !!}"><i class="fa fa-phone"></i></a>
                <a class="facebook" target="_blank" href=" {!! site_settings('facebook')  !!} "><i class="fab fa-facebook"></i></a>
                <a class="twitter" target="_blank" href=" {!! site_settings('twitter')  !!} "><i class="fab fa-twitter"></i></a>
                <a class="instagram" target="_blank" href=" {!! site_settings('instagram')  !!} "><i class="fab fa-instagram"></i></a>
            </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!-- owlcarousel js file -->
<script src=" {{  asset('/js/owl.carousel.min.js ') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<!-- type.js cdn -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
<!-- waypoints -->
<script type="text/javascript" src=" {{  asset('/js/noframework.waypoints.min.js') }} "></script>
<!-- lax js cdn -->
<script src="https://cdn.jsdelivr.net/npm/lax.js"></script>
<!-- main js files -->
<script type="text/javascript" src=" {{  asset('/js/main.js') }}"></script>
<script type="text/javascript" src="{{  asset('/js/sub.js  ') }} "></script>

			<style>
	.pagination-div span {
    	color: white;
        display: inline-block;
        background: #0a1217;
        margin: 5px;
        padding: 5px 10px;
        border-radius: 15px;
	}
    
    .why-us-box {
        position: relative;
    }

    .why-us-icon2 {
        position: absolute;
        bottom: 10px;
        left: 50%;
    }

</style>
</body>

</html>


       

