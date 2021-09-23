@extends('layouts.app')

@section('content')


<div class="row">
  
  <div class="col-md-6">
     <div class="card mb-3">
            <div class="card-header bg-primary text-white">
           
              <h4>Update User Record</h4>
      
            </div>
            <div class="card-body">

     <form class="form-horizontal" action="{{route('update.profile',$user->id)}}" method="POST">
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
                                        <label class="col-md-4 control-label">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" readonly="true" name="email" value="{{$user->email}}" class="form-control" placeholder="Enter email"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Wallet Address</label>
                                        <div class="col-md-8">
                                            <input type="text" name="wallet_address" value="{{$user->wallet_address}}" class="form-control" placeholder="Enter a new wallet address"/>
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
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h4>Referral Link</h4>
      
    </div>
    <div class="card-body pt-5">

        <h5>Highlight and copy link below: </h5><br><p class="text-primary">{{ $user->getReferralLink() }}</p>
      
    </div>
    
  </div>



  
</div>
<div>
         
        
        <!-- Sticky Footer -->

      </div>
@endsection
