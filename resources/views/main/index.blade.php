@extends('main.master')
@section('content')
<title> {!! site_settings('Web_site_name')  !!}  </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="author" content=" mar-decor  ">
<meta name="description" content=" {!! site_settings('home_seo_description')  !!}  "/>
<meta name="Keywords" content="{!! site_settings('home_seo_description')  !!}  "/>
<meta property="og:locale" content="<?php  echo App::getLocale() ; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content=" {!! site_settings('Web_site_name')  !!} " />
<meta property="og:description" content="{!! site_settings('home_seo_description')  !!}  " />
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
<meta name="twitter:title" content=" {!! site_settings('home_seo_description')  !!} " />
<meta name="twitter:image" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta name="twitter:site" content="@mar-decor" />
 
	   <!-- home-slider -->
        <div class="owl-carousel first-home-slider owl-theme">
            <div class="item">
                <div class="item-img">
                    <img src="images/slider-1.webp" alt="">
                </div>

                <div class="item-caption text-center">
                    <div class="slider-text animated fadeInLeft delay-1s slower">
                        <h2>الحجر المصري</h2>
                        <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا </p>
                        <a href="about.html">من نحن <img src="images/domain.webp" alt=""></a>
                        <a href="tel:0123456789">0123456789 <img src="images/phone-icon.webp" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-img">
                    <img src="images/slider-2.webp" alt="">
                </div>

                <div class="item-caption text-center">
                    <div class="slider-text animated fadeInLeft delay-1s slower">
                        <h2>الحجر المصري</h2>
                        <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا </p>
                        <a href="about.html">من نحن <img src="images/domain.webp" alt=""></a>
                        <a href="tel:0123456789">0123456789 <img src="images/phone-icon.webp" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- why us section -->
        <section id="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="why-us-box why-us-box-animation visibility-0 slower">
                            <div class="why-us-icon why-us-icon-hover text-center">
                                <img src="images/diamond.webp" alt="">
                            </div>

                            <div class="why-us-caption">
                                <h4>من نحن</h4>
                                <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا</p>
                            </div>

                            <div class="why-us-icon text-center lax" data-lax-preset="spin fadeInOut">
                                <img src="images/spin.webp" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="why-us-box why-us-box-animation-2 visibility-0 slower">
                            <div class="why-us-icon why-us-icon-hover text-center">
                                <img src="images/target.png" alt="">
                            </div>

                            <div class="why-us-caption">
                                <h4>هدفنا</h4>
                                <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا</p>
                            </div>

                            <div class="why-us-icon text-center lax" data-lax-preset="spin fadeInOut">
                                <img src="images/spin.webp" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="why-us-box why-us-box-animation-3 visibility-0 slower">
                            <div class="why-us-icon why-us-icon-hover text-center">
                                <img src="images/eye.png" alt="">
                            </div>

                            <div class="why-us-caption">
                                <h4>رؤيتنا</h4>
                                <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا</p>
                            </div>

                            <div class="why-us-icon text-center lax" data-lax-preset="spin fadeInOut">
                                <img src="images/spin.webp" alt="">
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
                            <h2>لماذا تختار الحجر المصري؟</h2>
                            <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيوا       
                                أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات 
                            </p>

                            <li><i class="fa fa-check-double"></i> لوريم ايبسوم دولار سيت أميت</li>
                            <li><i class="fa fa-check-double"></i> لوريم ايبسوم دولار سيت أميت</li>
                            <li><i class="fa fa-check-double"></i> لوريم ايبسوم دولار سيت أميت</li>

                            <a href="#">تواصل معنا</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="vedio visibility-0 slower">
                            <video id='video' controls="controls" preload='none'
                                width="100%" poster="http://media.w3.org/2010/05/sintel/poster.png">
                                <source id='mp4' src="http://media.w3.org/2010/05/sintel/trailer.mp4" type='video/mp4'/>
                                <source id='webm' src="http://media.w3.org/2010/05/sintel/trailer.webm" type='video/webm'/>
                                <source id='ogv' src="http://media.w3.org/2010/05/sintel/trailer.ogv" type='video/ogg'/>
                            </video>
                        </div>
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
                    <div class="item">
                        <a href="single-service.html">
                            <div class="service service-animation visibility-0 slower">
                                <div class="service-icon text-center">
                                    <img src="images/diamond.webp" alt="">
                                </div>

                                <div class="service-caption">
                                    <h5>عنوان الخدمة</h5>
                                    <p>لوريم ايبسوم دولار سيت أميت</p>
                                    <span>المزيد</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="single-service.html">
                            <div class="service service-animation-2 visibility-0 slower">
                                <div class="service-icon text-center">
                                    <img src="images/diamond.webp" alt="">
                                </div>

                                <div class="service-caption">
                                    <h5>عنوان الخدمة</h5>
                                    <p>لوريم ايبسوم دولار سيت أميت</p>
                                    <span>المزيد</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="single-service.html">
                            <div class="service service-animation-3 visibility-0 slower">
                                <div class="service-icon text-center">
                                    <img src="images/diamond.webp" alt="">
                                </div>

                                <div class="service-caption">
                                    <h5>عنوان الخدمة</h5>
                                    <p>لوريم ايبسوم دولار سيت أميت</p>
                                    <span>المزيد</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="item">
                        <a href="single-service.html">
                            <div class="service service-animation-3 visibility-0 slower">
                                <div class="service-icon text-center">
                                    <img src="images/diamond.webp" alt="">
                                </div>

                                <div class="service-caption">
                                    <h5>عنوان الخدمة</h5>
                                    <p>لوريم ايبسوم دولار سيت أميت</p>
                                    <span>المزيد</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="single-service.html">
                            <div class="service service-animation-4 visibility-0 slower">
                                <div class="service-icon text-center">
                                    <img src="images/diamond.webp" alt="">
                                </div>

                                <div class="service-caption">
                                    <h5>عنوان الخدمة</h5>
                                    <p>لوريم ايبسوم دولار سيت أميت</p>
                                    <span>المزيد</span>
                                </div>
                            </div>
                        </a>
                    </div>
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
                    <div class="col-md-4">
                        <a href="internal-pages.html">
                            <div class="blog blog-animation visibility-0 slower">
                                <div class="blog-img">
                                    <img src="images/slider-1.webp" alt="">

                                    <div class="blog-overlay">
                                        <span><i class="fa fa-plus-circle"></i></span>
                                    </div>
                                </div>

                                <div class="blog-caption">
                                    <p class="date"><span>4</span> مارس 2019</p>
                                    <h5>عنوان الخبر</h5>
                                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا</p>
                                    <span>المزيد</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="internal-pages.html">
                            <div class="blog blog-animation-2 visibility-0 slower">
                                <div class="blog-img">
                                    <img src="images/slider-1.webp" alt="">

                                    <div class="blog-overlay">
                                        <span><i class="fa fa-plus-circle"></i></span>
                                    </div>
                                </div>

                                <div class="blog-caption">
                                    <p class="date"><span>4</span> مارس 2019</p>
                                    <h5>عنوان الخبر</h5>
                                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا</p>
                                    <span>المزيد</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="internal-pages.html">
                            <div class="blog blog-animation-3 visibility-0 slower">
                                <div class="blog-img">
                                    <img src="images/slider-1.webp" alt="">

                                    <div class="blog-overlay">
                                        <span><i class="fa fa-plus-circle"></i></span>
                                    </div>
                                </div>

                                <div class="blog-caption">
                                    <p class="date"><span>4</span> مارس 2019</p>
                                    <h5>عنوان الخبر</h5>
                                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا</p>
                                    <span>المزيد</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="more-div">
                        <a href="blogs.html" class="pages-more">المزيد</a>
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
        </section>
    
@endsection