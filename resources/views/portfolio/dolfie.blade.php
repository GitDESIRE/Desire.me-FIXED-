@extends('layouts.app')
<head>
    <title>Проект “Dolfie Paradise”: любовь и дизайн</title> 
    <meta name="description" content="Мы сделали редизайн интернет-магазина “Dolfie Paradise”, опираясь на его оригинальную эстетику и настроение. Результат перед вашими глазами - нежный, но крайне цепляющий своей индивидуальностью сайт, очень похожий на историю любви создателей самого бренда."/>
</head>
@section('content')
    <body>
    <main class="main">
        <section class="project-banner">
            <div class="wrapper project-wrapper">
                    <div class="seo-banner-top">
                        <h1 class="banner-title">
                            Редизайн<br> интернет-магазина “Dolfie Paradise”
                        </h1>
                        <p class="seo-banner-section"><a href="/projects">Проекты</a> &nbsp / &nbsp Редизайн интернет магазина Dolfie</p>
                    </div>
                    <div class="seo-banner-bottom">
                        <ul class="banner-description-list">
                            <li class="banner-description-item">Аналитика и исследование</li>
                            <li class="banner-description-item">Прототипирование</li>
                            <li class="banner-description-item">Визуальная концепция</li>
                            <li class="banner-description-item">Адаптивные версии</li>
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
                <img src="{{asset('assets/img/Dolfie-screen.png')}}" alt="DOLFIE - дизайн сайта" class="projects-img">
            </div>
        </section>
        <section class="projects-mobile dolfie-mobile">
            <div class="wrapper">
                <div class="mobile-picture">
                    <img src="{{asset('assets/img/Dolfie-mobileMenu.png')}}" alt="Dolfie - меню сайта" class="mobile-img">
                    <img src="{{asset('assets/img/Dolfie-mobileLookbook.png')}}" alt="Dolfie - миссия компании" class="mobile-img">
                    <img src="{{asset('assets/img/Dolfie-mobileAboutUs.png')}}" alt="Dolfie - о компании" class="mobile-img">
                </div>
            </div>
        </section>
        <section class="dolfie-mobile-project">
            <div class="wrapper">
                <div class="mobile-picture">
                    <img src="{{asset('assets/img/Dolfie-catalog.png')}}" alt="Dolfie - женский каталог" class="mobile-img">
                    <img src="{{asset('assets/img/Dolfie-mobileCard.png')}}" alt="Dolfie - карточка товара с фильтром" class="mobile-img">
                    <img src="{{asset('assets/img/Dolfie-mobileCardList.png')}}" alt="Dolfie - карточка товара" class="mobile-img">
                </div>
            </div>
        </section>
        <section class="projects-mobile dolfie-mobile">
            <div class="wrapper">
                <div class="mobile-picture">
                    <img src="{{asset('assets/img/Dolfie-mobileCart.png')}}" alt="Dolfie - корзина мобильная" class="mobile-img">
                    <img src="{{asset('assets/img/Dolfie-desktopCart.png')}}" alt="Dolfie - корзина десктоп" class="mobile-img">
                </div>
            </div>
        </section>
        <section class="dolfie-mobile-project">
            <div class="wrapper">
                <div class="mobile-picture">
                    <img src="{{asset('assets/img/Dolfie-desktopBuy.png')}}" alt="Dolfie - покупка товара десктоп" class="mobile-img">
                    <img src="{{asset('assets/img/Dolfie-mobileBuy.png')}}" alt="Dolfie - покупка мобильная" class="mobile-img">
                </div>
            </div>
        </section>
        <section class="lookbook">
            <div class="wrapper">
                <img src="{{asset('assets/img/Dolfie-lookbook.png')}}" alt="Dolfie - лукбук" class="mobile-img">
            </div>
        </section>
        <section class="development">
            <div class="wrapper">
                <div class="color">
                    <div class="dolfi__color">
                        <span class="color-name dolfi__color-span">Цвет</span>
                        <div class="dolfi__color-div">
                            <ul class="color-list">
                        <li class="color-item">
                            <img src="{{asset('assets/img/Color-black.png')}}" alt="Черный" class="color-img">
                            <span class="color-description">Черный</span>
                            <span class="color-description1">#2B2B2F</span>
                        </li>
                        <li class="color-item">
                            <img src="{{asset('assets/img/Color-grey.png')}}" alt="Серый" class="color-img">
                            <span class="color-description">Серый   </span>
                            <span class="color-description1">##626E76</span>
                        </li>
                        <li class="color-item">
                            <img src="{{asset('assets/img/Color-lightGrey.png')}}" alt="Светло-серый" class="color-img">
                            <span class="color-description">Светло-серый</span>
                            <span class="color-description1">##C0C4C8</span>
                        </li>
                        <li class="color-item">
                            <img src="{{asset('assets/img/Color-blue.png')}}" alt="Синий" class="color-img">
                            <span class="color-description">Синий</span>
                            <span class="color-description1">##0B6BAB</span>
                        </li>
                        <li class="color-item">
                            <img src="{{asset('assets/img/Color-white.png')}}" alt="Белый" class="color-img">
                            <span class="color-description">Белый</span>
                            <span class="color-description1">##FFFFFF</span>
                        </li>
                    </ul>
                        </div>
                    </div>
                </div>
                <div class="typography">
                    <div class="dolfi__typography">
                        <span class="color-name dolfi__typography-span">Типографика</span>
                        <div class="dolfi__typography-div">
                            <div class="font dolfi__color_typography-div">
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
                                <a href="/projects/noiceland"><img class="slider-img" src="{{asset('assets/img/slider-image-1.png')}}" alt="Обложка проекта - NOICELAND" /></a>
                                <div class="swiper-slide-main">
                                    <h3 class="swiper-slide-title">NoiceLand </h3>
                                    <a href="/projects/noiceland">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <a href="/projects/dolfie"><img class="slider-img" src="{{asset('assets/img/slider-image-2.png')}}" alt="Обложка проекта - DOLFIE" /></a>
                                <div class="swiper-slide-main">
                                    <h3 class="swiper-slide-title">Dolfie: Hard to choose. Easy to wear</h3>
                                    <a href="/projects/dolfie">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <a href="/projects/hike"><img class="slider-img" src="{{asset('assets/img/slider-image-3.png')}}" alt="Обложка проекта - HIKE" /></a>
                                <div class="swiper-slide-main">
                                    <h3 class="swiper-slide-title">Hike: Выбери свой маршрут для похода</h3>
                                    <a href="/projects/hike">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <a href="/projects/tocha"><img class="slider-img" src="{{asset('assets/img/slider-image-4.png')}}" alt="Обложка проекта - TOCHA" /></a>
                                <div class="swiper-slide-main">
                                    <h3 class="swiper-slide-title">Tocha: Telegram чат на вашем сайте</h3>
                                    <a href="/projects/tocha">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-buttons">
                            <div class="swiper-button-prev">
                            </div>
                            <div class="swiper-button-next">
                            </div>
                        </div>
                </div>
                <div class="swiper-pagination"></div>
                <a href="/projects"><button class="cases-btn">Смотреть все</button></a>
            </div>
        </section>
    </main>
    </body>
    <script type="application/ld+json">
        {
        "@context": "https://schema.org/", 
        "@type": "BreadcrumbList", 
        "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Desire Company",
            "item": "https://desire-company.com/"  
        },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Проекты",
            "item": "https://desire-company.com/projects"  
        },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "Кейс DOLFIE",
            "item": "https://desire-company.com/projects/dolfie"  
        }]
        }
    </script>

@endsection
