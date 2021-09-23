@extends('layouts.master')

@section('content')

 <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">


<div class="row">
    <div class="col-md-8">
  
    <div data-aos="zoom-in" data-aos-delay="100">
      <h1>Vista IT Support</h1>
      <h2>Access IT Support With Ease</h2>
    </div>
 
  </div>
  <div class="col-md-4">

    <form method="POST" action="{{ route('login') }}">
        @csrf

          <div class="form-group">
            <label >Username</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus required>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          </div><br>
          <div class="form-group">
            <label >Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" name="password" required autocomplete="current-password" required>

              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
          </div><br>
          
          <button type="submit" class="btn btn-primary">Log In</button>
    </form>
    
  </div>
  
</div>
      

    </div>
  </section><!-- End Hero -->
  <div class="">
    
  </div>





@endsection
   




