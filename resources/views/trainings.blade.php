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
                    @foreach($trainings as $training)
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
                                            <p>{{$training->created_at->format('d M Y')}}</p>
                                        </div>
                                        <h3 class="donations-list__title"><a href="donation-details.html">
                                        {{Str::title($training->titre)}}</a></h3>
                                        <p class="donations-list__text"> {{$training->description}}</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--Donations List Single End-->
@endsection