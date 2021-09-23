@extends('layouts.app')

@section('content')
<div>
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-header">
                  <h1>Signup Letters</h1>
                </div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-money"></i>
                  </div>
                  <div class="card-text">
                    <h1 class="text-center display-3"><strong>{{$letter->count()}}</strong></h1>
                  </div>
                </div>
               
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-header">
                  <h1>Contact Messages</h1>
                
                </div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-flash"></i>
                  </div>
                  <div class="card-text">
                    <h1 class="text-center display-3"><strong>{{$contact->count()}}</strong></h1>
                  </div>
                </div>
              
              </div>
            </div>
   
          </div>
          <!-- Area Chart Example-->
     
        </div>
        <br><br><br>
        <!-- Sticky Footer -->
   
      </div>
@endsection
