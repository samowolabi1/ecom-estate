@extends('layouts.master')

@section('content')

<!-- Do search here -->



<div class="news-wrapper home-news block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-align-center pt-5">

                <h3 class="main-title">News</h3>
                <p class="short-desc">
                    Discover our latest News
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
                            <img style="width: 350px; height: 230px;" src="/storage/banners/{{$post->image}}" class="attachment-post-thumb size-post-thumb wp-post-image" alt="build your own blockchain">                           <div class="hover">
                                <i class="fa fa-link"></i>
                            </div>
                        </a>
                        <div class="post-info">
                            <p class="category">
                                {{$post->category->name}}
                            </p>
                            <h3 class="title">
                                <a href="{{route('blog.show',$post->id)}}">
                                   {{$post->title}}                             
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




