<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      <b>  Edit Category</b>
     
      
    </h2>
  </x-slot>
    <div class="py-12">
    <div class="container">
      <div class="row">
       

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
            
            
            <div class="card-header"> Edit Category</div>
            <div class="card-body">
              
              <form action="{{url('catrgory/update/'.$categories->id)}}" method="POST">
                @csrf
               <div class="form-group">
                 <label for="CategoryInput">Update Category Name</label> <br>
                 @error('category_name')
                    <span class="text-danger">{{$message}} </span>
                 @enderror
                 <input type="text" class="form-control" name="category_name" aria-describedby="emailHelp" value="{{$categories->category_name}}">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Update Category</button>
              </form>
            </div>

            </div>

            </div>
</div>


    </div>
    </div>
</x-app-layout>
