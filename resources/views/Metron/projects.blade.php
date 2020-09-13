@extends('Metron.Main')
@section('title')
Metron | Projects
@endsection
@section('content')

<section class="page-title" style="background-image:url(Metron/images/background/8.jpg)">
    	<div class="auto-container">
        	<div class="clearfix">
            	<div class="pull-left">
                	<h1>Projects</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Projects</li>
                    </ul>
                </div>
            </div>
            <div class="contact-number text-center"><span class="icon flaticon-phone-call"></span>Call Us: +29321-4033316</div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Project Section-->
  
    <section class="project-section">
    	<div class="auto-container">
        	<div class="sec-title centered">
            	<div class="title"></div>
                <h2><span class="theme_color"></span>Projects</h2>
            </div>
            
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="filter active" data-role="button" data-filter="all">SHOW All</li>
                        <li class="filter" data-role="button" data-filter=".architecture">PAKISTAN PROJECT</li>
                        <li class="filter" data-role="button" data-filter=".builder">OTHER PROJECT</li>
                        <li class="filter" data-role="button" data-filter=".electrical">HVAC</li>
                        
                    </ul>
                </div>
                
                <div class="filter-list row clearfix">
                
                    <!--Gallery Item-->
                    <div class="gallery-item mix all agriculture col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{url('Metron/images/project/project1.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <ul>
                                            <li><a href="#" class="image-link"><span class="icon fa fa-link"></span></a></li>
                                            <li><a href="{{url('Metron/images/project/project1.jpg')}}" data-fancybox="images" data-caption="" class="link"><span class="icon flaticon-picture-gallery"></span></a></li>
                                        </ul>
                                        <div class="content">
                                            <h3><a href="#">ROYAL PLAZA LAHORE</a></h3>
                                            <div class="category">Green Biling</div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item mix all builder painting col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{url('Metron/images/project/project2.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <ul>
                                            <li><a href="#" class="image-link"><span class="icon fa fa-link"></span></a></li>
                                            <li><a href="{{url('Metron/images/project/project2.jpg')}}" data-fancybox="images" data-caption="" class="link"><span class="icon flaticon-picture-gallery"></span></a></li>
                                        </ul>
                                        <div class="content">
                                            <h3><a href="#">3 Million Liter Water Tank Installation at ANA Kabul</a></h3>
                                            <div class="category">Green Biling</div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item mix all agriculture builder col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{url('Metron/images/project/project3.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <ul>
                                            <li><a href="#" class="image-link"><span class="icon fa fa-link"></span></a></li>
                                            <li><a href="{{url('Metron/images/project/project3.jpg')}}" data-fancybox="images" data-caption="" class="link"><span class="icon flaticon-picture-gallery"></span></a></li>
                                        </ul>
                                        <div class="content">
                                            <h3><a href="#">Bolted Fuel Tank Erection</a></h3>
                                            <div class="category">Green Biling</div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item mix all architecture col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{url('Metron/images/project/project4.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <ul>
                                            <li><a href="#" class="image-link"><span class="icon fa fa-link"></span></a></li>
                                            <li><a href="{{url('Metron/images/project/project4.jpg')}}v" data-fancybox="images" data-caption="" class="link"><span class="icon flaticon-picture-gallery"></span></a></li>
                                        </ul>
                                        <div class="content">
                                            <h3><a href="#">SHAUKAT-KHANUM-CANCER-HOSPITAL</a></h3>
                                            <div class="category">Green Biling</div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item mix all agriculture electrical architecture painting col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{url('Metron/images/project/project5.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <ul>
                                            <li><a href="#" class="image-link"><span class="icon fa fa-link"></span></a></li>
                                            <li><a href="{{url('Metron/images/project/project5.jpg')}}" data-fancybox="images" data-caption="" class="link"><span class="icon flaticon-picture-gallery"></span></a></li>
                                        </ul>
                                        <div class="content">
                                            <h3><a href="#">GC UNIVERSITY FAISALABAD</a></h3>
                                            <div class="category">Green Biling</div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Item-->
                    <div class="gallery-item mix all painting electrical col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{url('Metron/images/project/project6.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <ul>
                                            <li><a href="#" class="image-link"><span class="icon fa fa-link"></span></a></li>
                                            <li><a href="{{url('Metron/images/project/project6.jpg')}}" data-fancybox="images" data-caption="" class="link"><span class="icon flaticon-picture-gallery"></span></a></li>
                                        </ul>
                                        <div class="content">
                                            <h3><a href="#">SHAHEEN COMPLEX LAHORE</a></h3>
                                            <div class="category">Green Biling</div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                </div>
                    
                
            </div>
            
        </div>
    </section>
    <!--End Project Section-->
    
    <!--Call To Action Two-->
    <section class="call-to-action-section-two" style="background-image:url(Metron/images/background/7.jpg)">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="column col-md-7 col-sm-12 col-xs-12">
                	<h2><span class="theme_color">Construction</span> Company</h2>
                    <div class="text">If you have any construction & renovation work need, simply call our 24 hour emergecny number.</div>
                </div>
                <div class="btn-column col-md-5 col-sm-12 col-xs-12">
                	<div class="number">+29321-4033316 <span class="theme_color"> or </span> <a href="contact.html" class="theme-btn btn-style-five">Contact Us</a> </div>
                </div>
                
            </div>
        </div>
    </section>






@endsection

@section('scripts')
<script src="{{url('Metron/js/script.js')}}"></script>

@endsection
