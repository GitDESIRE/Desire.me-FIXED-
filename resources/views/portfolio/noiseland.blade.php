@extends('layouts.app')
    <head>
        <title>Проект “Noiceland”: информационный блог о дизайне</title>
        <meta name="description" content="Для блога, объединяющего работы дизайнеров со всех уголков земли, хотелось сделать красиво. Здесь мы занимались backend-разработкой: писали код на css, java и html, после эффективно и аккуратно внедряя его в работу, чтобы не помешать творцам."/>
    </head>
@section('content')
    <main class="main">
        <section class="project-banner">
            <div class="wrapper project-wrapper">
                    <div class="seo-banner-top">
                        <h1 class="banner-title">
                            Информационный блог “NOICELAND”
                        </h1>
                        <p class="seo-banner-section"><a href="/projects">Проекты</a> &nbsp / &nbsp Информационный блог “NOICELAND”</p>
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
                <img src="{{asset('assets/img/Noicelend.png')}}" alt="Noicelend - Дизайн сайта" class="projects-img">
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
            "name": "Кейс NOICELAND",
            "item": "https://desire-company.com/projects/noiceland"  
        }]
        }
    </script>

@endsection
