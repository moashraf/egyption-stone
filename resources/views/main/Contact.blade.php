@extends('main.master')
@section('content') 
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="UTF-8">
   <meta name="author" content=" mar-decor  ">
  <meta name="description" content=" {!! site_settings('Contact_seo_description')  !!}  "/>
 <meta name="Keywords" content="{!! site_settings('Contact_seo_description')  !!}  "/>
 <meta property="og:locale" content="<?php  echo App::getLocale() ; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content=" {!! site_settings('Web_site_name')  !!} " />
<meta property="og:description" content="{!! site_settings('Contact_seo_description')  !!}  " />
<meta property="og:url" content="{{ URL::to('/') }}" />
<meta property="og:site_name" content="Mar Decor" />
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
<meta name="twitter:site" content="@mar-decor" />  		 
						  
					<title> {!! site_settings('Web_site_name')  !!}  {{ trans('langsite.Contact Us')}} </title>
			   
			   
			   
			      <div class="col-md-12">
						{!!  site_settings('google_maps') !!}
        </div>

        <div class="col-md-12 internal-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
 					   {!! Form::open( [ 'route' =>  'orders','name' =>  'contact', 'method' => 'post', 'class' => 'row' , 'id' => 'contact-form'  ] ) !!}

                            <div class="messages"></div>
                            <div class="form-group col-md-6">
                                <input id="form_name" type="text" name="title" class="form-control" placeholder=" {{ trans('langsite.Name')}}" required="required" data-error="Name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder=" {{ trans('langsite.Email')}}  " required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-12">
                                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder=" {{ trans('langsite.Phone')}}  " required="required" data-error="Phone is required">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea id="form_message" name="body" class="form-control" placeholder="{{ trans('langsite.Message')}}" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-theme btn-radius"><span>{{ trans('langsite.send')}}</span></button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <div class="contact-details">
                            <div class="footer-links">
                                <li>
                                    <a href="tel:{!!  site_settings('phone') !!}"><img src=" {{  asset('/images/phone-icon.webp') }}  " alt=""> {!!  site_settings('phone') !!}</a>
                                </li>

                                <li>
                                    <a href="mailto:  {!!  site_settings('Mail') !!}"><img src=" {{  asset('/images/close-envelope.webp ') }}  " alt="">   {!!  site_settings('Mail') !!} </a>
                                </li>

                                <li>
                                    <a   href="#"><img src=" {{  asset('/images/map.png ') }}  " alt=" {!!  site_settings('Location') !!}  ">  {!!  site_settings('Location') !!}   </a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
 
 
 
 
  
  
  
   
 
   @endsection
