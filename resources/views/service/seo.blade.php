@extends('layouts.app')

<head>
    <title>Услуги продвижения и SEO-оптимизации</title>
    <meta name="description" content="Продвижение и SEO - это и про творчество тоже: мы разрабатываем индивидуальные, отвечающие вашим целям и запросам SEO-стратегии, ориентируясь на результат и максимальное привлечение клиентов." />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Услуги продвижения и SEO-оптимизации - Desire">
    <meta property="og:url" content="https://desire-company.com/promotion">
    <meta property="og:image" content="https://desire-company.com/assets/img/snippet-image.png">
    <meta property="og:description" content="Продвижение и SEO - это и про творчество тоже: мы разрабатываем индивидуальные, отвечающие вашим целям и запросам SEO-стратегии, ориентируясь на результат и максимальное привлечение клиентов.">
</head>
@section('content')
<main class="main">
    <section class="banner">
        <div class="wrapper">
            <div class="content">
                <div class="seo-banner-top">
                    <h1 class="title">Продвижение</h1>
                </div>
                <div class="seo-banner-bottom">
                    <h2 class="seo-banner-description">Оптимизируем и продвигаем сайты в ТОП, чтобы ваша целевая
                        аудитория всегда могла вас найти.</h2>
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
                    <input type="checkbox" class="toggler" />
                    <div class="tab-leftPart">
                        <h3 class="tab-title">
                            <span class="tab-number">
                                /01
                            </span>
                            Basic
                        </h3>
                        <a href="/new-project" class="btn">Заказать</a>
                    </div>
                    <div class="tab-rightPart">
                        <p class="text">
                            Только запустили свой сайт и не знаете, что с ним делать дальше? Или вы на рынке уже
                            несколько лет, и вдруг ваш сайт проседает в посещаемости?<br /><br />
                            В рамках <span class="text-color">Basic</span> оптимизации мы работаем на стабилизацию
                            вашего сайта по критериям поисковых систем и трафика на нем
                        </p>
                        <span class="toggle">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5 7.29199V27.7087" stroke="#282828" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.29199 17.5H27.7087" stroke="#282828" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </label>
                <div class="hidden-content">
                    <div class="hidden-wrapper">
                        <label class="tab-wrapper">
                            <input type="checkbox" class="toggler" />
                            <span class="subtitle">
                                Что мы сделаем
                            </span>
                            <div class="hidden-content">
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
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 7.29199V27.7087" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.29199 17.5H27.7087" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </label>
                    </div>
                    <div class="hidden-wrapper">
                        <label class="tab-wrapper">
                            <input type="checkbox" class="toggler" />
                            <span class="subtitle">
                                Что вы получите
                            </span>
                            <div class="hidden-content">
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
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 7.29199V27.7087" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.29199 17.5H27.7087" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </label>
                    </div>
                    <div class="hidden-wrapper">
                        <div class="tab-wrapper">
                            <span class="subtitle">
                                Стоимость
                            </span>
                            <p class="price">от 30 000 руб.</p>
                            <span class="credit">рассрочка и кредит</span>
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
                        <a href="/new-project" class="btn">Заказать</a>
                    </div>
                    <div class="tab-rightPart">
                        <p class="text">
                            У вас уже работающий сайт, но продажи не идут? Не знаете, как исправить ошибки на сайте, чтобы клиенты быстро находили вас и ваши лучшие предложения?
                            В рамках <span class="text-color"> Middle</span> оптимизации мы работаем на развитие вашего сайта и рост трафика на нем
                        </p>
                        <span class="toggle">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5 7.29199V27.7087" stroke="#282828" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.29199 17.5H27.7087" stroke="#282828" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </label>
                <div class="hidden-content">
                    <div class="hidden-wrapper">
                        <label class="tab-wrapper">
                            <input type="checkbox" class="toggler" />
                            <span class="subtitle">
                                Что мы сделаем
                            </span>
                            <div class="hidden-content">
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
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 7.29199V27.7087" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.29199 17.5H27.7087" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </label>
                    </div>
                    <div class="hidden-wrapper">
                        <label class="tab-wrapper">
                            <input type="checkbox" class="toggler" />
                            <span class="subtitle">
                                Что вы получите
                            </span>
                            <div class="hidden-content">
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
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 7.29199V27.7087" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.29199 17.5H27.7087" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </label>
                    </div>
                    <div class="hidden-wrapper">
                        <div class="tab-wrapper">
                            <span class="subtitle">
                                Стоимость
                            </span>
                            <p class="price">от 50 000 руб.</p>
                            <span class="credit">рассрочка и кредит</span>
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
                        <a href="/new-project" class="btn">Заказать</a>
                    </div>
                    <div class="tab-rightPart">
                        <p class="text">
                            Нужно быстро вырваться в лидеры вашей отрасли? Хотите оставить всех конкурентов позади?
                            В рамках <span class="text-color"> premium</span> оптимизации мы работаем на выведение вашего сайта в ТОП поисковиков и рост трафика на нем.
                        </p>
                        <span class="toggle">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.5 7.29199V27.7087" stroke="#282828" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.29199 17.5H27.7087" stroke="#282828" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </label>
                <div class="hidden-content">
                    <div class="hidden-wrapper">
                        <label class="tab-wrapper">
                            <input type="checkbox" class="toggler" />
                            <span class="subtitle">
                                Что мы сделаем
                            </span>
                            <div class="hidden-content">
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
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 7.29199V27.7087" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.29199 17.5H27.7087" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </label>
                    </div>
                    <div class="hidden-wrapper">
                        <label class="tab-wrapper">
                            <input type="checkbox" class="toggler" />
                            <span class="subtitle">
                                Что вы получите
                            </span>
                            <div class="hidden-content">
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
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 7.29199V27.7087" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.29199 17.5H27.7087" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </label>
                    </div>
                    <div class="hidden-wrapper">
                        <div class="tab-wrapper">
                            <span class="subtitle">
                                Стоимость
                            </span>
                            <p class="price">от 80 000 руб.</p>
                            <span class="credit">рассрочка и кредит</span>
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
                        <a href="/projects/noiceland"><img class="slider-img" src="{{asset('assets/img/slider-image-1.png')}}" alt="Обложка проекта - NOICELAND" /></a>
                        <div class="swiper-slide-main">
                            <h3 class="swiper-slide-title">NoiceLand </h3>
                            <a href="/projects/noiceland">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх" /> </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <a href="/projects/dolfie"><img class="slider-img" src="{{asset('assets/img/slider-image-2.png')}}" alt="Обложка проекта - DOLFIE" /></a>
                        <div class="swiper-slide-main">
                            <h3 class="swiper-slide-title">Dolfie: Hard to choose. Easy to wear</h3>
                            <a href="/projects/dolfie">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх" /> </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <a href="/projects/hike"><img class="slider-img" src="{{asset('assets/img/slider-image-3.png')}}" alt="Обложка проекта - HIKE" /></a>
                        <div class="swiper-slide-main">
                            <h3 class="swiper-slide-title">Hike: Выбери свой маршрут для похода</h3>
                            <a href="/projects/hike">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх" /> </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <a href="/projects/tocha"><img class="slider-img" src="{{asset('assets/img/slider-image-4.png')}}" alt="Обложка проекта - TOCHA" /></a>
                        <div class="swiper-slide-main">
                            <h3 class="swiper-slide-title">Tocha: Telegram чат на вашем сайте</h3>
                            <a href="/projects/tocha">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх" /> </a>
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
            <a href="/projects">
                <button class="cases-btn">Смотреть все</button>
            </a>
        </div>
    </section>
    <section class="desicions">
        <div class="wrapper">
            <div class="content">
                <h2 class="subTitle">выгодные предложения</h2>
                <div class="desicionsBox">
                    <div class="desicionBox">
                        <h3 class="desicion-title">Тариф «INFLUENCER»</h3>
                        <p>Развиваться в медиа пространстве означает идти в ногу со своими клиентам. Большая аудитория, которой интересен именно ваш продукт — вот, в чем залог успеха.</p>
                        <p>Команда Desire поможет оформить и запустить социальные сети, а также наполнить их необычным контентом!</p>
                        <span>МЫ СДЕЛАЕМ:</span>
                        <ul>
                            <li>Создадим, настроим и заполним соцсети</li>
                            <li>Оформим всю айдентику и визуал</li>
                            <li>Напишем необходимый для быстрого старта контент и оптимизируем его</li>
                        </ul>
                        <div class="desicion-btns">
                            <a href="/complex-tariffs/influencer"><button class="about-btn">Подробнее</button></a>
                            <a href="/new-project"><button class="order-btn">Заказать</button></a>
                        </div>
                    </div>
                    <div class="desicionBox">
                        <h3 class="desicion-title">Тариф «FULL DIGITAL»</h3>
                        <p>Маркетинг — основная составляющая любого типа бизнеса. Увеличения трафика, лидов, выстраивание брендирования, а также популяризация вашей компании и управление её репутацией — все это лишь малая часть того, что может компани Desire.</p>
                        <span>МЫ СДЕЛАЕМ:</span>
                        <ul>
                            <li>Создадим социальные сети, настроим и заполним</li>
                            <li>Предложим варианты продвижения через кросс-сейл и апсейл системы</li>
                            <li>Сформируем стратегию рекламной кампании онлайн (таргетированная и контекстная реклама) и офлайн</li>
                        </ul>
                        <div class="desicion-btns">
                            <a href="/complex-tariffs/full-digital"><button class="about-btn">Подробнее</button></a>
                            <a href="/new-project"><button class="order-btn">Заказать</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project">
        <div class="wrapper">
            <p class="project-text">Мы предоставляем <span class="text-color">весь спектр услуг</span> для вашего
                digital-проекта: <span class="text-color">от</span> разработки сайта <span class="text-color">и</span> мобильных приложений <span class="text-color">до </span> продвижения
                проекта в поисковых системах Яндекс и Google.
            </p>
            <a href="/new-project" class="btn-project">Начать проект</a>
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
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "Продвижение",
            "item": "https://desire-company.com/promotion"
        }]
    }
</script>

@endsection