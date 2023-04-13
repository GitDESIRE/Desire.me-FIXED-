@extends('layouts.app')

<head>
    <title>Проект “HIKE”: от аналитики до визуала сайта</title>
    <meta name="description" content="Наша компания принимала участие в создании сайта, объединяющего хайкеров со всего мира в одно огромное и очень энергичное сообщество. Разработанная уникальная визуальная концепция, прототипирование и аналитика сделали его одним из лучших проектов на рынке." />
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
                "name": "Проекты",
                "item": "https://desire-company.com/projects"
            }, {
                "@type": "ListItem",
                "position": 3,
                "name": "Кейс HIKE",
                "item": "https://desire-company.com/projects/hike"
            }]
        }
    </script>

</head>
@section('content')
<main class="main portfolio-main">
    <section class="project-banner">
        <div class="wrapper project-wrapper">
            <div class="seo-banner-top">
                <h1 class="banner-title">
                    Проект по<br> хайкингу - “HIKE”
                </h1>
                <div class="main-link">
                <a href="/projects" class="main-link__src">Проекты</a>
                <span class="main-link__span">Проект по хайкингу - Hike</span>
              </div>
            </div>
            <div class="seo-banner-bot">
                <ul class="banner-description-list">
                    <li class="banner-description-item">Аналитика и исследование</li>
                    <li class="banner-description-item">Прототипирование</li>
                    <li class="banner-description-item">Визуальная концепция</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="about-project">
        <div class="wrapper">
            <div class="about-project-text">
                <h2 class="about-project-name">О проекте</h2>
                <p class="about-project-description">Наша компания принимала участие в создании проекта, который поможет объедениться хайкерам для совместного прохождения маршрутов, а так же для общения, обмена опытом и знаниями.</p>
                <p class="about-project-description">Интервью и качественно-субъективный метод исследования помогли в проработке требований к сайту и послужили фундаментом для подробного проектирования пользовательского опыта.</p>
            </div>
        </div>
    </section>
    <section class="projects">
        <div class="wrapper">
            <img src="{{asset('assets/img/Hike-main.png')}}" alt="HIKE - главная страница" class="projects-img">
        </div>
    </section>
    <section  id="portfolio" class="cases">
    <div class="wrapper">
      <h2 class="cases-title">кейсы</h2>
      </div>
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
</main>

@endsection
