@extends('layouts.app')
@section('content')
    <main class="main">
        <section class="banner">
            <div class="wrapper">
                <div class="content">
                    <div class="seo-banner-top">
                        <h1 class="title">SEO</h1>
                    </div>
                    <div class="seo-banner-bottom">
                        <p class="seo-banner-description">Оптимизируем и продвигаем сайты в ТОП, чтобы ваша целевая
                            аудитория всегда могла вас найти.</p>
                        <div class="banner-content">
                            <p class="seo-content-text">Мы объединяем лучшие технологии с профессионализмом для создания
                                индивидуальной стратегии SEO, которая принесет необходимые вам результаты. Команда наших
                                специалистов поможет повысить узнаваемость бренда и привлечь больше клиентов.
                            </p>
                            <p class="seo-content-text">Мы оказываем весь спектр услуг по оптимизации и продвижению
                                проектов для повышения видимости компании в поисковых системах Яндекс и Google и
                                привлечения новых клиентов.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="wrapper">
                <h2 class="services-title">Тарифы</h2>
            </div>
            <ul class="tabs">
                <li class="tab">
                    <label class="tab-wrapper">
                        <input type="checkbox" class="toggler"/>
                        <div class="tab-leftPart">
                            <h3 class="tab-title">
                                <span class="tab-number">
                                    /01
                                </span>
                                Basic
                            </h3>
                            <a href="#" class="btn">Заказать</a>
                        </div>
                        <div class="tab-rightPart">
                            <p class="text">
                                Только запустили свой сайт и не знаете, что с ним делать дальше? Или вы на рынке уже
                                несколько лет, и вдруг ваш сайт проседает в посещаемости?<br/><br/>
                                В рамках <span class="text-color">Basic</span> оптимизации мы работаем на стабилизацию
                                вашего сайта по критериям поисковых систем и трафика на нем
                            </p>
                            <span class="toggle">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 7.29199V27.7087" stroke="#282828" stroke-width="2"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M7.29199 17.5H27.7087" stroke="#282828" stroke-width="2"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </div>
                    </label>
                    <div class="hidden-content" style="display: none;">
                        <div class="hidden-wrapper">
                            <label class="tab-wrapper">
                                <input type="checkbox" class="toggler"/>
                                <h4 class="subtitle">
                                    Что мы сделаем
                                </h4>
                                <div class="hidden-content" style="display: none;">
                                    <ul class="task-list">
                                        <li class="task-item">
                                            SEO-аудит сайта
                                        </li>
                                        <li class="task-item">Технический аудит сайта
                                        </li>
                                        <li class="task-item">Оценка проекта и формирование стратегии
                                        </li>
                                        <li class="task-item">Формирование семантического ядра
                                        </li>
                                        <li class="task-item">Минимальная редактура контента
                                        </li>
                                        <li class="task-item">Контроль статистики сайта и показателей
                                        </li>
                                    </ul>
                                </div>
                                <span class="toggle">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5 7.29199V27.7087" stroke="#fff" stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.29199 17.5H27.7087" stroke="#fff" stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </label>
                        </div>
                        <div class="hidden-wrapper">
                            <label class="tab-wrapper">
                                <input type="checkbox" class="toggler"/>
                                <h4 class="subtitle">
                                    Что вы получите
                                </h4>
                                <div class="hidden-content" style="display: none;">
                                    <ul class="task-list">
                                        <li class="task-item">
                                            Правильно оптимизированный сайт
                                        </li>
                                        <li class="task-item">Естественный приток посетителей
                                        </li>
                                        <li class="task-item">Отличного партнера в виде компании Desire, который знает
                                            особенности вашего сайта и всегда готов помочь вашему бизнесу расти и
                                            дальше!
                                        </li>
                                    </ul>
                                </div>
                                <span class="toggle">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5 7.29199V27.7087" stroke="#fff" stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.29199 17.5H27.7087" stroke="#fff" stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </label>
                        </div>
                        <div class="hidden-wrapper">
                            <div class="tab-wrapper">
                                <h4 class="subtitle">
                                    Стоимость
                                </h4>
                                <p class="price">от 15 000 руб.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="tab">
                    <label class="tab-wrapper">
                        <input type="checkbox" class="toggler">
                        <div class="tab-leftPart">
                            <h3 class="tab-title">
                                <span class="tab-number">
                                    /02
                                </span>
                                Middle
                            </h3>
                            <a href="/project/new" class="btn">Заказать</a>
                        </div>
                        <div class="tab-rightPart">
                            <p class="text">
                                У вас уже работающий сайт, но продажи не идут? Не знаете, как исправить ошибки на сайте, чтобы клиенты быстро находили вас и ваши лучшие предложения?
                                В рамках <span class="text-color"> Middle</span> оптимизации мы работаем на развитие вашего сайта и рост трафика на нем
                            </p>
                            <span class="toggle">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 7.29199V27.7087" stroke="#282828" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    <path d="M7.29199 17.5H27.7087" stroke="#282828" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                    </label>
                    <div class="hidden-content" style="display: none;">
                        <div class="hidden-wrapper">
                            <label class="tab-wrapper">
                                <input type="checkbox" class="toggler"/>
                                <h4 class="subtitle">
                                    Что мы сделаем
                                </h4>
                                <div class="hidden-content" style="display: none;">
                                    <ul class="task-list">
                                        <li class="task-item">
                                            SEO-аудит сайта
                                        </li>
                                        <li class="task-item">Технический аудит сайта</li>
                                        <li class="task-item">Оценка проекта и формирование стратегии</li>
                                        <li class="task-item">Формирование семантического ядра
                                        </li>
                                        <li class="task-item">Минимальная редактура контента
                                        </li>
                                        <li class="task-item">Работа с юзабилити сайта
                                        </li>
                                        <li class="task-item">Повышение релевантности страниц
                                        </li>
                                        <li class="task-item">Доведение сайта до технического совершенства
                                        </li>
                                        <li class="task-item">Настройка Вебмастера
                                        </li>
                                        <li class="task-item">Контроль статистики сайта и показателей
                                        </li>
                                    </ul>
                                </div>
                                <span class="toggle">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5 7.29199V27.7087" stroke="#fff" stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.29199 17.5H27.7087" stroke="#fff" stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </label>
                        </div>
                        <div class="hidden-wrapper">
                            <label class="tab-wrapper">
                                <input type="checkbox" class="toggler"/>
                                <h4 class="subtitle">
                                    Что вы получите
                                </h4>
                                <div class="hidden-content" style="display: none;">
                                    <ul class="task-list">
                                        <li class="task-item">
                                            Идеально оптимизированный сайт
                                        </li>
                                        <li class="task-item">Естественный приток посетителей
                                        </li>
                                        <li class="task-item">Высокая релевантность (соответствие) сайта запросам
                                            потенциальных клиентов
                                        </li>
                                        <li class="task-item">Отличного партнера в виде компании Desire, который знает
                                            особенности вашего сайта и всегда готов помочь вашему бизнесу расти и
                                            дальше!
                                        </li>
                                    </ul>
                                </div>
                                <span class="toggle">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5 7.29199V27.7087" stroke="#fff" stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.29199 17.5H27.7087" stroke="#fff" stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </label>
                        </div>
                        <div class="hidden-wrapper">
                            <div class="tab-wrapper">
                                <h4 class="subtitle">
                                    Стоимость
                                </h4>
                                <p class="price">от 25 000 руб.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="tab">
                    <label class="tab-wrapper">
                        <input type="checkbox" class="toggler">
                        <div class="tab-leftPart">
                            <h3 class="tab-title">
                                <span class="tab-number">
                                    /03
                                </span>
                                Premium
                            </h3>
                            <a href="/project/new" class="btn">Заказать</a>
                        </div>
                        <div class="tab-rightPart">
                            <p class="text">
                                Нужно быстро вырваться в лидеры вашей отрасли? Хотите оставить всех конкурентов позади?
                                В рамках <span class="text-color"> premium</span> оптимизации мы работаем на выведение вашего сайта в ТОП поисковиков и рост трафика на нем.
                            </p>
                            <span class="toggle">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 7.29199V27.7087" stroke="#282828" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    <path d="M7.29199 17.5H27.7087" stroke="#282828" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                    </label>
                    <div class="hidden-content" style="display: none;">
                        <div class="hidden-wrapper">
                            <label class="tab-wrapper">
                                <input type="checkbox" class="toggler"/>
                                <h4 class="subtitle">
                                    Что мы сделаем
                                </h4>
                                <div class="hidden-content" style="display: none;">
                                    <ul class="task-list">
                                        <li class="task-item">
                                            SEO-аудит сайта
                                        </li>
                                        <li class="task-item">Технический аудит сайта</li>
                                        <li class="task-item">Аудит конкурентов</li>
                                        <li class="task-item">Разработка двух индивидуальных стратегий и оценка работ
                                        </li>
                                        <li class="task-item">Формирование семантического ядра
                                        </li>
                                        <li class="task-item">Редактура контента на сайте и написание нового при
                                            необходимости
                                        </li>
                                        <li class="task-item">Работа с юзабилити сайта
                                        </li>
                                        <li class="task-item">Повышение релевантности страниц
                                        </li>
                                        <li class="task-item">Доведение сайта до технического совершенства
                                        </li>
                                        <li class="task-item">Работа со ссылочной массой сайта
                                        </li>
                                        <li class="task-item">Запуск сайта на подходящих агрегаторах
                                        </li>
                                        <li class="task-item">Создание и настройка социальных сетей
                                        </li>
                                        <li class="task-item">Настройка Вебмастера
                                        </li>
                                        <li class="task-item">Контроль статистики сайта и показателей
                                        </li>
                                    </ul>
                                </div>
                                <span class="toggle">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5 7.29199V27.7087" stroke="#fff" stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.29199 17.5H27.7087" stroke="#fff" stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </label>
                        </div>
                        <div class="hidden-wrapper">
                            <label class="tab-wrapper">
                                <input type="checkbox" class="toggler"/>
                                <h4 class="subtitle">
                                    Что вы получите
                                </h4>
                                <div class="hidden-content" style="display: none;">
                                    <ul class="task-list">
                                        <li class="task-item">
                                            Идеально оптимизированный сайт
                                        </li>
                                        <li class="task-item">Естественный приток посетителей
                                        </li>
                                        <li class="task-item">Выход в ТОП поисковой выдачи
                                        </li>
                                        <li class="task-item">Настроенные социальные сети
                                        </li>
                                        <li class="task-item">Высокая релевантность (соответствие) сайта запросам
                                            потенциальных клиентов
                                        </li>
                                        <li class="task-item">Отличного партнера в виде компании Desire, который знает
                                            особенности вашего сайта и всегда готов помочь вашему бизнесу расти и
                                            дальше!
                                        </li>
                                    </ul>
                                </div>
                                <span class="toggle">
                                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5 7.29199V27.7087" stroke="#fff" stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                        <path d="M7.29199 17.5H27.7087" stroke="#fff" stroke-width="2"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </label>
                        </div>
                        <div class="hidden-wrapper">
                            <div class="tab-wrapper">
                                <h4 class="subtitle">
                                    Стоимость
                                </h4>
                                <p class="price">от 40 000 руб.</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
        <section class="cases">
            <div class="wrapper" style="max-width: 100%;">
                <div class="wrapper">
                    <h2 class="subTitle">Кейсы</h2>
                </div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="/portfolio/noiseland"><img class="slider-img" src="{{asset('assets/img/slider-image-1.png')}}" alt="Обложка проекта" /></a>
                            <div class="swiper-slide-main">
                                <h3 class="swiper-slide-title">NoiceLand <br/> </h3>
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
                    <div class="swiper-button-prev">
                        <img src="{{asset('assets/svg/swiper-left.svg')}}" alt="стрелочка влево"/>
                    </div>
                    <div class="swiper-button-next">
                        <img src="{{asset('assets/svg/swiper-right.svg')}}" alt="стрелочка вправо"/>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <a href="/portfolio">
                    <button class="cases-btn">Смотреть все</button>
                </a>
            </div>
        </section>
        <section class="desicions">
            <div class="wrapper">
                <div class="content">
                    <h2 class="subTitle">выгодные предложения</h2>
                    <div class="desicionsBox">
                        <div class="desicionBox start-desicion">
                            <h3 class="desicion-title">Комплексное решение «START»</h3>
                            <p>Настало время выйти из тени офлайна и начать расширять бизнес. Интернет — идеальное место
                                для поиска новых клиентов!</p>
                            <p>Начни жизнь своего проекта в Интернете при помощи нашего комплексного решения «START».
                                Наши специалисты займутся всеми этапами разработки и оптимизации.</p>
                            <span>МЫ СДЕЛАЕМ:</span>
                            <ul>
                                <li>Дизайн, разработку, контент и запуск сайта</li>
                                <li>Оптимизацию и организуем техническую поддержку</li>
                                <li>Маркетинговые стратегии для продвижения и соцсетей</li>
                            </ul>
                            <div class="desicion-btns">
                                <a href="/service/start">
                                    <button class="about-btn">Подробнее</button>
                                </a>
                                <a href="/project/new">
                                    <button class="order-btn">Заказать</button>
                                </a>
                            </div>
                        </div>
                        <div class="desicionBox arrow-desicion">
                            <span class="desicion-special">Экстремально быстрый тариф для тех, кто не любит ждать</span>
                            <h3 class="desicion-title">разработка сайта NoCode - ARROW</h3>
                            <p>Идеальный способ начать развитие в Интернете быстро и без огромных финансовых
                                вложений.<br/>Разработка NoCode — это отличное решение для бизнеса.</p>
                            <p>Мы знаем, как важно быстро запустить сайт для нового проекта. Разработка без кода
                                идеальный вариант для этого — вы не теряете качество, а получаете отличный
                                результат.</p>
                            <span>МЫ СДЕЛАЕМ:</span>
                            <ul>
                                <li>Дизайн, ориентированный на вашу целевую аудиторию</li>
                                <li>Перенос сайта на CMS, контент и тестирование</li>
                                <li>Оптимизацию и организуем техническую поддержку</li>
                            </ul>
                            <div class="desicion-btns">
                                <a href="/service/arrow">
                                    <button class="about-btn">Подробнее</button>
                                </a>
                                <a href="/project/new">
                                    <button class="order-btn">Заказать</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="project">
            <div class="wrapper">
                <p class="project-text">Мы предоставляем <span class="text-color">весь спектр услуг</span> для вашего
                    digital-проекта: <span class="text-color">от</span> разработки сайта <span
                        class="text-color">и</span> мобильных приложений <span class="text-color">до </span> продвижения
                    проекта в поисковых системах Яндекс и Google.
                </p>
                <a href="/project/new" class="btn-project">Начать проект</a>
            </div>
        </section>
    </main>
@endsection
