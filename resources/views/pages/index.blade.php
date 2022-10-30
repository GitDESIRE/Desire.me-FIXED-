@extends('layouts.app')
@section('content')

<body>
    <main class="mainPage-content">
        <section class="banner">
            <div class="desire_p p_1">desire</div>
            <div class="desire_p p_2">desire</div>
            <div class="desire_p p_3">desire</div>
            <div class="desire_p p_4">desire</div>
            <div class="wrapper">
                <div class="content">
                    <div class="content-text">
                        <h1 class="title">Cоздаём и продвигаем</h1>
                        <p>Мы не только создаём и развиваем digital-проекты, <br /> но и наглядно показываем, как они работают.</p>
                    </div>
                    <a href="project/new" class="content-logo">
                        <img class="logo-circle" src="{{asset('assets/svg/textLogo.svg')}}" alt="кнопка начать проект" />
                        <img class="logo-arrow" src="{{asset('assets/svg/arrowLogo.svg')}}" alt="стрелка" />
                    </a>
                </div>
            </div>
        </section>
        <section class="main_wrap">
            <div class="white_wrap">
                <div class="div_ul ul_white">
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
                            <h1>Делаем незаурядные digital проекты, которые привлекают внимание и клиентов</h1>
                        </div>
                        <div class="text-box" style="display: flex;">
                            <div>
                                <p>Наша команда всегда знает, как реализовать любую, даже самую смелую идею. Мы помогаем вам начать свой путь в e-commerce</p>
                            </div>
                            <div>
                                <p>Ориентируемся на клиента, создаем новое, меняем старое до неузнаваемости!</p>
                                <div class="white_a"><a href="about">Познакомиться поближе</a>
                                    <img src="{{asset('assets/img/arrow-up-right.png')}}" alt="стрелка вверх">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="black_wrap">
                <div class="div_ul ul_black">
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
                        <a href="service/web" class="wrap_button">
                            <button>Подробнее</button>
                        </a>
                    </div>
                    <div class="black_wrap_wrap_content">
                        <div class="h1_wrap">seo</div>
                        <div class="wrap_ul">
                            <ul>
                                <li>SEO-аудит</li>
                                <li>SMM</li>
                                <li>Маркетинг-стратегия</li>
                                <li>Оптимизация</li>
                                <li>Продвижение в ТОП</li>
                            </ul>
                        </div>
                        <a href="service/seo" class="wrap_button">
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
                        <a href="web" class="wrap_button">
                            <button>Подробнее</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="white_wrap">
                <div class="div_ul ul_white">
                    <ul>
                        <li>порфолио</li>
                        <li>порфолио</li>
                        <li>порфолио</li>
                        <li>порфолио</li>
                        <li>порфолио</li>
                        <li>порфолио</li>
                        <li>порфолио</li>
                        <li>порфолио</li>
                        <li>порфолио</li>
                        <li>порфолио</li>
                    </ul>
                </div>
                <div class="white_wrap_wrap_slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img class="slider-img" src="{{asset('assets/img/swiper-image.png')}}" alt="Обложка проекта" />
                            <div class="swiper-slide-main">
                              <h3 class="swiper-slide-title">Veloretti: Discover <br/> World with Us</h3>
                              <a href="portfolio">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <img class="slider-img" src="{{asset('assets/img/swiper-image.png')}}" alt="Обложка проекта" />
                            <div class="swiper-slide-main">
                              <h3 class="swiper-slide-title">Veloretti: Discover <br/> World with Us</h3>
                              <a href="portfolio">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <img class="slider-img" src="{{asset('assets/img/swiper-image.png')}}" alt="Обложка проекта" />
                            <div class="swiper-slide-main">
                              <h3 class="swiper-slide-title">Veloretti: Discover <br/> World with Us</h3>
                              <a href="portfolio">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх"/> </a>
                            </div>
                          </div>
                        </div>
                        <!-- Доделать пагинацию у свайпера -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                      </div>
                      <div class="swiper-pagination"></div>
                </div>
                <div class="wrap_button_white">
                    <button>Смотреть всё</button>
                </div>
            </div>
            <div class="black_wrap">
                <!-- Переделать под адаптив -->
                <div class="div_ul ul_black">
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
                <div class="wrapper" style="flex-direction: column;">
                    <div class="black_wrap_content wrap_how_we_work">
                        <div class="black_wrap_wrap_content how_we_work">
                            <div class="h1_wrap h1_wrap_how_we_work">знакомство</div>
                            <div class="wrap_ul">
                                <p>Мы создали отдельный блок для каждого направления, где вы сможете узнать больше о наших
                                    услугах и их ценовой диапазон</p>
                            </div>
                        </div>
                        <div class="black_wrap_wrap_content how_we_work">
                            <div class="h1_wrap h1_wrap_how_we_work">оценка</div>
                            <div class="wrap_ul">
                                <p>Мы ответим на любые интересующие вас вопросы, предоставим примерную оценку работы,
                                    а также уточним все важные детали</p>
                            </div>
                        </div>
                        <div class="black_wrap_wrap_content how_we_work">
                            <div class="h1_wrap h1_wrap_how_we_work">исполнение</div>
                            <div class="wrap_ul">
                                <p>После создания заказа берём его в работу, отправляем промежуточные отчётыи поддерживаем
                                    связь с вами</p>
                            </div>
                        </div>
                    </div>
                    <div class="qwerty_wrap">
                        <div class="qwerty _01"></div>
                        <div class="div_circle_wrap">&bull;
                            <div class="div_circle">01</div>
                        </div>
                        <div class="qwerty"></div>
                        <div class="div_circle_wrap">
                            <div class="div_circle _02">02</div>
                            &bull;
                        </div>
                        <div class="qwerty"></div>
                        <div class="div_circle_wrap">&bull;
                            <div class="div_circle">03</div>
                        </div>
                        <div class="qwerty"></div>
                        <div class="div_circle_wrap">
                            <div class="div_circle _02">04</div>
                            &bull;
                        </div>
                        <div class="qwerty _01"></div>
                        <div class="div_circle_wrap">&bull;
                            <div class="div_circle">05</div>
                        </div>
                        <div class="qwerty"></div>
                    </div>
                    <div class="black_wrap_content wrap_how_we_work_1">
                        <div class="black_wrap_wrap_content how_we_work_1">
                            <div class="h1_wrap h1_wrap_how_we_work">оформление заказа</div>
                            <div class="wrap_ul ul_wrap_how_we_work">
                                <p>Оставьте заявку нам в Telegram, через сайт или по рабочей почте и мы с вами свяжемся</p>
                            </div>
                        </div>
                        <div class="black_wrap_wrap_content how_we_work_1">
                            <div class="h1_wrap h1_wrap_how_we_work">оплата</div>
                            <div class="wrap_ul ul_wrap_how_we_work">
                                <p>Гарантируем безопасную сделку по договору и предлагаем несколько вариантов оплаты</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white_wrap">
                <div class="white_wrap_pp">
                    <p>Мы предоставляем <span>весь спектр услуг</span> для вашего digital-проекта: <span>от</span>
                        разработки сайта <span>и</span> мобильных приложений <span>до</span> продвижения проекта в
                        поисковых системах Яндекс и Google.
                    </p>
                </div>
                <div class="wrap_button_white wrap_button_green" style="margin-bottom: 0;">
                    <button  style="margin-top: 0">Начать проект</button>
                </div>
            </div>
        </section>
    </main>
</body>
@endsection
