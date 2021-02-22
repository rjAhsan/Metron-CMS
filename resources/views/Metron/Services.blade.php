@extends('Metron.Main')
@section('title')
 Metron | Services
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
                	<h1>Services</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="#">Home</a></li>
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
                @isset($data3)
                @foreach($data3 as $data)
                <div class="services-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="#"><img src="{{asset($data->img)}}" alt="{{$data->title}}"></a>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="icon-box">
                                	<span class="icon flaticon-drawing"></span>
                                </div>
                                <h3><a href="#">{{$data->title}}</a></h3>
                            </div>
                            <div class="text">
                            {{$data->description}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endisset

                <!--Services Block-->
                @empty($data3)
                <div class="services-block">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="#"><img src="" alt="DATA NOT FOUND" /></a>
                        </div>
                        <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="icon-box">
                                	<span class="icon flaticon-drawing"></span>
                                </div>
                                <h3><a href="#">DATA NOT FOUND</a></h3>
                            </div>
                            <div class="text">
                            DATA NOT FOUND
                            </div>
                        </div>
                    </div>
                </div>
                @endempty
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