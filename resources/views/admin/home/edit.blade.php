@extends('admin.admin_master')

@section('admin')
    <div class="py-12">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

        
          <div class="col-md-8">
            <div class="card">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{session('success')}}</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            
            
            <div class="card-header"> Edit Brand</div>
            <div class="card-body">
              
              <form action="{{url('edit/about/'.$homeabout->id)}}" method="POST" >
                @csrf
                  <div class="form-group">
                  <label for="CategoryInput"> Update Title</label> <br>
                  <input type="text" class="form-control" name="title" aria-describedby="emailHelp" value="{{ $homeabout->title }}">
                  @error('title')
                  <span class="text-danger">{{$message}} </span>
                  @enderror
                </div>


                <div class="form-group">
													<label for="exampleFormControlTextarea1">Short Description</label>
													<textarea class="form-control" name="short_dis" rows="3" placeholder="{{ $homeabout->short_dis }}" value="{{ $homeabout->short_dis }}"></textarea>
                          @error('short_dis')
          <span class="text-danger">{{$message}} </span>
          @enderror
												</div>
										
                        <div class="form-group">
													<label for="exampleFormControlTextarea1">Long Description</label>
													<textarea class="form-control" name="long_dis" rows="3" placeholder="{{ $homeabout->long_dis }}" value="{{ $homeabout->long_dis }}"></textarea>
                          @error('long_dis')
          <span class="text-danger">{{$message}} </span>
          @enderror
												</div>



                
                <br/>
                <hr>
                <br/>


                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Update Home about</button>
              </form>
            </div>

            </div>

            </div>
</div>











    </div>
    </div>
    @endsection