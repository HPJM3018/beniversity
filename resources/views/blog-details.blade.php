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
                    <li class="active">News details</li>
                </ul>
                <h2>News details</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News details Start-->
    <section class="news-details">
        <div class="container">

            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="{{asset('/storage/' .$blog->image)}}" alt="">
                        </div>
                        <div class="news-details__content">
                            <h3 class="news-details__title">{{Str::title($blog->titre)}}</h3>
                            <p class="news-details__text-1"> {{$blog->description}}</p> <br> <br>
                        </div>
                        
                    </div>
            </div>
        </div>
    </section>
    <!--News details End-->

@endsection