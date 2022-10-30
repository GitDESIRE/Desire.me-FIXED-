@extends('layouts.app')
@section('content')
    <main class="main">
        <section class="banner">
            <div class="wrapper">
                <div class="banner-left">
                    <h1 class="banner-title">
                        Информационный <br> блог “NOICELAND”
                    </h1>
                    <ul class="banner-description-list">
                        <li class="banner-description-item">Frontend разработка:</li>
                        <li class="banner-description-item">javascript</li>
                        <li class="banner-description-item">html</li>
                        <li class="banner-description-item">CSS</li>
                    </ul>
                </div>
                <div class="banner-right">
                    <ul class="banner-list">
                        <li class="banner-item">
                            <a href="/portfolio" class="banner-link"> Проекты / </a>
                        </li>
                        <li class="banner-item">
                            <a href="/portfolio" class="banner-link">  Web-сайты / </a>
                        </li>
                        <li class="banner-item">
                            <a href="#" class="banner-link">Информационный блог “NOICELAND”</a>
                        </li>
                    </ul>
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
                            <img src="{{asset('assets/img/swiper-image.png')}}" alt="Обложка проекта" />
                            <div class="swiper-slide-main">
                                <h3 class="swiper-slide-title">Veloretti: Discover <br/> World with Us</h3>
                                <a href="/portfolio">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/img/swiper-image.png')}}" alt="Обложка проекта" />
                            <div class="swiper-slide-main">
                                <h3 class="swiper-slide-title">Veloretti: Discover <br/> World with Us</h3>
                                <a href="/portfolio">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/img/swiper-image.png')}}" alt="Обложка проекта" />
                            <div class="swiper-slide-main">
                                <h3 class="swiper-slide-title">Veloretti: Discover <br/> World with Us</h3>
                                <a href="/portfolio">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                            </div>
                        </div>
                    </div>
                    <!-- Доделать пагинацию у свайпера -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
                <button class="cases-btn">Смотреть все</button>
            </div>
        </section>
    </main>
@endsection
