@extends('main.master')
@section('content')
<title> {!! site_settings('Web_site_name')  !!}  </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="author" content=" {!! site_settings('Web_site_name')  !!} ">
<meta name="description" content=" {!! site_settings('home_seo_description')  !!}  "/>
<meta name="Keywords" content="{!! site_settings('home_seo_description')  !!}  "/>
<meta property="og:locale" content="<?php  echo App::getLocale() ; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content=" {!! site_settings('Web_site_name')  !!} " />
<meta property="og:description" content="{!! site_settings('home_seo_description')  !!}  " />
<meta property="og:url" content="{{ URL::to('/') }}" />
<meta property="og:site_name" content=" {!! site_settings('Web_site_name')  !!} " />
<meta property="article:tag" content="  {!! site_settings('Web_site_name')  !!} " />
<meta property="article:section" content="" />
<meta property="article:published_time" content="" />
<meta property="article:modified_time" content="" />
<meta property="og:updated_time" content="" />
<meta property="og:image" content="{{ URL::to('/').'/images/200-90.png '}}" />
<meta property="og:image:secure_url" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta property="og:image:width" content="900" />
<meta property="og:image:height" content="900" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content=" {!! site_settings('Web_site_name')  !!}" />
<meta name="twitter:title" content=" {!! site_settings('home_seo_description')  !!} " />
<meta name="twitter:image" content="{{ URL::to('/').'/images/200-90.png '}}" />
<meta name="twitter:site" content=" {!! site_settings('Web_site_name')  !!} " />
 
	   <!-- home-slider -->
        <div class="owl-carousel first-home-slider owl-theme">
		
		
		
		
		
		            @foreach(  $slider as  $NEWs_val)
               @foreach(  $NEWs_val->get_slider_description  as  $NEWs_val_dec)

            <div class="item">
                <div class="item-img">
                    <img src=" {{ URL::to('/').'/images/'.$NEWs_val->single_photo}} " alt="{!!   $NEWs_val_dec->title  !!} ">
                </div>

                <div class="item-caption text-center">
                    <div class="slider-text animated fadeInLeft delay-1s slower">
                        <h2> {!!   $NEWs_val_dec->title  !!}   </h2>
                        <p> 	{!!   $NEWs_val_dec->description  !!} </p>
                        <a href=" {{ URL::to('/').'/'.App::getLocale().'/About/'}} ">من نحن <img src="{{ URL::to('/').'/images/domain.png'}} " alt=""></a>
                        <a href="tel: {!! site_settings('phone')  !!} ">  {!! site_settings('phone')  !!} <img src="{{ URL::to('/').'/images/phone-icon.png '}} " 
						alt="  {!! site_settings('phone')  !!} "></a>
                    </div>
                </div>
            </div>
         @endforeach     
		 @endforeach
            
        </div>

        <!-- why us section -->
        <section id="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="why-us-box why-us-box-animation visibility-0 slower">
                            <div class="why-us-icon why-us-icon-hover text-center">
                                <img src="{{ URL::to('/').'/images/diamond.webp'}}" alt="">
                            </div>

                            <div class="why-us-caption">
                                <h4>  قيمنا </h4>
                                <p>   {!! site_settings('Values')  !!}  </p>
                            </div>

                            <div class="why-us-icon why-us-icon2 text-center lax" data-lax-preset="spin fadeInOut">
                                <img src=" {{ URL::to('/').'/images/spinner.png'}} " alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="why-us-box why-us-box-animation-2 visibility-0 slower">
                            <div class="why-us-icon why-us-icon-hover text-center">
                                <img src="{{ URL::to('/').'/images/target.png '}} " alt="">
                            </div>

                            <div class="why-us-caption">
                                <h4>مهمتنا</h4>
                                <p>  {!! site_settings('Mission')  !!}  </p>
                            </div>

                            <div class="why-us-icon why-us-icon2 text-center lax" data-lax-preset="spin fadeInOut">
                                <img src=" {{ URL::to('/').'/images/spinner.png'}} " alt="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="why-us-box why-us-box-animation-3 visibility-0 slower">
                            <div class="why-us-icon why-us-icon-hover text-center">
                                <img src=" {{ URL::to('/').'/images/eye.png'}} " alt="">
                            </div>

                            <div class="why-us-caption">
                                <h4>رؤيتنا</h4>
                                <p>  {!! site_settings('Vision')  !!}  </p>
                            </div>

                            <div class="why-us-icon why-us-icon2 text-center lax" data-lax-preset="spin fadeInOut">
                                <img src="{{ URL::to('/').'/images/spinner.png '}} " alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="vedio">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="vedio-caption visibility-0 slower">
                            <h2> من نحن </h2>
                            <p> {!! site_settings('About_Us')  !!}   </p>

                    

                            <a href=" {{ URL::to('/').'/'.App::getLocale().'/Contact/'}}">تواصل معنا</a>
                        </div>
                    </div>

                    <div class="col-md-6">                         <img src=" {{  asset('/images/200-90.png') }} " alt="">
   </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="div-title">
                <h2 class="text-center">الخدمات</h2>
                <div class="title-line">
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="owl-carousel service-home-slider owl-theme">
					
											@foreach($NEWS as $NEWSs_val)

									 	@foreach(  $NEWSs_val->get_NEWS_description  as  $NEWSs_val_dec)

					<div class="item">
                        <a href=" {!! $NEWSs_val->get_NEWS_path()  !!} ">
                            <div class="service service-animation visibility-0 slower">
                    <img src="   {{ URL::to('/').'/images/'.$NEWSs_val->single_photo}} " alt="  {{  $NEWSs_val_dec->title}}    ">

                                <div class="service-caption">
                                    <h5> {{  $NEWSs_val_dec->title}}    </h5>
                                    <p> {{  $NEWSs_val_dec->seo_title}}  </p>
                                    <span>المزيد</span>
                                </div>
                            </div>
                        </a>
                    </div>
									 @endforeach
									 @endforeach

			  </div>
            </div>
        </section>

        <section id="blogs">
            <div class="div-title">
                <h2 class="text-center">الأخبار</h2>
                <div class="title-line">
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                </div>
            </div>
            <div class="container">
                <div class="row">
				
				
				
					@foreach($NEWS as $NEWSs_val)

									 	@foreach(  $NEWSs_val->get_NEWS_description  as  $NEWSs_val_dec)
  
					
					
					
					   <div class="col-md-4" style="padding: 10px;">
                        <a href="  {!! $NEWSs_val->get_NEWS_path()  !!}">
                            <div class="blog blog-animation visibility-0 slower">
                                <div class="blog-img">
                                    <img src="  {{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}  " alt="  {{  $NEWSs_val_dec->title}}  ">

                                    <div class="blog-overlay">
                                        <span><i class="fa fa-plus-circle"></i></span>
                                    </div>
                                </div>

                                <div class="blog-caption">
                                    <p class="date"> {{  $NEWSs_val_dec->created_at}}    </p>
                                    <h5>  {{  $NEWSs_val_dec->title}}    </h5>
                                    <p> {{  $NEWSs_val_dec->seo_title}} </p>
                                    <span>المزيد</span>
                                </div>
                            </div>
                        </a>
                    </div>
					
					
					
									 @endforeach
									 @endforeach
									 
									 
									 
				
                 
					
					
					
					
					
					

 
                    <div class="more-div">
                        <a href="  {{ URL::to('/').'/'.App::getLocale().'/all_news/'.trans('langsite.News').'/1/'}}  " class="pages-more">المزيد</a>
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="div-title">
                <h2 class="text-center">تواصل معنا</h2>
                <div class="title-line">
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftRight"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                    <span class="lax" data-lax-preset="driftLeft"></span>
                </div>
            </div>
            <div class="form">
                <div class="container">
				 			  {!! Form::open( [ 'route' =>  'contact-form', 'route' =>  'orders', 'name' =>  'contact', 'method' => 'post', 'class' => 'row'] ) !!}

                         <div class="messages"></div>
                        <div class="form-group col-md-6">
                            <input id="form_name" type="text"  name="title" class="form-control" placeholder="الأسم" required="required" data-error="Name is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="البريد الألكتروني" required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-md-12">
                            <input id="form_phone" type="tel"   name="phone" class="form-control" placeholder="رقم الهاتف" required="required" data-error="Phone is required">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea id="form_message"    name="body"   class="form-control" placeholder="الرسالة" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-theme btn-radius"><span> {{ trans('langsite.send')}} </span></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    
@endsection