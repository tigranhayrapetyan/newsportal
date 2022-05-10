
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <b>  Welcome to  {{Auth::user()->name}}'s Dashboard </b>
        <b style="float:right;">Total Users
    <span class="badge bg-danger"> {{count($users)}} </span> 
</b>
            
        </h2>
    </x-slot>

    <div class="py-12">
     <div class="container">
    <table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created At</th>
      <th scope="col">Time passed after creation</th>
    </tr>
  </thead>
  <tbody>
      @php($i=1)
      @foreach($users as $user)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
      <td>{{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>
    </tr>
    
    @endforeach
  </tbody>
</table>



    </div>
    </div>
</x-app-layout>
