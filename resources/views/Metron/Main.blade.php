<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>
    
    @yield('title')
</title>
<!-- Stylesheets -->
<link href="{{url('Metron/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{url('Metron/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{url('Metron/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{url('Metron/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{url('Metron/css/style.css')}}" rel="stylesheet">
<link href="{{url('Metron/css/responsive.css')}}" rel="stylesheet">



<!--Color Switcher Mockup-->
<link href="{{url('Metron/css/color-switcher-design.css')}}" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="{{url('Metron/css/color-themes/default-theme.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{url('Metron/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{url('Metron/images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
      <!-- Main Header / Header Style Two-->
      <header class="main-header header-style-two">
    
    	<!-- Header Top Two-->
    	<div class="header-top-two">
        	<div class="auto-container">
            	<div class="clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left">
                    	<ul class="links clearfix">
                        	<li><a href="#"><span class="icon fa fa-home"></span>333-B Iqbal Evenue Society Near Shaukhat Khanam Square Khyaban-E-Jinnah Road Lahore</a></li>
                            <li><a href="#"><span class="icon fa fa-envelope"></span>Into@Metronintl.Com</a></li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right clearfix">
                    	<ul class="clearfix" id="social">
                           
                            <li><a href="https://web.facebook.com/"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="https://twitter.com/"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="https://plus.google.com/"><span class="fa fa-google-plus"></span></a></li>
 </ul>                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Header Top End -->




        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="{{url('Metron/images/loogo.png')}}" alt=""></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                    
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="{{url('/')}}">Home</a> </li>
                                    <li><a href="{{url('about')}}">About us</a></li>
                                    <li class="dropdown"><a href="{{url('services')}}">Services</a> </li>
                                    <li class="dropdown"><a href="{{url('projects')}}">Projects</a></li>
                                    <li class="dropdown"><a href="{{url('gallery')}}">Gallery</a> </li>
                                    <li class="dropdown"><a href="{{url('certefication')}}">Certification</a> </li>
                                    <li><a href="contact.html">Contact us</a></li>
                                 </ul>
                            </div>
                        </nav>
              
                    </div>
                    <!--Nav Outer End-->
                    
            	</div>    
            </div>
        </div>

        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index-2.html" class="img-responsive"><img src="{{url('Metron/images/loogo.png')}}" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="{{url('/')}}">Home</a>
                                    <li><a href="{{url('about')}}">About us</a></li>
                                    <li class="dropdown"><a href="{{url('services')}}">Services</a> </li>
                                    <li class="dropdown"><a href="{{url('projects')}}">Projects</a></li>
                                    <li class="dropdown"><a href="{{url('gallery')}}">Gallery</a> </li>
                                    <li class="dropdown"><a href="{{url('certefication')}}">Certification</a> </li>
                                    <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
        
        
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

  @yield('content')


<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


    <footer class="main-footer" style="background-image:url(Metron/images/background/3.jpg)">
    	<div class="auto-container">
        
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="#"><img src="{{('Metron/images/loogo.png')}}" alt="" /></a>
                                    </div>
                                    <div class="text">Construction is international construction services company and is a leading builder in diverse market segments. With a staff of 5,200 employees, the company completes $20 billion of construction on 2,500 projects each year.</div>
                                    <ul class="social-icon-one">
                                        <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                	<div class="footer-title">
                                		<h2>Services</h2>
                                    </div>
                                    <ul class="footer-lists">
                                        <li><a href="#">CONSTRUCTION</a></li>
                                        <li><a href="#">WASTE WATER TREATMENT</a></li>
                                        <li><a href="#">POWER PLANT</a></li>
                                        <li><a href="#">ELECTRICAL COMPONENTS</a></li>
                                        <li><a href="#">PUMP SUPPLIES</a></li>
                                        <li><a href="#">FIRE FIGHTING</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--big column-->
                    <div class="big-column col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                        	
                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                	<div class="footer-title">
                                		<h2>Quick Links</h2>
                                    </div>
                                    <ul class="footer-lists-two">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="projects.html">Project</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li class="dropdown"><a href="cartification.html">Cartification</a></li>

                                        <li><a href="contact.html">Contect Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget gallery-widget">
                                	<div class="footer-title">
                                		<h2>Find Us</h2>
                                    </div>
                                    <div class="widget-content">
                                    	<div class="images-outer clearfix">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.740634511705!2d74.26952711510623!3d31.448806557819054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190171599c4df9%3A0x1e3f7a883cb14aee!2sShaukat+Khanum+Memorial+Cancer+Hospital+and+Research+Centre!5e0!3m2!1sen!2s!4v1566490726966!5m2!1sen!2s" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">
            	<div class="row clearfix">
                	
                    <div class="column col-md-16 col-sm-12 col-xs-12">
                    	<div class="copyright" style="text-align: center;">copyright © 2019 All Right Reserved.created by<a href="https://www.hubsol.com/"> Hubsol</a> </div>
                    </div>
                  
                    
                </div>
            </div>
        </div>
    </footer>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <!-- <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div> -->
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="{{url('Metron/css/color-themes/default-theme.css')}}"></span>
            <span class="palate teal-color" data-theme-file="{{url('Metron/css/color-themes/teal-theme.css')}}"></span>
            <span class="palate green-color" data-theme-file="{{url('Metron/css/color-themes/green-theme.css')}}"></span>
            <span class="palate aqua-color" data-theme-file="{{url('Metron/css/color-themes/aqua-theme.css')}}"></span>
            <span class="palate pink-color" data-theme-file="{{url('Metron/css/color-themes/pink-theme.css')}}"></span>
            <span class="palate orange-color" data-theme-file="{{url('Metron/css/color-themes/orange-theme.css')}}"></span>
            <span class="palate lime-color" data-theme-file="{{url('Metron/css/color-themes/lime-theme.css')}}"></span>
            <span class="palate red-color" data-theme-file="{{url('Metron/css/color-themes/red-theme.css')}}"></span>
        </div>
    </div>

    <div class="palate-foo">
        <span>You can easily change and switch the colors.</span>
    </div>

</div>
<!-- /.End Of Color Palate -->

<script src="{{url('Metron/js/jquery.js')}}"></script> 


<!--Revolution Slider-->
<script src="{{url('Metron/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{url('Metron/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{url('Metron/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{url('Metron/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{url('Metron/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{url('Metron/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{url('Metron/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{url('Metron/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{url('Metron/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{url('Metron/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{url('Metron/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{url('Metron/js/main-slider-script.js')}}"></script>

<script src="{{url('Metron/js/bootstrap.min.js')}}"></script>
<script src="{{url('Metron/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('Metron/js/jquery.fancybox.js')}}"></script>
<script src="{{url('Metron/js/owl.js')}}"></script>
<script src="{{url('Metron/js/mixitup.js')}}"></script>
<script src="{{url('Metron/js/wow.js')}}"></script>
<script src="{{url('Metron/js/jquery-ui.js')}}"></script>
@yield('scripts')


<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="{{url('Metron/js/map-script.js')}}"></script>
<!--End Google Map APi-->

<!--Color Switcher-->
<script src="{{url('Metron/js/color-settings.js')}}"></script>

</body>

</html>