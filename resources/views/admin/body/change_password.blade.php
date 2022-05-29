@extends('admin.admin_master')

@section('admin')

<div class="card card-default">
                  <div class="card-header card-header-border-bottom">
                    <h2>Change Password</h2>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{route('password.update')}}" class="form-pill">
                      @csrf
                    <label class="text-dark font-weight-medium" for="">Current Password</label>
                    <div class="input-group mb-2">
                      <input type="password" name="current_password"id="current_password" class="form-control" placeholder="Current password">
                    @error('current_password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror               
                    </div>




                    <label class="text-dark mt-4 font-weight-medium" for="">New Password</label>
                    <div class="input-group mb-2">
                    <input type="password" name="password" id="password" class="form-control" placeholder="New password">
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror       
                  </div>

                    <label class="text-dark mt-4 font-weight-medium" for="">Confirm New Password</label>
                    <div class="input-group mb-2">
                    <input type="password"  name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm New password">
                    @error('password_confirmation')
                    <span class="text-danger">{{$message}}</span>
                    @enderror       
                  </div>


                  </div>

<button type="submit"class="btn btn-primary btn-default">Save</button>

</form>
                </div>


@endsection