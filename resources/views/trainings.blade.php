@extends('layouts.app')

@section('content')

@if(session('success'))
        {{session('success')}}
@endif
<!--Donations List Start-->
<section class="donations-list">
            <div class="container">
                <div class="donations-list__inner">
                    <!--Donations List Single Start-->
                    <div class="donations-list__single">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="donations-list__img">
                                    <img src="assets/images/resources/donations-list-img-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="donations-list__right">
                                    <div class="donations-list__content">
                                        <div class="donations-list__category">
                                            <p>Education</p>
                                        </div>
                                        <h3 class="donations-list__title"><a href="donation-details.html">Let’s
                                                education for children get good life</a></h3>
                                        <p class="donations-list__text">There are many of lorem, but majori have
                                            suffered alteration in some form. Et ligula ullamcorper malesuada proin
                                            libero nunc. Quis vel eros donec ac odio tempor. Cursus in hac habitasse
                                            platea.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Donations List Single End-->
@endsection