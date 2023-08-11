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
                    <li class="active">Détails département</li>
                </ul>
                <h2>Détails département</h2>
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
                            <img src="{{ url('images/departements/'.$departement->picture) }}" alt="">
                        </div>
                        <div class="news-details__content">
                            <ul class="list-unstyled news-details__meta">
                                <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                </li>
                                <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                        Comments</a>
                                </li>
                            </ul>
                            <h3 class="news-details__title">How does the malnutrition affect children?</h3>
                            <p class="news-details__text-1">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some form, by injected
                                humour, or randomised words which don't look even slightly believable. If you are
                                going to use a passage of Lorem Ipsum. Class aptent taciti sociosqu ad litora
                                torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin varius
                                mauris non dignissim. Sed quis iaculis est. Nulla quam neque, interdum vitae
                                fermentum lacinia, interdum eu magna. Mauris non posuere tellus. Donec quis euismod
                                tellus. Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id
                                magna hendrerit sagittis. Nullam sed mi non odio feugiat volutpat sit amet nec elit.
                                Maecenas id hendrerit ipsum. Sed eget auctor metus, ac dapibus dolor. Mauris gravida
                                lacus metus, ac sagittis tortor hendrerit sit amet. Aenean dictum eget nulla in
                                pharetra. Vestibulum vulputate vehicula mattis. Vivamus dictum nec dui porta rutrum.
                                Nam erat felis, mattis ac massa at, aliquet tincidunt eros.</p>
                            <p class="news-details__text-2">Nulla quam neque, interdum vitae fermentum lacinia,
                                interdum eu magna. Mauris non posuere tellus. Donec quis euismod tellus. Nam vel
                                lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit
                                sagittis. Nullam sed mi non odio feugiat volutpat sit amet nec elit. Maecenas id
                                hendrerit ipsum. Sed eget auctor metus, ac dapibus dolor. Mauris gravida lacus
                                metus, ac sagittis tortor hendrerit sit simply free text amet.</p>
                        </div>
                        <div class="news-details__bottom">
                            <p class="news-details__tags">
                                <span>Tags</span>
                                <a href="#">fundraising</a>
                                <a href="#">charity</a>
                            </p>
                            <div class="news-details__social-list">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="news-details__pagenation-box">
                            <ul class="list-unstyled news-details__pagenation">
                                <li>Why is it important to support them</li>
                                <li>Survived not only five centuries</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="Search here">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post">
                            <div class="sidebar-shape-1"
                                style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                            <h3 class="sidebar__title">Latest posts</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <span class="sidebar__post-content-meta"><i
                                                    class="fas fa-user-circle"></i> By admin</span>
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
                                                    class="fas fa-user-circle"></i> By admin</span>
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
                                                    class="fas fa-user-circle"></i> By admin</span>
                                            <a href="news-details.html">Bring to the table win-win survival</a>
                                        </h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__category">
                            <div class="sidebar-shape-1"
                                style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                            <h3 class="sidebar__title">Categories</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                <li><a href="news-details.html">Donations <span class="icon-right-arrow"></span></a>
                                </li>
                                <li class="active"><a href="news-details.html">Charity <span
                                            class="icon-right-arrow"></span></a></li>
                                <li><a href="news-details.html">Fundraising <span
                                            class="icon-right-arrow"></span></a>
                                </li>
                                <li><a href="news-details.html">Food & Water <span
                                            class="icon-right-arrow"></span></a></li>
                                <li><a href="news-details.html">Kids Education <span
                                            class="icon-right-arrow"></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__tags">
                            <div class="sidebar-shape-1"
                                style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                            <h3 class="sidebar__title">Mots clés</h3>
                            <div class="sidebar__tags-list">
                                <a href="#">fundraising</a>
                                <a href="#">charity</a>
                                <a href="#">donation</a>
                                <a href="#">water</a>
                                <a href="#">kids</a>
                                <a href="#">Education</a>
                            </div>
                        </div>
                        <div class="sidebar__single sidebar__comments">
                            <div class="sidebar-shape-1"
                                style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
                            <h3 class="sidebar__title">Commentaires</h3>
                            <ul class="sidebar__comments-list list-unstyled">
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>John Doe on Template:</p>
                                        <h5>Comments</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>A Wordpress Commenter <br> on Launch New Mobile App</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar__comments-icon">
                                        <i class="fas fa-comment"></i>
                                    </div>
                                    <div class="sidebar__comments-text-box">
                                        <p>John Doe on Template:</p>
                                        <h5>Comments</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News details End-->

@endsection