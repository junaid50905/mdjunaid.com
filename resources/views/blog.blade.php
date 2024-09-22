@extends('layouts.master')


@section('title')
    Blog
@endsection


@section('main-panel')
    <main class="main blog_page">
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
                    <li class="active"><a href="{{ route('welcome') }}" data-link="0">Back to home</a></li>
                </ul>
                <div class="header__phone">
                    <a href="tel:+8801621059282">+8801621059282</a>
                </div>
            </div>
        </div>
        <section class="blog_page-big_banner" style="background-image: url({{ asset('frontend/img/news-2.png') }})">
            <div class="blog_page-container">
                <div class="small">February 17, 2021</div>
                <div class="h1">Devices </div>
                <div class="h1">Mockups</div>
                <div class="h1">{{ $blogId }}</div>
            </div>
        </section>
        <section class="blog_page-content">
            <div class="blog_page-container">
                <div class="blog_page-text">
                    <div class="blog_page-h1">Beast creature days.</div>
                    <div class="small">This response is important for our ability to learn from mistakes, but it alsogives
                        rise to self-criticism, because it is part of the threat-protection system. In other words, what
                        keeps us safe can go too far, and keep us too safe. In fact it can trigger self-censoring.</div>
                    <div class="small">One touch of a red-hot stove is usually all we need to avoid that kind of discomfort
                        in the future. The same is true as we experience the emotional sensation of stress from our first
                        instances of social rejection or ridicule. We quickly learn to fear and thus automatically avoid
                        potentially stressful situations of all kinds, including the most common of all: </div>
                </div><img class="blog_page-banner" src="{{ asset('frontend') }}/img/news-1.jpg"
                    alt="">
                <div class="blog_page-text">
                    <div class="blog_page-h1">Methods for Everyone</div>
                    <div class="small">Everything along the way, to and from, fascinated her: every pebble, ant, stick,
                        leaf, blade of grass, and crack in the sidewalk was something to be picked up, looked at, tasted,
                        smelled, and shaken. Everything was interesting to her. She knew nothing. I knew everything…been
                        there, done that. She was in the moment, I was in the past. She was mindful. I was mindless.</div>
                    <div class="small">One touch of a red-hot stove is usually all we need to avoid that kind of discomfort
                        in the future. The same is true as we experience the emotional sensation of stress from our first
                        instances of social rejection or ridicule. We quickly learn to fear and thus automatically avoid
                        potentially stressful situations of all kinds, including the most common of all: making mistakes.
                    </div>
                </div><img class="blog_page-banner" src="{{ asset('frontend') }}/images/big-banner_item2.png"
                    alt="">
                <div class="blog_page-reviws">
                    <div class="blog_page-reviws_text">Our greatest weakness lies in giving up. The most certain way to
                        succeed is always to try just one more time. emotional sensation of stress from our firs</div>
                    <div class="blog_page-reviws_name small">Paul</div>
                    <div class="blog_page-reviws_place small">Elite Author</div>
                </div>
                <ul class="blog_page-tags">
                    <li class="blog_page-tags_item blog_page-tags_title">Tags: </li>
                    <li class="blog_page-tags_item"><a class="blog_page-tags_link" href="#">Follow</a>, </li>
                    <li class="blog_page-tags_item"><a class="blog_page-tags_link" href="#">Like</a>, </li>
                    <li class="blog_page-tags_item"><a class="blog_page-tags_link" href="#">Photography</a></li>
                </ul>
                <ul class="blog_page-share">
                    <li class="blog_page-share_item blog_page-share_title">Share: </li>
                    <li class="blog_page-share_item"><a href="#">
                            <svg>
                                <use xlink:href="{{ asset('frontend') }}/svg/sprite.svg#fb"></use>
                            </svg></a></li>
                    <li class="blog_page-share_item"><a href="#">
                            <svg>
                                <use xlink:href="{{ asset('frontend') }}/svg/sprite.svg#tw"></use>
                            </svg></a></li>
                    <li class="blog_page-share_item"><a href="#">
                            <svg>
                                <use xlink:href="{{ asset('frontend') }}/svg/sprite.svg#inst"></use>
                            </svg></a></li>
                </ul>
            </div>
        </section>
        <section class="blog_page-comments">
            <div class="blog_page-comments_container">
                <div class="blog_page-h1">Comments</div>
                <div class="blog_page-comments_wrapper">
                    <div class="blog_page-comments_block">
                        <div class="blog_page-comments_icon"><img src="{{ asset('frontend') }}/images/reviews.png"
                                alt=""></div>
                        <div class="blog_page-comments_content">
                            <div class="blog_page-comments_heading">
                                <div class="small">Hayley</div>
                                <div class="blog_page-comments_date">Jul 03, 2020 at 15 hours ago</div>
                            </div>
                            <div class="blog_page-comments_text">
                                <div class="small">Everything along the way, to and from, fascinated her: every pebble,
                                    ant, stick, leaf, blade of grass, and crack in the sidewalk was something to be picked
                                    up</div>
                            </div><a class="blog_page-comments_btn" href="#"> <span>Reply</span></a>
                        </div>
                    </div>
                    <div class="blog_page-comments_block">
                        <div class="blog_page-comments_icon"><img src="{{ asset('frontend') }}/images/reviews2.png"
                                alt=""></div>
                        <div class="blog_page-comments_content">
                            <div class="blog_page-comments_heading">
                                <div class="small">Harry</div>
                                <div class="blog_page-comments_date">Jul 03, 2020 at 15 hours ago</div>
                            </div>
                            <div class="blog_page-comments_text">
                                <div class="small">Everything along the way, to and from, fascinated her: every pebble,
                                    ant, stick, leaf, blade of grass, and crack in the sidewalk was something to be picked
                                    up</div>
                            </div><a class="blog_page-comments_btn" href="#"> <span>Reply</span></a>
                        </div>
                    </div>
                </div>
                <form class="content__form">
                    <div class="content__form-title">Post a comment</div>
                    <label class="content__form-input">
                        <input type="text" name="name"><span class="content__form-placeholder">name</span>
                    </label>
                    <label class="content__form-input">
                        <input type="email" name="emal" required=""><span
                            class="content__form-placeholder">EMAIL
                            *</span>
                    </label>
                    <label class="content__form-input">
                        <input type="text" name="msg" required=""><span
                            class="content__form-placeholder">MESSAGE
                            *</span>
                    </label>
                    <div class="content__form-btn">
                        <button class="btn btn--arrow" type="submit">
                            <svg>
                                <use xlink:href="{{ asset('frontend') }}/svg/sprite.svg#arrow"></use>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection
