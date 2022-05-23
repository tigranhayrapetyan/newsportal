@extends('admin.admin_master')

@section('admin')


<div class="py-12">
  <div class="container col-md-12">
    <div class="row">
    <h4>Home About </h4>
    <a href="{{route('add.slider')}}"> <button class="btn btn-info">Home Add About</button> </a>
    <br>
    <br>
       
    <div class="col-md-12">
          <div class="card">
            
            
            <div class="card-header"> All About Data</div>
            <table class="table">
              <thead class="table-primary">
                <tr>
                  <th scope="col" width="5%">No</th>
                  <th scope="col" width="20%">Home Title</th>
                  <th scope="col" width="20%">Shot Description</th>
                  <th scope="col" width="35%">Long Description</th>
                  <th scope="col" width="20%">Action</th>
                </tr>
              </thead>
              <tbody>
                @php($i=1)
                @foreach ($homeabout as $about)
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$about->title}}</td>
                  <td>{{$about->short_dis}}</td>
                  <td>{{$about->long_dis}}</td>
                  <td> <a href="{{ url('about/edit/'.$about->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ url('about/delete/'.$about->id) }}" onclick="return confirm('Are you shure that you want to delete?')" class="btn btn-danger">Delete</a>
                  </td> 
                </tr>
                
                @endforeach 
              </tbody>
            </table>
            
            
          </div>
          

          
        </div>
        
        <div class="col-md-12">
          <div class="card">
            @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{session('success')}}</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    
    

</div>
</div>

@endsection
