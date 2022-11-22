@extends('layouts.app')
<head>
    <title>Проект “HIKE”: от аналитики до визуала сайта</title>
    <meta name="description" content="Наша компания принимала участие в создании сайта, объединяющего хайкеров со всего мира в одно огромное и очень энергичное сообщество. Наши разработанная уникальная визуальная концепция, прототипирование и аналитика сделали его одним из лучших проектов на рынке."/>
</head>
@section('content')
    <main class="main">
        <section class="project-banner">
            <div class="wrapper project-wrapper">
                    <div class="seo-banner-top">
                        <h1 class="banner-title">
                            Проект по<br> хайкингу - “HIKE”
                        </h1>
                        <p class="seo-banner-section"><a href="/projects">Проекты</a> &nbsp / &nbsp Проект по хайкингу - Hike </p>
                    </div>
                    <div class="seo-banner-bot">
                        <ul class="banner-description-list">
                            <li class="banner-description-item">Аналитика и исследование</li>
                            <li class="banner-description-item">Прототипирование</li>
                            <li class="banner-description-item">Визуальная концепция</li>
                        </ul>
                    </div>
            </div>
        </section>
        <section class="about-project">
            <div class="wrapper">
                <div class="about-project-text">
                    <h2 class="about-project-name">О проекте</h2>
                    <p class="about-project-description">Наша компания принимала участие в создании проекта, который поможет объедениться хайкерам для совместного прохождения маршрутов, а так же для общения, обмена опытом и знаниями.</p>
                    <p class="about-project-description">Интервью и качественно - субъективный метод исследования помогли в проработке требований к сайту и послужили фундаментом для подробного проектиования пользовательского опыта.</p>
                </div>
            </div>
        </section>
        <section class="projects">
            <div class="wrapper">
                <img src="{{asset('assets/img/Hike-Главная.png')}}" alt="HIKE - главная страница" class="projects-img">
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
            "name": "Кейс HIKE",
            "item": "https://desire-company.com/projects/hike"  
        }]
        }
    </script>

@endsection

