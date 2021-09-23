@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-md-8">

    <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header bg-primary text-white">
           
              <h4>Users</h4>
         {{--      <a href="#" class="text-white" data-toggle="modal" data-target="#addSaleModal">
                <span class="float-right">
                  <i class="fa fa-plus"></i>
                  Add New Entry
                </span>
              </a> --}}
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Name</th>
                      <th>Role</th>
                      <th class="text-center">Change Status</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                   @foreach($users as $index => $user)
                      <tr class="odd gradeX">
                          <td>{{ ($users->currentpage()-1) * $users->perpage() + $index + 1 }} </td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->role->name}}</td>                                        
                          {{-- @if($user->activate == 'Active')
                          <td>Active</td>

                          @else

                          <td>Inactive</td>
                          @endif --}}
                          <td class="text-center">
                            @if($user->status == 'Inactive')
                            
                            <form action="{{route('user.status',$user->id) }}" method="POST">
                              @csrf
                              @method('PUT')

                              <input type="hidden" name="status" value="Active">
                              <button class="btn btn-info fa fa-arrow-circle-o-right" type="submit"> Activate</button>
                            </form>

                            @else 
                           <form action="{{ route('user.status',$user->id) }}" method="POST">
                              @csrf
                              @method('PUT')

                              <input type="hidden" name="status" value="Inactive">
                              <button class="btn btn-warning fa fa-arrow-circle-o-right" type="submit"> Deactivate</button>
                            </form>

                            @endif
                          </td>
                        <!--   <td>


                            <a class="btn btn-primary fa fa-pencil-square-o" href="{{ route('user.edit',$user->id) }}"> Edit</a> | <a class="btn btn-danger fa fa-trash" href="{{ route('user.delete',$user->id) }}"> delete</a> </td> -->
                          
                      </tr>
                      
                  @endforeach
                 
                  </tbody>
                </table>
              </div>
            </div>
            
          </div>
    
  </div>
  <div class="col-md-4">
     <div class="card mb-3">
            <div class="card-header bg-primary text-white">
           
              <h4>Add Users</h4>
         {{--      <a href="#" class="text-white" data-toggle="modal" data-target="#addSaleModal">
                <span class="float-right">
                  <i class="fa fa-plus"></i>
                  Add New Entry
                </span>
              </a> --}}
            </div>
            <div class="card-body">

     <form class="form-horizontal" action="{{route('adduser')}}" method="POST">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">User Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="name" class="form-control" placeholder="Enter name" required/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Password</label>
                                        <div class="col-md-8">
                                            <input type="password" name="password" class="form-control" placeholder="Enter password" required/>
                                        </div>
                                    </div>

                                   
                                   <!--  <div class="form-group">
                                        <label class="col-md-4 control-label">User Role</label>
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
                                    </div> -->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" name="email" class="form-control" placeholder="Enter email" required/>
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
