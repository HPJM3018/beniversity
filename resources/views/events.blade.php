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
                    <li class="active">Événements</li>
                </ul>
                <h2>Événements</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    
    <!--Events Page Start-->
    <section class="events-page">
        <div class="container">
            <div class="row">
                @foreach($events as $event)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Events One Single Start-->
                    <div class="events-one__single">
                        <div class="events-one__img">
                            <img src="{{ url('storage/'.$event->image) }}" alt="" width="370" height="470">
                            <div class="events-one__date">
                                <p>{{ $event->date }}</p>
                            </div>
                            <div class="events-one__content">
                                <ul class="list-unstyled events-one__meta">
                                    <li><i class="fas fa-clock"></i>{{ $event->start_time }}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $event->location }}</li>
                                </ul>
                                <h3 class="events-one__title">
                                    <a href="{{ route('event-details', $event) }}">{{ $event->name }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--Events One Single End-->
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Events Page End-->

@endsection

