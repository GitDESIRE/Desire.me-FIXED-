@extends('layouts.app')

<head>
    <title>Проект “Noiceland”: информационный блог о дизайне</title>
    <meta name="description" content="Для блога, объединяющего работы дизайнеров со всех уголков земли, хотелось сделать красиво. Здесь мы занимались backend-разработкой: писали код на css, java и html, после эффективно и аккуратно внедряя его в работу, чтобы не помешать творцам." />
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
                "name": "Кейс NOICELAND",
                "item": "https://desire-company.com/projects/noiceland"
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
                    Информационный блог “NOICELAND”
                </h1>
                <div class="main-link">
                <a href="/projects" class="main-link__src">Проекты</a>
                <span class="main-link__span">Информационный блог NOICELAND</span>
              </div>
            </div>
            <div class="seo-banner-bottom">
                <ul class="banner-description-list">
                    <li class="banner-description-item">Frontend разработка:</li>
                    <li class="banner-description-item">javascript</li>
                    <li class="banner-description-item">html</li>
                    <li class="banner-description-item">CSS</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="about-project">
        <div class="wrapper">
            <div class="about-project-text">
                <h2 class="about-project-name">О проекте</h2>
                <p class="about-project-description">Эстетичный и минималистичный блог, объединяющий работы дизайнеров всего мира и всех направлений — от архитектуры и веб-дизайна до фотографий и анимации.</p>
            </div>
        </div>
    </section>
    <section class="projects">
        <div class="wrapper">
            <img src="{{asset('assets/img/Noicelend.png')}}" alt="Noicelend - Дизайн сайта" class="projects-img">
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
                <a class="slider-link" href="/projects/noiceland">
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
                <a class="slider-link" href="/projects/dolfie">
                  <img
                    class="slider-img"
                    src="{{asset('assets/img/slider-image-2.png')}}"
                    alt="Обложка проекта"
                  />
                  <div class="swiper-slide-main">
                    <h3 class="swiper-slide-title">
                      Dolfie: Hard to choose. Easy to wear
                    </h3>
                    <a class="slide-link page-link link-green" href="/projects/dolfie"
                      >Посмотреть
                      
                    </a>
                  </div>
      </a>
                </div>
                <div class="swiper-slide">
                <a class="slider-link" href="/projects/hike">
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
                <a class="slider-link" href="/projects/tocha">
                  <img
                    class="slider-img"
                    src="{{asset('assets/img/slider-image-4.png')}}"
                    alt="Обложка проекта"
                  />
                  <div class="swiper-slide-main">
                    <h3 class="swiper-slide-title">
                      Tocha: Telegram чат на вашем сайте
                    </h3>
                    <a class="slide-link page-link link-green" href="/projects/tocha"
                    >Посмотреть
                    
                  </a>
                  </div>
                  </a>
                  </div>
                <div class="swiper-slide">
                <a class="slider-link" href="/projects/atlant"
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
                    <a class="slide-link page-link link-green" href="/projects/atlant"
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
</main>

@endsection
