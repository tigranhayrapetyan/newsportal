<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      <b>  All Brand</b>
     
      
    </h2>
  </x-slot>
    <div class="py-12">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
    
            
            <div class="card-header"> All Brand</div>
            <table class="table">
              <thead class="table-primary">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Brand Name</th>
                  <th scope="col">Brand Image</th>
                  <th scope="col">Cteated At</th>
                  <th scope="col">Last update</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- @php($i=1) -->
                @foreach ($brands as $brand)
                <tr>
                  <th scope="row">{{$brands->firstItem()+$loop->index}}</th>
                  <td>{{$brand->brand_name}}</td>
                  <td> <img src="{{ asset($brand->brand_image) }}" style="height:40px; width:70px;" ></td>
                  <td>
                     
                      {{Carbon\Carbon::parse($brand->created_at)->diffForHumans() }}
                  
                    </td>
                    <td>
                     
                      {{Carbon\Carbon::parse($brand->updated_at)->diffForHumans() }}
                  
                    </td>
                    <td> <a href="{{ url('brand/edit/'.$brand->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ url('brand/delete/'.$brand->id) }}" onclick="return confirm('Are you shure that you want to delete?')" class="btn btn-danger">Delete</a>
                    </td> 
                  </tr>
                  
                  @endforeach 
                </tbody>
              </table>
              
              {{$brands->links()}}
              
            </div>
            
          </div>
          
          <div class="col-md-4">
            <div class="card">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{session('success')}}</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            
            
            <div class="card-header"> Add Brand</div>
            <div class="card-body">
              
              <form action="{{ route('store.brand') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="CategoryInput">Brand Name</label> <br>
                  <input type="text" class="form-control" name="brand_name" aria-describedby="emailHelp" placeholder="Enter Category Name">
                  @error('brand_name')
                  <span class="text-danger">{{$message}} </span>
                  @enderror
                </div>
                
                <br/>
                <hr>
                <br/>

                <div class="form-group">
                  <label for="CategoryInput">Brand Image</label> <br>
                  <input type="file" class="form-control" name="brand_image" aria-describedby="emailHelp" >
                 @error('brand_image')
                    <span class="text-danger">{{$message}} </span>
                 @enderror
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Add Brand</button>
              </form>
            </div>

            </div>

            </div>
</div>











    </div>
    </div>
</x-app-layout>
