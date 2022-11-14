@extends('layouts.app')
@section('content')
    <body>
    <main class="main">
        <section class="project-banner">
            <div class="wrapper">
                <div class="content">
                    <div class="draft">
                        <h1 class="title">Наши проекты</h1>
                        <!-- <ul class="draft-list">
                            <li class="draft-item">
                                <a href="/portfolio" class="draft-link">Веб-сайты</a>
                            </li>
                            <li class="draft-item">
                                <a href="/portfolio" class="draft-link">Мобильные приложения</a>
                            </li>
                            <li class="draft-item">
                                <a href="/portfolio" class="draft-link">Продвижение</a>
                            </li>
                        </ul> -->
                    </div>
                    <ul class="cases-list">
                        <li class="cases-item">
                            <a href="/portfolio/hike">
                                <img src="{{asset('assets/img/slider-image-3.png')}}" alt="Hike. Проект для хайкинга." class="cases-img">
                            </a>
                            <div class="ceses-text">
                                <a href="/portfolio/hike" class="cases-name">Hike.
                                    Проект для хайкинга.</a>
                                <a href="/portfolio/hike" class="case-link">Посмотреть
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8.82422L9 0.824219" stroke="#9AD351" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 0.824219H9V8.82422" stroke="#9AD351" stroke-linecap="square" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <li class="cases-item">
                            <a href="/portfolio/dolfie">
                                <img src="{{asset('assets/img/slider-image-2.png')}}" alt="Dolfie. Редизайн интернет-магазина." class="cases-img">
                            </a>
                            <div class="ceses-text">
                                <a href="/portfolio/dolfie" class="cases-name">Dolfie. Редизайн интрнет-магазина.</a>
                                <a href="/portfolio/dolfie" class="case-link">Посмотреть
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8.82422L9 0.824219" stroke="#9AD351" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 0.824219H9V8.82422" stroke="#9AD351" stroke-linecap="square" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <li class="cases-item">
                            <a href="/portfolio/noiseland">
                                <img src="{{asset('assets/img/slider-image-1.png')}}" alt="NoiceLand" class="cases-img">
                            </a>
                            <div class="ceses-text">
                                <a href="/portfolio/noiseland" class="cases-name">NoiceLand</a>
                                <a href="/portfolio/noiseland" class="case-link">Посмотреть
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8.82422L9 0.824219" stroke="#9AD351" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 0.824219H9V8.82422" stroke="#9AD351" stroke-linecap="square" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <li class="cases-item">
                            <a href="/portfolio/tocha">
                                <img src="{{asset('assets/img/slider-image-4.png')}}" alt="Tocha. Telegram чат" class="cases-img">
                            </a>
                            <div class="ceses-text">
                                <a href="/portfolio/tocha" class="cases-name">Tocha. Telegram чат</a>
                                <a href="/portfolio/tocha" class="case-link">Посмотреть
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8.82422L9 0.824219" stroke="#9AD351" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 0.824219H9V8.82422" stroke="#9AD351" stroke-linecap="square" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <a href="/portfolio" class="btn-project">Показать ещё</a>
                </div>
            </div>
        </section>
        <section class="project">
            <div class="wrapper">
                <p class="project-text">Мы предоставляем <span class="text-color">весь спектр услуг</span> для вашего digital-проекта: <span class="text-color">от</span> разработки сайта <span class="text-color">и</span> мобильных приложений <span class="text-color">до </span> продвижения проекта в поисковых системах Яндекс и Google.
                </p>
                <a href="project/new" class="btn-project">Начать проект</a>
            </div>
        </section>
    </main>
    </body>
@endsection
