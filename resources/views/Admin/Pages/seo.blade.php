@extends('Admin.Main')

@section('title')
    Metron|Projects 
@endsection



@section('content')
@include('sweet::alert')
<div class="content">
        <div class="row">
        
            <div class="callout callout-info">
                <h2 class="text-center">SEO</h4>
                 </div>
                 <div class="col-md-8 col-md-offset-2">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post" enctype="multipart/form-data" action="#">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">KEYWORDS</label>

                  <div class="col-sm-6">
                    <input type="text"  name="bcaption" required  class="form-control" id="title" placeholder="ENTER KEYWORD">
                  </div>
                </div>




                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Select TARGET PAGE:</label>
                  <div class="col-sm-6">
                  <select name="catageory" class="form-control">
                 
                    <option value="1">HOME</option>
                    <option value="2">ABOUT US</option>
                    <option value="3">SERVICES</option>
                    <option value="4">PROJECTS</option>
                    <option value="5">CERTIFICATION</option>
                    
          
                  </select>   
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
                <h4 class="text-center">KEYWORDS DATA</h4>
                 </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>Id</th>
                  <th>KEYWORD</th>
                  <th>TARGET PAGE</th>
                  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @isset($data2)
                  @foreach($data2 as $datas)
                <tr>
                  <td>{{ $datas->id  }}</td>
                  <td>{{$datas->title }}</td>
                  <td>{{$datas->text }}</td>
                  <td>{{$datas->catageroy->name }}</td>
                  <td><div class="attachment-block clearfix">
              <img class="attachment-img " src=" {{ asset($datas->img) }}" alt="Attachment Image">
          
              </div></td>
                 <td><span><a  class="btn btn-danger pull-right"  href="{{url('/admin/'.$datas->id.'/deleproject')}}"><i class="fa fa-trash"></i>Delete</a> <a  class="btn btn-primary pull-right"  href="#"><i class="fa fa-paint-brush"></i>Edit</a> </span></td>
                </tr>
                @endforeach
              @endisset


              @empty($data2)
                
                <tr>
                  <td>NO DATA FOUND</td>
                  <td>NO DATA FOUND</td>
                  <td>NO DATA FOUND</td>
                  
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
