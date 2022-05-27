@extends('admin.admin_master')

@section('admin')


<div class="py-12">
  <div class="container col-md-12">
    <div class="row">
      <h4>Contacts Admin </h4>
      <a href="{{route('add.contact')}}"> <button class="btn btn-info">Home Add About</button> </a>
      <br>
      <br>
      
      <div class="col-md-12">
        <div class="card">
          
          
          <div class="card-header"> All Contacts Data</div>
          <table class="table">
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
            <thead class="table-primary">
                <tr>
                  <th scope="col" width="5%">No</th>
                  <th scope="col" width="5%">Contact ID</th>
                  <th scope="col" width="15%">Contact Phone</th>
                  <th scope="col" width="20%">Contact Email</th>
                  <th scope="col" width="40%">Contact Address</th>
                  <th scope="col" width="15%">Edit</th>

                </tr>
              </thead>
              <tbody>
              
              @php($i=1)
                @foreach ($contacts as $contact)
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$contact->id}}</td>
                  <td>{{$contact->phone}}</td>
                  <td>{{$contact->email}}</td>
                  <td>{{$contact->address}}</td>

                  <td> <a href="{{ url('contact/edit/'.$contact->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ url('contact/delete/'.$contact->id) }}" onclick="return confirm('Are you shure that you want to delete?')" class="btn btn-danger">Delete</a>
                  </td> 
                </tr>
                
                @endforeach 
              
              </tbody>
            </table>
            
            
          </div>
          

          
        </div>
        

@endsection
