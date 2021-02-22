@extends('Admin.Main')

@section('title')
    Metron|Slider
@endsection

@section('content')

@include('sweet::alert')
<div class="content">
        <div class="row">
        
            <div class="callout callout-info">
                <h2 class="text-center">Slider</h4>
                 </div>
                 <div class="col-md-8 col-sm-offset-2">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post" enctype="multipart/form-data" action="{{url('/admin/addslider')}}">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Big Caption</label>

                  <div class="col-sm-6">
                    <input type="text"  name="bcaption" required  class="form-control" id="caption1" placeholder="caption">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Small Caption</label>

                  <div class="col-sm-6">
                    <input type="text" required class="form-control" name="scaption" id="caption2" placeholder="small caption">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Please choese Banner</label>
                  <div class="col-sm-6">
                  <input type="file" class="form-control" name="banner" required id="exampleInputFile">
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
                <h4 class="text-center">Slider Data</h4>
                 </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>Id</th>
                  <th>Big Caption</th>
                  <th>Small Caption</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
               
                <tbody>
                  @isset($data)
                  @foreach($data as $datas)
                <tr>
                  <td>{{ $datas->id  }}</td>
                  <td>{{$datas->bcaption }}</td>
                  <td>{{$datas->scaption }}</td>
                  <td><div class="attachment-block clearfix">
                  <img class="attachment-img " src=" {{ asset($datas->banner) }}" alt="Attachment Image">
          
                 </div></td>
                 <td><span><a  class="btn btn-danger pull-right"  href="{{url('/admin/'.$datas->id.'/delebaner')}}"><i class="fa fa-trash"></i>Delete</a> <a  class="btn btn-primary pull-right"  href="#"><i class="fa fa-paint-brush"></i>Edit</a> </span></td>
                </tr>
                @endforeach
                
                @endisset
                </tbody>


                <tbody>
                @empty($data)
                  
                <tr>
                  <td>NO DATA FOUND</td>
                  <td>NO DATA FOUND</td>
                  <td>NO DATA FOUND</td>
                  <td>
                  NO DATA FOUND
                </div></td>
                 <td>
                 NO DATA FOUND
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