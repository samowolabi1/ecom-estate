@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users</li>
          </ol>
        </nav>
        
    </div>
    
</div>


<div class="row">
  <div class="col-md-6">

    <!-- DataTables Example -->
          <div class="card mb-3">
           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Users</h6>
                 
                </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="text-center">
                      <th>S/N</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th class="text-center">View</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                   @foreach($users as $index => $user)
                      <tr class="odd gradeX text-center">
                          <td>{{ ($users->currentpage()-1) * $users->perpage() + $index + 1 }} </td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->department->name}}</td>                                        
                         
                          <td><a class="text-primary" style="text-decoration:none;" href="{{route('user.show',$user->id)}}"><i class="fa fa-eye"></i></a>

                          </td>

                        
                          <td>


                            <a class="text-info" href="{{ route('user.edit',$user->id) }}"><i class="fa fa-pen-square"></i> </a> 
                        </td>
                        <td>
                             <a class="text-danger" href="{{ route('user.delete',$user->id) }}"> <i class="fa fa-trash"></i></a> </td>
                          
                      </tr>
                      
                  @endforeach
                 
                  </tbody>
                </table>
              </div>
            </div>
            
          </div>
    
  </div>
  <div class="col-md-6">
     <div class="card mb-3">
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Users</h6>
                 
                </div>
            <div class="card-body">

     <form class="form-horizontal" action="{{route('adduser')}}" method="POST">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="name" class="form-control" placeholder="Enter name" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" name="email" class="form-control" placeholder="Enter Email" required/>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-4 control-label"> Select Department</label>
                                        <div class="col-md-8">
                                            <select class="form-control" name="department_id" required>
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
                                            <input type="text" name="staffno" class="form-control" placeholder="Enter Staff Number"/>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-4 control-label"> Select User Role</label>
                                        <div class="col-md-8">
                                            <select class="form-control" name="role_id" required>
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
                                        <label class="col-md-4 control-label">Password</label>
                                        <div class="col-md-8">
                                            <input type="password" name="password" class="form-control" placeholder="Enter password" required/>
                                        </div>
                                    </div>

                                      
                                    
                                                                      
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                          </div>
    
  </div>
  
</div>
<div>
         
        
        <!-- Sticky Footer -->

      </div>
@endsection
