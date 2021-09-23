@extends('layouts.master')

@section('content')

<!-- Do search here -->



<div class="news-wrapper home-news block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-align-center pt-5">

                <h3 class="main-title">Publications</h3>
                <p class="short-desc">
                    Discover our latest Publications
                </p>
            </div>

            <!--  <div class="col-md-12 text-align-center">
                 <p>
                    <div class="form-group text-align-center has-feedback">
                    <input type="text" name="post" class="form-control" placeholder="Search Posts">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span></div>
                </p>
            </div> -->


            @foreach($blogs as $post)

     <div class="col-lg-4 col-md-6 item">
                    <div class="post-wrapper">
                        <a href="{{route('blog.show',$post->id)}}" class="image">
                            <img style="width: 350px; height: 230px;" src="./banners/{{$post->image}}" class="attachment-post-thumb size-post-thumb wp-post-image" alt="build your own blockchain">                           <div class="hover">
                                <i class="fa fa-link"></i>
                            </div>
                        </a>
                        <div class="post-info">
                            <p class="category">
                                {{$post->category->name}}
                            </p>
                            <h3 class="title">
                                <a href="{{route('blog.show',$post->id)}}">
                                   {{$post->category_title}}  khgkjgj                            
                                </a>
                            </h3>
                        </div>
                        <div class="post-footer">
                            <ul>
                                <li>
                                    <i class="fa fa-calendar"></i> {{$post->created_at->diffForHumans()}}</li>
                            </ul>
                        </div>
                    </div>
                </div>

@endforeach
    
                    </div>
    </div>
</div>


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




