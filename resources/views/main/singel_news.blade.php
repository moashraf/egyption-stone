@extends('main.master')
@section('content') 


@foreach(  $NEWS  as  $NEWS_val)

	@foreach(  $NEWS_val->get_NEWS_description  as  $NEWS_val_dec)
								
								
		<title> {{  $NEWS_val_dec->title}}  |    {!! site_settings('Web_site_name')  !!}  </title>


<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
   <meta name="author" content=" {!! site_settings('Web_site_name')  !!} ">
  <meta name="description" content="{{  $NEWS_val_dec->meta_description}} "/>
 <meta name="Keywords" content=" {{  $NEWS_val_dec->meta_description}} "/>
 <meta property="og:locale" content="<?php  echo App::getLocale() ; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content=" {{  $NEWS_val_dec->seo_title}}  " />
<meta property="og:description" content="{{  $NEWS_val_dec->meta_description}} " />
<meta property="og:url" content="{!! $NEWS_val->get_NEWS_path()  !!}" />
<meta property="og:site_name" content=" {!! site_settings('Web_site_name')  !!} " />
<meta property="article:tag" content=" {{  $NEWS_val_dec->seo_title}} " />
<meta property="article:section" content="" />
<meta property="article:published_time" content="{{  $NEWS_val_dec->created_at}} " />
<meta property="article:modified_time" content="{{  $NEWS_val_dec->updated_at}} " />
<meta property="og:updated_time" content="{{  $NEWS_val_dec->updated_at}} " />
<meta property="og:image" content="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}" />
<meta property="og:image:secure_url" content="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}" />
<meta property="og:image:width" content="900" />
<meta property="og:image:height" content="900" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="  {{  $NEWS_val_dec->seo_title}}" />
<meta name="twitter:title" content="  {{  $NEWS_val_dec->meta_description}} " />
<meta name="twitter:image" content="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}" />
<meta name="twitter:site" content="@ {!! site_settings('Web_site_name')  !!} " />
 
 
  @endforeach
									 	 @endforeach
										 
										 
										 
										  
        <div class="row">

            <div class="col-md-8">
                <div class="blog-internal">
                    <h2> {{  $NEWS_val_dec->title}}  </h2>
                    <img   src="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}" 
					alt=" {{  $NEWS_val_dec->main_img_alt}} " class="animated fadeInLeft delay-.5s slower blog-img-src">
                    <div class="animated fadeInRight delay-.5s slower">
                        <div class="row">
                            <div class="owl-carousel blog-slider owl-theme">  
                                <div class="item">
                                    <div class="post">
                                        <img src="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}" alt=" {{  $NEWS_val_dec->main_img_alt}} ">
                                    </div>
                                </div>


								@foreach(  $NEWS  as  $NEWS_val)
								@foreach(  $NEWS_val->get_News_Photos  as  $get_News_Photos_dec)
								
                                    <div class="item">
                                        <div class="post">
                                            <img src=" {{ URL::to('/').'/images/'.$get_News_Photos_dec->single_photo_gallery}} "
											alt=""<?php   
						 echo str_replace(".jpg"," ","$get_News_Photos_dec->single_photo_gallery"); ?> ">
                                        </div>
                                    </div>

                                   
								   
								     @endforeach
									 	 @endforeach
								   
								   
								   
                            </div>

                        </div>
                    </div>
				
					 							<h6> 	{{  $NEWS_val_dec->created_at}}  </h6> 
					 							<p>  {!!   $NEWS_val_dec->description  !!}  </p> 
 <div class="service-form">
                            <h2>اطلب هذه الخدمة</h2>
		    {!! Form::open( [ 'route' =>  'orders','name' =>  'contact', 'method' => 'post', 'class' => 'row' , 'id' => 'contact-form'  ] ) !!}

                                 <div class="messages"></div>
                                <div class="form-group col-md-6">
                                    <input id="form_name" type="text" name="title" class="form-control" placeholder="الأسم" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="البريد الألكتروني" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-12">
                                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="رقم الهاتف" required="required" data-error="Phone is required">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea id="form_message" name="body" class="form-control" placeholder="الرسالة" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-theme btn-radius"><span>ارسال</span></button>
                                </div>
                            </form>
                        </div>
                    
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="sidebar">
                    <div class="search-box">
                          <div id="search_container">
                            <form action="#" method="#" name="searchForm" target="_top">
                                <div>
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <input class="text" type="text" placeholder="ابحث" value="" name="search">
                                    <input value="ابحث" type="submit">
                                </div>
                            </form>
                        </div>
                        <hr>
                    </div>

                    <div class="posts animated fadeInDown delay-.5s slower">
                        <p class="sidebar-head">   </p>
                        <div class="row">
                            <div class="owl-carousel sidebar-slider owl-theme">  
							
							
							
								 @foreach($services as $NEWSs_val)
            @foreach(  $NEWSs_val->get_NEWS_description  as  $NEWSs_val_dec)
		
		
		 <div class="item">
                                        <a href=" {!! $NEWSs_val->get_NEWS_path()  !!} ">
                                            <div class="post">
                                                <img src=" {{ URL::to('/').'/images/'.$NEWSs_val->single_photo}} " alt=" {{  $NEWSs_val_dec->title}}  ">
                                                <p>{{  $NEWSs_val_dec->title}}   </p>
                                                <span>المزيد</span>
                                            </div>
                                        </a>
                                    </div>
 
            @endforeach
            @endforeach
			

                                   



                                </div>

                        </div>
                        <hr>
                    </div>
   <div class="contact-sidebar-links text-center">
                        <a class="sidebar-link" href="tel:{!! site_settings('phone')  !!}"> احصل علي السعر</a>
                        <a class="sidebar-link" href=" {{ URL::to('/').'/'.App::getLocale().'/Contact/'}}"> تواصل معنا</a>
                        <hr>
                    </div> 
                    <div class="animated fadeInRight delay-.5s slower">
                        <p class="sidebar-head">معرض الصور</p>
                        <div class="row">
                            <div class="owl-carousel sidebar-slider owl-theme gallery">  
                             


							

                               
							   
							   @foreach(  $NEWS  as  $NEWS_val)
								@foreach(  $NEWS_val->get_News_Photos  as  $get_News_Photos_dec)
								
                                    
 <div class="item">
                                    <div class="post">
                                        <img   src=" {{ URL::to('/').'/images/'.$get_News_Photos_dec->single_photo_gallery}} " >
                                    </div>
                                </div>
                                   
								   
								     @endforeach
									 	 @endforeach
										 
										 
							   
                            </div>

                        </div>
                        <hr>
                    </div>

                    <div class="tags">
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">   {!! site_settings('phone')  !!} </a> 
                        <hr>
                    </div>

                    <div class="share-links">
                        
                        شارك
                        <a href="https://www.facebook.com/sharer/sharer.php?u=">
                            <i class="fab fa-facebook"></i>
                        </a>

                        <a href="https://twitter.com/home?status=">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <a href="https://plus.google.com/share?url=">
                            <i class="fab fa-google-plus-g"></i>
                        </a>

                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup-overlay none">
            <div class="popup-img text-center">
                <i class="far fa-times-circle"></i> 
                <img class="img-src" src=""  >
            </div>
        </div>

       
	   
   @endsection