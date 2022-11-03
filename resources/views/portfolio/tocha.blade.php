@extends('layouts.app')
@section('content')
    <main class="main">
        <section class="banner">
            <div class="wrapper">
                <div class="content">
                    <div class="seo-banner-top">
                        <h1 class="banner-title">
                            Веб-сайт для <br> проекта “TOCHA”
                        </h1>
                        <p class="seo-banner-section"><a href="/portfolio">Проекты</a> &nbsp / &nbsp <a href="#portfolio"> Web-сайты</a> &nbsp / &nbsp Веб-сайт для проекта "TOCHA"</p>
                    </div>
                    <div class="seo-banner-bottom">
                        <ul class="banner-description-list">
                            <li class="banner-description-item">Frontend разработка</li>
                            <li class="banner-description-item">адаптивные версии</li>
                            <li class="banner-description-item">тестирование</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-project">
            <div class="wrapper">
                <div class="about-project-text">
                    <h2 class="about-project-name">О проекте</h2>
                    <p class="about-project-description">TOCHA — сервис для создания чат-ботов, который хочет сделать жизнь своих клиентов проще буквально одним кликом.</p>
                    <p class="about-project-description">Мы сделали функциональный сайт для продукта TOCHA.</p>
                </div>
            </div>
        </section>
        <section class="projects">
            <div class="wrapper">
                <img src="{{asset('assets/img/tocha-screen.png')}}" alt="TOCHA" class="projects-img">
            </div>
        </section>
        <section class="projects-mobile">
            <div class="wrapper">
                <div class="mobile-picture">
                    <img src="{{asset('assets/img/X - 3.png')}}" alt="TOCHA" class="mobile-img">
                    <img src="{{asset('assets/img/X - 4.png')}}" alt="TOCHA" class="mobile-img">
                    <img src="{{asset('assets/img/X - 7.png')}}" alt="TOCHA" class="mobile-img">
                </div>
            </div>
        </section>
        <section class="cases">
            <div class="wrapper" style="max-width: 100%;">
                <div class="wrapper">
                    <h2 class="subTitle">Смотреть ещё</h2>
                </div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="slider-img" src="{{asset('assets/img/slider-image-1.png')}}" alt="Обложка проекта" />
                            <div class="swiper-slide-main">
                                <h3 class="swiper-slide-title">NoiceLand <br/> </h3>
                                <a href="/portfolio/noiseland">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="slider-img" src="{{asset('assets/img/slider-image-2.png')}}" alt="Обложка проекта" />
                            <div class="swiper-slide-main">
                                <h3 class="swiper-slide-title">Dolfie <br/> Hadr to choose. Easy to wear</h3>
                                <a href="/portfolio/dolfie">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="slider-img" src="{{asset('assets/img/slider-image-3.png')}}" alt="Обложка проекта" />
                            <div class="swiper-slide-main">
                                <h3 class="swiper-slide-title">Hike <br/> Выбери свой маршрут для похода</h3>
                                <a href="/portfolio/hike">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="slider-img" src="{{asset('assets/img/slider-image-4.png')}}" alt="Обложка проекта" />
                            <div class="swiper-slide-main">
                                <h3 class="swiper-slide-title">Tocha<br/> Telegram чат на вашем сайте</h3>
                                <a href="/portfolio/tocha">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper-pagination"></div>
                <button class="cases-btn"><a href="/portfolio">Смотреть все</a></button>
            </div>
        </section>
    </main>
@endsection
