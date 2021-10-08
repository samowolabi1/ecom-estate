@extends('layouts.master')

@section('content')
<div class="container-fluid p-0">

    <div style="background-image:url('{{asset("img/breadcumb.jpg")}}');">
<div class="dividerrr"></div>
  <div class="container">

    <!-- Outer Row -->

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div style="background-image:url('{{asset("img/bg-img/item-6.jpg")}}');" class="col-lg-5 d-none d-lg-block"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
              </div>
              <form class="user" method="POST" action="{{ route('register') }}">
                        @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="col-sm-6">
                    <input id="name" type="text" class="form-control form-control-user @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number" required autocomplete="phone_number" autofocus>

                    @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                   @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                      @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                  </div>
                  <div class="col-sm-6">
                    <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password"  placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
                <hr>
                 <a href="" class="btn btn-google btn-user btn-block">
                      <i class="fa fa-google"></i> Login with Google
                    </a>
                 <a href="" class="btn btn-facebook btn-user btn-block">
                      <i class="fa fa-facebook-f"></i> Login with Facebook
                    </a>
              </form>
              <hr>
              <div class="text-center">
                <span class="small" href="#">By signing up you agree to our  <a href="">terms and conditions</a></span>
              </div>
              <div class="text-center">
                <a class="small" href="{{url('/password/reset')}}">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


</div>

</div>
@endsection




