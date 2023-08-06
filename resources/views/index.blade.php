@extends('layouts.app')

@section('content')

    <!--Main Slider Start-->
    <section class="main-slider clearfix">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 5000
            }}'>
            <div class="swiper-wrapper">
    
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url(assets/images/backgrounds/main-slider-1-1.png);"></div>
                    <!-- /.image-layer -->
    
                    <div class="main-slider-shape-1"
                        style="background-image: url(assets/images/shapes/main-slider-shape-1.jpg);"></div>
                    <div class="main-slider-shape-2 float-bob-x">
                        <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                    </div>
    
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Beniversity : Excellence éducative, succès professionnel.</p>
                                    <h2 class="main-slider__title" style="font-size: 40px">Bienvenu sur la plateforme de l'ONG BENIVERSITY</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="about.html" class="thm-btn main-slider__btn"> Découvrir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url(assets/images/backgrounds/main-slider-1-2.png);"></div>
                    <!-- /.image-layer -->
    
                    <div class="main-slider-shape-1"
                        style="background-image: url(assets/images/shapes/main-slider-shape-1.jpg);"></div>
                    <div class="main-slider-shape-2 float-bob-x">
                        <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                    </div>
    
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8">
                                <div class="main-slider__content">
                                      <p class="main-slider__sub-title">Beniversity : Excellence éducative, succès professionnel.</p>
                                    <h2 class="main-slider__title" style="font-size: 40px">Bienvenu sur la plateforme de l'ONG BENIVERSITY</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="about.html" class="thm-btn main-slider__btn"> Découvrir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url(assets/images/backgrounds/main-slider-1-3.png);"></div>
                    <!-- /.image-layer -->
    
                    <div class="main-slider-shape-1"
                        style="background-image: url(assets/images/shapes/main-slider-shape-1.jpg);"></div>
                    <div class="main-slider-shape-2 float-bob-x">
                        <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                    </div>
    
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Beniversity : Excellence éducative, succès professionnel.</p>
                                    <h2 class="main-slider__title" style="font-size: 40px">Bienvenu sur la plateforme de l'ONG BENIVERSITY</h2>
                                    <div class="main-slider__btn-box">
                                        <a href="about.html" class="thm-btn main-slider__btn"> Découvrir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>
    
        </div>
    </section>
    <!--Main Slider End-->
    
    <!--About One Start-->
    <section class="about-one">
        <div class="about-one__shape-box-1">
            <div class="about-one__shape-1"
                style="background-image: url(assets/images/shapes/about-one-shape-1.png);"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                            </div>
                            <div class="about-one__img-border"></div>
                            <div class="about-one__curved-circle-box">
                                <div class="curved-circle">
                                    <span class="curved-circle--item">
                                        25 ANNEES D'EXPERIENCE BENIVERSITY
                                    </span>
                                </div><!-- /.curved-circle -->
                                <div class="about-one__curved-circle-icon">
                                    <img src="assets/images/logo.png" alt=""  style="max-height: 120px;max-width: 120px">
                                </div>
                            </div>
                            <div class="about-one__shape-2 zoom-fade">
                                <img src="assets/images/shapes/about-one-shape-2.png" alt="">
                            </div>
                            <div class="about-one__shape-3 float-bob-y">
                                <img src="assets/images/shapes/about-one-shape-3.png" alt="">
                            </div>
                            <div class="about-one__shape-4 zoominout">
                                <img src="assets/images/shapes/about-one-shape-4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Bienvenu à Beniversity</span>
                            <h2 class="section-title__title">S'entraider peut rendre le monde meilleur</h2>
                        </div>
                        <p class="about-one__text" style="text-transform: lowercase;"><span style="text-transform: uppercase;">F</span>AIRE DU BENIN UN PAYS DE REFERENCE EN TERMES D’ORIENTATION ACADEMIQUE ET PROFESSIONNNEL ET EN TERMES D’ACCOMPAGNEMENT A L’EMPLOI, L’ENTREPRENEURIAT, L’INNOVATION ET LA CREATIVITE, FAISANT DE CHAQUE ENFANT ET DE CHAQUE JEUNE UN MODEL DE SUCCES VERITABLE ET DE VIE EPANOUIE.</p>
                        <div class="about-one__fund">
                            <p class="about-one__fund-text">Helped fund <span>24,537</span> Projects in
                                <span>24</span> Countries, Benefiting over <br> <span>8.2</span> Million people.</p>
                        </div>
                        <ul class="list-unstyled about-one__points">
                            <li>
                                <div class="icon">
                                    <span class="icon-volunteer"></span>
                                </div>
                                <div class="text">
                                    <h5><a href="become-volunteer.html">Mission</a></h5>
                                    <p >Bénin : Excellence en orientation académique, professionnelle et accompagnement référence.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-solidarity"></span>
                                </div>
                                <div class="text">
                                    <h5><a href="donate-now.html">Vision</a></h5>
                                    <p>Épanouissement, talents, orientation : guider enfants vers réussite académique optimale.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="about.html" class="thm-btn about-one__btn">Découvrir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->
    
    
    <!--Causes One End-->
    
    <!--Become Volunteer One Start-->
    <section class="become-volunteer-one">
        <div class="become-volunteer-one__bg-box">
            <div class="become-volunteer-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(assets/images/backgrounds/become-volunteer-one-bg.jpg);"></div>
        </div>
        <div class="become-volunteer-one__shape-1"
            style="background-image: url(assets/images/shapes/become-volunteer-shape-1.png);"></div>
        <div class="container">
            <div class="become-volunteer-one__inner">
                <p class="become-volunteer-one__sub-title">Devenez bénévole</p>
                <h3 class="become-volunteer-one__title">Joignez vos mains avec nous pour une vie et un avenir meilleurs.
                </h3>
                <div class="become-volunteer-one__btn-box">
                    <a href="become-volunteer.html" class="thm-btn become-volunteer-one__btn">Découvrir plus</a>
                </div>
            </div>
        </div>
    </section>
    <!--Become Volunteer One End-->
    
    <!--Events One Start-->
    <section class="events-one">
        <div class="events-one-shape-1" style="background-image: url(assets/images/shapes/events-one-shape-1.png)">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="events-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Evènement à venir</span>
                            <h2 class="section-title__title">Réjoignez nos évènements</h2>
                        </div>
                    
                        <a href="event-details.html" class="thm-btn events-one__btn">Découvrez plus</a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="events-one__right">
                        <div class="events-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 20,
                            "nav": true,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 2
                                },
                                "992": {
                                    "items": 2
                                },
                                "1200": {
                                    "items": 3
                                }
                            }
                        }'>
                            <div class="item">
                                <!--Events One Single Start-->
                               <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="assets/images/events/event.jpeg" alt="">
                                        <div class="events-one__date">
                                            <p>10 Juillet, 2023</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>9:00</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Calavi</li>
                                            </ul>
                                            </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                 <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="assets/images/events/event.jpeg" alt="">
                                        <div class="events-one__date">
                                            <p>10 Juillet, 2023</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>9:00</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Calavi</li>
                                            </ul>
                                            </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                  <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="assets/images/events/event.jpeg" alt="">
                                        <div class="events-one__date">
                                            <p>10 Juillet, 2023</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>9:00</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Calavi</li>
                                            </ul>
                                            </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                 <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="assets/images/events/event.jpeg" alt="">
                                        <div class="events-one__date">
                                            <p>10 Juillet, 2023</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>9:00</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Calavi</li>
                                            </ul>
                                            </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                 <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="assets/images/events/event.jpeg" alt="">
                                        <div class="events-one__date">
                                            <p>10 Juillet, 2023</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>9:00</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Calavi</li>
                                            </ul>
                                            </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                            <div class="item">
                                <!--Events One Single Start-->
                                 <div class="events-one__single">
                                    <div class="events-one__img">
                                        <img src="assets/images/events/event.jpeg" alt="">
                                        <div class="events-one__date">
                                            <p>10 Juillet, 2023</p>
                                        </div>
                                        <div class="events-one__content">
                                            <ul class="list-unstyled events-one__meta">
                                                <li><i class="fas fa-clock"></i>9:00</li>
                                                <li><i class="fas fa-map-marker-alt"></i>Calavi</li>
                                            </ul>
                                            </div>
                                    </div>
                                </div>
                                <!--Events One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Events One End-->
    
    
    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "767": {
                            "spaceBetween": 50,
                            "slidesPerView": 4
                        },
                        "991": {
                            "spaceBetween": 50,
                            "slidesPerView": 5
                        },
                        "1199": {
                            "spaceBetween": 100,
                            "slidesPerView": 6
                        }
                    }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-6.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="assets/images/brand/brand-1-6.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->
    
    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/backgrounds/testimonial-one-bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="testimonial-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Our Testimonials</span>
                            <h2 class="section-title__title">What they are talking about oxpins</h2>
                        </div>
                        <p class="testimonial-one__text-1">Nulla ultricies justo sit amet ante efficitur, eget
                            pharetra augue efficitur. Vestibulum viverra, dolor sit amet ultricies ornare, elit
                            justo pretium tellus.</p>
                        <a href="#" class="thm-btn testimonial-one__btn">all testimonials</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="testimonial-one__right">
                        <div class="testimonial-one__img-1 zoom-fade">
                            <img src="assets/images/testimonial/testimonial-img-1.jpg" alt="">
                        </div>
                        <div class="testimonial-one__img-1 testimonial-one__img-2 zoom-fade">
                            <img src="assets/images/testimonial/testimonial-img-2.jpg" alt="">
                        </div>
                        <div class="testimonial-one__img-1 testimonial-one__img-3 zoom-fade">
                            <img src="assets/images/testimonial/testimonial-img-3.jpg" alt="">
                        </div>
                        <div class="testimonial-one__img-1 testimonial-one__img-4 zoom-fade">
                            <img src="assets/images/testimonial/testimonial-img-4.jpg" alt="">
                        </div>
                        <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                            data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 50,
                            "nav": true,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 1
                                },
                                "992": {
                                    "items": 1
                                },
                                "1200": {
                                    "items": 1
                                }
                            }
                        }'>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Kevin martin</h3>
                                        <p class="testimonial-one__client-sub-title">Volunteer</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Nulla ultricies justo sit amet ante
                                        efficitur, eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet
                                        ultricies simply free text ornare, elit justo pretium tellus.</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Jessica brown</h3>
                                        <p class="testimonial-one__client-sub-title">Volunteer</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Nulla ultricies justo sit amet ante
                                        efficitur, eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet
                                        ultricies simply free text ornare, elit justo pretium tellus.</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Mike hardson</h3>
                                        <p class="testimonial-one__client-sub-title">Volunteer</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Nulla ultricies justo sit amet ante
                                        efficitur, eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet
                                        ultricies simply free text ornare, elit justo pretium tellus.</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Kevin martin</h3>
                                        <p class="testimonial-one__client-sub-title">Volunteer</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Nulla ultricies justo sit amet ante
                                        efficitur, eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet
                                        ultricies simply free text ornare, elit justo pretium tellus.</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Jessica brown</h3>
                                        <p class="testimonial-one__client-sub-title">Volunteer</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Nulla ultricies justo sit amet ante
                                        efficitur, eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet
                                        ultricies simply free text ornare, elit justo pretium tellus.</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                            <div class="item">
                                <!--Testimonial One Single Start-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__shape-1"
                                        style="background-image: url(assets/images/shapes/testimonial-one-shape-1.png);">
                                    </div>
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3 class="testimonial-one__client-name">Mike hardson</h3>
                                        <p class="testimonial-one__client-sub-title">Volunteer</p>
                                    </div>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-double-quotes"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Nulla ultricies justo sit amet ante
                                        efficitur, eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet
                                        ultricies simply free text ornare, elit justo pretium tellus.</p>
                                </div>
                                <!--Testimonial One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->
    
    <!--Gallery One Start-->
    <section class="gallery-one">
        <div class="gallery-one__top">
            <h3 class="gallery-one__top-title">Our photo gallery</h3>
        </div>
        <div class="gallery-one__bottom">
            <div class="gallery-one__container">
                <ul class="list-unstyled gallery-one__list">
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-1.jpg" alt="">
                            <a href="assets/images/gallery/gallery-1-1.jpg" class="img-popup"></a>
                            <div class="gallery-one__content">
                                <!-- /.img-popup -->
                                <p class="gallery-one__sub-title">Charity</p>
                                <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-2.jpg" alt="">
                            <a href="assets/images/gallery/gallery-1-2.jpg" class="img-popup"></a>
                            <div class="gallery-one__content">
                                <!-- /.img-popup -->
                                <p class="gallery-one__sub-title">Charity</p>
                                <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-3.jpg" alt="">
                            <a href="assets/images/gallery/gallery-1-3.jpg" class="img-popup"></a>
                            <div class="gallery-one__content">
                                <!-- /.img-popup -->
                                <p class="gallery-one__sub-title">Charity</p>
                                <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="400ms">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-4.jpg" alt="">
                            <a href="assets/images/gallery/gallery-1-4.jpg" class="img-popup"></a>
                            <div class="gallery-one__content">
                                <!-- /.img-popup -->
                                <p class="gallery-one__sub-title">Charity</p>
                                <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                            </div>
                        </div>
                    </li>
                    <li class="gallery-one__single wow fadeInUp" data-wow-delay="500ms">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-5.jpg" alt="">
                            <a href="assets/images/gallery/gallery-1-5.jpg" class="img-popup"></a>
                            <div class="gallery-one__content">
                                <!-- /.img-popup -->
                                <p class="gallery-one__sub-title">Charity</p>
                                <h5 class="gallery-one__title"><a href="gallery.html">Education</a></h5>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Gallery One End-->
    
    <!--Counter One Start-->
    <section class="counter-one">
        <div class="container">
            <div class="counter-one__inner">
                <div class="counter-one-bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(assets/images/backgrounds/counter-one-bg.jpg);"></div>
                <ul class="list-unstyled counter-one__list">
                    <li class="counter-one__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="70">00</h3>
                            <span class="counter-one__letter">m</span>
                        </div>
                        <p class="counter-one__text">Total donation</p>
                    </li>
                    <li class="counter-one__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="48">00</h3>
                            <span class="counter-one__letter">k</span>
                        </div>
                        <p class="counter-one__text">Projects funded</p>
                    </li>
                    <li class="counter-one__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="38">00</h3>
                            <span class="counter-one__letter">%</span>
                        </div>
                        <p class="counter-one__text">Kids need help</p>
                    </li>
                    <li class="counter-one__single">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" data-count="230">00</h3>
                            <span class="counter-one__letter"></span>
                        </div>
                        <p class="counter-one__text">Our volunteers</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Counter One End-->
    
    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Blog</span>
                <h2 class="section-title__title">Directement à partir des <br>
    dernières nouvelles et articles
                </h2>
            </div>
            <div class="row">
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-1-1.jpg" alt="">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__content-inner">
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="news-details.html">How does the
                                            malnutrition
                                            affect children?</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="news-details.html"> <span class="icon-right-arrow"></span> Read
                                            More</a>
                                    </div>
                                    <div class="news-one__share">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                                <div class="news-one__social-box">
                                    <ul class="list-unstyled news-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>23 May, 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-1-2.jpg" alt="">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__content-inner">
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="news-details.html">Lorem Ipsum has been the
                                            industry's standard</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="news-details.html"> <span class="icon-right-arrow"></span> Read
                                            More</a>
                                    </div>
                                    <div class="news-one__share">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                                <div class="news-one__social-box">
                                    <ul class="list-unstyled news-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>23 May, 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assets/images/blog/news-1-3.jpg" alt="">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__content-inner">
                                <div class="news-one__content">
                                    <ul class="list-unstyled news-one__meta">
                                        <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><a href="news-details.html"><i class="fas fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="news-one__title"><a href="news-details.html">There are many
                                            variations of passages of Lorem</a></h3>
                                </div>
                                <div class="news-one__bottom">
                                    <div class="news-one__read-more">
                                        <a href="news-details.html"> <span class="icon-right-arrow"></span> Read
                                            More</a>
                                    </div>
                                    <div class="news-one__share">
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                </div>
                                <div class="news-one__social-box">
                                    <ul class="list-unstyled news-one__social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-one__date">
                                <p>23 May, 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
            </div>
        </div>
    </section>
    <!--News One End-->

@endsection