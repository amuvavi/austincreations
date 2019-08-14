@extends('layouts.app')



@section('content')
<div class="py-4">
    <div class="row justify-content-center">
       
    

    
<div class="table-responsive col-md-6 align-self-center ">
    <table class="table table-striped table-hover table-bordered ">
    <h2 class="text-center">Profile Details</h2>
        <tr>
        @foreach($users as $user)
            <th>User Name</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email Address</th>
            <td>{{ $user->email }}</td>
        </tr>
        
        <tr>
            <th>Date of Birth</th>
            <td>{{ $user->age->format('D j M Y') }}</td>
        </tr>

        <tr>
            <th>Your Age</th>
            <td class="text-danger"><b>You are {{ $user->myage() }} old</b></td>
        </tr>

        <tr>
            <th>Edit Profile</th>
            <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProfileModal">
  Edit your profile
</button></td>
        </tr>
        @endforeach

        
    </table>
</div> 
</div> 
</div> 
 

<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
    
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                        
            <profile></profile>
           
               <br>
               <password></password>
           
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
     


@endsection
