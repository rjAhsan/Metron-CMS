@extends('Metron.Main')
@section('title')
 Metron | About US
@endsection
@section('topheader')

@isset($data)

<li><a href="#"><span class="icon fa fa-home"></span>{{$data->Address}}</a></li>
<li><a href="#"><span class="icon fa fa-envelope"></span>{{$data->phone}}</a></li> -->
@endisset


@empty($data)

<li><a href="#"><span class="icon fa fa-home"></span>NO DATA FOUND PLEASE INSERT DATA</a></li>
<li><a href="#"><span class="icon fa fa-envelope"></span>PLEASE INSERT DATA</a></li> -->
@endempty

@endsection
@section('logo')
@isset($data2)

<a href="#"><img src="{{ asset($data2->logoimage) }}" alt="{{$data2->logoname}}"></a>
@endisset

@empty($data2)

<a href="#"><img src="" alt="DATA NOT FOUND"></a>
@endempty

@endsection

@section('content')



<section class="page-title" style="background-image:url(Metron/images/background/8.jpg)">
    	<div class="auto-container">
        	<div class="clearfix">
            	<div class="pull-left">
                	<h1>About Us</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>About us</li>
                    </ul>
                </div>
            </div>
            <div class="contact-number text-center"><span class="icon flaticon-phone-call"></span>Call Us: +29321-4033316</div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Success Section-->

    @isset($data3)
    <section class="featured-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                	
                    <div class="inner-column">
                    	<div class="sec-title">
                            <h2><span class="theme_color"></span>{{$data3->SH}}</h2>
                        </div>
                        <div class="text">
                        	<p>
                            {{$data3->SP}}
                            </p>

                        </div>
                        <a href="#" class="theme-btn btn-style-four">Contact Us</a>
                    </div>
                    
                </div>
                
                <!--Video Column-->
                <div class="video-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="video-box">
                            <figure class="image">
                                <img src="{{asset($data3->SM)}}" alt="{{$data3->SH}}">
                                
                            </figure>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    @endisset


    <!-- if data not found  -->

    @empty($data3)
    <section class="featured-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                	
                    <div class="inner-column">
                    	<div class="sec-title">
                            <h2><span class="theme_color"></span>NO DATA FOUND</h2>
                        </div>
                        <div class="text">
                        	<p>
                            NO DATA FOUND
                            </p>

                        </div>
                        <a href="#" class="theme-btn btn-style-four">Contact Us</a>
                    </div>
                    
                </div>
                
                <!--Video Column-->
                <div class="video-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="video-box">
                            <figure class="image">
                                <img src="" alt="NO DATA FOUND">
                                
                            </figure>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    @endempty




    <!--End Success Section-->
    
    <!--Fluid Section One-->
    @isset($data3)

    <section class="success-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Image Column-->
                <div class="image-column col-md-5 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="image">
                        	<img src="{{asset($data3->SSM)}}" alt="{{$data3->SH}}">
                        </div>
                        <div class="small-img">
                        	<img src="{{asset($data3->SSMM)}}" alt="{{$data3->SH}}">
                        </div>
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-7 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="since-year clearfix">
                        	<span class="title">since</span>
                            <div class="year-img"><img src="{{url('Metron/images/resource/year.png')}}" alt=""></div>
                            <div class="work">36 Years OF<strong>Success</strong><span>Work</span></div>
                        </div>
                        <div class="text">
                        {{$data3->SSP}}
                        </div>
                        
                        <div class="fact-counter">
                            <div class="row clearfix">
                            
                                <!--Column-->
                                <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner">
                                        <div class="count-outer count-box counted">
                                            <span class="count-text" data-speed="3500" data-stop="200">{{$data3->SSprojects}}</span>
                                            <h4 class="counter-title">Projects</h4>
                                        </div>
                                    </div>
                                </div>
                        
                                <!--Column-->
                                <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner">
                                        <div class="count-outer count-box counted">
                                            <span class="count-text" data-speed="2500" data-stop="895">{{$data3->SSEmploy}}</span>
                                            <h4 class="counter-title">Employers</h4>
                                        </div>
                                    </div>
                                </div>
                        
                                <!--Column-->
                                <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner">
                                        <div class="count-outer count-box counted">
                                            <span class="count-text" data-speed="2200" data-stop="954">{{$data3->SSCustomer}}</span>
                                            <h4 class="counter-title">Customers</h4>
                                        </div>
                                    </div>
                                </div>
                        
                                <!--Column-->
                                <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner">
                                        <div class="count-outer count-box counted">
                                            <span class="count-text" data-speed="2000" data-stop="25">{{$data3->SSAward}}</span>
                                            <h4 class="counter-title">Awards</h4>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                                
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    @endisset

    
    @empty($data3)

    <section class="success-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Image Column-->
                <div class="image-column col-md-5 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="image">
                        	<img src="" alt="NO DATA FOUND">
                        </div>
                        <div class="small-img">
                        	<img src="" alt="NO DATA FOUND">
                        </div>
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-7 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="since-year clearfix">
                        	<span class="title">since</span>
                            <div class="year-img"><img src="{{url('Metron/images/resource/year.png')}}" alt=""></div>
                            <div class="work">36 Years OF<strong>Success</strong><span>Work</span></div>
                        </div>
                        <div class="text">
                        NO DATA FOUND
                        </div>
                        
                        <div class="fact-counter">
                            <div class="row clearfix">
                            
                                <!--Column-->
                                <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner">
                                        <div class="count-outer count-box counted">
                                            <span class="count-text" data-speed="3500" data-stop="200">NO DATA FOUND</span>
                                            <h4 class="counter-title">Projects</h4>
                                        </div>
                                    </div>
                                </div>
                        
                                <!--Column-->
                                <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner">
                                        <div class="count-outer count-box counted">
                                            <span class="count-text" data-speed="2500" data-stop="895">NO DATA FOUND</span>
                                            <h4 class="counter-title">Employers</h4>
                                        </div>
                                    </div>
                                </div>
                        
                                <!--Column-->
                                <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner">
                                        <div class="count-outer count-box counted">
                                            <span class="count-text" data-speed="2200" data-stop="954">NO DATA FOUND</span>
                                            <h4 class="counter-title">Customers</h4>
                                        </div>
                                    </div>
                                </div>
                        
                                <!--Column-->
                                <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                                    <div class="inner">
                                        <div class="count-outer count-box counted">
                                            <span class="count-text" data-speed="2000" data-stop="25">NO DATA FOUND</span>
                                            <h4 class="counter-title">Awards</h4>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                                
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    @endempty




    <!--End Fluid Section One-->
    
    <!--Featured Section-->
    <section class="clients-section">
            <div class="auto-container">
                
                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        @isset($data4)
                        @foreach($data4 as $data)
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset($data->img)}}" alt="{{$data->name}}"></a></figure></li>
                        @endforeach
                        @endisset


                        @empty($data4)
                     
                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="" alt="NO DATA FOUND "></a></figure></li>
                      
                        @endempty
                    </ul>
                </div>
                
            </div>
        </section>
 
@endsection

@section('scripts')
<script src="{{url('Metron/js/script.js')}}"></script>

@endsection