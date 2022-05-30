@extends('admin.admin_master')

@section('admin')

<div class="card card-default">
                  <div class="card-header card-header-border-bottom">
                    <h2>User Profile Update</h2>
                  </div>

                  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{session('success')}}</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
                  <div class="card-body">
                    <form method="POST" action="{{route('update.user.profile')}}" class="form-pill">
                      @csrf

                    <label class="text-dark font-weight-medium" for="">User Name</label>
                    <div class="input-group mb-2">
                      <input type="text" name="name"  class="form-control" value="{{$user['name']}}" >
          
                    </div>

                    <label class="text-dark font-weight-medium" for="">User Email</label>
                    <div class="input-group mb-2">
                      <input type="text" name="email"  class="form-control" value="{{$user['email']}}" >
          
                    </div>






                  </div>

<button type="submit"class="btn btn-primary btn-default">Update</button>

</form>
                </div>


@endsection