@extends('Metron.Main')
@section('title')
 Metron | Services
@endsection
@section('content')


<section class="page-title" style="background-image:url(Metron/images/background/8.jpg)">
    	<div class="auto-container">
        	<div class="clearfix">
            	<div class="pull-left">
                	<h1>Services</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
            <div class="contact-number text-center"><span class="icon flaticon-phone-call"></span>Call Us: +29321-4033316</div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Services Section-->
    <section class="services-section">
    	<div class="auto-container">
        	<div class="sec-title">
            	<div class="title"></div>
                <h2><span class="theme_color">Our</span> Services</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme">
            	
                <!--Services Block-->
                <div class="services-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="#"><img src="{{url('Metron/images/resource/services-1.jpg')}}" alt=""></a>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="icon-box">
                                	<span class="icon flaticon-drawing"></span>
                                </div>
                                <h3><a href="services-details.html">Building Construction</a></h3>
                            </div>
                            <div class="text">Our design professionals are equipped to help you determine the products and design that work best for our customers within the colors..</div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="#"><img src="{{url('Metron/images/resource/services-2.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="icon-box">
                                	<span class="icon flaticon-drawing"></span>
                                </div>
                                <h3><a href="services-details.html">Electrical works</a></h3>
                            </div>
                            <div class="text">Our design professionals are equipped to help you determine the products and design that work best for our customers within the colors..</div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="#"><img src="{{url('Metron/images/resource/services-3.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="icon-box">
                                	<span class="icon flaticon-drawing"></span>
                                </div>
                                <h3><a href="services-details.htmll">Fire Fighting Works</a></h3>
                            </div>
                            <div class="text">Our design professionals are equipped to help you determine the products and design that work best for our customers within the colors..</div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="#"><img src="{{url('Metron/images/resource/services-8.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="icon-box">
                                	<span class="icon flaticon-drawing"></span>
                                </div>
                                <h3><a href="services-details.html">DAB Pumps Installation</a></h3>
                            </div>
                            <div class="text">Our design professionals are equipped to help you determine the products and design that work best for our customers within the colors..</div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="#"><img src="{{url('Metron/images/resource/services-9.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="icon-box">
                                	<span class="icon flaticon-drawing"></span>
                                </div>
                                <h3><a href="services-details.html">Water Transfer Pumps</a></h3>
                            </div>
                            <div class="text">Our design professionals are equipped to help you determine the products and design that work best for our customers within the colors..</div>
                        </div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="#"><img src="{{url('Metron/images/resource/services-10.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="icon-box">
                                	<span class="icon flaticon-drawing"></span>
                                </div>
                                <h3><a href="services-details.html">Power Plant installations</a></h3>
                            </div>
                            <div class="text">Our design professionals are equipped to help you determine the products and design that work best for our customers within the colors..</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Services Section-->
    
    <!--Services Section Two-->

    <!--End Services Section Two-->
    
    <!--Clients Section-->
  
    <!--End Clients Section-->
    
    <!--Call To Action Two-->
    <section class="call-to-action-section-two" style="background-image:url(Metron/images/background/7.jpg)">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="column col-md-7 col-sm-12 col-xs-12">
                	<h2><span class="theme_color">Construction</span> Company</h2>
                    <div class="text">If you have any construction & renovation work need, simply call our 24 hour emergecny number.</div>
                </div>
                <div class="btn-column col-md-5 col-sm-12 col-xs-12">
                	<div class="number">+29321-4033316<span class="theme_color"> or </span> <a href="contact.html" class="theme-btn btn-style-five">Contact Us</a> </div>
                </div>
                
            </div>
        </div>
    </section>




@endsection

@section('scripts')
<script src="{{url('Metron/js/script.js')}}"></script>

@endsection