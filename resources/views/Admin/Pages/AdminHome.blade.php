@extends('Admin.Main')

@section('title')
    Metron|Home 
@endsection

@section('content')
@include('sweet::alert')
<div class="content">
        <div class="row">
        
            <div class="callout callout-info">
                <h2 class="text-center">HomePage</h4>
                 </div>
                 <div class="col-md-8">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="Post" enctype="multipart/form-data" action="{{url('/admin/addhomeintro')}}">
              @csrf
              <div class="box-body">
              @isset($data)

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Heading</label>

                  <div class="col-sm-6">
                    <input type="text"  name="heading" required  class="form-control" id="caption1" placeholder="" value="{{$data->heading}}">
                  </div>
                </div>

                <div class="form-group">
                 
                 <label for="inputEmail3" class="col-sm-2 control-label">Company Intoduction:</label>

                 <div class="col-sm-6">
                   <textarea  rows="4" cols="50" required class="form-control"  name="intro" id="inputEmail3" placeholder="">
                   {{$data->intro}}
                   </textarea>
                 </div>
               </div>
               @endisset

               @empty($data)
                
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Heading</label>

                  <div class="col-sm-6">
                    <input type="text"  name="heading" required  class="form-control" id="caption1" placeholder="" value="DATA NOT FOUND">
                  </div>
                </div>

                <div class="form-group">
                 
                 <label for="inputEmail3" class="col-sm-2 control-label">Company Intoduction:</label>

                 <div class="col-sm-6">
                   <textarea  rows="4" cols="50" required class="form-control"  name="intro" id="inputEmail3" placeholder="">
                 NOT FOUND DATA
                   </textarea>
                 </div>
               </div>

               @endempty


                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">image</label>
                  <div class="col-sm-6">
                  <input type="file" class="form-control" name="img"  id="exampleInputFile">
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
          <div class="col-md-4">
          <div   class="box box-info">
          <div class="attachment-block clearfix">
          @isset($data)


           <h2 class="text-center">{{ $data->heading }}</h4>
          
            <hr>
            <hr>
               <img class="attachment-img " src=" {{ asset($data->img) }}" alt="Attachment Image">
          @endisset


          @empty($data)


              <h2 class="text-center">DATA NOT FOUND</h4>

              <hr>
              <hr>
                  <img class="attachment-img " src=" " alt="Attachment Image">
         @endempty



            </div> 
            <hr>
            <hr>
          
          </div>
          </div>
</div>

         

</div>

@endsection