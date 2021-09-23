@extends('layouts.master')

@section('content')
<!--  -->

 <div style="background-color: #15466B;" class="home-banner">
    <div id="particles-js" class="particles"><canvas class="particles-js-canvas-el" width="1349" height="700" style="width: 100%; height: 100%;"></canvas></div>
    <div class="container">
        <div class="col-md-12">
            <h1 class="title">Crypto Law Africa</h1>
            <h2 class="subtitle">
               <i> ...navigating the legals of cryptocurrency, blockchain and fintech in Africa</i>             </h2>
                                  
        </div>
    </div>
</div>


<!--  -->
<div class="news-wrapper home-news block">
    <div class="container">
        <div class="row">
           

            @foreach($posts as $post)

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

<div class="about-short block">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 order-md-12 text-wrapper">
                <h3 class="main-title">
                    Get to Know Us</h3>
                <p class="short-desc">
                    A little about us</p>
                <div class="text">
                    <p>
                        <strong>Crypto Law Africa</strong> provides premium legal insights that help to navigate the legal complexities emerging from cryptocurrency, blockchain and fintech ecosystem in Africa. </p>
                        <a href="{{route('about')}}" class="button blue">More</a>
                                    </div>
            </div>
            <div class="col-md-4 image">
                <img width="646" height="984" src="./img/about2.png" class="attachment-full size-full" alt="">            </div>
        </div>
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




