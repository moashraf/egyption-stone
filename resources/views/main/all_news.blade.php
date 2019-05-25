@extends('main.master')
@section('content')
   
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="UTF-8">
   <meta name="author" content=" {!! site_settings('Web_site_name')  !!}  ">
  <meta name="description" content=" {!! site_settings('Contact_seo_description')  !!}  "/>
 <meta name="Keywords" content="{!! site_settings('Contact_seo_description')  !!}  "/>
 <meta property="og:locale" content="<?php  echo App::getLocale() ; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content=" {!! site_settings('Web_site_name')  !!} " />
<meta property="og:description" content="{!! site_settings('Contact_seo_description')  !!}  " />
<meta property="og:url" content="{{ URL::to('/') }}" />
<meta property="og:site_name" content=" {!! site_settings('Web_site_name')  !!} " />
<meta property="article:tag" content="  {!! site_settings('Web_site_name')  !!} " />
<meta property="article:section" content="" />
<meta property="article:published_time" content="" />
<meta property="article:modified_time" content="" />
<meta property="og:updated_time" content="" />
<meta property="og:image" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta property="og:image:secure_url" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta property="og:image:width" content="900" />
<meta property="og:image:height" content="900" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content=" {!! site_settings('Web_site_name')  !!}" />
<meta name="twitter:title" content=" {!! site_settings('Contact_seo_description')  !!} " />
<meta name="twitter:image" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta name="twitter:site" content="@ {!! site_settings('Web_site_name')  !!} " />  		 
						  
					<title> {!! site_settings('Web_site_name')  !!}   </title>
					
					
					
     <section id="blogs" class="internal-blogs">
            <div class="container">
                <div class="row">
				
				
				
				
				
											@foreach($NEWS as $NEWSs_val)

															@foreach(  $NEWSs_val->get_NEWS_description  as  $NEWSs_val_dec)

								     <div class="col-md-4">
                        <a href="  {!! $NEWSs_val->get_NEWS_path()  !!} ">
                            <div class="blog blog-animation slower">
                                <div class="blog-img">
                                    <img src="{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}"    alt="{!! site_settings('Web_site_name')  !!}" >

                                    <div class="blog-overlay">
                                        <span><i class="fa fa-plus-circle"></i></span>
                                    </div>
                                </div>

                                <div class="blog-caption">
                                    <p class="date">   {{  $NEWSs_val_dec->created_at}}    </p>
                                    <h5> {{  $NEWSs_val_dec->seo_title}}   </h5>
                                    <p>  {{  $NEWSs_val_dec->seo_title}}  </p>
                                    <span>المزيد</span>
                                </div>
                            </div>
                        </a>
                    </div>
					
					
					
					
																		 @endforeach
									 @endforeach
									 
								

			     
                </div>
            </div>
			
			

				   <div class="pagination-div text-center" style=" display: table ">
                       
  {{ $NEWS->links() }}                   
  
                    </div>
				
              
        </section>
 
				  
   @endsection