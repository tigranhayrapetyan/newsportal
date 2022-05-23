@extends('admin.admin_master')

@section('admin')


<div class="py-12">
  <div class="container col-md-12">
    <div class="row">
    <h4>Home Slider </h4>
    <a href="{{route('add.slider')}}"> <button class="btn btn-info">Add Slider</button> </a>
    <br>
    <br>
       
    <div class="col-md-12">
          <div class="card">
            
          <div class="card">
            @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{session('success')}}</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    @endif
    
</div>
</div>
            
            <div class="card-header"> All Slider</div>
            <table class="table">
              <thead class="table-primary">
                <tr>
                  <th scope="col" width="5%">No</th>
                  <th scope="col" width="5%">Slider Title</th>
                  <th scope="col" width="25%">Slider Description</th>
                  <th scope="col" width="15%">Slider Image</th>
                  <th scope="col" width="15%">Cteated At</th>
                  <th scope="col" width="15%">Last update</th>
                  <th scope="col" width="15%">Action</th>
                </tr>
              </thead>
              <tbody>
                @php($i=1)
                @foreach ($sliders as $slider)
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$slider->title}}</td>
                  <td>{{$slider->description}}</td>

                  <td> <img src="{{ asset($slider->image) }}" style="height:40px; width:70px;" ></td>
                  <td>
                    
                    {{Carbon\Carbon::parse($slider->created_at)->diffForHumans() }}
                    
                  </td>
                  <td>
                     
                      {{Carbon\Carbon::parse($slider->updated_at)->diffForHumans() }}
                      
                    </td>
                    <td> <a href="{{ url('edit/slider/'.$slider->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ url('delete/slider/'.$slider->id) }}" onclick="return confirm('Are you shure that you want to delete?')" class="btn btn-danger">Delete</a>
                  </td> 
                </tr>
                
                @endforeach 
              </tbody>
            </table>
            
            
          </div>
          

          
        </div>
        



@endsection
