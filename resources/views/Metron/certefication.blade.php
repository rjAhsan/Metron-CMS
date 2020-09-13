@extends('Metron.Main')
@section('title')
 Metron | Certefication
@endsection
@section('content')


<section class="page-title" style="background-image:url(Metron/images/background/8.jpg)">
    	<div class="auto-container">
        	<div class="clearfix">
            	<div class="pull-left">
                	<h1>Cartification</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Cartification</li>
                    </ul>
                </div>
            </div>
            <div class="contact-number text-center"><span class="icon flaticon-phone-call"></span>Call Us: +29321-4033316</div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Map Section-->
  
    <!--End Map Section-->
    
    <!--Contact Section-->
    <section class="cartification-section">
        <div class="container">
            <div class="row">
                <br>
                <h1 class="crtficate">Cartificates</h1>
                <br>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="{{url('Metron/images/cartification/cartificate1.png')}}" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                            <img src="Metron/images/cartification/cartificate2.png" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                            <img src="Metron/images/cartification/cartificate3.png" alt="" class="img-responsive">
                    </div>
                   
                </div>
                <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="Metron/images/cartification/cartificate4.png" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                                <img src="Metron/images/cartification/cartificate5.png" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                                <img src="Metron/images/cartification/cartificate6.png" alt="" class="img-responsive">
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!--End Contact Section-->
    <br>


@endsection

@section('scripts')
<script src="{{url('Metron/js/script.js')}}"></script>

@endsection