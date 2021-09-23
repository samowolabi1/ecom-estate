@extends('layouts.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <span class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Friday, 22nd of May 2021</span>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Tickets Created</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                        </div>
                                        <div class="col-auto">
                                            <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                In Progress</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                        </div>
                                        <div class="col-auto">
                                        <!--     <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Completed
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10</div>
                                                </div>
                                           
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Broadcast</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div style="height: 660px;" class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Create New Ticket</h6>
                                 
                                </div>
                                <!-- Card Body -->
                                <div style="height: 550px;" class="card-body">
                                    <div class="chart-area">
                                        <!-- Ticket Form -->
                                        <form action="{{route('ticket.create')}}" method="POST" enctype="multipart/form-data">

                                            @csrf
                                          <div class="form-group">
                                            <label for="exampleFormControlInput1">Subject</label>
                                            <input type="text" name="subject" class="form-control" placeholder="Issue in Summary" required>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleFormControlSelect1">Subject Category</label>
                                            <select name="category" class="form-control" required>
                                              <option>Select a Category</option>
                                              <option value="email">Email</option>
                                              <option value="hardware">Computer hardware</option>
                                              <option>Printing</option>
                                              <option>Dynamics Nav</option>
                                              <option>Tally</option>
                                              <option>Datasoft</option>
                                              <option>I can't access shared folder</option>
                                              <option>Computer is not comming up</option>
                                              <option>Others</option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Explain in details</label>
                                            <textarea name="details" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                          </div>

                                             <div class="form-group">
                                            <label for="exampleFormControlSelect1">Priority</label>
                                            <select name="priority" class="form-control" required>
                                                <option>Select a Priority</option>
                                                  <option>Low</option>
                                                  <option>Normal</option>
                                                  <option>Important</option>
                                                  <option>Critical</option>
                                                </select>
                                              </div>


                                            <div class="form-group">
                                            <label for="exampleFormControlInput1">Attach an Image (Optional)</label>
                                            <input name="image" type="file" class="form-control">
                                          </div>

                                           <div class="form-group">
                                            <input class="btn btn-primary pull-right" type="submit" value="Submit Ticket">
                                            
                                          </div>

                                        </form>



<!-- form ends -->


                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Recent Tickets</h6>
                                    <div class="dropdown no-arrow">
                                      
                                        
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    
                                @foreach($tickets as $tks)
                                   <a style="text-decoration: none;" href="{{route('ticket.show',$tks->id)}}">
                                   <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            {{$tks->subject}}
                                            <div class="text-white-50 small">{{$tks->created_at->diffForHumans()}}</div>
                                        </div>
                                    </div>
                                    </a><br>
                                @endforeach
                                    <br>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                 

                </div>
@endsection
