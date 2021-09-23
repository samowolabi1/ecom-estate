@extends('layouts.master')

@section('content')

<div class="news-wrapper home-news block">

    <div class="container">
        <div class="row">
             <div class="col-md-12 text-align-center pt-5">
<br><br>
                <h3 class="main-title">{{$post->category->name}}</h3>
                <p class="short-desc">
                    {{$post->title}}
                </p>
            </div>
<br><br>


        </div>
    </div>

    <div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-2">
               <!--  <img width="646" height="984" src="./img/about2.png" class="attachment-full size-full" alt="">   -->          </div>
            <div class="col-md-8">
                <div>
                    <img style="width:100%;" src="/banners/{{$post->image}}" alt="build your own blockchain"> 
                </div>
                <br>
                <div class="text">
                    <p style="line-height:25px;" class="text-justify">
                        {!!$post->content!!}
  </p>
                        <!-- <a href="about.php" class="button blue">More</a> -->
                </div>
            </div>

            <div class="col-md-2">
               <!--  <img width="646" height="984" src="./img/about2.png" class="attachment-full size-full" alt="">   -->          </div>
        </div>
    </div>



    <!-- Teams -->





</div>





</div>



<!-- Team -->

<!--  -->


<div class="newsletter banner block" style="background-image: url(&#39;https://cryptolawinsider.com/wp-content/themes/cli/img/sample/banner-3.jpg&#39;)">
    <div class="cover"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12 text-align-center">
                <h3 class="main-title">Get the insights you need to grow and protect your crypto business</h3>
                <p class="short-desc">
                Receive intelligence on the latest legal developments in the crypto ecosystem delivered directly to your inbox each week.
                </p>
            </div>
             <div class="col-md-10 col-lg-8 col-sm-12">
               <!-- Begin Mailchimp Signup Form -->
<form action="{{route('subscribe')}}" method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
    @csrf
    <input type="email" name="email" id="mce-EMAIL" placeholder="email address" required="">
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
</form>
</div>

<!--End mc_embed_signup--></div>
            </div>
        </div>

    
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




