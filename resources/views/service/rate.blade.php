@extends('layouts.app')

<head>
    <title>Комплексные тарифы и выгодные предложения</title>
    <meta name="description" content="Если вы не знаете, с чего начать, то вам стоит обратить внимание на наши комплексные тарифы - идеальные предложения для быстрого и легкого старта, ведь они включают в себя все базовые услуги и наше постоянное сопровождение на каждом этапе." />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Комплексные тарифы и выгодные предложения - Desire">
    <meta property="og:url" content="https://desire-company.com/complex-tariffs">
    <meta property="og:image" content="https://desire-company.com/assets/img/snippet-image.png">
    <meta property="og:description" content="Если вы не знаете, с чего начать, то вам стоит обратить внимание на наши комплексные тарифы - идеальные предложения для быстрого и легкого старта, ведь они включают в себя все базовые услуги и наше постоянное сопровождение на каждом этапе.">
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
                "name": "Комплексные тарифы",
                "item": "https://desire-company.com/complex-tariffs"
            }]
        }
    </script>
</head>
@section('content')

<main class="main">
  <section class="dev-welcome plans-welcome">
      <div class="wrapper">
          <div class="welcome-content content">
            <div class="info-container info-container__plans">
                  <h1 class="title dev-title plans-title">Комплексные <br> решения </h1>
                  <p class="welcome-description">
                    Не знаете с чего начать развивать свой проект на просторах Интернета?
                    <div class="dev-timeline plans-timeline">
                        <ol class="timeline-src">
                          <li class=" dev-timeline-item">
                            <p class="dev-timeline-item__src">Разрабатываем, оптимизируем и предлагаем точки роста.</p>                     
                          </li>
                          <li class=" dev-timeline-item">
                           <p class="dev-timeline-item__src">Есть множество способов развивать ваш бизнес в сети: начиная от личного блога и заканчивая полномасштабным сайтом. Команда Desire предлагает комплексные решение, где мы поможем вам на всех этапах развития.</p>
                                              </li>
                         
                        </ol>
                      </div>
            </div>
            <div class="decor-container decor-container__plans">
              <div class="main-link">
                <a href="/" class="main-link__src">Главная</a>
                <span class="main-link__span">Комплексные решения</span>
              </div>
              <div class="spinner-container plans-spinner">
              <img src="{{asset('assets/svg/triforce.svg')}}" alt="" class="spinner-src">
              </div>
            </div>
          </div>
      </div>
  </section>
  <section class="desicions plans-desicions">
    <div class="wrapper desicions-wrapper">
      <h2 class="subTitle">выгодные предложения</h2>
      <div class="desicions-content">
        
        <div class="desicionsBox plans-desicions-box">
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
          <div class="desicionBox influencer-desicion">
           
              <h3 class="desicion-title">Комплексное решение INFLUENCER</h3>
              <div class="desicionBox-text">
              <p>Развиваться в медиа пространстве означает идти в ногусо своими клиентам. Большая аудитория, которой интересен именно ваш продукт — вот, в чем залог успеха.</p>
              <p>Команда Desire поможет оформить и запустить социальные сети, а также наполнить их необычным контентом!</p>
            </div>
              <span>МЫ СДЕЛАЕМ:</span>
              <ul>
                <li>Создадим, настроим и заполним соцсети</li>
                <li>Оформим всю айдентику и визуал</li>
                <li>Напишем необходимый для быстрого старта контент и оптимизируем его</li>
              </ul>
              <div class="desicion-btns">
               <button class="btn-reset btn-stroke-green desicion-btn"><a href="/complex-tariffs/influencer">Подробнее</a></button>
               <button class="btn-reset btn-fill desicion-btn"> <a href="/new-project">Заказать</a></button>
              </div>
            </div>
            <div class="desicionBox full-desicion">
           
              <h3 class="desicion-title">Комплексное решение FULL DIGITAL</h3>
              <div class="desicionBox-text">
              <p>Маркетинг — основная составляющая любого типа бизнеса. Увеличения трафика, лидов, выстраивание брендирования, а также популяризация вашей компании и управление её репутацией — все это лишь малая часть того, что может компания Desire.</p>
            </div>
              <span>МЫ СДЕЛАЕМ:</span>
              <ul>
                <li>Создадим социальные сети, настроим и заполним</li>
                <li>Предложим варианты продвижения через кросс-сейл и апсейл системы</li>
                <li>Сформируем стратегию рекламной кампании онлайн (таргетированная и контекстная реклама) и офлайн</li>
              </ul>
              <div class="desicion-btns">
               <button class="btn-reset btn-stroke-green desicion-btn"><a href="/complex-tariffs/digital">Подробнее</a></button>
               <button class="btn-reset btn-fill desicion-btn"> <a href="/new-project">Заказать</a></button>
              </div>
            </div>
        </div>
      </div>
    </div>
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

@endsection
