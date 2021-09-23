@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tickets</li>
          </ol>
        </nav>
        
    </div>
    
</div>

<div class="row">
  <div class="col-md-12">

    <!-- DataTables Example -->
          <div class="card mb-3">
           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tickets</h6>
                 
                </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Subject</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th class="text-center">View Tickets</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach($tickets as $tkts)
                    <tr class="text-dark">

                      @if($tkts->status == "Waiting for Support")
                        
                        <td class="text-danger"><strong><a class="text-danger" style="text-decoration:none;" href="{{route('ticket.show',$tkts->id)}}">{{$tkts->subject}}</a></strong></td>

                      @else
                        <td class="text-primary"><strong><a style="text-decoration:none;" href="{{route('ticket.show',$tkts->id)}}">{{$tkts->subject}}</a></strong></td>

                      @endif

                        <td>{{$tkts->user->name}}</td>
                        <td>{{$tkts->user->department->name}}</td>
                        <td>{{$tkts->user->email}}</td>
                        @if($tkts->status == "Waiting for Support")
                        <td class="text-danger"><strong>{{$tkts->status}}</strong></td>
                        @else
                        <td class="text-primary"><strong>{{$tkts->status}}</strong></td>
                        @endif

                        <td>{{$tkts->created_at->diffForHumans()}}</td>


                        <td><a href="{{route('ticket.show',$tkts->id)}}" class="btn btn-secondary"><i class="fa fa-eye"></i> View </a></td>


                    </tr>
                    @endforeach
                 
                  </tbody>
                </table>
              </div>
            </div>
            
          </div>
    
  </div>
  
<div>
         
        
        <!-- Sticky Footer -->

      </div>
@endsection
