@extends('Admin.Main')

@section('title')
    Metron|Heade
@endsection


@section('content')
@include('sweet::alert')
<div class="content">
        <div class="row">
        
            <div class="callout callout-info">
                <h2 class="text-center">Top Header</h4>
                 </div>
                 <div class="col-md-8 col-md-offset-2">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post" action="{{('/admin/editheader')}}">
            @csrf  
            <div class="box-body">
            @isset($data)
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Company Address:</label>

                  <div class="col-sm-6">
                    <input type="text" required value="{{$data->Address}}" name="Address" class="form-control" id="inputEmail3" >
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email Address:</label>

                  <div class="col-sm-6">
                    <input type="email" required  value="{{$data->phone}}" name="phone" class="form-control" id="inputPassword3" placeholder="Email">
                  </div>
                </div>
                @endisset

                @empty($data)
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Company Address:</label>

                  <div class="col-sm-6">
                    <input type="text" required value="NOT FOUNT" name="Address" class="form-control" id="inputEmail3" >
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email Address:</label>

                  <div class="col-sm-6">
                    <input type="email" required  value="NOT FOUND" name="phone" class="form-control" id="inputPassword3" placeholder="Email">
                  </div>
                </div>

                @endempty
             

              
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               <br>
                <button type="submit" class="btn btn-success pull-right"><span><i class="fa fa-thumbs-up"></i></span>SUBMIT</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>
    
</div>
        </div>

@endsection