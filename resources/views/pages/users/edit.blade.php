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
              <form class="form-horizontal" action="{{route('update.user',$user->id)}}" method="POST">
                                @csrf
                                @method("PUT")
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="name" value="{{$user->name}}" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" name="email" value="{{$user->email}}" class="form-control" />
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-4 control-label"> Change Department</label>
                                        <div class="col-md-8">
                                            <select class="form-control" name="department_id" >
                                                    <option value="">Select Department</option>
                                                    @foreach($depts as $dept)
                                                        
                                                        <option value="{{$dept->id}}">
                                                                {{$dept->name}}
                                                        </option>
                                                    
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                      <div class="form-group">
                                        <label class="col-md-4 control-label">Staff No</label>
                                        <div class="col-md-8">
                                            <input type="text" name="staffno" value="{{$user->staffno}}" class="form-control" />
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-4 control-label"> Change User Role</label>
                                        <div class="col-md-8">
                                            <select class="form-control" name="role_id" >
                                                    <option value="">Select Role</option>
                                                    @foreach($roles as $role)
                                                        
                                                        <option value="{{$role->id}}">
                                                                {{$role->name}}
                                                        </option>
                                                    
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Change Password</label>
                                        <div class="col-md-8">
                                            <input type="password" name="password" class="form-control" />
                                        </div>
                                    </div>

                                      
                                    
                                                                      
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-sm btn-primary m-r-5">Update</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
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
