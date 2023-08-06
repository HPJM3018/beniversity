@extends('layouts.app')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><span>/</span></li>
                    <li class="active">Donations</li>
                </ul>
                <h2>Donations</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    
    <!--Donation Start-->
    <section class="donation">
        <div class="container">
            <div class="row">
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="assets/images/resources/causes-1-1.jpg" alt="">
                            <div class="causes-one__cat">
                                <p>Education</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="{{ route('donation-details') }}">Let’s education for
                                    children get good life</a>
                            </h3>
                            <p class="causes-one__text">There are many of lorem, but majori have
                                suffered alteration in some form.</p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape"
                                    style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Soulevé</p>
                                    <p><span>$30,000</span> Objectif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="assets/images/resources/causes-1-2.jpg" alt="">
                            <div class="causes-one__cat">
                                <p>Medical</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="{{ route('donation-details') }}">It is a long established
                                    fact that a reader</a>
                            </h3>
                            <p class="causes-one__text">There are many of lorem, but majori have
                                suffered alteration in some form.</p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape"
                                    style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Soulevé</p>
                                    <p><span>$30,000</span> Objectif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="assets/images/resources/causes-1-3.jpg" alt="">
                            <div class="causes-one__cat">
                                <p>Food</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="{{ route('donation-details') }}">There are many variations
                                    of passages</a>
                            </h3>
                            <p class="causes-one__text">There are many of lorem, but majori have
                                suffered alteration in some form.</p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape"
                                    style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Soulevé</p>
                                    <p><span>$30,000</span> Objectif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="assets/images/resources/causes-1-4.jpg" alt="">
                            <div class="causes-one__cat">
                                <p>Education</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="{{ route('donation-details') }}">Maecenas ut ligula ut nisi
                                    porta tempor ac</a>
                            </h3>
                            <p class="causes-one__text">There are many of lorem, but majori have
                                suffered alteration in some form.</p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape"
                                    style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Soulevé</p>
                                    <p><span>$30,000</span> Objectif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="assets/images/resources/causes-1-5.jpg" alt="">
                            <div class="causes-one__cat">
                                <p>Food</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="{{ route('donation-details') }}">Phasellus suscipit est
                                    vitae risus congue</a>
                            </h3>
                            <p class="causes-one__text">There are many of lorem, but majori have
                                suffered alteration in some form.</p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape"
                                    style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Soulevé</p>
                                    <p><span>$30,000</span> Objectif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <img src="assets/images/resources/causes-1-6.jpg" alt="">
                            <div class="causes-one__cat">
                                <p>Medical</p>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="{{ route('donation-details') }}">Sed malesuada nisl eget
                                    porta luctus</a>
                            </h3>
                            <p class="causes-one__text">There are many of lorem, but majori have
                                suffered alteration in some form.</p>
                            <div class="causes-one__progress">
                                <div class="causes-one__progress-shape"
                                    style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%">
                                        <div class="count-text">36%</div>
                                    </div>
                                </div>
                                <div class="causes-one__goals">
                                    <p><span>$25,270</span> Soulevé</p>
                                    <p><span>$30,000</span> Objectif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
            </div>
        </div>
    </section>
    <!--Donation End-->

@endsection
