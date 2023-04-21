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
<section class="dev-welcome promotion-welcome">
      <div class="wrapper">
          <div class="welcome-content content">
            <div class="info-container info-container__promotion">
                  <h1 class="title dev-title promotion-title">Продвижение</h1>
                  <p class="welcome-description">
                    Продвигаем сайты в топ через поисковую оптимизацию, настраиваем контекстную и таргетированную рекламу.                  </p>

                <div class="dev-timeline">
                  <ol class="timeline-src">
                    <li class=" dev-timeline-item">
                      <p class="dev-timeline-item__src">
                        Проведём аудит вашего сайта и устраним причины, мешающие ему выйти в топ выдачи.                    </p>                     
                    </li>
                    <li class=" dev-timeline-item">
                     <p class="dev-timeline-item__src">
                        Выберем наиболее эффективные рекламные каналы для продвижения бизнеса.                    </p>
                                        </li>
                    <li class=" dev-timeline-item">
                    
                      <p class="dev-timeline-item__src">
                        Настроим контекстную и таргетированную рекламу для оптимального привлечения клиентов.                      </p>
                    </li>
                  </ol>
                </div>
            </div>
            <div class="decor-container decor-container__promotion">
              <div class="main-link">
                <a href="/" class="main-link__src">Главная</a>
                <span class="main-link__span">Продвижение</span>
              </div>
              <div class="spinner-container promotion-spinner">
              <img src="{{asset('assets/svg/star.svg')}}" alt="" class="spinner-src">
              </div>
            </div>
          </div>
      </div>
  </section>
  <section class="services promotion-services">
      <div class="wrapper"> <h2 class="services-title">что делаем</h2>
       <h3 class="promotion-sub-header">/ SEO</h3>  
    </div>
        <ul class="tabs-list">
          <li class="tabs-item">
        <div class="tab-container">
          <div class="tab__visible-part">
            <div class="tab-title">
              <div class="tab-header">
                <span class="tab-number">
                    /01
                </span>
              <span class="tab-header__text">  тариф basic</span>
              </div>
            <button type="button" class="btn-reset btn-fill order-btn invisible"><a class="order-btn__link" href="/new-project">Заказать </a></button>
            </div>
            <div class="tab-description invisible">
              <p class="tab-description__text promotion__description-text">
                Только запустили свой сайт и не знаете, что с ним делать дальше? Или вы на рынке уже несколько лет, и вдруг ваш сайт проседает в посещаемости? <br><br> B рамках Basic оптимизации мы работаем на стабилизацию вашего сайта по критериям поисковых систем и трафика на нем
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
                          <li class="task-item promotion-task-item">SEO-аудит сайта

                          </li>
                          <li class="task-item promotion-task-item">Технический аудит сайта

                          </li>
                          <li class="task-item promotion-task-item">Оценка проекта и формирование стратегии

                          </li>
                          <li class="task-item promotion-task-item">Формирование семантического ядра

                          </li>
                          <li class="task-item promotion-task-item">Минимальная редактура контента

                          </li>
                          <li class="task-item promotion-task-item">Контроль статистики сайта и показателей

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
                        <li class="task-item promotion-task-item">Правильно оптимизированный сайт

                        </li>
                        <li class="task-item promotion-task-item">Естественный приток посетителей
                        </li>
                        <li class="task-item promotion-task-item">Отличного партнера в виде компании Desire, который знает особенности вашего сайта и всегда готов помочь вашему бизнесу расти и дальше!
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
                      <span class="cost price-cost">от 30000 ₽</span>
                </div>
                <div class="hidden-part-special">
                    <div class="special-container">
                    <div class="chip special-chip">рассрочка</div>
                    <span class="cost special-cost">от 20 800 ₽ / мес.</span>
                    <a href="/new-project" class="page-link special-link">Подробнее</a>
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
                    <span class="tab-header__text">Тариф MIDDLE</span>
                </div>
                <button type="button" class="btn-reset btn-fill order-btn invisible"><a class="order-btn__link" href="/new-project">Заказать </a></button>
                </div>
                <div class="tab-description invisible">
                  <p class="tab-description__text design__description-text">
                    У вас уже работающий сайт, но продажи не идут? Не знаете, как исправить ошибки на сайте, чтобы клиенты быстро находили вас и ваши лучшие предложения? В рамках Middle оптимизации мы работаем на развитие вашего сайта и рост трафика на нем.                  </p>
                  
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
                                <li class="task-item promotion-task-item">SEO-аудит сайта

                                </li>
                                <li class="task-item promotion-task-item">Технический аудит сайта
      
                                </li>
                                <li class="task-item promotion-task-item">Оценка проекта и формирование стратегии
      
                                </li>
                                <li class="task-item promotion-task-item">Формирование семантического ядра
      
                                </li>
                                <li class="task-item promotion-task-item">Минимальная редактура контента
      
                                </li>
                                <li class="task-item promotion-task-item">Работа с юзабилити сайта
      
                                </li>
                                <li class="task-item promotion-task-item">Повышение релевантности страниц
                                </li>
                                <li class="task-item promotion-task-item">Доведение сайта до технического совершенства
                                </li>
                                <li class="task-item promotion-task-item">Настройка Вебмастера
                                </li>
                                
                               
                                <li class="task-item promotion-task-item">Контроль статистики сайта и показателей
      
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
                            <li class="task-item promotion-task-item">Идеально оптимизированный сайт
    
                            </li>
                            <li class="task-item promotion-task-item">Естественный приток посетителей
                            </li>
                            <li class="task-item promotion-task-item">Высокая релевантность (соответствие) сайта запросам потенциальных клиентов
                            </li>
                            <li class="task-item promotion-task-item">Отличного партнера в виде компании Desire, который знает особенности вашего сайта и всегда готов помочь вашему бизнесу расти и дальше!
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
                          <span class="cost price-cost">от 50 000 ₽</span>
                    </div>
                    <div class="hidden-part-special">
                        <div class="special-container">
                        <div class="chip special-chip">рассрочка</div>
                        <span class="cost special-cost">от 20 800 ₽ / мес.</span>
                        <a href="new-project" class="page-link special-link">Подробнее</a>
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
                        <span class="tab-header__text">тариф premium</span>
                    </div>
                    <button type="button" class="btn-reset btn-fill order-btn invisible"><a class="order-btn__link" href="/new-project">Заказать </a></button>
                    </div>
                    <div class="tab-description invisible">
                      <p class="tab-description__text design__description-text">
                        Нужно быстро вырваться в лидеры вашей отрасли? Хотите оставить всех конкурентов позади? В рамках Premium оптимизации мы работаем на выведение вашего сайта в ТОП поисковиков и рост трафика на нем.                      </p>
                      
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
                                <li class="task-item promotion-task-item">SEO-аудит сайта

                                </li>
                                <li class="task-item promotion-task-item">Технический аудит сайта
      
                                </li>
                                <li class="task-item promotion-task-item">Аудит конкурентов
      
                                </li>
                                <li class="task-item promotion-task-item">Разработка двух индивидуальных стратегий и оценка работ
      
                                </li>
                                <li class="task-item promotion-task-item">Формирование семантического ядра
      
                                </li>
                                <li class="task-item promotion-task-item">Редактура контента на сайте и написание нового при необходимости
      
                                </li>
                                <li class="task-item promotion-task-item">Работа с юзабилити сайта
      
                                </li>
                                <li class="task-item promotion-task-item">Повышение релевантности страниц
                                </li>
                                <li class="task-item promotion-task-item">Доведение сайта до технического совершенства
                                </li>
                                <li class="task-item promotion-task-item">Работа со ссылочной массой сайта
                                </li>
                                <li class="task-item promotion-task-item">Запуск сайта на подходящих агрегаторах
                                </li>
                                <li class="task-item promotion-task-item">Создание и настройка социальных сетей
                                </li>
                                <li class="task-item promotion-task-item">Настройка Вебмастера
                                </li>                               
                                <li class="task-item promotion-task-item">Контроль статистики сайта и показателей
      
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
                                <li class="task-item promotion-task-item">Идеально оптимизированный сайт
        
                                </li>
                                <li class="task-item promotion-task-item">Естественный приток посетителей
                                </li>
                                <li class="task-item promotion-task-item">выход в ТОП поисковой выдачи
                                </li>
                                <li class="task-item promotion-task-item">Высокая релевантность (соответствие) сайта запросам потенциальных клиентов
                                </li>
                                <li class="task-item promotion-task-item">Отличного партнера в виде компании Desire, который знает особенности вашего сайта и всегда готов помочь вашему бизнесу расти и дальше!
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
                              <span class="cost price-cost">от 80 000 ₽</span>
                        </div>
                        <div class="hidden-part-special">
                            <div class="special-container">
                            <div class="chip special-chip">рассрочка</div>
                            <span class="cost special-cost">от 20 800 ₽ / мес.</span>
                            <a href="/new-project" class="page-link special-link">Подробнее</a>
                        </div>
            
                        </div>
                    </div>
        
                   
                    </div>
                    
        
                  </li>
        </ul>
        <div class="wrapper"><h3 class="promotion-sub-header">/ реклама</h3></div>
        <ul class="tabs-list">
            <li class="tabs-item">
          <div class="tab-container">
            <div class="tab__visible-part">
              <div class="tab-title">
                <div class="tab-header">
                  <span class="tab-number">
                      /01
                  </span>
                <span class="tab-header__text">  таргетированная</span>
                </div>
              <button type="button" class="btn-reset btn-fill order-btn invisible"><a class="order-btn__link" href="/new-project">Заказать </a></button>
              </div>
              <div class="tab-description invisible">
                <p class="tab-description__text promotion__description-text">
                    Заметит ли аудитория именно вас или же обратит внимание на ваших конкурентов - сейчас это вопрос качества рекламы. Команда DESIRE формирует аудиторию для вашего бренда и пробуждает желание обратиться именно к вам!                </p>
               
                
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
                            <li class="task-item promotion-task-item">Брифинг, аналитика ваших запросов
  
                            </li>
                            <li class="task-item promotion-task-item">Конкурентный анализ рынка и ЦА
  
                            </li>
                            <li class="task-item promotion-task-item">Формирование рекламной стратегии
  
                            </li>
                            <li class="task-item promotion-task-item">Настройка таргет-системы
  
                            </li>
                            <li class="task-item promotion-task-item">Создание визуала и контента
  
                            </li>
                            <li class="task-item promotion-task-item">Настроим таргет-систему
  
                          </li>
                          <li class="task-item promotion-task-item">Тестовый запуск и аналитика
  
                          </li>
                          <li class="task-item promotion-task-item">Сбор статистики и улучшение
  
                          </li>
                          <li class="task-item promotion-task-item">Финальный запуск и поддержка
  
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
                          <li class="task-item promotion-task-item">Рекламная стратегия и настроенная таргет система
  
                          </li>
                          <li class="task-item promotion-task-item">Техническая поддержка таргет системы на протяжении 2 месяцев
                          </li>
                          <li class="task-item promotion-task-item">Отличного партнера в виде компании Desire, который знает особенности вашего сайта и всегда готов помочь вашему бизнесу расти и дальше!
                          </li>
                          <li class="task-item promotion-task-item">Макет в FIGMА для вас <br>и вашего разработчика
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
                        <span class="cost price-cost">от 10000 ₽</span>
                  </div>
                  <div class="hidden-part-special">
                      <div class="special-container">
                      <div class="chip special-chip">рассрочка</div>
                      <span class="cost special-cost">от 20 800 ₽ / мес.</span>
                      <a href="/new-project" class="page-link special-link">Подробнее</a>
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
                      <span class="tab-header__text">контекстная</span>
                  </div>
                  <button type="button" class="btn-reset btn-fill order-btn invisible"><a class="order-btn__link" href="/new-project">Заказать </a></button>
                  </div>
                  <div class="tab-description invisible">
                    <p class="tab-description__text design__description-text">
                        Контекстная реклама - один из наиболее эффективных и популярных инструментов для привлечения вашей целевой аудитории. Команда DESIRE поможет увеличить продажи, количество звонков и заявок с вашего сайта за счет привлечения целевого трафика.                    
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
                                  <li class="task-item promotion-task-item">Брифинг, аналитика ваших запросов
  
                                  </li>
                                  <li class="task-item promotion-task-item">Конкурентный анализ рынка и ЦА
        
                                  </li>
                                  <li class="task-item promotion-task-item">Формирование рекламной стратегии
        
                                  </li>
                                  <li class="task-item promotion-task-item">Сбор данных для семантического ядра
        
                                  </li>
                                  <li class="task-item promotion-task-item">Создание и настройка Яндекс.Директ
        
                                  </li>
                                  <li class="task-item promotion-task-item">Формирование продающего объявления
        
                                  </li>
                                  <li class="task-item promotion-task-item">Настройка сбора статистики
                                  </li>
                                  <li class="task-item promotion-task-item">Запуск контекстной рекламы
                                  </li>
                                  <li class="task-item promotion-task-item">Сбор статистики и поддержка рекламы
                                  </li>
                                  
                                 
                                  <li class="task-item promotion-task-item">Контроль статистики сайта и показателей
        
                                </li>
                                  
                                      
                                    </ul>
                            
                              <div class="tab-toggle-btn">
                      
                                  <img class="toggle-src"  src="{{asset('assets/svg/plus-close.svg')}}" alt="expand/close">  
                                
                              </div>
                          
                        </div>
                        <div class="hidden-part-container youget-landing-block">
                           
                          <h4 class="tab-sub-header">
                            Что вы получите
                          </h4>
                         
                          <ul class="task-list invisible but-not-now">
                            <li class="task-item promotion-task-item">Рекламная стратегия и настроенная контекст система
    
                            </li>
                            <li class="task-item promotion-task-item">Техническая поддержка на протяжении 2 месяцев
                            </li>
                            <li class="task-item promotion-task-item">Отличный партнер в виде компании Desire, который знает особенности вашей рекламной компании и всегда готов помочь вашему бизнесу расти и дальше!
                            </li>
                            <li class="task-item promotion-task-item">Макет в FIGMА для вас <br>и вашего разработчика
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
                            <span class="cost price-cost">от 10 000 ₽</span>
                      </div>
                      <div class="hidden-part-special">
                          <div class="special-container">
                          <div class="chip special-chip">рассрочка</div>
                          <span class="cost special-cost">от 20 800 ₽ / мес.</span>
                          <a href="/new-project" class="page-link special-link">Подробнее</a>
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