@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('users')}}">Uesrs</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Details</li>
          </ol>
        </nav>
        
    </div>
    
</div>

<div class="row">
  <div class="col-md-8">

    <!-- DataTables Example -->
          <div class="card mb-3">
           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">User Information</h6>
                 
                </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                      <td class="text-primary"><strong>Name:</strong></td>
                      <td class="text-primary"><strong>{{$user->name}}</strong></td>
                  </tr>
                   <tr>
                      <td class="text-primary"><strong>Email:</strong></td>
                      <td>{{$user->email}}</td>
                  </tr>
                   <tr>
                      <td class="text-primary"><strong>Department:</strong></td>
                      <td>{{$user->department->name}}</td>
                  </tr>

                   <tr>
                      <td class="text-primary"><strong>Status:</strong></td>
                      <td>{{$user->status}}</td>
                  </tr>

                   <tr>
                      <td class="text-primary"><strong>Staff No:</strong></td>
                      <td>{{$user->staffno}}</td>
                  </tr>

                   <tr>
                      <td class="text-primary"><strong>User Role:</strong></td>
                      <td>{{$user->role->name}}</td>
                  </tr>

                   <tr>
                      <td class="text-primary"><strong>Date Created:</strong></td>
                      <td>{{$user->created_at->diffForHumans()}}</td>
                  </tr>
                   <tr>
                      <td class="text-primary"><strong>Actions</strong></td>
                      <td>
                        <a class="text-info" href="{{ route('user.edit',$user->id) }}"><i class="fa fa-pen-square"></i> Edit </a> &nbsp; &nbsp; 

                        <a class="text-danger" href="{{ route('user.delete',$user->id) }}"> <i class="fa fa-trash"></i> Delete </a>
                      </td>
                  </tr>
       

                



                 
                </table>
              </div>
            </div>
            
          </div>
    
  </div>
<!--   <div class="col-md-4">
     <div class="card mb-3">
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Action on Ticket</h6>
                 
                </div>
            <div class="card-body">

    
                            <hr>

                          </div>
    
  </div>
  
</div>
 --><div>
         
        
        <!-- Sticky Footer -->

      </div>
@endsection
