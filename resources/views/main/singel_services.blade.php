@extends('main.master')
@section('content') 


@foreach(  $services_singl  as  $NEWS_val)

	@foreach(  $NEWS_val->get_services_description  as  $NEWS_val_dec)
								
								
		<title> {!! site_settings('Web_site_name')  !!} | {{  $NEWS_val_dec->title}}   </title>


<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
   <meta name="author" content=" mar-decor  ">
  <meta name="description" content="{{  $NEWS_val_dec->meta_description}} "/>
 <meta name="Keywords" content=" {{  $NEWS_val_dec->meta_description}} "/>
 <meta property="og:locale" content="<?php  echo App::getLocale() ; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content=" {{  $NEWS_val_dec->seo_title}}  " />
<meta property="og:description" content="{{  $NEWS_val_dec->meta_description}} " />
<meta property="og:url" content="{!! $NEWS_val->get_services_path()  !!}" />
<meta property="og:site_name" content="Mar Decor" />
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
<meta name="twitter:site" content="@mar-decor" />
 
		 @endforeach
									 	 @endforeach
										 <div class="row">

                <div class="col-md-8">
                    <div class="blog-internal">
                        <h2>اسم الخدمة</h2>
                        <img src="images/slider-2.webp" alt="" class="animated fadeInLeft delay-.5s slower blog-img-src">
                        
                        <div class="animated fadeInRight delay-.5s slower">
                            <div class="row">
                                <div class="owl-carousel blog-slider owl-theme">  
                                    <div class="item">
                                        <div class="post">
                                            <img src="images/slider-1.webp" alt="">
                                        </div>
                                    </div>
    
                                        <div class="item">
                                            <div class="post">
                                                <img src="images/slider-2.webp" alt="">
                                            </div>
                                        </div>
    
                                        <div class="item">
                                            <div class="post">
                                                <img src="images/egyptian stone.jpg" alt="">
                                            </div>
                                        </div>
    
                                        <div class="item">
                                            <div class="post">
                                                <img src="images/slider-2.webp" alt="">
                                            </div>
                                        </div>
    
                                        <div class="item">
                                            <div class="post">
                                                <img src="images/slider-1.webp" alt="">
                                            </div>
                                        </div>
                                </div>
    
                            </div>
                        </div>
                        
                        <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                            أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                            أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس
                            أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت
                            نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا
                            كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.
                        </p>

                        <div class="service-form">
                            <h2>اطلب هذه الخدمة</h2>
                            <form id="contact-form" class="row" method="post" action="#">
                                <div class="messages"></div>
                                <div class="form-group col-md-6">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="الأسم" required="required" data-error="Name is required.">
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
                                    <textarea id="form_message" name="message" class="form-control" placeholder="الرسالة" rows="4" required="required" data-error="Please,leave us a message."></textarea>
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
                        <p class="sidebar-head">الأخبار </p>
                        <div class="row">
                            <div class="owl-carousel sidebar-slider owl-theme">  
                                <div class="item">
                                    <a href="internal-pages.html">
                                        <div class="post">
                                            <img src="images/slider-1.webp" alt="">
                                            <p>عنوان</p>
                                            <span>المزيد</span>
                                        </div>
                                    </a>
                                </div>

                                    <div class="item">
                                        <a href="internal-pages.html">
                                            <div class="post">
                                                <img src="images/slider-2.webp" alt="">
                                                <p>عنوان</p>
                                                <span>المزيد</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="internal-pages.html">
                                            <div class="post">
                                                <img src="images/slider-1.webp" alt="">
                                                <p>عنوان</p>
                                                <span>المزيد</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="internal-pages.html">
                                            <div class="post">
                                                <img src="images/slider-2.webp" alt="">
                                                <p>عنوان</p>
                                                <span>المزيد</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="internal-pages.html">
                                            <div class="post">
                                                <img src="images/slider-1.webp" alt="">
                                                <p>عنوان</p>
                                                <span>المزيد</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                        </div>
                        <hr>
                    </div>

                    <div class="contact-sidebar-links text-center">
                        <a class="sidebar-link" href="tel:0123456789"> احصل علي السعر</a>
                        <a class="sidebar-link" href="contact.html"> تواصل معنا</a>
                        <hr>
                    </div>

                    <div class="animated fadeInRight delay-.5s slower">
                        <p class="sidebar-head">معرض الصور</p>
                        <div class="row">
                            <div class="owl-carousel sidebar-slider owl-theme gallery">  
                                <div class="item">
                                    <div class="post">
                                        <img src="images/slider-1.webp" alt="">
                                    </div>
                                </div>

                                    <div class="item">
                                        <div class="post">
                                            <img src="images/slider-2.webp" alt="">
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="post">
                                            <img src="images/slider-1.webp" alt="">
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="post">
                                            <img src="images/slider-2.webp" alt="">
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="post">
                                            <img src="images/slider-1.webp" alt="">
                                        </div>
                                    </div>
                            </div>

                        </div>
                        <hr>
                    </div>

                    <div class="tags">
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 1</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 2</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 3</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 4</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 5</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 6</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 7</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 8</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 9</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 10</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 11</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 12</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 13</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 14</a>
                        <a href="JavaScript:Void(0);" class="animated fadeIn delay-.5s slower">وسم 15</a>
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
                <img class="img-src" src="" alt="">
            </div>
        </div>

     
 
   @endsection