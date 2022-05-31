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
            
            
            <div class="card-header"> Edit profile Picture</div>
            <div class="card-body">
              
              <form action="{{route('update.user.profile.picture')}}" method="POST"  enctype="multipart/form-data" >
                @csrf
                <input type="hidden" name="old_image" value="{{ asset('storage'.'/'.$userphoto->profile_photo_path) }}">
 
                <div class="form-group">
                  <label for="CategoryInput">Update Profile picture</label> <br>
                  <input type="file" class="form-control" name="image" aria-describedby="emailHelp" value="{{ asset('storage'.'/'.$userphoto->profile_photo_path) }}">
                 @error('image')
                    <span class="text-danger">{{$message}} </span>
                 @enderror

                  <div class="form-group">
                    <img src="{{ asset('storage'.'/'.$userphoto->profile_photo_path) }}" style="width:400px; height:200px;">


                  </div>


                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Update Profile Picture</button>
              </form>
            </div>

            </div>

            </div>
</div>











    </div>
    </div>
    @endsection