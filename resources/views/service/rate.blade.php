@extends('layouts.app')
<head>
    <title>Комплексные тарифы и выгодные предложения</title>
    <meta name="description" content="Если вы не знаете, с чего начать, то вам стоит обратить внимание на наши комплексные тарифы - идеальные предложения для быстрого и легкого старта, ведь они включают в себя все базовые услуги и наше постоянное сопровождение на каждом этапе."/>
</head>
@section('content')
    <main>
        <section class="banner">
            <div class="wrapper">
                <div class="content">
                    <div class="seo-banner-top">
                        <h1 class="title">Комплексные тарифы</h1>
                    </div>
                    <div class="seo-banner-bottom">
                        <h2 class="seo-banner-description">Не знаете с чего начать <br/> развивать свой проект <br/> на просторах Интернета?</h2>
                        <div class="banner-content">
                            <p class="seo-content-text">Разрабатываем, оптимизируем и предлагаем точки роста.
                            </p>
                            <p class="seo-content-text">Есть множество способов развивать ваш бизнес в сети: начиная от личного блога и заканчивая полномасштабным сайтом. Команда Desire предлагает комплексные решения, где мы поможем вам на всех этапах развития.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="desicions">
            <div class="wrapper">
                <div class="content">
                    <h2 class="subTitle" style="margin-top: 80px;">выгодные предложения</h2>
                    <div class="desicionsBox">
                        <div class="desicionBox start-desicion">
                            <h3 class="desicion-title">Комплексное решение «START»</h3>
                            <p>Настало время выйти из тени офлайна и начать расширять бизнес. Интернет — идеальное место для поиска новых клиентов!</p>
                            <p>Начни жизнь своего проекта в Интернете при помощи нашего комплексного решения «START». Наши специалисты займутся всеми этапами разработки и оптимизации.</p>
                            <span>МЫ СДЕЛАЕМ:</span>
                            <ul>
                                <li>Дизайн, разработку, контент и запуск сайта</li>
                                <li>Оптимизацию и организуем техническую поддержку</li>
                                <li>Маркетинговые стратегии для продвижения и соцсетей</li>
                            </ul>
                            <div class="desicion-btns">
                                <a href="/complex-tariffs/start"><button class="about-btn">Подробнее</button></a>
                                <a href="/new-project"><button class="order-btn">Заказать</button></a>
                            </div>
                        </div>
                        <div class="desicionBox arrow-desicion">
                            <span class="desicion-special">Экстремально быстрый тариф для тех, кто не любит ждать</span>
                            <h3 class="desicion-title">разработка сайта NoCode - ARROW</h3>
                            <p>Идеальный способ начать развитие в Интернете быстро и без огромных финансовых вложений.<br/>Разработка NoCode — это отличное решение для бизнеса.</p>
                            <p>Мы знаем, как важно быстро запустить сайт для нового проекта. Разработка без кода идеальный вариант для этого — вы не теряете качество, а получаете отличный результат.</p>
                            <span class="desicion-todo">МЫ СДЕЛАЕМ:</span>
                            <ul>
                                <li>Дизайн, ориентированный на вашу целевую аудиторию</li>
                                <li>Перенос сайта на CMS, контент и тестирование</li>
                                <li>Оптимизацию и организуем техническую поддержку</li>
                            </ul>
                            <div class="desicion-btns">
                                <a href="/complex-tariffs/arrow"><button class="about-btn">Подробнее</button></a>
                                <a href="/new-project"><button class="order-btn">Заказать</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cases">
            <div class="wrapper" style="max-width: 100%;">
                <div class="wrapper">
                    <h2 class="subTitle">Кейсы</h2>
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
                                <img src="{{asset('assets/svg/swiper-left.svg')}}" alt="стрелочка влево" />
                            </div>
                            <div class="swiper-button-next">
                                <img src="{{asset('assets/svg/swiper-right.svg')}}" alt="стрелочка вправо" />
                            </div>
                        </div>
                </div>
                <div class="swiper-pagination"></div>
                <a href="/projects"><button class="cases-btn">Смотреть все</button></a>
            </div>
        </section>
        <section class="project" style="border: none">
            <div class="wrapper">
                <p class="project-text">Мы предоставляем <span class="text-color">весь спектр услуг</span> для вашего digital-проекта: <span class="text-color">от</span> разработки сайта <span class="text-color">и</span> мобильных приложений <span class="text-color">до </span> продвижения проекта в поисковых системах Яндекс и Google.
                </p>
                <a href="/new-project" class="btn-project">Начать проект</a>
            </div>
        </section>
    </main>
@endsection
