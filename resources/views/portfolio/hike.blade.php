@extends('layouts.app')
@section('content')
    <main class="main">
        <section class="banner">
            <div class="wrapper">
                <div class="banner-left">
                    <h1 class="banner-title">
                        Проект по<br> хайкингу - “HIKE”
                    </h1>
                    <ul class="banner-description-list">
                        <li class="banner-description-item">Аналитика и исследование</li>
                        <li class="banner-description-item">Прототипирование</li>
                        <li class="banner-description-item">тВизуальная концепция</li>
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
                            <a href="#" class="banner-link"> Проект по хайкингу - HIKE </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="about-project">
            <div class="wrapper">
                <div class="about-project-text">
                    <h2 class="about-project-name">О проекте</h2>
                    <p class="about-project-description">Наша компания принимала участие в создании проекта, который поможет объедениться хайкерам для совместного прохождения маршрутов, а так же для общения, обмена опытом и знаниями.</p>
                    <p class="about-project-description">Интервью и качественно - субъективный метод исследования помог в проработке требований к сайту и послужил фундаментом для подробного проектиования пользовательского опыта.</p>
                </div>
            </div>
        </section>
        <section class="projects">
            <div class="wrapper">
                <img src="{{asset('assets/img/Главная (3).png')}}" alt="HIKE" class="projects-img">
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
