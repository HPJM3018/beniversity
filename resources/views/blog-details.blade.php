@extends('layouts.app')

@section('content')

<section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Donations details</li>
                    </ul>
                    <h2>Donations details</h2>
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