@extends('layouts.app')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">News</li>
                </ul>
                <h2>Latest news</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    @if(session('success'))
        {{session('success')}}
    @endif

    <!--News Page Start-->
    
    <section class="news-page">
   
               
            <div class="row">
                <!--News One Single Start-->
                @foreach($blogs as $blog)
                <div class="col-3">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="{{asset('/storage/' .$blog->image)}}" alt="">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__content-inner">
                                <div class="news-one__content">
                                    <h3 class="news-one__title"><a href="{{route('blog.show',['id'=>$blog->id])}}"> {{Str::title($blog->titre)}}</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="{{route('blog.show',['id'=>$blog->id])}}"> <span class="icon-right-arrow"></span> 
                                            Voir plus </a>
                                    </div>
                                </div>
                                <div class="news-one__social-box">
                                    <ul class="list-unstyled news-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>{{$blog->created_at->format('d M Y')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach  
            </div>
             
        </div>
        
    </section>

@endsection