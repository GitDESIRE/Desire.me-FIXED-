@extends('layouts.app')

<head>
    <title>Услуги web-дизайна и разработки - Desire</title>
    <meta name="description" content="Практично. Индивидуально. Эффективно. Интуитивно понятный интерфейс, правильное позиционирование товаров и услуг - то, на что мы ориентируемся, работая над созданием уникальных дизайнов и продумывая структуру и логику сайта." />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Услуги web-дизайна и разработки - Desire">
    <meta property="og:url" content="https://desire-company.com/web-design-and-dev">
    <meta property="og:image" content="https://desire-company.com/assets/img/snippet-image.png">
    <meta property="og:description" content="Практично. Индивидуально. Эффективно. Интуитивно понятный интерфейс, правильное позиционирование товаров и услуг - то, на что мы ориентируемся, работая над созданием уникальных дизайнов и продумывая структуру и логику сайта.">
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
                "name": "Веб-дизайн и разработка",
                "item": "https://desire-company.com/web-design-and-dev"
            }]
        }
    </script>
</head>
@section('content')
<main class="main">
  <section class="dev-welcome">
      <div class="wrapper">
          <div class="welcome-content content">
            <div class="info-container">
                  <h1 class="title dev-title">Разработка</h1>
                  <p class="welcome-description">
                    Создаём сайты и приложения,
                    удобные в использовании
                  </p>

                  <div class="dev-timeline">
                    <ol class="timeline-src">
                      <li class=" dev-timeline-item">
                        <p class="dev-timeline-item__src">Мы ориентируемся на ваши цели</p>                     
                      </li>
                      <li class=" dev-timeline-item">
                       <p class="dev-timeline-item__src">Не нагружаем дизайн и помогаем вам преподносить товары и услуги так, чтобы их хотели приобрести</p>
                                          </li>
                      <li class=" dev-timeline-item">
                      
                        <p class="dev-timeline-item__src">Предоставляем весь спектр услуг по разработке: от создания сайта-визитки и сложных корпоративных сайтов до уникальных мобильных приложений</p>
                      </li>
                    </ol>
                  </div>
            </div>
            <div class="decor-container">
              <div class="main-link">
                <a href="/" class="main-link__src">Главная</a>
                <span class="main-link__span">Разработка</span>
              </div>
              <div class="spinner-container">
              <img src="{{asset('assets/svg/gear.svg')}}"  alt="" class="spinner-src">
              </div>
            </div>
          </div>
      </div>
  </section>
  <section class="services">
      <div class="wrapper"> <h2 class="services-title">что делаем</h2></div>
         
        
        <ul class="tabs-list">
          <li class="tabs-item">
        <div class="tab-container">
          <div class="tab__visible-part">
            <div class="tab-title">
              <div class="tab-header">
                <span class="tab-number">
                    /01
                </span>
              <span class="tab-header__text">  Лендинг</span>
              </div>
            <button type="button" class="btn-reset btn-fill order-btn invisible"> <a class="order-btn__link" href="/new-project">Заказать </a></button>
            </div>
            <div class="tab-description invisible">
              <p class="tab-description__text">
                Лендинги предназначены для предоставления одной услуги, товара или анонса какого-либо события. Создание лендингов для продвижения своих товаров и услуг в сети Интернет считается одним из самых эффективных маркетинговых инструментов
              </p>
              
            </div>
            <div class="tab-toggle-btn">
                
                  <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                
              </div>
        </div>   
            <div class="tab__hidden-part invisible">
                <div class="hidden-part-container wedo-landing-block">
                     
                      <h4 class="tab-sub-header">
                        Что мы сделаем
                      </h4>
                     
                        <ul class="task-list invisible but-not-now">
                          <li class="task-item">Аналитика и оценка
                          </li>
                          <li class="task-item">Техническое задание
                          </li>
                          <li class="task-item">Прототипирование и дизайн
                          </li>
                          <li class="task-item">Создание сайта и адаптивов на CMS или в коде
                          </li>
                          <li class="task-item">Тестирование, запуск сайта и базовая оптимизация
                          </li>
                        </ul>
                      
                        <div class="tab-toggle-btn">
                
                            <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                          
                        </div>
                    
                  </div>
                  <div class="hidden-part-container youget-landing-block">
                     
                    <h4 class="tab-sub-header">
                      Что вы получите
                    </h4>
                   
                      <ul class="task-list invisible but-not-now">
                        <li class="task-item">Готовый, работающий одностраничный сайт (лендинг)

                        </li>
                        <li class="task-item">Техническую поддержку вашего лендинга в течении 2 месяцев
                        </li>
                        <li class="task-item">Отличного партнера в виде компании Desire, который знает особенности вашего сайта и всегда готов помочь вашему бизнесу расти и дальше!
                        </li>
                      </ul>
                    
                      <div class="tab-toggle-btn">
                
                        <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                      
                    </div>
                  
                </div>
                <div class="hidden-part-container price-landing-block">
                    <h4 class="tab-sub-header price-sub-header">
                        Стоимость
                      </h4>
                      <span class="cost price-cost">от 30 000 ₽</p>
                </div>
                <div class="hidden-part-special">
                    <div class="special-container">
                    <div class="chip special-chip">рассрочка</div>
                    <span class="cost special-cost">от 20 800 ₽ / мес.</span>
                    <span class="page-link special-link modal-link">Подробнее</span>
                </div>
    
                </div>
            </div>

           
            </div>
            

          </li>
          <li class="tabs-item">
            <div class="tab-container">
              <div class="tab__visible-part">
                <div class="tab-title">
                  <div class="tab-header">
                    <span class="tab-number">
                        /02
                    </span>
                    <span class="tab-header__text">корпоративный сайт</span>
                </div>
                <button type="button" class="btn-reset btn-fill order-btn invisible"><a class="order-btn__link" href="/new-project">Заказать </a></button>
                </div>
                <div class="tab-description invisible">
                  <p class="tab-description__text">
                    Корпоративный сайт - многостраничник, где предоставлена 
                    максимально полная информация о компании, услугах, команде,
                     проектах и всей деятельности, которой компания занимается.
                  </p>
                  
                </div>
                <div class="tab-toggle-btn">
                    
                      <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                    
                  </div>
            </div>   
                <div class="tab__hidden-part invisible">
                    <div class="hidden-part-container wedo-landing-block">
                         
                          <h4 class="tab-sub-header">
                            Что мы сделаем
                          </h4>
                         
                            <ul class="task-list invisible but-not-now">
                              <li class="task-item">Аналитика и оценка
                              </li>
                              <li class="task-item">Техническое задание
                              </li>
                              <li class="task-item">Прототипирование и дизайн
                              </li>
                              <li class="task-item">Создание сайта и адаптивов на CMS или в коде
                              </li>
                              <li class="task-item">Тестирование, запуск сайта и базовая оптимизация
                              </li>
                            </ul>
                          
                            <div class="tab-toggle-btn">
                    
                                <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                              
                            </div>
                        
                      </div>
                      <div class="hidden-part-container youget-landing-block">
                         
                        <h4 class="tab-sub-header">
                          Что вы получите
                        </h4>
                       
                          <ul class="task-list invisible but-not-now">
                            <li class="task-item">Проработанный и надежный сайт вашей компании
    
                            </li>
                            <li class="task-item">Качество выполненных работа и быстрый запуск вашего сайта
                            </li>
                            <li class="task-item">Техническую поддержку вашего корпоративного сайта от команды наших разработчиков в течении 3 месяцев
                            </li>
                            <li class="task-item">Отличного партнера в виде компании Desire, который может реализовать ваш проект и всегда готов помочь вашему бизнесу расти и дальше!
                            </li>
                          </ul>
                        
                          <div class="tab-toggle-btn">
                    
                            <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                          
                        </div>
                      
                    </div>
                    <div class="hidden-part-container price-landing-block">
                        <h4 class="tab-sub-header price-sub-header">
                            Стоимость
                          </h4>
                          <span class="cost price-cost">от 60 000 ₽</p>
                    </div>
                    <div class="hidden-part-special">
                        <div class="special-container">
                        <div class="chip special-chip">рассрочка</div>
                        <span class="cost special-cost">от 20 800 ₽ / мес.</span>
                        <span class="page-link special-link modal-link">Подробнее</span>
                    </div>
        
                    </div>
                </div>
    
               
                </div>
                
    
              </li>
              <li class="tabs-item">
                <div class="tab-container">
                  <div class="tab__visible-part">
                    <div class="tab-title">
                      <div class="tab-header">
                        <span class="tab-number">
                            /03
                        </span>
                        <span class="tab-header__text">интернет-магазин</span>
                    </div>
                    <button type="button" class="btn-reset btn-fill order-btn invisible"><a class="order-btn__link" href="/new-project">Заказать </a></button>
                    </div>
                    <div class="tab-description invisible">
                      <p class="tab-description__text">
                        Интернет-магазин - это полноценная платформа для продаж с возможностью онлайн оплаты.
                         Реализация сайта интернет-магазина позволит продавать ваши товары или услуги в любое 
                         время суток и в любую точку мира.
                      </p>
                      
                    </div>
                    <div class="tab-toggle-btn">
                        
                          <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                        
                      </div>
                </div>   
                    <div class="tab__hidden-part invisible">
                        <div class="hidden-part-container wedo-landing-block">
                             
                              <h4 class="tab-sub-header">
                                Что мы сделаем
                              </h4>
                             
                                <ul class="task-list invisible but-not-now">
                                  <li class="task-item">Аналитика и оценка
                                  </li>
                                  <li class="task-item">Техническое задание
                                  </li>
                                  <li class="task-item">Прототипирование и дизайн
                                  </li>
                                  <li class="task-item">Создание сайта и адаптивов на CMS или в коде
                                  </li>
                                  <li class="task-item">Подключение системы оплаты внутри сайта и CRM-системы
                                  </li>
                                  <li class="task-item">Тестирование, запуск сайта и базовая оптимизация
                                  </li>
                                </ul>
                              
                                <div class="tab-toggle-btn">
                        
                                    <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                                  
                                </div>
                            
                          </div>
                          <div class="hidden-part-container youget-landing-block">
                             
                            <h4 class="tab-sub-header">
                              Что вы получите
                            </h4>
                           
                              <ul class="task-list invisible but-not-now">
                                <li class="task-item">Проработанный и надежный сайт для продажи ваших товаров и услуг в Интернете
        
                                </li>
                                <li class="task-item">Подключенная система внутренних платежей и CRM
                                </li>
                                <li class="task-item">Качество выполненных работ и быстрый запуск вашего сайта
                                </li>
                                <li class="task-item">Техническую поддержку вашего интернет-магазина от команды наших разработчиков в течении 3 месяцев
                                </li>
                                <li class="task-item">Отличного партнера в виде компании Desire, который знает особенности вашего сайта и всегда готов помочь вашему бизнесу расти и дальше!
                                </li>
                              </ul>
                            
                              <div class="tab-toggle-btn">
                        
                                <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                              
                            </div>
                          
                        </div>
                        <div class="hidden-part-container price-landing-block">
                            <h4 class="tab-sub-header price-sub-header">
                                Стоимость
                              </h4>
                              <span class="cost price-cost">от 80 000 ₽</p>
                        </div>
                        <div class="hidden-part-special">
                            <div class="special-container">
                            <div class="chip special-chip">рассрочка</div>
                            <span class="cost special-cost">от 20 800 ₽ / мес.</span>
                            <span class="page-link special-link modal-link">Подробнее</span>
                        </div>
            
                        </div>
                    </div>
        
                   
                    </div>
                    
        
                  </li>
                  <li class="tabs-item">
                    <div class="tab-container">
                      <div class="tab__visible-part">
                        <div class="tab-title">
                          <div class="tab-header">
                            <span class="tab-number">
                                /04
                            </span>
                            <span class="tab-header__text">мобильные приложения</span>
                        </div>
                        <button type="button" class="btn-reset btn-fill order-btn invisible"><a class="order-btn__link" href="/new-project">Заказать </a></button>
                        </div>
                        <div class="tab-description invisible">
                          <p class="tab-description__text">
                            По данным статистики люди около 90% времени проводят именно в мобильных приложениях,
                             а доля продаж через них еще в 2020 году сравнялась с долей покупок через компьютеры.
                              Это ни много ни мало - более 50%. Люди все активнее совершают покупки через телефон,
                               и для любого бизнеса это огромное преимущество - иметь понятное и приятное глазу 
                               клиента мобильное приложение с возможностью совершать покупки прямо в нем.
                          </p>
                          
                        </div>
                        <div class="tab-toggle-btn">
                            
                              <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                            
                          </div>
                    </div>   
                        <div class="tab__hidden-part invisible">
                            <div class="hidden-part-container wedo-landing-block">
                                 
                                  <h4 class="tab-sub-header">
                                    Что мы сделаем
                                  </h4>
                                 
                                    <ul class="task-list invisible but-not-now">
                                      <li class="task-item">Аналитика и оценка
                                      </li>
                                      <li class="task-item">Конкурентный анализ
                                      </li>
                                      <li class="task-item">UX-проектирование
                                      </li>
                                      <li class="task-item">Грамотный UI-дизайн
                                      </li>
                                      <li class="task-item">Сборка и интеграция приложения
                                      </li>
                                      <li class="task-item">Тестирование
                                      </li>
                                      <li class="task-item">Техническая поддержка
                                      </li>
                                    </ul>
                                  
                                    <div class="tab-toggle-btn">
                            
                                        <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                                      
                                    </div>
                                
                              </div>
                              <div class="hidden-part-container youget-landing-block">
                                 
                                <h4 class="tab-sub-header">
                                  Что вы получите
                                </h4>
                               
                                  <ul class="task-list invisible but-not-now">
                                    <li class="task-item">Оригинальное и корректно функционирующее приложение для вашего бизнеса
            
                                    </li>
                                    <li class="task-item">Техническая поддержка приложения на протяжении 2 месяцев
                                    </li>
                                    <li class="task-item">Отличного партнера в виде компании Desire, который знает особенности
                                       вашего сайта и всегда готов помочь вашему бизнесу расти и дальше!
                                    </li>
                                  </ul>
                                
                                  <div class="tab-toggle-btn">
                            
                                    <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                                  
                                </div>
                              
                            </div>
                            <div class="hidden-part-container price-landing-block">
                                <h4 class="tab-sub-header price-sub-header">
                                    Стоимость
                                  </h4>
                                  <span class="cost price-cost">от 75 000 ₽</p>
                            </div>
                            <div class="hidden-part-special">
                                <div class="special-container">
                                <div class="chip special-chip">рассрочка</div>
                                <span class="cost special-cost">от 20 800 ₽ / мес.</span>
                                <span class="page-link special-link modal-link">Подробнее</span>
                            </div>
                
                            </div>
                        </div>
            
                       
                        </div>
                        
            
                      </li>
                      <li class="tabs-item">
                        <div class="tab-container">
                          <div class="tab__visible-part">
                            <div class="tab-title">
                              <div class="tab-header">
                                <span class="tab-number">
                                    /05
                                </span>
                                <span class="tab-header__text">дополнительные страницы</span>
                            </div>
                            <button type="button" class="btn-reset btn-fill order-btn invisible"><a class="order-btn__link" href="/new-project">Заказать </a></button>
                            </div>
                            <div class="tab-description invisible">
                              <p class="tab-description__text">
                                Обновление устаревшего дизайна статей, товаров и услуг, которые уже есть на сайте, 
                                актуализация материала в них или создание абсолютно новых страниц с единым стилем 
                                и готовым контентом - необходимость для каждого бизнеса, с которой мы готовы помочь.
                              </p>
                              
                            </div>
                            <div class="tab-toggle-btn">
                                
                                  <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                                
                              </div>
                        </div>   
                            <div class="tab__hidden-part invisible">
                                <div class="hidden-part-container wedo-landing-block">
                                     
                                      <h4 class="tab-sub-header">
                                        Что мы сделаем
                                      </h4>
                                     
                                        <ul class="task-list invisible but-not-now">
                                          <li class="task-item">Аналитика и оценка
                                          </li>
                                          <li class="task-item">Написание контента
                                          </li>
                                          <li class="task-item">UI дизайн
                                          </li>
                                          <li class="task-item">Настройка функционала
                                          </li>
                                          <li class="task-item">Выгрузка страниц на сайт
                                          </li>
                                        </ul>
                                      
                                        <div class="tab-toggle-btn">
                                
                                            <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                                          
                                        </div>
                                    
                                  </div>
                                  <div class="hidden-part-container youget-landing-block">
                                     
                                    <h4 class="tab-sub-header">
                                      Что вы получите
                                    </h4>
                                   
                                      <ul class="task-list invisible but-not-now">
                                        <li class="task-item">Необходимые для расширения вашего сайта страницы, не выбивающиеся из общего дизайна
                
                                        </li>
                                        <li class="task-item">Отличного партнера в виде компании Desire, который может реализовать ваш проект и всегда готов помочь вашему бизнесу расти и дальше!
                                        </li>
                                       
                                      </ul>
                                    
                                      <div class="tab-toggle-btn">
                                
                                        <img class="toggle-src" src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                                      
                                    </div>
                                  
                                </div>
                                <div class="hidden-part-container price-landing-block">
                                    <h4 class="tab-sub-header price-sub-header">
                                        Стоимость
                                      </h4>
                                      <span class="cost price-cost">от 8 000 ₽</p>
                                </div>
                                <div class="hidden-part-special">
                                    <div class="special-container">
                                    <div class="chip special-chip">рассрочка</div>
                                    <span class="cost special-cost">от 20 800 ₽ / мес.</span>
                                    <span class="page-link special-link modal-link">Подробнее</span>
                                </div>
                    
                                </div>
                            </div>
                
                           
                            </div>
                            
                
                          </li>

      </ul>

  </section>
  <section  id="portfolio" class="cases">
    <div class="wrapper">
      <h2 class="cases-title">кейсы</h2>
      </div>
      <div class="white_wrap_wrap_slider">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                <a class="slider-link" href="projects/noiceland">
                  <img
                    class="slider-img"
                    src="{{asset('assets/img/slider-image-1.png')}}"
                    alt="Обложка проекта"
                  />
                  <div class="swiper-slide-main">
                    <h3 class="swiper-slide-title">NoiceLand <br /></h3>
                    <a class="slide-link page-link link-green" href="/projects/noiceland"
                      >Посмотреть
                      
                    </a>
                  </div>
      </a>
                </div>
                <div class="swiper-slide">
                <a class="slider-link" href="projects/dolfie">
                  <img
                    class="slider-img"
                    src="{{asset('assets/img/slider-image-2.png')}}"
                    alt="Обложка проекта"
                  />
                  <div class="swiper-slide-main">
                    <h3 class="swiper-slide-title">
                      Dolfie: Hard to choose. Easy to wear
                    </h3>
                    <a class="slide-link page-link link-green" href="projects/dolfie"
                      >Посмотреть
                      
                    </a>
                  </div>
      </a>
                </div>
                <div class="swiper-slide">
                <a class="slider-link" href="projects/hike">
                  <img
                    class="slider-img"
                    src="{{asset('assets/img/slider-image-3.png')}}"
                    alt="Обложка проекта"
                  />
                  <div class="swiper-slide-main">
                    <h3 class="swiper-slide-title">
                      Hike: Выбери свой маршрут для похода
                    </h3>
                    <a class="slide-link page-link link-green" href="/projects/hike"
                      >Посмотреть
                      
                    </a>
                  </div>
      </a>
                </div>
                <div class="swiper-slide">
                <a class="slider-link" href="projects/tocha">
                  <img
                    class="slider-img"
                    src="{{asset('assets/img/slider-image-4.png')}}"
                    alt="Обложка проекта"
                  />
                  <div class="swiper-slide-main">
                    <h3 class="swiper-slide-title">
                      Tocha: Telegram чат на вашем сайте
                    </h3>
                    <a class="slide-link page-link link-green" href="projects/tocha"
                    >Посмотреть
                    
                  </a>
                  </div>
                  </a>
                  </div>
                <div class="swiper-slide">
                <a class="slider-link" href="projects/atlant"
                    >
                  <img
                    class="slider-img"
                    src="{{asset('assets/img/slider-image-5.png')}}"
                    alt="Обложка проекта"
                  />
                  <div class="swiper-slide-main">
                    <h3 class="swiper-slide-title">
                      atlant. трекер задач
                    </h3>
                    <a class="slide-link page-link link-green" href="projects/atlant"
                    >Посмотреть
                    
                  </a>
                  </div>
                  </a>
                </div>
                </div>
              </div>
              <div class="swiper-button-prev">
                <img
                src="{{asset('/assets/svg/swiper-left.svg')}}"
                  alt="стрелочка влево"
                />
              </div>
              <div class="swiper-button-next">
                <img
                src="{{asset('/assets/svg/swiper-right.svg')}}"
                  
                  alt="стрелочка вправо"
                />
              </div>
              <div class="swiper-pagination"></div>
            </div>
           
          </div>
          <div class="wrap_button_white">
           <button class="btn-reset btn-stroke-dark swiper-redirect-btn"><a href="/projects">Смотреть всё</a></button>
          </div>
        </div>
    </section>
    <section class="desicions">
      <div class="wrapper desicions-wrapper">
        <h2 class="subTitle">выгодные предложения</h2>
        <div class="desicions-content">
          
          <div class="desicionsBox">
            <div class="desicionBox start-desicion">
             
              <h3 class="desicion-title">Комплексное решение «START»</h3>
              <div class="desicionBox-text">
              <p>Настало время выйти из тени офлайна и начать расширять бизнес. Интернет — идеальное место для поиска новых клиентов!</p>
              <p>Начни жизнь своего проекта в Интернете при помощи нашего комплексного решения «START». Наши специалисты займутся всеми этапами разработки и оптимизации.</p>
            </div>
              <span>МЫ СДЕЛАЕМ:</span>
              <ul>
                <li>Дизайн, вёрстку, контент и запуск сайта</li>
                <li>Оптимизацию и организуем техническую поддержку</li>
                <li>Маркетинговые стратегии для продвижения и соцсетей</li>
              </ul>
              <div class="desicion-btns">
               <button class="btn-reset btn-stroke-green desicion-btn"><a href="/complex-tariffs/start">Подробнее</a></button>
               <button class="btn-reset btn-fill desicion-btn"> <a href="/new-project">Заказать</a></button>
              </div>
            </div>
            <div class="desicionBox arrow-desicion">
                  <span class="desicion-special">Экстремально быстрый тариф для тех, кто не любит ждать</span>
                  <h3 class="desicion-title">комплексное решение ARROW</h3>
                  <div class="desicionBox-text">
                  <p>Идеальный способ начать развитие в Интернете быстро и без огромных финансовых вложений.<br/>Разработка NoCode — это отличное решение для бизнеса.</p>
                  <p>Мы знаем, как важно быстро запустить сайт для нового проекта. Разработка без кода идеальный вариант для этого — вы не теряете качество, а получаете отличный результат.</p>
                </div>
                  <span>МЫ СДЕЛАЕМ:</span>
                  <ul>
                    <li>Дизайн, ориентированный на вашу целевую аудиторию</li>
                    <li>Вёрстку, контент и запуск сайта</li>
                    <li>Оптимизацию и организуем техническую поддержку</li>
                  </ul>
                  <div class="desicion-btns">
                    <button class="btn-reset btn-stroke-green desicion-btn"><a href="/complex-tariffs/arrow">Подробнее</a></button>
               <button class="btn-reset btn-fill desicion-btn"> <a href="/new-project">Заказать</a></button>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-start section-start-dev">
      <div class="white_wrap block-animation">
        <div class="white_wrap_pp">
          <p class="start-text">
            Мы предоставляем <span>весь спектр услуг</span> для вашего
            digital-проекта: <span>от разработки</span> сайта и мобильных
            приложений <span>до продвижения</span> проекта в поисковых
            системах Яндекс и Google.
          </p>
        </div>
        <div
          class="wrap_button_white wrap_button_green"
          style="margin-bottom: 0"
        >
          <button class="btn-reset btn-stroke-green start-btn"><a href="/new-project">Начать проект</a></button>
        </div>
      </div>
    </section>


  </main>


@include('modals.tinkoff')
@endsection
