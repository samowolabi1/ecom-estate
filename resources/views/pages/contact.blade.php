@extends('layouts.master')

@section('content')

 <section class="section element-animate">
      <div class="container">

        <div class="col-md-12 mt-5 text-align-center pt-5">
<br><br>
                <h3 class="main-title">Contact</h3>
                <p class="short-desc">
                    Reach out to us
                </p>
            </div>

        <div class="row mb-5  justify-content-center">
          <div class="col-md-12">
            <h2></h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
          <form action="{{route('contact.mess')}}" method="POST">
            @csrf
            <div class="row mb-4">
              <div class="col-md-4 mb-md-0 mb-4">
                <input name="name" type="text" class="form-control" placeholder="Full Name" required>
              </div>
              <div class="col-md-4 mb-md-0 mb-4">
                <input name="email" type="text" class="form-control" placeholder="Email Address" required>
              </div>
              <div class="col-md-4 mb-md-0 mb-4">
                <input name="subject" type="text" class="form-control" placeholder="Subject" required>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-12">
                <textarea name="message" id="" class="form-control" placeholder="Write to us today" cols="30" rows="10" required></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <input type="submit" class="btn btn-primary btn-block" value="Send Message">
              </div>
            </div>
            
            
          </form>
          </div>

        </div>

        
      </div>
    </section><br><br>


<!--  -->



@endsection
     <!--    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           
        </div> -->




