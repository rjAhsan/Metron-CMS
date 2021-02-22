@extends('Admin.Main')

@section('title')
    Metron|Dashboard
@endsection

@section('page_heading')

Admin Dashboard
@endsection

@section('content')
@include('sweet::alert')
<section class="content">

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$data2}}</h3>

              <p>NO. PROJECTS</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
         
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$data3}}<sup style="font-size: 20px"></sup></h3>

              <p> SERVICES</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$data4}}</h3>

              <p>Certiification</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>

          
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$data1}}</h3>

              <p>NO. Clients</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
       
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>




    @endsection