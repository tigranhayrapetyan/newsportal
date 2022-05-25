@extends('admin.admin_master')

@section('admin')



`
    <div class="py-8"> 
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="card-header">All Multipicture</div>
          <div class="card-group">
        @foreach($images as $multi)

        <div class="col-md-4 mt-5">

        <div class="card">

        <img src="{{ asset($multi->image) }}">

        </div>

        </div>

        @endforeach

        </div>


          <div class="card">
                                 
          <div class="col-md-4">
            <div class="card">
          
            
            <div class="card-header"> Multi image</div>
            <div class="card-body">
              
              <form action="{{ route('store.image') }}" method="POST" enctype="multipart/form-data">
                @csrf
                

                <div class="form-group">
                  <label for="CategoryInput">Multi Image</label> <br>
                  <input type="file" class="form-control" name="multi_image[]" aria-describedby="emailHelp" multiple="" >
                 @error('multi_image')
                    <span class="text-danger">{{$message}} </span>
                 @enderror
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Add Image</button>
              </form>
            </div>

            </div>

            </div>
</div>    
  </div>

@endsection