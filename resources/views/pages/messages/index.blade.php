@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('tickets')}}">Tickets</a></li>
            <li class="breadcrumb-item"><a href="{{route('ticket.show',$ticket->id)}}">Tickets Deatils</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ticket Messages</li>
          </ol>
        </nav>
        
    </div>
    
</div>

<div class="row">
  <div class="col-md-4">

    <!-- DataTables Example -->
          <div class="card mb-3">
           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">{{$ticket->subject}}</h6>
                 
                </div>
            <div class="card-body">


                              <!-- Ticket Form -->
                                        <form action="{{route('message.create')}}" method="POST" enctype="multipart/form-data">

                                            @csrf
                                          <input type="hidden" value="{{$ticket->id}}" name="ticket_id">
                                          <input type="hidden" value="{{Auth::id()}}" name="sender_id">
                                          

                                          <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Message</label>
                                            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                          </div>

                                        

                                           <div class="form-group">
                                            <input class="btn btn-primary pull-right" type="submit" value="Send Message" required>
                                            
                                          </div>

                                        </form>
              
            </div>
            
          </div>
    
  </div>
  <div class="col-md-8">
    <!-- DataTables Example -->
          <div class="card mb-3">
           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Messages</h6>
                 
                </div>
            <div class="card-body">

              <div>
             
                 @foreach($comment as $spm)
                <p>
                  
                 

                  <span>
                    
                    
                    {{$spm->message}}
                   

                  </span> 
                  <br>

                  <small>
                    <span class="text-info"><strong>
                      @if($spm->user_id == 
                      '')

                      <span class="text-warning">{{$spm->support->name}} (Support)</span> 

                      @endif

                       @if($spm->support_id == 
                      '')

                      <span class="text-danger">{{$spm->user->name}} (Staff)</span> 

                      @endif

                      &nbsp; / 

                      &nbsp; {{$spm->created_at->diffForHumans()}}</strong>
                    </span>
                  </small>
                </p>
                @endforeach

          
              </div>

                              
            </div>
            
          </div>
  
    
  </div>
  
</div>
<div>
         
        
        <!-- Sticky Footer -->

      </div>
@endsection
