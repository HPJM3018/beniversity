@extends('layouts.app')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Accueil</a></li>
                    <li><span>/</span></li>
                    <li class="active">Détails des événements</li>
                </ul>
                <h2>Détails des événements</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Event Details Start-->
    <section class="event-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="event-details__left">
                        <div class="event-details__top">
                            <div class="event-details__date">
                                <p>{{ $event->date }}</p>
                            </div>
                            <h3 class="event-details__title">{{ $event->title }}</h3>
                            <p class="event-details__text-1">Neque porro est qui dolorem ipsum quia quaed inventore
                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus
                                quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry.</p>
                            <p class="event-details__text-2">Biophilia is the idea that humans possess an innate
                                tendency to seek connections with nature. The term translates</p>
                            <p class="event-details__text-3">When an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged.
                                Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus
                                eros.</p>
                        </div>
                        <div class="event-details__img-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="event-details__img-single">
                                        <img src="assets/images/events/event-details-img-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="event-details__img-single">
                                        <img src="assets/images/events/event-details-img-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-details__bottom">
                            <p class="event-details__text-4">Neque porro est qui dolorem ipsum quia quaed inventore
                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus
                                quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry.
                            </p>
                            <p class="event-details__text-5">Biophilia is the idea that humans possess an innate
                                tendency to seek connections with nature. The term translates</p>
                            <p class="event-details__text-6">When an unknown printer took a galley of type and
                                scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged.
                                Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus
                                eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="event-details__btn-box">
                                <a href="{{ route('contact') }}" class="thm-btn event-details__btn">INSCRIVEZ-VOUS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="event-details__right">
                        <div class="event-details__info">
                            <ul class="list-unstyled event-details__info-list">
                                <li>
                                    <span>Temps:</span>
                                    <p>{{ $event->time }} à 12h30 </p>
                                </li>
                                <li>
                                    <span>Date:</span>
                                    <p>{{ $event->date }}</p>
                                </li>
                                <li>
                                    <span>Categorie:</span>
                                    <p>Health, Medical</p>
                                </li>
                                <li>
                                    <span>Lieu:</span>
                                    <p>{{ $event->location }}</p>
                                </li>
                            </ul>
                            <div class="event-details__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="event-details__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                class="event-details-map__one" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Event Details End-->

@endsection