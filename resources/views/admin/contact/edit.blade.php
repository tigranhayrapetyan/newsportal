@extends('admin.admin_master')

@section('admin')



<div class="content-wrapper">
          <div class="content">							<div class="row">
								<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Create Contact</h2>
										</div>
										<div class="card-body">
                    <form action="{{url('contact/update/'.$contacts->id)}}"" method="POST" >
                    @csrf
												<div class="form-group">
													<label for="exampleFormControlInput1">Contact Phone</label>
													<input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="{{$contacts->phone}}">
                          @error('phone')
          <span class="text-danger">{{$message}} </span>
          @enderror
												</div>

												<div class="form-group">
													<label for="exampleFormControlTextarea1">Contact email</label>
													<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="{{$contacts->email}}">
                          @error('email')
          <span class="text-danger">{{$message}} </span>
          @enderror
												</div>
										
                        <div class="form-group">
													<label for="exampleFormControlTextarea1">Contact Address</label>
													<textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Contact Address">{{$contacts->address}}</textarea>
                          @error('address')
          <span class="text-danger">{{$message}} </span>
          @enderror
												</div>






												<div class="form-footer pt-4 pt-5 mt-4 border-top">
													<button type="submit" class="btn btn-primary btn-default">Submit</button>
												</div>
											</form>
										</div>
									</div>




								</div>

							</div>
</div>

          


        </div>




@endsection
