@extends('Admin.Main')

@section('title')
    Metron|About
@endsection


@section('content')
@include('sweet::alert')
<div class="content">
        <div class="row">
        
            <div class="callout callout-info">
                <h2 class="text-center">About Us</h4>
                 </div>
                 <div class="col-md-8 col-md-offset-2">
          <!-- Horizontal Form -->
          <div  class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
                
<br>
<br>
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{url('admin/updatesection')}}">
            @csrf
              <div class="box-body">
              
              @isset($data)
              <div class="form-group">
              <div class="callout callout-warning">
                <h4 class="text-center">First Section</h4>
                 </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">First Section Heading:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" required name="SH"  id="inputEmail3" value="{{$data->SH}}">
                  </div>
                </div>

              
                <div class="form-group">
                 
                  <label for="inputEmail3" class="col-sm-2 control-label">First Section Paragraph:</label>

                  <div class="col-sm-6">
                    <textarea  rows="4" cols="50"  class="form-control" required name="SP" id="inputEmail3" placeholder="">
                    {{$data->SP}}
                    </textarea>
                  </div>
                </div>



                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">First Section Image:</label>
                  
                  
                  <div class="col-sm-6">
                  <input  type="file"   name="SM" class="form-control" id="exampleInputFile">
                  </div>
                  
                  <div class="col-sm-2">
                  <div class="attachment-block clearfix">
                  <img class="attachment-img" src=" {{ asset($data->SM) }}" alt="Attachment Image">
          
                 </div>
                  </div>
                    
                </div>
                <div class="callout callout-warning">
                <h4 class="text-center">Second Section</h4>
                 </div>

                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Second Section 1st Image:</label>
                  <div class="col-sm-6">
                  <input  type="file"  name="SSM" class="form-control " id="exampleInputFile">
                  </div>

                  <div class="col-sm-2">
                  <div class="attachment-block clearfix">
                  <img class="attachment-img" src=" {{ asset($data->SSM) }}" alt="Attachment Image">
          
                 </div>
                  </div>
                    
                </div>

                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Second Section 2nd Image:</label>
                  <div class="col-sm-6">
                  <input  type="file"   name="SSMM" class="form-control" id="exampleInputFile">
                    </div>

                  <div class="col-sm-2">
                  <div class="attachment-block clearfix">
                  <img class="attachment-img" src=" {{ asset($data->SSMM) }}" alt="Attachment Image">
          
                 </div>
                  </div>
                    
                </div>

                <div class="form-group">
                 
                  <label for="inputEmail3" class="col-sm-2 control-label">Second Section Paragraph:</label>

                  <div class="col-sm-6">
                    <textarea  rows="4" cols="50" required class="form-control" require name="SSP" id="inputEmail3" placeholder="">
                    {{$data->SSP}}
                    </textarea>
                  </div>
                </div>

                <div class="form-group">
                 
                  <label for="inputEmail3" class="col-sm-2 control-label">No of Projects:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" required name="SSprojects"  id="inputEmail3" value="{{$data->SSprojects}}">
                  </div>
                </div>

               
                <div class="form-group">
                 
                  <label for="inputEmail3" class="col-sm-2 control-label">No of Employees:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"  name="SSEmploy" required id="inputEmail3" value="{{$data->SSEmploy}}">
                  </div>
                </div>

                <div class="form-group">
                 
                  <label for="inputEmail3" class="col-sm-2 control-label">No of Customers:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"  name="SSCustomer" required id="inputEmail3" value="{{$data->SSCustomer}}">
                  </div>
                </div>

                <div class="form-group">
                 
                  <label for="inputEmail3" class="col-sm-2 control-label">No of Awards:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"  name="SSAward" required id="inputEmail3"value="{{$data->SSAward}}">
                  </div>
                </div>
              @endisset


              @empty($data)
              <div class="form-group">
              <div class="callout callout-warning">
                <h4 class="text-center">First Section</h4>
                 </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">First Section Heading:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" required name="SH"  id="inputEmail3" placeholder="No DATA FOUND">
                  </div>
                </div>

              
                <div class="form-group">
                 
                  <label for="inputEmail3" class="col-sm-2 control-label">First Section Paragraph:</label>

                  <div class="col-sm-6">
                    <textarea  rows="4" cols="50"  class="form-control" required name="SP" id="inputEmail3" placeholder="No DATA FOUND">
                    
                    </textarea>
                  </div>
                </div>



                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">First Section Image:</label>
                  
                  
                  <div class="col-sm-6">
                  <input  type="file" required  name="SM" class="form-control" id="exampleInputFile">
                  </div>
                    
                </div>
                <div class="callout callout-warning">
                <h4 class="text-center">Second Section</h4>
                 </div>

                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Second Section 1st Image:</label>
                  <div class="col-sm-6">
                  <input  type="file"  name="SSM" class="form-control " required id="exampleInputFile">
                  </div>

                 
                    
                </div>

                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Second Section 2nd Image:</label>
                  <div class="col-sm-6">
                  <input  type="file"   name="SSMM" class="form-control" required id="exampleInputFile">
                    </div>

                    
                </div>

                <div class="form-group">
                 
                  <label for="inputEmail3" class="col-sm-2 control-label">Second Section Paragraph:</label>

                  <div class="col-sm-6">
                    <textarea  rows="4" cols="50" required class="form-control"  name="SSP" id="inputEmail3" placeholder="">
                    no recod found
                    </textarea>
                  </div>
                </div>

                <div class="form-group">
                 
                  <label for="inputEmail3" class="col-sm-2 control-label">No of Projects:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" required name="SSprojects"  id="inputEmail3" placeholder="No DATA FOUND">
                  </div>
                </div>

               
                <div class="form-group">
                 
                  <label for="inputEmail3" class="col-sm-2 control-label">No of Employees:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"  name="SSEmploy" required id="inputEmail3" placeholder="No DATA FOUND">
                  </div>
                </div>

                <div class="form-group">
                 
                  <label for="inputEmail3" class="col-sm-2 control-label">No of Customers:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"  name="SSCustomer" required id="inputEmail3" placeholder="No DATA FOUND">
                  </div>
                </div>

                <div class="form-group">
                 
                  <label for="inputEmail3" class="col-sm-2 control-label">No of Awards:</label>

                  <div class="col-sm-6">
                    <input type="text" class="form-control"  name="SSAward" required id="inputEmail3" placeholder="No DATA FOUND">
                  </div>
                </div>
                @endempty








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
        </div>


@endsection