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
                    <li class="active">Détails des dons</li>
                </ul>
                <h2>Détails des dons</h2>
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
                                <img src="assets/images/resources/donation-details-img-1.jpg" alt="">
                                <div class="donation-details__date">
                                    <p>Medical</p>
                                </div>
                            </div>
                            <div class="donation-details__content">
                                <h3 class="donation-details__title">Let’s education for children get good life</h3>
                                <p class="donation-details__text">Lorem ipsum dolor sit amet, cibo mundi ea duo, vim
                                    exerci phaedrum. There are many variations of passages of Lorem Ipsum available,
                                    but the majority have alteration in some injected or words which don't look even
                                    slightly believable. If you are going to use a passage of Lorem Ipsum, you need
                                    to be sure there isn't anything embarrang hidden in the middle of text. All the
                                    Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                    necessary, making this the first true generator on the Internet. It uses a
                                    dictionary of over 200 Latin words, combined with a handful of model sentence
                                    structures, to generate Lorem Ipsum which looks reasonable. </p>
                            </div>
                        </div>
                        <div class="donation-details__donate">
                            <div class="donation-details__donate-shape"
                                style="background-image: url(assets/images/shapes/donation-details-donate-shape.png);">
                            </div>
                            <div class="donation-details__donate-left">
                                <ul class="list-unstyled donation-details__donate-list">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-solidarity"></span>
                                        </div>
                                        <div class="text">
                                            <span>Soulevé</span>
                                            <p>$25,270</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-target-1"></span>
                                        </div>
                                        <div class="text">
                                            <span>Objectif</span>
                                            <p>$30,000</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="donation-details__donate-btn">
                                <a href="{{ route('donate-now') }}" class="thm-btn">Faire un don maintenant</a>
                            </div>
                        </div>
                        <div class="donation-details__summary">
                            <h3 class="donation-details__summary-title">Résumé</h3>
                            <p class="donation-details__summary-text-1">Lorem Ipsum has been the industry's standard
                                dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type simen book.</p>
                            <ul class="list-unstyled donation-details__summary-list">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Nsectetur cing do not elit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Suspe ndisse suscipit sagittis in leo.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Entum estibulum dignissim lipsm posuere.</p>
                                    </div>
                                </li>
                            </ul>
                            <p class="donation-details__summary-text-2">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. orem Ipsum has been the industry's standard dummy
                                text ever since the when an unknown printer took a galley of type and scrambled it
                                to make a type specimen book.</p>
                        </div>
                        <div class="donation-details__recent-donation">
                            <h3 class="donation-details__recent-donation-title">Donateurs récents</h3>
                            <div class="list-unstyled donation-details__recent-donation-inner">
                                <div class="donation-details__recent-donation-shape"
                                    style="background-image: url(assets/images/shapes/recent-donation-shape-1.png);">
                                </div>
                                <ul class="list-unstyled donation-details__recent-donation-list">
                                    <li>
                                        <div class="donation-details__recent-donation-img">
                                            <img src="assets/images/resources/recent-donation-img-1.jpg" alt="">
                                        </div>
                                        <div class="donation-details__recent-donation-content">
                                            <p>Kevin martin</p>
                                            <span>$25</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="donation-details__recent-donation-img">
                                            <img src="assets/images/resources/recent-donation-img-2.jpg" alt="">
                                        </div>
                                        <div class="donation-details__recent-donation-content">
                                            <p>Jessica brown</p>
                                            <span>$30</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="donation-details__recent-donation-img">
                                            <img src="assets/images/resources/recent-donation-img-3.jpg" alt="">
                                        </div>
                                        <div class="donation-details__recent-donation-content">
                                            <p>Mike hardson</p>
                                            <span>$100</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="donation-details__recent-donation-img">
                                            <img src="assets/images/resources/recent-donation-img-4.jpg" alt="">
                                        </div>
                                        <div class="donation-details__recent-donation-content">
                                            <p>Christine eve</p>
                                            <span>$250</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="donation-details__recent-donation-img">
                                            <img src="assets/images/resources/recent-donation-img-5.jpg" alt="">
                                        </div>
                                        <div class="donation-details__recent-donation-content">
                                            <p>David cooper</p>
                                            <span>$60</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment-one">
                            <h3 class="comment-one__title">2 commentaires</h3>
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-1-1.jpg" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <h3>Kevin martin</h3>
                                    <p>It has survived not only five centuries, but also the leap into electronic
                                        typesetting unchanged. It was popularised in the sheets containing lorem
                                        ipsum is simply free text.</p>
                                    <a href="news-details.html" class="thm-btn comment-one__btn">Répondre</a>
                                </div>
                            </div>
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-1-2.jpg" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <h3>Sarah albert</h3>
                                    <p>It has survived not only five centuries, but also the leap into electronic
                                        typesetting unchanged. It was popularised in the sheets containing lorem
                                        ipsum is simply free text.</p>
                                    <a href="news-details.html" class="thm-btn comment-one__btn">Répondre</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-form">
                            <h3 class="comment-form__title">Laissez un commentaire</h3>
                            <form action="https://layerdrops.com/oxpinshtml/main-html/assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Votre nom" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Adresse e-mail" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Ecrire un message"></textarea>
                                        </div>
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn">Envoyer un commentaire</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="donation-details__sidebar">
                        <div class="donation-details__organizer">
                            <div class="sidebar-shape-1"
                                style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                            <div class="donation-details__organizer-img">
                                <img src="assets/images/resources/donation-details-organizer-img.jpg" alt="">
                            </div>
                            <div class="donation-details__organizer-content">
                                <p class="donation-details__organizer-date">Créé le 20 avril 2022</p>
                                <p class="donation-details__organizer-title">Organisateur:</p>
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
                        <div class="sidebar__post">
                            <div class="sidebar-shape-1"
                                style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                            <h3 class="sidebar__title">Derniers messages</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-user-circle"></i> Par l'administrateur</span>
                                            <a href="news-details.html">Promoting the rights
                                                of children</a>
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-user-circle"></i> Par l'administrateur</span>
                                            <a href="news-details.html">There are many variations of</a>
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/lp-1-3.jpg" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-user-circle"></i> Par l'administrateur</span>
                                            <a href="news-details.html">Bring to the table win-win survival</a>
                                        </h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="donation-details__sidebar-shaare-cause">
                            <div class="sidebar-shape-1"
                                style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                            <h3 class="donation-details__sidebar-shaare-cause-title">Partager</h3>
                            <div class="donation-details__sidebar-shaare-cause-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donation Details End-->

@endsection