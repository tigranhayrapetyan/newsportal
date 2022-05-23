@extends('admin.admin_master')

@section('admin')



<div class="content-wrapper">
          <div class="content">							<div class="row">
								<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Create Home About</h2>
										</div>
										<div class="card-body">
                    <form action="{{ route('store.about') }}" method="POST" >
                    @csrf
												<div class="form-group">
													<label for="exampleFormControlInput1">About Title</label>
													<input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter Home about title">
                          @error('title')
          <span class="text-danger">{{$message}} </span>
          @enderror
												</div>

												<div class="form-group">
													<label for="exampleFormControlTextarea1">Short Description</label>
													<textarea class="form-control" name="short_dis" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Short Description"></textarea>
                          @error('short_dis')
          <span class="text-danger">{{$message}} </span>
          @enderror
												</div>
										
                        <div class="form-group">
													<label for="exampleFormControlTextarea1">Long Description</label>
													<textarea class="form-control" name="long_dis" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Long Description"></textarea>
                          @error('long_dis')
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
