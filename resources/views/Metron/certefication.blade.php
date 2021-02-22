@extends('Metron.Main')
@section('title')
 Metron | Certefication
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
                	<h1>Cartification</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="#">Home</a></li>
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
                @isset($data3)
                @foreach($data3 as $data)
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="{{asset($data->img)}}" alt="{{$data->name}}" class="img-responsive">
                    </div>
                </div>  
                @endforeach
                @endisset

                @empty($data3)
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                                <img src="" alt="DATA NOT FOUND" class="img-responsive">
                        </div>
                    </div>
                 @endempty   
            </div>
        </div>
    </section>
    <!--End Contact Section-->
    <br>


@endsection

@section('scripts')
<script src="{{url('Metron/js/script.js')}}"></script>

@endsection