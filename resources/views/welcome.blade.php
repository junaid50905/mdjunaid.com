@extends('layouts.master')

@section('title')
    Junaid Hossain | Software Developer
@endsection



@section('main-panel')
    <main class="main main--home" style="opacity:0">
        <canvas class="noise" id="noise"></canvas>

        <div class="header">
            <div class="header__left">
                <div class="header__letter">J</div>
                <div class="header__socials">
                    <a href="https://www.facebook.com/junaid.hossain.arman" target="_blank">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/junaid-hossain-arman/" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/junaid50905" target="_blank">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="javascript:;" onclick="window.open('mailto:junaidhossain0905@gmail.com')" target="_blank">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>
            </div>
            <div class="header__right">
                <ul class="header__menu">
                    <li class="active"><a class="js-scroll-link" href="javascript:;" data-link="0">HOME</a></li>
                    <li><a class="js-scroll-link" href="javascript:;" data-link="1">Projects</a></li>
                    <li><a class="js-scroll-link" href="javascript:;" data-link="2">Education</a></li>
                    <li><a class="js-scroll-link" href="javascript:;" data-link="3">testimonials</a></li>
                    <li><a class="js-scroll-link" href="javascript:;" data-link="4">experience</a></li>
                    <li><a class="js-scroll-link" href="javascript:;" data-link="5">blog</a></li>
                    <li><a class="js-scroll-link" href="javascript:;" data-link="6">CONTACT</a></li>
                </ul>
                <div class="header__phone">
                    <a href="tel:+8801621059282">+8801621059282</a>
                </div>
            </div>
        </div>



        <div class="scroll">
            <div class="home-page">
                <div class="page-title show">
                    <ul>
                        <li>
                            <div class="title">Home</div>
                            <div class="number">1.0</div>
                        </li>
                        <li>
                            <div class="title">Portfolio</div>
                            <div class="number">2.0</div>
                        </li>
                        <li>
                            <div class="title">My Education Journey</div>
                            <div class="number">3.0</div>
                        </li>
                        <li>
                            <div class="title">testimonials</div>
                            <div class="number">4.0</div>
                        </li>
                        <li>
                            <div class="title">working experience</div>
                            <div class="number">5.0</div>
                        </li>
                        <li>
                            <div class="title">from the blog</div>
                            <div class="number">5.0</div>
                        </li>
                        <li>
                            <div class="title">contact</div>
                            <div class="number">6.0</div>
                        </li>
                    </ul>
                    <canvas class="noise noise--inner" id="noise_menu"></canvas>
                </div>
                <div class="scrollable">
                    <section class="home">
                        <div class="sticky-title">
                            <ul>
                                <li>
                                    <div>home</div>
                                    <div>1.0</div>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <div class="content__left">
                                <div class="content__title">
                                    <div class="h1" style="text-transform:capitalize;">Hello,</div>
                                    <div class="h1">I'M Junaid Hossain
                                    </div>
                                    <div class="h2" style="color: #d47251;">Software Developer</div>
                                </div>
                                <div class="content__description">
                                    <div class="small">My name is Junaid Hossain, and I am currently employed as a
                                        Software Developer at
                                        <a href="https://aamrainfotainment.com/" target="_blank">Aamra Infotainment
                                            Ltd</a>. My work primarily involves utilizing Laravel and React
                                        technologies.
                                    </div>
                                </div>
                                <div class="content__btn-block">
                                    <div class="content__btn-label small">(hire me :)</div>
                                    <a class="content__btn-btn btn btn--arrow js-scroll-link" href="#hireme" data-link="6">
                                        <svg>
                                            <use xlink:href="{{ asset('frontend') }}/svg/sprite.svg#arrow"></use>
                                        </svg>
                                    </a>
                                </div>
                                <div class="home__numbers">
                                    <div class="home__number">
                                        <div class="home__number-digital" data-number="2">2</div>
                                        <div class="home__number-text small">Years <br>experience</div>
                                    </div>
                                    <div class="home__number">
                                        <div class="home__number-digital" data-number="5">5</div>
                                        <div class="home__number-text small">Themeforest <br>awwards</div>
                                    </div>
                                    <div class="home__number">
                                        <div class="home__number-digital" data-number="13">13</div>
                                        <div class="home__number-text small">Projects <br>Done</div>
                                    </div>
                                </div>
                            </div>
                            <div class="content__right">
                                <div class="home__circles">
                                    <div class="home__circles-lines"></div>
                                    <div class="home__circle home__circle--left"><img class="home__circle-img"
                                            src="{{ asset('frontend') }}/img/picture-one.png" alt=""></div>
                                    <div class="home__circle home__circle--right">
                                        <div class="home__circle-text">
                                            <img class="home__circle-img"
                                                src="{{ asset('frontend') }}/img/picture-two.png" alt="">
                                            <!-- <label class="input-file" for="brief"><span>Fill out the <br>brief to find
                                                                out <br>the cost</span></label> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="scrollable">
                    <section class="projects">
                        <div class="sticky-title">
                            <ul>
                                <li>
                                    <div>Portfolio</div>
                                    <div>2.0</div>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <div class="content__left">
                                <div class="content__title">
                                    <div class="h1">projects</div>
                                </div>
                                <ul class="content__menu projects__menu">
                                    <li class="active">
                                        <a href="javascript:;">BAFFAsoft</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Nextserve</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Service Management Software</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Inventory Management Software - Baffa</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Decoremaker</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">TaskFlow</a>
                                    </li>
                                </ul>
                                <div class="content__btn-block">
                                    <div class="content__btn-label small">View all works</div>
                                    <a class="content__btn-btn btn btn--arrow" href="https://www.behance.net/"
                                        target="_blank" rel="nofollow">
                                        <svg>
                                            <use xlink:href="{{ asset('frontend') }}/svg/sprite.svg#arrow"></use>
                                        </svg></a>
                                </div>
                            </div>
                            <div class="content__right">
                                <div class="projects__blocks">
                                    <div class="projects__block active">
                                        <a href="#" target="_blank" rel="nofollow"><img
                                                src="{{ asset('frontend') }}/images/baffa1.png" alt=""></a>
                                    </div>
                                    <div class="projects__block active">
                                        <a href="#" target="_blank" rel="nofollow">
                                            <video autoplay loop muted playsinline>
                                                <source src="{{ asset('frontend') }}/images/nextserve.mp4"
                                                    type="video/mp4" />
                                            </video>
                                        </a>
                                    </div>
                                    <div class="projects__block active">
                                        <a href="#" target="_blank" rel="nofollow"><img
                                                src="{{ asset('frontend') }}/img/project-3.jpg" alt=""></a>
                                    </div>
                                    <div class="projects__block active">
                                        <a href="#" target="_blank" rel="nofollow"><img
                                                src="{{ asset('frontend') }}/img/project-4.jpg" alt=""></a>
                                    </div>
                                    <div class="projects__block active">
                                        <a href="#" target="_blank" rel="nofollow"><img
                                                src="{{ asset('frontend') }}/img/project-5.jpg" alt=""></a>
                                    </div>
                                    <div class="projects__block active">
                                        <a href="#" target="_blank" rel="nofollow"><img
                                                src="{{ asset('frontend') }}/img/project-6.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="scrollable">
                    <section class="awards">
                        <div class="sticky-title">
                            <ul>
                                <li>
                                    <div>Education</div>
                                    <div>3.0</div>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <div class="content__left">
                                <div class="content__title">
                                    <div class="h1">Education</div>
                                    <div class="h1">Journey</div>
                                </div>
                                <div class="content__description">
                                    <div class="small">My education journey has been a blend of curiosity and
                                        dedication, shaping my passion for technology. From mastering foundational
                                        concepts to exploring advanced software development, each step has fueled my
                                        growth.
                                        This journey has empowered me to transform ideas into innovative solutions,
                                        preparing me for a dynamic career in tech.</div>
                                </div>
                                <div class="content__btn-block">
                                    <div class="content__btn-label small">View behance</div>
                                    <a class="content__btn-btn btn btn--arrow" href="#">
                                        <svg>
                                            <use xlink:href="{{ asset('frontend') }}/svg/sprite.svg#arrow"></use>
                                        </svg></a>
                                </div>
                            </div>
                            <div class="content__right">
                                <div class="content__subtitle">Educational <span>Institutes</span></div>
                                <div class="content__awards awards__list">
                                    <div class="content__award">
                                        <div class="content__award-img"><img
                                                src="{{ asset('frontend') }}/img/uu-logo-new.png" alt="">
                                        </div>
                                        <div class="content__award-title">
                                            <p>Uttara University</p>
                                        </div>
                                        <div class="content__award-text small">For most favorited design voted by NY
                                            City Style customers
                                        </div>
                                    </div>
                                    <div class="content__award">
                                        <div class="content__award-img"><img
                                                src="{{ asset('frontend') }}/img/al-amin.jpg" alt=""></div>
                                        <div class="content__award-title">
                                            <p>Al-Amin Academy School & College, Chandpur</p>
                                        </div>
                                        <div class="content__award-text small">For best creative & usable health care
                                            mobile app design
                                        </div>
                                    </div>
                                    <div class="content__award">
                                        <div class="content__award-img">
                                            {{-- <!-- <img src="{{ asset('frontend') }}/img/award-3.png" alt=""> --> --}}
                                            RBMHS
                                        </div>
                                        <div class="content__award-title">
                                            <p>Rampur Bazar Majidia High School</p>
                                        </div>
                                        <div class="content__award-text small">Has been part of the Envato Community
                                            for over 8 years</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="scrollable">
                    <section class="testimonials">
                        <div class="sticky-title">
                            <ul>
                                <li>
                                    <div>testimonials</div>
                                    <div>4.0</div>
                                </li>
                            </ul>
                        </div>
                        <div class="content"
                            style="background-image: url({{ asset('frontend') }}/images/testmonials-bg.png); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;">
                            <div class="content__left">
                                <div class="content__title">
                                    <div class="h1">+250</div>
                                    <div class="h1">happy</div>
                                    <div class="h1">clients</div>
                                    <div class="small" style="color: #d47251;">I love my work and every project is my
                                        pride</div>
                                </div>
                                <div class="testimonials__clients">
                                    <div class="testimonials__client"><img src="{{ asset('frontend') }}/img/client-1.png"
                                            alt=""></div>
                                    <div class="testimonials__client"><img src="{{ asset('frontend') }}/img/client-2.png"
                                            alt=""></div>
                                    <div class="testimonials__client"><img src="{{ asset('frontend') }}/img/client-3.png"
                                            alt=""></div>
                                    <div class="testimonials__client"><img src="{{ asset('frontend') }}/img/client-4.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="content__right">
                                <div class="content__subtitle"><span>Creative</span> & dedicated is things that my
                                    studio brings for your business</div>
                                <div class="content__slider slides testimonials__slider">
                                    <div class="slides__container">
                                        <div class="slides__inner">
                                            <div class="slide">
                                                <div class="content__slider-text small">“ If you are seeking an
                                                    Interior designer that will understand exactly your needs, and
                                                    someone who will utilise their creative and technical skills in
                                                    parity with your taste, then Suzanne at The Bauhaus
                                                    Studio is perfect.</div>
                                                <div class="content__slider-name">david & elisa</div>
                                                <div class="content__slider-staff small">Apartment view lake at
                                                    Brooklyn
                                                </div>
                                            </div>
                                            <div class="slide">
                                                <div class="content__slider-text small">“ If you are seeking an
                                                    Interior designer that will understand exactly your needs, and
                                                    someone who will utilise their creative and technical skills in
                                                    parity with your taste, then Suzanne at The Bauhaus
                                                    Studio is perfect.</div>
                                                <div class="content__slider-name">elisa</div>
                                                <div class="content__slider-staff small">Apartment view lake at
                                                    Brooklyn
                                                </div>
                                            </div>
                                            <div class="slide">
                                                <div class="content__slider-text small">“ If you are seeking an
                                                    Interior designer that will understand exactly your needs, and
                                                    someone who will utilise their creative and technical skills in
                                                    parity with your taste, then Suzanne at The Bauhaus
                                                    Studio is perfect.</div>
                                                <div class="content__slider-name">david & elisa</div>
                                                <div class="content__slider-staff small">Apartment view lake at
                                                    Brooklyn
                                                </div>
                                            </div>
                                            <div class="slide">
                                                <div class="content__slider-text small">“ If you are seeking an
                                                    Interior designer that will understand exactly your needs, and
                                                    someone who will utilise their creative and technical skills in
                                                    parity with your taste, then Suzanne at The Bauhaus
                                                    Studio is perfect.</div>
                                                <div class="content__slider-name">david</div>
                                                <div class="content__slider-staff small">Apartment view lake at
                                                    Brooklyn
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slides__controls">
                                        <button class="slides__btn slides__btn--prev btn btn--invert btn--arrow"
                                            id="prevButton">
                                            <svg>
                                                <use xlink:href="{{ asset('frontend') }}/svg/sprite.svg#arrow"></use>
                                            </svg>
                                        </button>
                                        <button class="slides__btn slides__btn--next btn btn--arrow" id="nextButton">
                                            <svg>
                                                <use xlink:href="{{ asset('frontend') }}/svg/sprite.svg#arrow"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="scrollable">
                    <section class="experience">
                        <div class="sticky-title">
                            <ul>
                                <li>
                                    <div>working experience</div>
                                    <div>5.0</div>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <div class="content__bg"
                                style="background:linear-gradient(260deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{ asset('frontend') }}/img/bg1.jpg); background-repeat: no-repeat; background-size: cover; background-position: center;">
                            </div>
                            <div class="content__left">
                                <div class="content__title">
                                    <div class="h1">working</div>
                                    <div class="h1">experience</div>
                                </div>
                                <div class="content__description">
                                    <div class="small">I have been developing sites for 3 years and I know for sure
                                        the main trends and directions of modern design, you will get a decent result
                                    </div>
                                </div>
                                <div class="content__btn-block">
                                    <a class="content__btn-btn btn"
                                        href="{{ asset('frontend') }}/files/Junaid Hossain's Resume.pdf"
                                        style="display: flex; gap:3px;align-items: center;" download>
                                        <i class="fa-solid fa-download"></i>
                                        <span>resume</span>
                                    </a>
                                </div>
                            </div>
                            <div class="content__right">
                                <div class="content__awards experience__list">
                                    <div class="content__award">
                                        <div class="content__award-img"><img src="{{ asset('frontend') }}/img/aamra.png"
                                                alt=""></div>
                                        <div class="content__award-title"><span class="small">Sep 2023 -
                                                Present</span>
                                            <p style="text-transform:capitalize;">Aamra Company</p>
                                        </div>
                                        <div class="content__award-text small">I have been working as a Software
                                            Developer.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="scrollable">
                    <section class="news">
                        <div class="sticky-title">
                            <ul>
                                <li>
                                    <div>from the blog</div>
                                    <div>5.0</div>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <div class="content__left">
                                <div class="content__title">
                                    <div class="h1">latest</div>
                                    <div class="h1">news</div>
                                    <div class="small">I love my work and every project is my pride</div>
                                </div>
                                <ul class="content__menu news__menu">
                                    <li class="active"><a href="javascript:;">How low-code and no-code platforms
                                            impact traditional development</a></li>
                                    <li><a href="javascript:;">Lemon Illustration design</a></li>
                                    <li><a href="javascript:;">Paul theme Branding</a></li>
                                    <li><a href="javascript:;">Best typography 2020</a></li>
                                    <li><a href="javascript:;">my name is pattison</a></li>
                                </ul>
                                <div class="content__btn-block">
                                    <div class="content__btn-label small">View all works</div>
                                    <a class="content__btn-btn btn btn--arrow" href="{{ asset('frontend') }}/blog.html"
                                        target="_blank">
                                        <svg>
                                            <use xlink:href="{{ asset('frontend') }}/svg/sprite.svg#arrow"></use>
                                        </svg></a>
                                </div>
                            </div>
                            <div class="content__right">
                                <div class="news__blocks">
                                    <div class="news__block active">
                                        <div class="news__block-info">
                                            <div class="news__block-date small">3th January, 2020</div>
                                            <div class="news__block-text small">The emergence and rapid adoption of
                                                low-code and no-code platforms have resulted in a significant shift
                                                within the software development industry. These tools allow users with
                                                minimal coding experience to quickly and effectively build applications
                                                by simplifying the development process.
                                            </div>
                                            <div class="news__block-number">(01)</div>
                                        </div>
                                        <div class="news__block-image">
                                            <a href="{{ route('blog', 1) }}"><img
                                                    src="{{ asset('frontend') }}/img/news-1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="news__block active">
                                        <div class="news__block-info">
                                            <div class="news__block-date small">3th January, 2020</div>
                                            <div class="news__block-text small">Berling ® — minimalism photography
                                                agency website. with the help of a minimalistic design, the site turned
                                                out to be very user-friendly and responsive, and the brand became more.
                                            </div>
                                            <div class="news__block-number">(02)</div>
                                        </div>
                                        <div class="news__block-image">
                                            <a href="{{ route('blog', 2) }}"><img
                                                    src="{{ asset('frontend') }}/img/news-2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="news__block active">
                                        <div class="news__block-info">
                                            <div class="news__block-date small">3th January, 2020</div>
                                            <div class="news__block-text small">Berling ® — minimalism photography
                                                agency website. with the help of a minimalistic design, the site turned
                                                out to be very user-friendly and responsive, and the brand became more.
                                            </div>
                                            <div class="news__block-number">(03)</div>
                                        </div>
                                        <div class="news__block-image">
                                            <a href="{{ route('blog', 3) }}"><img
                                                    src="{{ asset('frontend') }}/img/news-3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="news__block active">
                                        <div class="news__block-info">
                                            <div class="news__block-date small">3th January, 2020</div>
                                            <div class="news__block-text small">Berling ® — minimalism photography
                                                agency website. with the help of a minimalistic design, the site turned
                                                out to be very user-friendly and responsive, and the brand became more.
                                            </div>
                                            <div class="news__block-number">(04)</div>
                                        </div>
                                        <div class="news__block-image">
                                            <a href="{{ route('blog', 4) }}"><img
                                                    src="{{ asset('frontend') }}/img/news-4.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="news__block active">
                                        <div class="news__block-info">
                                            <div class="news__block-date small">3th January, 2020</div>
                                            <div class="news__block-text small">Berling ® — minimalism photography
                                                agency website. with the help of a minimalistic design, the site turned
                                                out to be very user-friendly and responsive, and the brand became more.
                                            </div>
                                            <div class="news__block-number">(05)</div>
                                        </div>
                                        <div class="news__block-image">
                                            <a href="{{ route('blog', 5) }}"><img
                                                    src="{{ asset('frontend') }}/img/news-5.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="scrollable" id="hireme">
                    <section class="contacts">
                        <div class="sticky-title">
                            <ul>
                                <li>
                                    <div>contact</div>
                                    <div>6.0</div>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <div class="content__left">
                                <div class="content__title">
                                    <div class="h1">Hire me</div>
                                    <div class="small">Enjoy coffe with me</div>
                                </div>
                                <ul class="content__menu contacts__menu">
                                    <li class="active"><a class="noicon" href="javascript:;"
                                            onclick="window.open('mailto:junaidhossain0905@gmail.com')">mail:
                                            junaidhossain50905@gmail.com</a></li>
                                    <li class="active"><a class="noicon" href="javascript:;"
                                            onclick="window.open('skype:live:.cid.19c195636d6d5699')">skype:
                                            Junaid Hossain</a></li>
                                </ul>
                                <div class="contacts__copyright small">© Juaiddev 2024. All Rights Resevered</div>
                            </div>
                            <div class="content__right">
                                <div class="content__subtitle">Let's grab a coffee and jump on
                                    <span>conversation</span> chat with me.
                                </div>
                                <form action="{{ route('submit.contact.form') }}" class="content__contacts contacts__form" method="POST">
                                    @csrf
                                    <div class="content__brief">
                                        <div class="content__brief-text small">I recommend filling out a brief to
                                            assess the cost of the project.
                                        </div>
                                    </div>
                                    <div class="content__form">
                                        <label class="content__form-input">
                                            <input type="text" name="name" required=""><span
                                                class="content__form-placeholder">Name *</span>
                                        </label>
                                        <label class="content__form-input">
                                            <input type="email" name="email" required=""><span
                                                class="content__form-placeholder">EMAIL *</span>
                                        </label>
                                        <label class="content__form-input">
                                            <input type="text" name="msg" required="" minlength="10"><span
                                                class="content__form-placeholder">MESSAGE *</span>
                                        </label>
                                        <div class="content__form-btn">
                                            <button class="btn btn--arrow"
                                                style="display: flex; gap: 5px; align-items: center;" type="submit">
                                                <svg>
                                                    <use xlink:href="{{ asset('frontend') }}/svg/sprite.svg#arrow">
                                                    </use>
                                                </svg>
                                                <span>Send</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
