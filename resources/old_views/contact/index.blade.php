@extends('layouts.app')
@section('content')

<div class="page-wrapper">
       <div class="container-fluid">

    <div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Contact Messages</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
            </ol>
           
        </div>
    </div>
</div>



 <div class="row">
                    <!-- column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Messages</h4>
                                
                            </div>
                            <div class="card-body">
                                
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Date Sent</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                          
                                    @foreach($contacts as $contact)
                                        <tr class="odd gradeX">
                                            <td>{{++$i}}</td>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->phone}}</td>
                                            <td>{{$contact->subject}}</td>
                                            <td>{{$contact->message}}</td>
                                            <td>{{$contact->created_at->diffForHumans()}}</td>                                       
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                                    </table>
                                    <div>{{$contacts->links()}}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>


</div>
</div>



@endsection