@extends('layouts.app')
@section('content')
    <main class="main">
        <section class="banner">
            <div class="wrapper">
                <div class="content">
                    <div class="seo-banner-top">
                        <h1 class="banner-title">
                            Информационный <br> блог “NOICELAND”
                        </h1>
                        <p class="seo-banner-section"><a href="/portfolio">Проекты</a> &nbsp / &nbsp <a href="/portfolio"> Web-сайты</a> &nbsp / &nbsp Информационный блог “NOICELAND”</p>
                    </div>
                    <div class="seo-banner-bottom">
                        <ul class="banner-description-list">
                            <li class="banner-description-item">Frontend разработка:</li>
                            <li class="banner-description-item">javascript</li>
                            <li class="banner-description-item">html</li>
                            <li class="banner-description-item">CSS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-project">
            <div class="wrapper">
                <div class="about-project-text">
                    <h2 class="about-project-name">О проекте</h2>
                    <p class="about-project-description">Эстетичный и минималистичный блог, объединяющий работы дизайнеров всего мира и всех направлений — от архитектуры и веб-дизайна до фотографий и анимации.</p>
                </div>
            </div>
        </section>
        <section class="projects">
            <div class="wrapper">
                <img src="{{asset('assets/img/Desktop.jpg')}}" alt="HIKE" class="projects-img">
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
                    <div class="swiper-button-prev">
                        <img src="{{asset('assets/svg/swiper-left.svg')}}" alt="стрелочка влево" />
                    </div>
                    <div class="swiper-button-next">
                        <img src="{{asset('assets/svg/swiper-right.svg')}}" alt="стрелочка вправо" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <button class="cases-btn"><a href="/portfolio">Смотреть все</a></button>
            </div>
        </section>
    </main>
@endsection
