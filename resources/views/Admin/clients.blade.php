@extends('Admin.Main')

@section('title')
    Metron|Slider
@endsection

@section('content')
@include('sweet::alert')
<div class="content">
        <div class="row">
        
            <div class="callout callout-info">
                <h2 class="text-center">Clients</h4>
                 </div>
                 <div class="col-md-8 col-md-offset-2">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post" enctype="multipart/form-data" action="{{url('/admin/addclients')}}">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Client Name:</label>

                  <div class="col-sm-6">
                    <input type="text"  name="cname" required  class="form-control" id="caption1" placeholder="clients">
                  </div>
                </div>

                
                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Image:</label>
                  <div class="col-sm-6">
                  <input type="file" class="form-control" name="img" required id="exampleInputFile">
                    </div>
                    
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               
                <button type="submit" class="btn btn-success pull-right"><span><i class=" fa fa-thumbs-up"></i></span>Submit </button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>
        
</div>
<div class="row">
    <div class="box">
    <div class="callout callout-warning">
                <h4 class="text-center">Client's Data</h4>
                 </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>Id</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 @isset($data)
                 @foreach($data as $datas)
                  <tr>
                  <td>{{$datas->id  }}</td>
                  <td>{{$datas->name }}</td>
                  <td><div class="attachment-block clearfix">
                  <img class="attachment-img " src=" {{ asset($datas->img) }}" alt="Attachment Image">
          
                  </div></td>
                  
                 <td><span><a  class="btn btn-danger pull-right"  href="{{url('/admin/'.$datas->id.'/deleclient')}}"><i class="fa fa-trash"></i>Delete</a> <a  class="btn btn-primary pull-right"  href="#"><i class="fa fa-paint-brush"></i>Edit</a>  </span></td>
                  </tr>
                  @endforeach
                  @endisset
                  </tbody>

                 <tbody>
                 @empty($data)
                 
                  <tr>
                  <td>DATA NOT FOUND</td>
                  <td>DATA NOT FOUND</td>
                  <td>
                   DATA NOT FOUND
                  </td>
                  
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