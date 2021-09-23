@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('tickets')}}">Tickets</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ticket Details</li>
          </ol>
        </nav>
        
    </div>
    
</div>

<div class="row">
  <div class="col-md-8">

    <!-- DataTables Example -->
          <div class="card mb-3">
           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Ticket Information</h6>
                 
                </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                      <td class="text-primary"><strong>Subject:</strong></td>
                      <td class="text-primary"><strong>{{$ticket->subject}}</strong></td>
                  </tr>
                   <tr>
                      <td class="text-primary"><strong>Details:</strong></td>
                      <td>{!!$ticket->details!!}</td>
                  </tr>
                   <tr>
                      <td class="text-primary"><strong>Status:</strong></td>
                      <td>{{$ticket->status}}</td>
                  </tr>

                   <tr>
                      <td class="text-primary"><strong>Email:</strong></td>
                      <td>{{$ticket->user->email}}</td>
                  </tr>

                   <tr>
                      <td class="text-primary"><strong>Date:</strong></td>
                      <td>{{$ticket->created_at->diffForHumans()}}</td>
                  </tr>
                   <tr>
                      <td class="text-primary"><strong>Support:</strong></td>
                      <td>
                        @if($ticket->support_id == 1)
                            Unassigned
                        @else

                        {{$ticket->support->name}}

                        @endif
                      </td>
                  </tr>

                   <tr>
                      <td class="text-primary"><strong>Priority:</strong></td>
                      <td>{{$ticket->priority}}</td>
                  </tr>
                   <tr>
                      <td class="text-primary"><strong>Details:</strong></td>
                      <td>{{$ticket->details}}</td>
                  </tr>

                   <tr>
                      <td class="text-primary"><strong>Image:</strong></td>
                      @if($ticket->image == "")

                      <td>No Error Image is Uploaded</td>

                      @else
                      <td><img src="/images/{{$ticket->image}}" alt="error Image"></td>

                      @endif
                  </tr>


                 
                </table>
              </div>
            </div>
            
          </div>
    
  </div>
  <div class="col-md-4">
     <div class="card mb-3">
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Action on Ticket</h6>
                 
                </div>
            <div class="card-body">

     <form class="form-horizontal" action="{{route('ticket.status',$ticket->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-8">
                                            <select class="form-control" name="status" required>
                                                <option value="">Change Status</option>
                                                <option value="Waiting for Support">Waiting for Support</option>
                                                <option value="In Progress">In Progress</option>
                                                <option value="Completed">Completed</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                                                      
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                            <hr>
                              <form class="form-horizontal" action="{{route('ticket.support',$ticket->id)}}" method="POST">
                                @csrf
                                 @method('PUT')
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-8">
                                            <select class="form-control" name="support_id" required>
                                                    <option value="">Assign Support</option>
                                                    @foreach($supports as $spt)
                                                        
                                                        <option value="{{$spt->id}}">
                                                                {{$spt->name}}
                                                        </option>
                                                    
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                                                      
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                            <hr>

                            <a href="{{route('messages',$ticket->id)}}" class="btn btn-info">Send Message</a>
                          </div>
    
  </div>
  
</div>
<div>
         
        
        <!-- Sticky Footer -->

      </div>
@endsection
