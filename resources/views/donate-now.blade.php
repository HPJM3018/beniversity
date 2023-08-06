@extends('layouts.app')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li class="active">Faire un don maintenant</li>
                </ul>
                <h2>Faire un don maintenant</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Donate Now Start-->
    <section class="donate-now">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="donate-now__left">
                        <div class="donate-now__enter-donation">
                            <h3 class="donate-now__title">Entrez votre don</h3>
                            <div class="donate-now__enter-donation-input">
                                <select class="selectpicker">
                                    <option>$</option>
                                    <option>₤</option>
                                    <option>¥</option>
                                </select>
                                <input type="text" name="donation-money" value=".00">
                            </div>
                        </div>
                        <div class="donate-now__personal-info-box">
                            <h3 class="donate-now__title">Informations personnelles</h3>
                            <form class="donate-now__personal-info-form">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input type="text" placeholder="Nom" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input type="text" placeholder="Prénoms" name="last-name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input type="email" placeholder="Adresse email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input type="text" placeholder="Numéro de téléphone" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <input type="text" placeholder="Adresse" name="Address">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__personal-info-input">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected>Pays</option>
                                                <option value="1">USA</option>
                                                <option value="2">England</option>
                                                <option value="3">Australia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div
                                            class="donate-now__personal-info-input donate-now__personal-info-message-box">
                                            <textarea name="message" placeholder="Écrire un message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="donate-now__payment-info">
                            <h3 class="donate-now__title">Information de paiement</h3>
                            <form class="donate-now__payment-info-form">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input type="text" placeholder="Numéro de carte" name="number">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input type="text" placeholder="MM / AA" name="date" id="datepicker">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input type="text" placeholder="Code de la carte ( CVC )" name="code">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input type="text" placeholder="Adresse de facturation" name="Billing">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <input type="text" placeholder="Ville" name="City">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="donate-now__payment-info-input">
                                            <select class="selectpicker" aria-label="Default select example">
                                                <option selected>Pays</option>
                                                <option value="1">USA</option>
                                                <option value="2">England</option>
                                                <option value="3">Australia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="donate-now__payment-info-btn-box">
                                    <button type="submit" class="thm-btn donate-now__payment-info-btn">FAIRE UN DON MAINTENANT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="donate-now__right">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <img src="assets/images/resources/causes-1-1.jpg" alt="">
                                <div class="causes-one__cat">
                                    <p>Education</p>
                                </div>
                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="donation-details.html">Let’s education for
                                        children get good
                                        life</a>
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
                        <div class="donation-details__organizer">
                            <div class="sidebar-shape-1"
                                style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                            <div class="donation-details__organizer-img">
                                <img src="assets/images/resources/donation-details-organizer-img.jpg" alt="">
                            </div>
                            <div class="donation-details__organizer-content">
                                <p class="donation-details__organizer-date">Created 20 april, 2022</p>
                                <p class="donation-details__organizer-title">Organizer:</p>
                                <p class="donation-details__organizer-name">Jessica smith</p>
                                <ul class="list-unstyled donation-details__organizer-list">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-tag"></span>
                                        </div>
                                        <div class="text">
                                            <p>Education</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-map-marker-alt"></span>
                                        </div>
                                        <div class="text">
                                            <p>Westwood, Canada</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donate Now End-->

@endsection