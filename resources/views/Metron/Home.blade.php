@extends('Metron.Main')
@section('title')
Metron | Home
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

       

    <!--End Main Header -->

    <!--Main Slider-->
    <section class="main-slider">
    	
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>

                @isset($data3)
                     @foreach($data3 as $data_3)
                	<li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{$data_3->banner}}" data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="{{$data_3->caption}}" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{asset($data_3->banner)}}"> 
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['720','720','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['-100','-110','-70','-75']"
                    data-x="['right','right','right','right']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<h2><br> <span><span class="theme_color">{{$data_3->bcaption}}</span></span></h2>
                    </div>
                    
                    <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="normal"
                    data-width="['720','720','650','450']"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['30','15','20','5']"
                    data-x="['right','right','right','right']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<div class="text">{{$data_3->scaption}}</div>
                    </div>
                    
                    <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['720','720','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['125','110','100','95']"
                    data-x="['right','right','right','right']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<a href="#" class="theme-btn btn-style-one">Our Service</a> <a href="contact.html" class="theme-btn btn-style-two">Contect Us</a>
                    </div>
                    
                    </li>
                    @endforeach 
                   @endisset

                        

                @empty($data3)
                  
                	<li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="" data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="DATA NOT FOUND" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src=""> 
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['720','720','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['-100','-110','-70','-75']"
                    data-x="['right','right','right','right']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<h2><br> <span><span class="theme_color">DATA NOT FOUND</span></span></h2>
                    </div>
                    
                    <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="normal"
                    data-width="['720','720','650','450']"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['30','15','20','5']"
                    data-x="['right','right','right','right']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<div class="text">DATA NOT FOUND</div>
                    </div>
                    
                    <div class="tp-caption tp-resizeme" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['720','720','650','450']"
                    data-whitespace="normal"
                    data-hoffset="['15','15','15','15']"
                    data-voffset="['125','110','100','95']"
                    data-x="['right','right','right','right']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    	<a href="#" class="theme-btn btn-style-one">Our Service</a> <a href="contact.html" class="theme-btn btn-style-two">Contect Us</a>
                    </div>
                    
                    </li>
                
                   @endempty




                </ul>
            </div>
        </div>
    </section>
    
    <section class="services-section">
    	<div class="auto-container">
        	<div class="sec-title">
            	<div class="title"></div>
                <h2><span class="theme_color">Our</span> Services</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme">
            	
               
            @isset($data5)
                @foreach($data5 as $data)
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
                @empty($data5)
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
    
    <!--Fluid Section One-->
    
    @isset($data4)
    <section class="fluid-section-one">
    	<div class="outer-container clearfix">
        	<!--Image Column-->
            <div class="image-column" style="background-image:url({{url($data4->img)}});">
            	<figure class="image-box"><img src="{{asset($data4->img)}}" alt="{{$data4->heading}}"></figure>
            </div>
        	<!--Content Column-->
         
            <div class="content-column">
            	<div class="inner-box">
                    <div class="sec-title">
                        <div class="title"></div>
                        <h2><span class="theme_color"></span>{{$data4->heading}}</h2>
                    </div>
                    <div class="text">{{$data4->intro}}</div>
                    <ul class="list-style-one clearfix">
                    	<li class="col-md-6 col-sm-6 col-xs-12"><span class="icon flaticon-briefcase-1"></span>EXPERT & PROFESSIONAL</li>
                        <li class="col-md-6 col-sm-6 col-xs-12"><span class="icon flaticon-diamond-1"></span>PROFESSIONAL APPROACH</li>
                        <li class="col-md-6 col-sm-6 col-xs-12"><span class="icon flaticon-bank-building"></span>HIGHT QUALITY WORK</li>
                        <li class="col-md-6 col-sm-6 col-xs-12"><span class="icon flaticon-two-fingers-up"></span>SATISFACTION GUARANTEE</li>
                    </ul>
                </div>
            </div>
           

        </div>
    </section>
    @endisset
    
    @empty($data4)
    <section class="fluid-section-one">
    	<div class="outer-container clearfix">
        	<!--Image Column-->
            <div class="image-column" style="background-image:url();">
            	<figure class="image-box"><img src="" alt="NOT FOUND DATA"></figure>
            </div>
        	<!--Content Column-->
         
            <div class="content-column">
            	<div class="inner-box">
                    <div class="sec-title">
                        <div class="title"></div>
                        <h2><span class="theme_color"></span>DATA NOT FOUND</h2>
                    </div>
                    <div class="text">DATA NOT FOUND</div>
                    <ul class="list-style-one clearfix">
                    	<li class="col-md-6 col-sm-6 col-xs-12"><span class="icon flaticon-briefcase-1"></span>EXPERT & PROFESSIONAL</li>
                        <li class="col-md-6 col-sm-6 col-xs-12"><span class="icon flaticon-diamond-1"></span>PROFESSIONAL APPROACH</li>
                        <li class="col-md-6 col-sm-6 col-xs-12"><span class="icon flaticon-bank-building"></span>HIGHT QUALITY WORK</li>
                        <li class="col-md-6 col-sm-6 col-xs-12"><span class="icon flaticon-two-fingers-up"></span>SATISFACTION GUARANTEE</li>
                    </ul>
                </div>
            </div>
           

        </div>
    </section>
    @endempty



    
    <!--End Fluid Section One-->
    
    <!--Project Section-->
    <section class="project-section">
    	<div class="auto-container">
        	<div class="sec-title centered">
            	<div class="title"></div>
                <h2><span class="theme_color">Recant </span> Projects</h2>
            </div>
            
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <!--Filter-->
                <!-- <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">Show All</li>
                       
                    </ul>
                </div> -->
                
                <div class="filter-list row clearfix">
                
                @isset($data6)
                    @foreach($data6 as $data)
                    <div class="gallery-item mix col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{asset($data->img)}}" alt="">
                            
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <ul>
                                            <li><a href="#" class="image-link"><span class="icon fa fa-link"></span></a></li>
                                            <li><a href="{{asset($data->img)}}" data-fancybox="images" data-caption="" class="link"><span class="icon flaticon-picture-gallery"></span></a></li>
                                        </ul>
                                        <div class="content">
                                            <h3><a href="#">{{$data->title}}</a></h3>
                                            <div class="category">{{$data->text}}</div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    @endforeach
                    @endisset

                    
                    @empty($data6)
                    
                    <div class="gallery-item mix  col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="" alt="DATA NOT FOUND">
                            
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <ul>
                                            <li><a href="#" class="image-link"><span class="icon fa fa-link"></span></a></li>
                                            <li><a href="" data-fancybox="images" data-caption="" class="link"><span class="icon flaticon-picture-gallery"></span></a></li>
                                        </ul>
                                        <div class="content">
                                            <h3><a href="#">DATA NOT FOUND</a></h3>
                                            <div class="category">DATA NOT FOUND</div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                   
                    @endempty


                    
                    
                    
                </div>
                    
                
            </div>
            
        </div>
    </section>
    <!--End Project Section-->
    
    <!--Call To Action-->
    <section class="call-to-action-section" style="background-image:url(Metron/images/background/2.jpg)">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Text Column-->
                <div class="text-column col-md-9 col-sm-12 col-xs-12">
                	<div class="text">We provide experience & <span class="theme_color">high level construction</span> worksolution for you!!</div>
                </div>
                <!--Btn Column-->
                <div class="btn-column col-md-3 col-sm-12 col-xs-12">
                	<a href="contact.html" class="theme-btn btn-style-three">Start A Project</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="testimonial-section" style="background-image:url(Metron/images/background/patern-1.png)">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Image Column-->
                <div class="image-column col-md-5 col-sm-5 col-xs-12">
                	<div class="image">
                    	<img src="{{url('Metron/images/resource/testimonial.jpg')}}" alt="">
                    </div>
                </div>
                <!--Carousel Column-->
                <div class="carousel-column col-md-7 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="sec-title">
                            <div class="title">Testimonial</div>
                            <h2><span class="theme_color">Clients </span> Say</h2>
                        </div>
                        
                        <div class="single-item-carousel owl-carousel owl-theme owl-loaded owl-drag">
                        	
                            <!--Testimonial Block-->
                            
                            
                            <!--Testimonial Block-->
                            
                            
                            <!--Testimonial Block-->
                            
                            
                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1200px, 0px, 0px); transition: all 0.5s ease 0s; width: 4200px;"><div class="owl-item cloned" style="width: 600px;"><div class="testimonial-block">
                            	<div class="inner-box">
                                	<div class="text">“Lorem ipsum dolor sit ametcon sectetur adipisicing elit, sed doiusmod tempor incidi labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
                                    <div class="author-info">
                                    	<div class="author-inner">
                                        	<div class="image">
                                            	<img src="{{url('Metron/images/resource/author-1.jpg')}}" alt="">
                                            </div>
                                            <h3>Jeniffer Burns</h3>
                                            <div class="designation">Project Manager</div>
                                        </div>
                                    </div>
                                </div>
                            </div></div><div class="owl-item cloned" style="width: 600px;"><div class="testimonial-block">
                            	<div class="inner-box">
                                	<div class="text">“Lorem ipsum dolor sit ametcon sectetur adipisicing elit, sed doiusmod tempor incidi labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
                                    <div class="author-info">
                                    	<div class="author-inner">
                                        	<div class="image">
                                            	<img src="{{url('Metron/images/resource/author-1.jpg')}}" alt="">
                                            </div>
                                            <h3>Jeniffer Burns</h3>
                                            <div class="designation">Project Manager</div>
                                        </div>
                                    </div>
                                </div>
                            </div></div><div class="owl-item active" style="width: 600px;"><div class="testimonial-block">
                            	<div class="inner-box">
                                	<div class="text">“Lorem ipsum dolor sit ametcon sectetur adipisicing elit, sed doiusmod tempor incidi labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
                                    <div class="author-info">
                                    	<div class="author-inner">
                                        	<div class="image">
                                            	<img src="{{url('Metron/images/resource/author-1.jpg')}}" alt="">
                                            </div>
                                            <h3>Jeniffer Burns</h3>
                                            <div class="designation">Project Manager</div>
                                        </div>
                                    </div>
                                </div>
                            </div></div><div class="owl-item" style="width: 600px;"><div class="testimonial-block">
                            	<div class="inner-box">
                                	<div class="text">“Lorem ipsum dolor sit ametcon sectetur adipisicing elit, sed doiusmod tempor incidi labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
                                    <div class="author-info">
                                    	<div class="author-inner">
                                        	<div class="image">
                                            	<img src="{{url('Metron/images/resource/author-1.jpg')}}" alt="">
                                            </div>
                                            <h3>Jeniffer Burns</h3>
                                            <div class="designation">Project Manager</div>
                                        </div>
                                    </div>
                                </div>
                            </div></div><div class="owl-item" style="width: 600px;"><div class="testimonial-block">
                            	<!-- <div class="inner-box">
                                	<div class="text">“Lorem ipsum dolor sit ametcon sectetur adipisicing elit, sed doiusmod tempor incidi labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
                                    <div class="author-info">
                                    	<div class="author-inner">
                                        	<div class="image">
                                            	<img src="images/resource/author-1.jpg" alt="">
                                            </div>
                                            <h3>Jeniffer Burns</h3>
                                            <div class="designation">Project Manager</div>
                                        </div>
                                    </div>
                                </div> -->
                            </div></div><div class="owl-item cloned" style="width: 600px;"><div class="testimonial-block">
                            	<!-- <div class="inner-box">
                                	<div class="text">“Lorem ipsum dolor sit ametcon sectetur adipisicing elit, sed doiusmod tempor incidi labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
                                    <div class="author-info">
                                    	<div class="author-inner">
                                        	<div class="image">
                                            	<img src="images/resource/author-1.jpg" alt="">
                                            </div>
                                            <h3>Jeniffer Burns</h3>
                                            <div class="designation">Project Manager</div>
                                        </div>
                                    </div>
                                </div> -->
                            </div></div><div class="owl-item cloned" style="width: 600px;"><div class="testimonial-block">
                            	<!-- <div class="inner-box">
                                	<div class="text">“Lorem ipsum dolor sit ametcon sectetur adipisicing elit, sed doiusmod tempor incidi labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</div>
                                    <div class="author-info">
                                    	<div class="author-inner">
                                        	<div class="image">
                                            	<img src="images/resource/author-1.jpg" alt="">
                                            </div>
                                            <h3>Jeniffer Burns</h3>
                                            <div class="designation">Project Manager</div>
                                        </div>
                                    </div>
                                </div> -->
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
@endsection

@section('scripts')
<script src="{{url('Metron/js/script.js')}}"></script>

@endsection
