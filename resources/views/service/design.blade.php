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
<section class="dev-welcome design-welcome">
      <div class="wrapper">
          <div class="welcome-content content">
            <div class="info-container info-container__design">
                  <h1 class="title dev-title">Дизайн</h1>
                  <p class="welcome-description">
                    Стиль, который решает ваши задачи.
                  </p>

                <div class="dev-timeline">
                  <ol class="timeline-src">
                    <li class=" dev-timeline-item">
                      <p class="dev-timeline-item__src">Создаем дизайн, удобный в использовании как вам, так и вашим клиентам</p>                     
                    </li>
                    <li class=" dev-timeline-item">
                     <p class="dev-timeline-item__src">Помогаем вам преподносить товары и услуги так, чтобы их хотели приобрести</p>
                                        </li>
                    <li class=" dev-timeline-item">
                    
                      <p class="dev-timeline-item__src">Прорабатываем дизайн совместно с seo-специалистами и маркетологами</p>
                    </li>
                  </ol>
                </div>
            </div>
            <div class="decor-container decor-container__design">
              <div class="main-link">
                <a href="/" class="main-link__src">Главная</a>
                <span class="main-link__span">Дизайн</span>
              </div>
              <div class="spinner-container design-spinner">
              <img src="{{asset('assets/svg/subtract.svg')}}" alt="" class="spinner-src">
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
              <span class="tab-header__text">  дизайн сайта</span>
              </div>
            <button type="button" class="btn-reset btn-fill order-btn invisible">Заказать</button>
            </div>
            <div class="tab-description invisible">
              <p class="tab-description__text design__description-text">
                Вы только создаёте свой сайт или придумали идеальную концепцию и  вам нужен опытный <br> веб-дизайнер? <br> <br>
                Компания Desire предлагает услуги по дизайну  сайтов: 
              </p>
              <ul class="task-list design-task-list">
                <li class="task-item">Лендинг
                </li>
                <li class="task-item">Корпоративный сайт
                </li>
                <li class="task-item">Интернет-магазин
                </li>
                <li class="task-item">Сайт-портал
                </li>
                <li class="task-item">Редизайн сайта
                </li>
              </ul>
              
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
                          <li class="task-item design-task-item">Аналитика и оценка
                          </li>
                          <li class="task-item design-task-item">UX-проектирование
                          </li>
                          <li class="task-item design-task-item">Проработка структуры сайта
                          </li>
                          <li class="task-item design-task-item">Грамотный UI дизайн
                          </li>
                          <li class="task-item design-task-item">Графические элементы
                          </li>
                          <li class="task-item design-task-item">Макет в FIGMA для вас <br> и вашего разработчика
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
                        <li class="task-item design-task-item">Уникальный, ориентированный именно на специфику вашего бизнеса дизайн сайта

                        </li>
                        <li class="task-item design-task-item">Всю необходимую графику
                        </li>
                        <li class="task-item design-task-item">Отличного партнера в виде компании Desire, который знает особенности вашего сайта и всегда готов помочь вашему бизнесу расти и дальше!
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
          <li class="tabs-item">
            <div class="tab-container">
              <div class="tab__visible-part">
                <div class="tab-title">
                  <div class="tab-header">
                    <span class="tab-number">
                        /02
                    </span>
                    <span class="tab-header__text">дизайн мобильного приложения</span>
                </div>
                <button type="button" class="btn-reset btn-fill order-btn invisible">Заказать</button>
                </div>
                <div class="tab-description invisible">
                  <p class="tab-description__text design__description-text">
                    Если у вас есть идея мобильного приложения, есть разработчики, но не хватает креативного UX/UI дизайнера, который смог бы воплотить вашу задумку в жизнь, то компания Desire предлагает выход из этой ситуации.
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
                                
                                    <li class="task-item design-task-item">Аналитика и оценка
                                    </li>
                                    <li class="task-item design-task-item">UX-проектирование
                                    </li>
                                    <li class="task-item design-task-item">Грамотный UI дизайн
                                    </li>
                                    <li class="task-item design-task-item">Графические элементы
                                    </li>
                                    <li class="task-item design-task-item">Макет в FIGMA для вас <br> и вашего разработчика
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
                            <li class="task-item design-task-item">Уникальный, ориентированный именно на специфику вашего бизнеса дизайн сайта
    
                            </li>
                            <li class="task-item design-task-item">Всю необходимую графику
                            </li>
                            <li class="task-item design-task-item">Отличного партнера в виде компании Desire, который знает особенности вашего сайта и всегда готов помочь вашему бизнесу расти и дальше!
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
                        <span class="tab-header__text">разработка брендбука</span>
                    </div>
                    <button type="button" class="btn-reset btn-fill order-btn invisible">Заказать</button>
                    </div>
                    <div class="tab-description invisible">
                      <p class="tab-description__text design__description-text">
                        Мы поможем вам правильно описать бренд, выделить его на рынке. Раскроем миссию, ценности и чем вы отличаетесь от других, создав уникальный графический стиль.
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
                                  <li class="task-item design-task-item">Аналитика и оценка
                                  </li>
                                  <li class="task-item design-task-item">Формирование перечня брендбука
                                  </li>
                                  <li class="task-item design-task-item">Разработка платформы бренда
                                  </li>
                                  <li class="task-item design-task-item">Разработка дизайна брендбука и фирменных графических элементов
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
                                <li class="task-item design-task-item">Уникальный, ориентированный именно на специфику вашего бизнеса дизайн сайта
        
                                </li>
                                <li class="task-item design-task-item">Всю необходимую графику
                                </li>
                                <li class="task-item design-task-item">Отличного партнера в виде компании Desire, который знает особенности вашего сайта и всегда готов помочь вашему бизнесу расти и дальше!
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
                                /04
                            </span>
                            <span class="tab-header__text">создание гайдлайна</span>
                        </div>
                        <button type="button" class="btn-reset btn-fill order-btn invisible">Заказать</button>
                        </div>
                        <div class="tab-description invisible">
                          <p class="tab-description__text design__description-text">
                            Создадим для вас визуальную атрибутику компании: логотип, фирменный цвет, шрифт, а также разработаем правила их использования: в рекламе, баннера, визитках, соцсетях и тд.
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
                                      <li class="task-item design-task-item">Аналитика и оценка
                                      </li>
                                      <li class="task-item design-task-item">Формирование Перечня гайдлайна
                                      </li>
                                      <li class="task-item design-task-item">Разработка фирменных графических элементов и правил их использования
                                      </li>
                                      
                                    </ul>
                                  
                                    <div class="tab-toggle-btn">
                            
                                        <img class="toggle-src" src="../assets/svg/plus-close.svg" alt="expand/close">  
                                      
                                    </div>
                                
                              </div>
                              <div class="hidden-part-container youget-landing-block">
                                 
                                <h4 class="tab-sub-header">
                                  Что вы получите
                                </h4>
                               
                                  <ul class="task-list invisible but-not-now">
                                    <li class="task-item design-task-item">Стандартизированные требования использования фирменного стиля
            
                                    </li>
                                    <li class="task-item design-task-item">Экономию ресурсов на производстве рекламы и других продуктов
                                    </li>
                                    <li class="task-item design-task-item">Повышение узнаваемости бренда
                                    </li>
                                    <li class="task-item design-task-item">Отличного партнера в виде компании Desire, который знает особенности
                                       вашего сайта и всегда готов помочь вашему бизнесу расти и дальше!
                                    </li>
                                  </ul>
                                
                                  <div class="tab-toggle-btn">
                            
                                    <img class="toggle-src" src="../assets/svg/plus-close.svg" alt="expand/close">  
                                  
                                </div>
                              
                            </div>
                            <div class="hidden-part-container price-landing-block">
                                <h4 class="tab-sub-header price-sub-header">
                                    Стоимость
                                  </h4>
                                  <span class="cost price-cost">от 10 000 ₽</p>
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
    <div class="white_wrap block-animation">
     
      <div class="white_wrap_wrap_slider">
      <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
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
                </div>
                <div class="swiper-slide">
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
                </div>
                <div class="swiper-slide">
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
                </div>
                <div class="swiper-slide">
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
            </div>
            <div class="swiper-pagination"></div>
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