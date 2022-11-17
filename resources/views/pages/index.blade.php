@extends('layouts.app')
    <head>
        <title>Web-дизайн, разработка и продвижение - Desire</title> 
        <meta name="description" content="Первый шаг к успеху - желание. 
            В Desire всё просто: вы приходите к нам с запросом, а мы быстро, красиво и эффективно его воплощаем в жизнь так, чтобы вам понравилось. Ведь лучший результат - тот, от которого без ума сам клиент, верно?."
        /> 
    </head>
@section('content')
    <main class="mainPage-content">
        <section class="banner">
            <div class="desire_p p_1">desire</div>
            <div class="desire_p p_2">desire</div>
            <div class="desire_p p_3">desire</div>
            <div class="desire_p p_4">desire</div>
            <div class="wrapper">
                <div class="content">
                    <div class="content-text">
                        <h1 class="title">Cоздаём <br/> и продвигаем</h1>
                        <p>Мы стремимся реализовывать потенциал каждой идеи, которая есть у наших клиентов.</p>
                    </div>
                    <a href="/project/new" class="content-logo">
                        <img class="logo-text" src="{{asset('assets/svg/button-text.svg')}}" alt="кнопка начать проект" />
                        <img class="logo-arrow" src="{{asset('assets/svg/arrowLogo.svg')}}" alt="стрелка" />
                    </a>
                </div>
            </div>
        </section>
        <section class="main_wrap">
            <div class="white_wrap block-animation">
                <div class="div_ul ul_white marquee3k" data-speed="0.5" data-reverse="true">
                    <ul>
                        <li>кто мы</li>
                        <li>кто мы</li>
                        <li>кто мы</li>
                        <li>кто мы</li>
                        <li>кто мы</li>
                        <li>кто мы</li>
                        <li>кто мы</li>
                        <li>кто мы</li>
                        <li>кто мы</li>
                        <li>кто мы</li>
                        <li>кто мы</li>
                        <li>кто мы</li>
                    </ul>
                </div>
                <div class="wrapper">
                    <div class="white_logo">
                        Мы <br /> DESIRE
                    </div>
                    <div class="white_wrap_p">
                        <div>
                            <h2>Мы ориентируемся на ваши цели, помогая выйти на новый уровень: не просто «быть», а «менять мир»</h2>
                        </div>
                        <div class="text-box" style="display: flex;">
                            <div>
                                <p>Наша команда всегда знает, как реализовать любую, даже самую смелую идею. Мы помогаем вам начать свой путь в e-commerce</p>
                            </div>
                            <div>
                                <p>Ориентируемся на клиента, создаем новое, меняем старое до неузнаваемости!</p>
                                <div class="white_a"><a href="/portfolio">Познакомиться поближе</a>
                                    <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="black_wrap block-animation">
                <div class="div_ul ul_black marquee3k" data-speed="0.5" data-reverse="true">
                    <ul>
                        <li>Что мы делаем</li>
                        <li>Что мы делаем</li>
                        <li>Что мы делаем</li>
                        <li>Что мы делаем</li>
                        <li>Что мы делаем</li>
                        <li>Что мы делаем</li>
                        <li>Что мы делаем</li>
                        <li>Что мы делаем</li>
                        <li>Что мы делаем</li>
                        <li>Что мы делаем</li>
                        <li>Что мы делаем</li>
                    </ul>
                </div>
                <div class="wrapper">
                    <div class="whatWeDo-content">
                        <div class="black_wrap_wrap_content">
                            <div class="h1_wrap">разработка</div>
                            <div class="wrap_ul">
                                <ul>
                                    <li>Лендинг</li>
                                    <li>Корпоративный сайт</li>
                                    <li>Интернет-Магазин</li>
                                    <li>Мобильное приложение</li>
                                    <li>Исправление ошибок</li>
                                </ul>
                            </div>
                            <a href="/service/web" class="wrap_button">
                                <button>Подробнее</button>
                            </a>
                        </div>
                        <div class="black_wrap_wrap_content">
                            <div class="h1_wrap">продвижение</div>
                            <div class="wrap_ul">
                                <ul>
                                    <li>SEO-аудит</li>
                                    <li>SMM</li>
                                    <li>Маркетинг-стратегия</li>
                                    <li>Оптимизация</li>
                                    <li>Продвижение в ТОП</li>
                                </ul>
                            </div>
                            <a href="/service/promotion" class="wrap_button">
                                <button>Подробнее</button>
                            </a>
                        </div>
                        <div class="black_wrap_wrap_content">
                            <div class="h1_wrap">дизайн</div>
                            <div class="wrap_ul">
                                <ul>
                                    <li>Лендинг</li>
                                    <li>Корпоративный сайт</li>
                                    <li>Интернет-магазин</li>
                                    <li>Редизайн сайта</li>
                                    <li>Дизайн сайта или приложения</li>
                                </ul>
                            </div>
                            <a href="/service/web" class="wrap_button">
                                <button>Подробнее</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white_wrap  block-animation">
                <div class="div_ul ul_white  marquee3k" data-speed="0.5" data-reverse="true">
                    <ul>
                        <li>портфолио</li>
                        <li>портфолио</li>
                        <li>портфолио</li>
                        <li>портфолио</li>
                        <li>портфолио</li>
                        <li>портфолио</li>
                        <li>портфолио</li>
                        <li>портфолио</li>
                        <li>портфолио</li>
                        <li>портфолио</li>
                    </ul>
                </div>
                <div class="white_wrap_wrap_slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="/portfolio/noiseland"><img class="slider-img" src="{{asset('assets/img/slider-image-1.png')}}" alt="Обложка проекта" /></a>
                                <div class="swiper-slide-main">
                                    <h3 class="swiper-slide-title">NoiceLand </h3>
                                    <a href="/portfolio/noiseland">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <a href="/portfolio/dolfie"><img class="slider-img" src="{{asset('assets/img/slider-image-2.png')}}" alt="Обложка проекта" /></a>
                                <div class="swiper-slide-main">
                                    <h3 class="swiper-slide-title">Dolfie: Hard to choose. Easy to wear</h3>
                                    <a href="/portfolio/dolfie">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <a href="/portfolio/hike"><img class="slider-img" src="{{asset('assets/img/slider-image-3.png')}}" alt="Обложка проекта" /></a>
                                <div class="swiper-slide-main">
                                    <h3 class="swiper-slide-title">Hike: Выбери свой маршрут для похода</h3>
                                    <a href="/portfolio/hike">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <a href="/portfolio/tocha"><img class="slider-img" src="{{asset('assets/img/slider-image-4.png')}}" alt="Обложка проекта" /></a>
                                <div class="swiper-slide-main">
                                    <h3 class="swiper-slide-title">Tocha: Telegram чат на вашем сайте</h3>
                                    <a href="/portfolio/tocha">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-buttons">
                            <div class="swiper-button-prev">
                                <img src="{{asset('assets/svg/swiper-left.svg')}}" alt="стрелочка влево"/>
                            </div>
                            <div class="swiper-button-next">
                                <img src="{{asset('assets/svg/swiper-right.svg')}}" alt="стрелочка вправо"/>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="wrap_button_white">
                    <a href="/portfolio" class="wrap_button">
                        <button>Смотреть всё</button></a>
                </div>
            </div>
            <div class="black_wrap  block-animation">
                <div class="div_ul ul_black  marquee3k" data-speed="0.5" data-reverse="true">
                    <ul>
                        <li>Как мы работаем</li>
                        <li>Как мы работаем</li>
                        <li>Как мы работаем</li>
                        <li>Как мы работаем</li>
                        <li>Как мы работаем</li>
                        <li>Как мы работаем</li>
                        <li>Как мы работаем</li>
                        <li>Как мы работаем</li>
                        <li>Как мы работаем</li>
                        <li>Как мы работаем</li>
                        <li>Как мы работаем</li>
                    </ul>
                </div>
                <div class="wrapper" style="flex-direction: column;  align-items: normal;">
                    <div class="timeline">
                        <ol class="timeline__inner">
                            <li class="timeline__item">
                                <div class="timeline-item">
                                    <div class="timeline-item__title">Знакомство</div>
                                    <div class="timeline-item__info">Мы создали отдельный блок для каждого направления, где вы сможете узнать больше о наших услугах и их ценовой диапазон</div>
                                </div>
                            </li>
                            <li class="timeline__item">
                                <div class="timeline-item">
                                    <div class="timeline-item__title">Оформление заказа</div>
                                    <div class="timeline-item__info">Оставьте заявку нам в Telegram, через сайт или по рабочей почте и мы с вами свяжемся</div>
                                </div>
                            </li>
                            <li class="timeline__item">
                                <div class="timeline-item">
                                    <div class="timeline-item__title">Оценка</div>
                                    <div class="timeline-item__info">Мы ответим на любые интересующие вас вопросы, предоставим примерную оценку работы, а также уточним все важные детали</div>
                                </div>
                            </li>
                            <li class="timeline__item">
                                <div class="timeline-item">
                                    <div class="timeline-item__title">Оплата</div>
                                    <div class="timeline-item__info">Гарантируем безопасную сделку по договору и предлагаем несколько вариантов оплаты</div>
                                </div>
                            </li>
                            <li class="timeline__item">
                                <div class="timeline-item">
                                    <div class="timeline-item__title">Исполнение</div>
                                    <div class="timeline-item__info">После создания заказа берём его в работу, отправляем промежуточные отчёты и поддерживаем связь с вами</div>
                                </div>
                            </li>
                            <li></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="white_wrap  block-animation">
                <div class="white_wrap_pp">
                    <p>Мы предоставляем <span>весь спектр услуг</span> для вашего digital-проекта: <span>от</span>
                        разработки сайта <span>и</span> мобильных приложений <span>до</span> продвижения проекта в
                        поисковых системах Яндекс и Google.
                    </p>
                </div>
                <div class="wrap_button_white wrap_button_green" style="margin-bottom: 0;">
                    <a href="/project/new">
                        <button style="margin-top: 0">Начать проект</button></a>
                </div>
            </div>
        </section>
    </main>
@endsection
