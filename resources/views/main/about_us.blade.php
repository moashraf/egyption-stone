@extends('main.master')
@section('content')
		<title> {!! site_settings('Web_site_name')  !!}  {{ trans('langsite.About')}}   </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="UTF-8">
   <meta name="author" content=" mar-decor  ">
  <meta name="description" content=" {!! site_settings('about_us_seo_description')  !!}  "/>
 <meta name="Keywords" content="{!! site_settings('about_us_seo_description')  !!}  "/>
 <meta property="og:locale" content="<?php  echo App::getLocale() ; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content=" {!! site_settings('Web_site_name')  !!} " />
<meta property="og:description" content="{!! site_settings('about_us_seo_description')  !!}  " />
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
<meta name="twitter:title" content=" {!! site_settings('about_us_seo_description')  !!} " />
<meta name="twitter:image" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta name="twitter:site" content="@mar-decor" />  



 
        <section id="about">

            <div class="container">

                <div class="row">



                    <div class="col-md-12">

                        <div class="row no-gutters">

                            <div class="col-md-12">

                                <div class="about-img">

                                    <img src=" {{  asset('/images/slider-2.webp ') }}  " alt="">

                                </div>

                            </div>



                            <div class="col-md-12">

                                <div class="about-2-sections">

                                    <div class="first-section">
<p>    {!! site_settings('About_Us')  !!}  </p>

                                    </div>



                                    <div class="second-section">

                                        <p>لماذا تختارنا</p>

                                        <i class="fa fa-arrow-circle-down animated fadeInDown infinite slow"></i>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                </div>

            </div>

        </section>

        

        <section id="why-us">

            <div class="container">

                <div class="row">

                    <div class="col-md-4">

                        <div class="why-us-box why-us-box-animation visibility-0 slower">

                            <div class="why-us-icon why-us-icon-hover text-center">

                                <img src=" {{  asset('/images/diamond.webp ') }}  " alt="">

                            </div>



                            <div class="why-us-caption">

                                <h4>القيم </h4>

<p>    {!! site_settings('Values')  !!}  </p>
                            </div>



                            <div class="why-us-icon text-center lax" data-lax-preset="spin fadeInOut">

                                <img src=" {{  asset('/images/spin.webp ') }}  " alt="">

                            </div>

                        </div>

                    </div>



                    <div class="col-md-4">

                        <div class="why-us-box why-us-box-animation-2 visibility-0 slower">

                            <div class="why-us-icon why-us-icon-hover text-center">

                                <img src="{{  asset('/images/target.png  ') }}  " alt="">

                            </div>



                            <div class="why-us-caption">

                                <h4>هدفنا</h4>

<p>    {!! site_settings('Mission')  !!}  </p>
                            </div>



                            <div class="why-us-icon text-center lax" data-lax-preset="spin fadeInOut">

                                <img src=" {{  asset('/images/spin.webp ') }}  " alt="">

                            </div>

                        </div>

                    </div>

                    

                    <div class="col-md-4">

                        <div class="why-us-box why-us-box-animation-3 visibility-0 slower">

                            <div class="why-us-icon why-us-icon-hover text-center">

                                <img src="{{  asset('/images/eye.png   ') }}  " alt="">

                            </div>



                            <div class="why-us-caption">

                                <h4>رؤيتنا</h4>

<p>    {!! site_settings('Vision')  !!}  </p>
                            </div>



                            <div class="why-us-icon text-center lax" data-lax-preset="spin fadeInOut">

                                <img src=" {{  asset('/images/spin.webp ') }}  " alt="">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



       

   @endsection
