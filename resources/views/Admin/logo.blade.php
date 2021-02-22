@extends('Admin.Main')

@section('title')
    Metron|Logo
@endsection



@section('content')
  
@include('sweet::alert')
<div class="content">
        <div class="row">
        
            <div class="callout callout-info">
                <h2 class="text-center">Logo</h4>
             </div>

                 <div class="col-md-8 col-sm-offset-1 ">
      
                <div  class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{url('admin/logoupdate')}}">
              <div class="box-body">
              <div class="form-group">
                 @csrf
                <br>
                <br>
                  <label for="inputEmail3" class="col-sm-2 control-label">Logo Name</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="logoname" required id="inputEmail3" placeholder="logo Name">
                  </div>
                </div>



                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Please choese logo</label>
                  <div class="col-sm-6">
                  <input require type="file" required  name="logoimg" class="form-control" id="exampleInputFile">
                    </div>
                    
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" class="btn btn-success pull-right"><span><i class="fa fa-thumbs-up"></i></span> SUBMIT</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>
          
          
          <div class="col-md-2">
          <div   class="box box-info">
          <div class="attachment-block clearfix">
         
          @isset($logo)
                <h2 class="text-center">{{ $logo->logoname }}</h4>
            <hr>
            <hr>
               <img class="attachment-img " src=" {{ asset($logo->logoimage) }}" alt="Attachment Image">
          
          @endisset
             
          @empty($logo)
               <h2 class="text-center">Logo NOT FOUND</h4>
            <hr>
            <hr>
               <img class="attachment-img " src="" alt="Logo NOt found">
          
          @endempty
          
          
          </div>
          <hr>
          <hr>
          
        
         
      </div>
      </div>
      </div>
        </div>


@endsection