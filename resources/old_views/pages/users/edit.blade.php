@extends('layouts.app')

@section('content')


<div class="row">
  
  <div class="col-md-6">
     <div class="card mb-3">
            <div class="card-header bg-primary text-white">
           
              <h4>Update User Record</h4>
         {{--      <a href="#" class="text-white" data-toggle="modal" data-target="#addSaleModal">
                <span class="float-right">
                  <i class="fa fa-plus"></i>
                  Add New Entry
                </span>
              </a> --}}
            </div>
            <div class="card-body">

     <form class="form-horizontal" action="{{route('update.user',$user->id)}}" method="POST">
                               @csrf
                              @method('PUT')

                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">User Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Enter name"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Password</label>
                                        <div class="col-md-8">
                                            <input type="text" name="password" value="{{$user->password}}" class="form-control" placeholder="Enter password"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">User Role: <span class="text-info">{{$user->role->name}}</span></label>

                                        <div class="col-md-8">
                                            <select class="form-control" name="role_id">
                                                    <option value="">Change Role</option>
                                                    @foreach($roles as $role)
                                                        
                                                        <option value="{{$role->id}}">
                                                                {{$role->name}}
                                                        </option>
                                                    
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="col-md-4 control-label">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" readonly="true" name="email" value="{{$user->email}}" class="form-control" placeholder="Enter email"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Wallet Address</label>
                                        <div class="col-md-8">
                                            <input type="text" name="wallet_address" value="{{$user->wallet_address}}" class="form-control" placeholder="Enter wallet address"/>
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
<div class="col-md-6">
  
</div>
<div>
         
        
        <!-- Sticky Footer -->

      </div>
@endsection
