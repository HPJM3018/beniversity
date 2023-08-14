@extends('layouts.app')

@section('content')

<section class="page-header">
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

        <!--Donation Details Start-->
        <section class="donation-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="donation-details__left">
                            <div class="donation-details__top">
                                <div class="donation-details__img">
                                    <img src="{{'/storage/' .$blog->image}}" alt="">
                                   
                                </div>
                                <div class="donation-details__content">
                                    <h3 class="donation-details__title">{{Str::title($blog->titre)}}</h3>
                                    <p class="donation-details__text">{{$blog->description}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection