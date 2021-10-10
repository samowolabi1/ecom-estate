@extends('layouts.master')

@section('content')
<main id="main">

    <!-- ======= Intro Single ======= -->

   <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
         
          </div>
          <div class="col-md-12 col-lg-4">
       
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->
    <!-- ======= Contact Single ======= -->
    <section class="contact">
      <div class="container">
     <div class="row">
    <div class="col-md-8">
  <img src="assets/img/order.png">
 
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
    </section><!-- End Contact Single-->

  </main><!-- End #main -->




@endsection
   




