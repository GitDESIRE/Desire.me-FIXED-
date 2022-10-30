@extends('layouts.app')
@section('content')
<body>
    <main class="main">
    <section class="banner">
        <div class="wrapper">
            <div class="banner-left">
                <h1 class="banner-title">
                    Редизайн<br> интернет-магазина “Dolfie Paradise”
                </h1>
                <ul class="banner-description-list">
                    <li class="banner-description-item">Аналитика и исследование</li>
                    <li class="banner-description-item">Прототипирование</li>
                    <li class="banner-description-item">Визуальная концепция</li>
                    <li class="banner-description-item">Адаптивные версии</li>
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
                        <a href="#" class="banner-link">Редизайн интернет магазина Dolfie</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="about-project">
        <div class="wrapper">
            <div class="about-project-text">
                <h2 class="about-project-name">О проекте</h2>
                <p class="about-project-description">Dolfie — испанский брэнд обуви, созданный двумя влюбленными студентами - дизайнерами. Их главная цель — вдохновлять и мотивировать людей жить в гармонии друг с другом и с нашей драгоценной матерью-природой. Мы сделали полный редизайн
                    всех страниц интернет-магазина в соответствии с духом компании.</p>
            </div>
        </div>
    </section>
    <section class="projects projects-dolfie">
        <div class="wrapper">
            <img src="{{asset('assets/img/Group 1388 (3).png')}}" alt="DOLFIE" class="projects-img">
        </div>
    </section>
    <section class="projects-mobile dolfie-mobile">
        <div class="wrapper">
            <div class="mobile-picture">
                <img src="{{asset('assets/img/X - 3.3.png')}}" alt="TOCHA" class="mobile-img">
                <img src="{{asset('assets/img/X - 4.4.png')}}" alt="TOCHA" class="mobile-img">
            </div>
            <img src="{{asset('assets/img/X - 7.7.png')}}" alt="TOCHA" class="mobile-img">
        </div>
    </section>
    <section class="dolfie-mobile-project">
        <div class="wrapper">
            <img src="{{asset('assets/img/Каталог 1602 (1).png')}}" alt="TOCHA" class="mobile-img">
            <div class="mobile-picture">
                <img src="{{asset('assets/img/X - 222.png')}}" alt="TOCHA" class="mobile-img">
                <img src="{{asset('assets/img/X - 8.png')}}" class="mobile-img">
            </div>
        </div>
    </section>
    <section class="projects-mobile dolfie-mobile">
        <div class="wrapper">
            <img src="{{asset('assets/img/X - 9.png')}}" alt="TOCHA" class="mobile-img">
            <img src="{{asset('assets/img/Card 1601 (1).png')}}" alt="TOCHA" class="mobile-img">
        </div>
    </section>
    <section class="dolfie-mobile-project">
        <div class="wrapper">
            <img src="{{asset('assets/img/Покупка (1).png')}}" alt="TOCHA" class="mobile-img">
            <img src="{{asset('assets/img/X - 2.2.2.2..png')}}" alt="TOCHA" class="mobile-img">
        </div>
    </section>
    <section class="lookbook">
        <div class="wrapper">
            <img src="{{asset('assets/img/Лукбук 1024 (1).png')}}" alt="TOCHA" class="mobile-img">
        </div>
    </section>
    <section class="development">
        <div class="wrapper">
            <div class="color">
                <span class="color-name">Цвет</span>
                <ul class="color-list">
                    <li class="color-item">
                        <img src="{{asset('assets/img/Color (5).png')}}" alt="Черный" class="color-img">
                        <span class="color-description">Черный</span>
                        <span class="color-description1">#2B2B2F</span>
                    </li>
                    <li class="color-item">
                        <img src="{{asset('assets/img/Color (6).png')}}" alt="Серый" class="color-img">
                        <span class="color-description">Серый   </span>
                        <span class="color-description1">##626E76</span>
                    </li>
                    <li class="color-item">
                        <img src="{{asset('assets/img/Color (7).png')}}" alt="Светло-серый" class="color-img">
                        <span class="color-description">Светло-серый</span>
                        <span class="color-description1">##C0C4C8</span>
                    </li>
                    <li class="color-item">
                        <img src="{{asset('assets/img/Color (8).png')}}" alt="Синий" class="color-img">
                        <span class="color-description">Синий</span>
                        <span class="color-description1">##0B6BAB</span>
                    </li>
                    <li class="color-item">
                        <img src="{{asset('assets/img/Color (9).png')}}" alt="Белый" class="color-img">
                        <span class="color-description">Белый</span>
                        <span class="color-description1">##FFFFFF</span>
                    </li>
                </ul>
            </div>
            <div class="typography">
                <span class="color-name">Типографика</span>
                <div class="font">
                    <span class="font-name">Mulish</span>
                    <div class="text">
                        <ul class="text-list">
                            <li class="text-item1">Заголовки</li>
                            <li class="text-item">H1 - 64px</li>
                            <li class="text-item">H2 - 40px</li>
                        </ul>
                        <ul class="text-list">
                            <li class="text-item1">Текст</li>
                            <li class="text-item">Текст - 15px</li>
                            <li class="text-item">Примечания - 9px</li>
                        </ul>
                    </div>
                </div>
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
</body>
@endsection
