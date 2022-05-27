@extends('admin.admin_master')

@section('admin')


<
      
      <div class="col-md-12">
        <div class="card">
          
          
          <div class="card-header"> Received Messages </div>
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
                  <th scope="col" width="5%">Message ID</th>
                  <th scope="col" width="15%">Sender Name</th>
                  <th scope="col" width="15%">Sender Email</th>
                  <th scope="col" width="15%">Message Subject</th>
                  <th scope="col" width="40%">Message </th>
                  <th scope="col" width="5%">Edit</th>

                </tr>
              </thead>
              <tbody>
              
              @php($i=1)
                @foreach ($messages as $message)
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{$message->id}}</td>
                  <td>{{$message->name}}</td>
                  <td>{{$message->email}}</td>
                  <td>{{$message->subject}}</td>
                  <td>{{$message->message}}</td>

                  <td> 
                  <a href="{{ url('message/delete/'.$message->id) }}" onclick="return confirm('Are you shure that you want to delete?')" class="btn btn-danger">Delete</a>
                  </td> 
                </tr>
                
                @endforeach 
              
              </tbody>
            </table>
            
            
          </div>
          

          
        </div>
        

@endsection
