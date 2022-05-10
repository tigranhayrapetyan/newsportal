<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      <b>  All Category</b>
     
      
    </h2>
  </x-slot>
    <div class="py-12">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
    
            
            <div class="card-header"> All Category</div>
            <table class="table">
              <thead class="table-primary">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">User Name</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Cteated At</th>
                  <th scope="col">Last update</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- @php($i=1) -->
                @foreach ($categories as $category)
                <tr>
                  <th scope="row">{{$categories->firstItem()+$loop->index}}</th>
                  <td>{{$category->user->name}}</td>
                  <td>{{$category->category_name}}</td>
                  <td>
                     
                      {{Carbon\Carbon::parse($category->created_at)->diffForHumans() }}
                  
                    </td>
                    <td>
                     
                      {{Carbon\Carbon::parse($category->updated_at)->diffForHumans() }}
                  
                    </td>
                    <td> <a href="{{ url('catrgory/edit/'.$category->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ url('softdelete/category'.$category->id) }}" class="btn btn-danger">Delete</a>
                    </td> 
                  </tr>
                  
                  @endforeach 
                </tbody>
              </table>
              
              {{$categories->links()}}
            
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
            
            
            <div class="card-header"> Add Category</div>
            <div class="card-body">
              
              <form action="{{route('store.category')}}" method="POST">
                @csrf
               <div class="form-group">
                 <label for="CategoryInput">Category Name</label> <br>
                 @error('category_name')
                    <span class="text-danger">{{$message}} </span>
                 @enderror
                 <input type="text" class="form-control" name="category_name" aria-describedby="emailHelp" placeholder="Enter Category Name">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Add Category</button>
              </form>
            </div>

            </div>

            </div>
</div>





<!-- Trache part -->

<br/>
<hr class="col-md-8">
<br/>
                          <div class="row">
                            <div class="col-md-8">
                              <div class="card">
                        
                                
                                <div class="card-header"> Trash list</div>
                                <table class="table">
                                  <thead class="table-primary">
                                    <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">User Name</th>
                                      <th scope="col">Category Name</th>
                                      <th scope="col">Cteated At</th>
                                      <th scope="col">Last update</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <!-- @php($i=1) -->
                                    @foreach ($trachCat as $category)
                                    <tr>
                                      <th scope="row">{{$categories->firstItem()+$loop->index}}</th>
                                      <td>{{$category->user->name}}</td>
                                      <td>{{$category->category_name}}</td>
                                      <td>
                                        
                                          {{Carbon\Carbon::parse($category->created_at)->diffForHumans() }}
                                      
                                        </td>
                                        <td>
                                        
                                          {{Carbon\Carbon::parse($category->updated_at)->diffForHumans() }}
                                      
                                        </td>
                                        <td> <a href="{{ url('catrgory/edit/'.$category->id) }}" class="btn btn-info">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                        </td> 
                                      </tr>
                                      
                                      @endforeach 
                                    </tbody>
                                  </table>
                                  
                                  {{$trachCat->links()}}
                                
                              </div>
                              
                            </div>

                            
                              










    </div>
    </div>
</x-app-layout>
