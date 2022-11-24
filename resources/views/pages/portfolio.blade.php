@extends('layouts.app')

<head>
    <title>Проекты Desire: кейсы разработки, продвижения и дизайна</title>
    <meta name="description" content="На этой странице вы можете найти интерактивные презентации всех проектов, в реализации которых принимала участие наша команда. Они все разные и прекрасно демонстрируют уникальный подход к работе. Возможно, скоро тут будет и ваш сайт?" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Проекты Desire: кейсы разработки, продвижения и дизайна">
    <meta property="og:url" content="https://desire-company.com/projects">
    <meta property="og:image" content="https://desire-company.com/assets/img/snippet-image.png">
    <meta property="og:description" content="На этой странице вы можете найти интерактивные презентации всех проектов, в реализации которых принимала участие наша команда. Они все разные и прекрасно демонстрируют уникальный подход к работе. Возможно, скоро тут будет и ваш сайт?">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Desire Company",
                "item": "https://desire-company.com/"
            }, {
                "@type": "ListItem",
                "position": 2,
                "name": "Проекты",
                "item": "https://desire-company.com/projects"
            }]
        }
    </script>

</head>
@section('content')

<body>
    <main class="main">
        <section class="project-banner">
            <div class="wrapper">
                <div class="content">
                    <div class="draft">
                        <h1 class="title">Наши проекты</h1>
                    </div>
                    <ul class="cases-list">
                        <li class="cases-item">
                            <a href="/projects/hike">
                                <img src="{{asset('assets/img/slider-image-3.png')}}" alt="Обложка проекта - HIKE" class="cases-img">
                            </a>
                            <div class="ceses-text">
                                <a href="/projects/hike" class="cases-name">Hike.
                                    Проект для хайкинга.</a>
                                <a href="/projects/hike" class="case-link">Посмотреть
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8.82422L9 0.824219" stroke="#9AD351" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 0.824219H9V8.82422" stroke="#9AD351" stroke-linecap="square" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <li class="cases-item">
                            <a href="/projects/dolfie">
                                <img src="{{asset('assets/img/slider-image-2.png')}}" alt="Обложка проекта - DOLFIE" class="cases-img">
                            </a>
                            <div class="ceses-text">
                                <a href="/projects/dolfie" class="cases-name">Dolfie. Редизайн интрнет-магазина.</a>
                                <a href="/projects/dolfie" class="case-link">Посмотреть
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8.82422L9 0.824219" stroke="#9AD351" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 0.824219H9V8.82422" stroke="#9AD351" stroke-linecap="square" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <li class="cases-item">
                            <a href="/projects/noiceland">
                                <img src="{{asset('assets/img/slider-image-1.png')}}" alt="Обложка проекта - NOICELAND" class="cases-img">
                            </a>
                            <div class="ceses-text">
                                <a href="/projects/noiceland" class="cases-name">NoiceLand</a>
                                <a href="/projects/noiceland" class="case-link">Посмотреть
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8.82422L9 0.824219" stroke="#9AD351" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 0.824219H9V8.82422" stroke="#9AD351" stroke-linecap="square" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <li class="cases-item">
                            <a href="/projects/tocha">
                                <img src="{{asset('assets/img/slider-image-4.png')}}" alt="Обложка проекта - TOCHA" class="cases-img">
                            </a>
                            <div class="ceses-text">
                                <a href="/projects/tocha" class="cases-name">Tocha. Telegram чат</a>
                                <a href="/projects/tocha" class="case-link">Посмотреть
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8.82422L9 0.824219" stroke="#9AD351" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 0.824219H9V8.82422" stroke="#9AD351" stroke-linecap="square" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <a href="/projects" class="btn-project">Показать ещё</a>
                </div>
            </div>
        </section>
        <section class="project">
            <div class="wrapper">
                <p class="project-text">Мы предоставляем <span class="text-color">весь спектр услуг</span> для вашего digital-проекта: <span class="text-color">от</span> разработки сайта <span class="text-color">и</span> мобильных приложений <span class="text-color">до </span> продвижения проекта в поисковых системах Яндекс и Google.
                </p>
                <a href="/new-project" class="btn-project">Начать проект</a>
            </div>
        </section>
    </main>
</body>

@endsection