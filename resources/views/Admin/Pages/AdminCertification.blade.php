@extends('Admin.Main')

@section('title')
    Metron|Certification
@endsection


@section('content')

@include('sweet::alert')
<div class="content">
        <div class="row">
        
            <div class="callout callout-info">
                <h2 class="text-center">Certification</h4>
                 </div>
                 <div class="col-md-8 col-md-offset-2">
          <!-- Horizontal Form -->
          <div  class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{url('admin/addcertification')}}">
              <div class="box-body">
              <div class="form-group">
                 @csrf
                <br>
                <br>
                  <label for="inputEmail3" class="col-sm-2 control-label">Certification Name:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" required id="inputEmail3" placeholder="Certification">
                  </div>
                </div>



                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Please choese Image:</label>
                  <div class="col-sm-6">
                  <input require type="file" required  name="img" class="form-control" id="exampleInputFile">
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
    
  </div>
  
<div class="row">
    <div class="box">
    <div class="callout callout-warning">
         <h4 class="text-center">Certificate Data</h4>
     </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>Id</th>
                  <th>Title</th>
                  
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @isset($data)
                  @foreach($data as $datas)
                <tr>
                  <td>{{ $datas->id  }}</td>
                  <td>{{$datas->name }}</td>
                  
                  <td><div class="attachment-block clearfix">
          <img class="attachment-img " src=" {{ asset($datas->img) }}" alt="Attachment Image">
          
          </div></td>
                 <td><span><a  class="btn btn-danger pull-right"  href="{{url('/admin/'.$datas->id.'/delecertification')}}"><i class="fa fa-trash"></i>Delete</a>  </span></td>
                </tr>
                @endforeach
                @endisset
                </tbody>

                <tbody>
                @empty($data)
                
                <tr>
                  <td>DATA NOT FOUND</td>
                  <td>DATA NOT FOUND</td>
                  
                  <td>DATA NOT FOUND</td>
                 <td>
                DATA NOT FOUND 
                 </td>
                </tr>
              
                @endempty
                </tbody>








                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
  </div>


   </div>
@endsection