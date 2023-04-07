@extends('layouts.app')

<head>
    <title>Web-дизайн, разработка и продвижение - Desire</title>
    <meta name="description" content="Первый шаг к успеху - желание. В Desire всё просто: вы приходите к нам с запросом, а мы быстро, красиво и эффективно его воплощаем в жизнь так, чтобы вам понравилось. Ведь лучший результат - тот, от которого без ума сам клиент, верно?.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Web-дизайн, разработка и продвижение - Desire">
    <meta property="og:url" content="https://desire-company.com/">
    <meta property="og:image" content="https://desire-company.com/assets/img/snippet-image.png">
    <meta property="og:description" content="В Desire всё просто: вы приходите к нам с запросом, а мы быстро, красиво и эффективно его воплощаем в жизнь так, чтобы вам понравилось. Ведь лучший результат - тот, от которого без ума сам клиент, верно?">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Desire Company",
            "alternateName": "DESIRE",
            "url": "https://desire-company.com/",
            "logo": "https://desire-company.com/assets/img/snippet-image.png",
            "sameAs": "https://www.linkedin.com/company/desire-company/"
        }
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HHNKPBNHBL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HHNKPBNHBL');
    </script>
</head>
@section('content')
<main class="mainPage-content">
      <section class="banner block-animation">
        <div class="wrapper">
          <div class="content">
            <div class="banner-chips">
              <ul class="banner-chips-list">
                <li class="banner-chip chip">
                  <a href="/dev" class="banner-chip chip__src">разработка</a>
                </li>
                <li class="banner-chip chip">
                  <a href="/design" class="banner-chip chip__src">дизайн</a>
                </li>
                <li class="banner-chip chip">
                  <a href="/promotion" class="banner-chip chip__src">продвижение</a>
                </li>
                <li class="banner-chip chip">
                  <a href="/complex-tariffs" class="banner-chip chip__src">комплексные решения</a>
                </li>
              </ul>
            </div>
            <div class="content-text">
              <h1 class="title">
                Решения для <br>бизнеса, готового мыслить <span class="color-text main-header__colored">глобально</span>
              </h1>
            </div>
            <a href="/new-project" class="content-logo">
              <img class="logo-text" src="{{asset('assets/svg/button-text.svg')}}" alt="Начать проект" />
              <img
                class="logo-arrow"
                src="{{asset('assets/svg/arrowLogo.svg')}}"
                alt="стрелка"
              />
            </a>

            <div class="banner-socials">
              <ul class="socials-list">
                <li class="socials-item">
                  <a
                    href="https://www.linkedin.com/company/desire-company/"
                    class="footer-link"
                    rel="nofollow"
                    target="_blank"
                  >
                    <svg
                      width="21"
                      height="20"
                      viewBox="0 0 21 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M4.375 2.17391C4.375 3.3913 3.4125 4.34783 2.1875 4.34783C0.9625 4.34783 0 3.3913 0 2.17391C0 0.956522 0.9625 0 2.1875 0C3.4125 0 4.375 0.956522 4.375 2.17391ZM4.375 6.08696H0V20H4.375V6.08696ZM11.375 6.08696H7V20H11.375V12.6957C11.375 8.6087 16.625 8.26087 16.625 12.6957V20H21V11.2174C21 4.34783 13.2125 4.6087 11.375 8V6.08696Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                </li>
                <li class="socials-item vk-vertical">
                  <a
                    href="https://vk.com/desire.company"
                    class="footer-link"
                    referrerpolicy="no-referrer"
                    rel="nofollow"
                    type="text/html"
                    target="_blank"
                  >
                    <svg
                      width="25"
                      height="15"
                      viewBox="0 0 25 15"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M24.4115 1.04167C24.5969 0.454167 24.4115 0.0270832 23.5912 0.0270832H20.8636C20.1755 0.0270832 19.8578 0.401042 19.6724 0.801041C19.6724 0.801041 18.2693 4.21771 16.3099 6.43281C15.6745 7.07344 15.3834 7.28698 15.0391 7.28698C14.8537 7.28698 14.6151 7.07344 14.6151 6.48646V1.01406C14.6151 0.320313 14.4037 0 13.8209 0H9.53126C9.1073 0 8.84272 0.320313 8.84272 0.640625C8.84272 1.30781 9.82241 1.46823 9.92814 3.33646V7.39583C9.92814 8.27656 9.77189 8.4375 9.42501 8.4375C8.49845 8.4375 6.24793 4.99427 4.89792 1.07083C4.63542 0.29375 4.36876 0 3.68021 0H0.926564C0.132292 0 0 0.373438 0 0.773958C0 1.49479 0.926564 5.12448 4.31563 9.92865C6.56615 13.2099 9.7698 14.9734 12.6557 14.9734C14.4037 14.9734 14.6151 14.5729 14.6151 13.9057V11.4234C14.6151 10.6229 14.774 10.4896 15.3302 10.4896C15.7271 10.4896 16.4422 10.7026 18.0573 12.2776C19.9104 14.1458 20.2282 15 21.261 15H23.9881C24.7823 15 25.1532 14.5995 24.9412 13.8255C24.7032 13.0516 23.8026 11.9307 22.6375 10.5964C22.0021 9.84948 21.049 9.02187 20.7578 8.62135C20.361 8.0875 20.4667 7.87396 20.7578 7.39375C20.7313 7.39375 24.0677 2.64271 24.4115 1.03958"
                        fill="white"
                      />
                    </svg>
                  </a>
                </li>
                <li class="socials-item">
                  <a
                    href="https://www.instagram.com/desires.company/"
                    class="footer-link"
                    rel="nofollow"
                    target="_blank"
                  >
                    <svg
                      width="23"
                      height="22"
                      viewBox="0 0 23 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.5 2.01667C14.4333 2.01667 14.8 2.01667 15.9917 2.10833C19.0167 2.2 20.3917 3.66667 20.4833 6.6C20.575 7.79167 20.575 8.06667 20.575 11C20.575 13.9333 20.575 14.3 20.4833 15.4C20.3917 18.3333 18.925 19.8 15.9917 19.8917C14.8 19.9833 14.525 19.9833 11.5 19.9833C8.56667 19.9833 8.2 19.9833 7.1 19.8917C4.075 19.8 2.7 18.3333 2.60833 15.4C2.51667 14.2083 2.51667 13.9333 2.51667 11C2.51667 8.06667 2.51667 7.7 2.60833 6.6C2.7 3.66667 4.16667 2.2 7.1 2.10833C8.2 2.01667 8.56667 2.01667 11.5 2.01667ZM11.5 0C8.475 0 8.10833 0 7.00833 0.0916667C2.975 0.275 0.775 2.475 0.591667 6.50833C0.5 7.60833 0.5 7.975 0.5 11C0.5 14.025 0.5 14.3917 0.591667 15.4917C0.775 19.525 2.975 21.725 7.00833 21.9083C8.10833 22 8.475 22 11.5 22C14.525 22 14.8917 22 15.9917 21.9083C20.025 21.725 22.225 19.525 22.4083 15.4917C22.5 14.3917 22.5 14.025 22.5 11C22.5 7.975 22.5 7.60833 22.4083 6.50833C22.225 2.475 20.025 0.275 15.9917 0.0916667C14.8917 0 14.525 0 11.5 0ZM11.5 5.31667C8.38333 5.31667 5.81667 7.88333 5.81667 11C5.81667 14.1167 8.38333 16.6833 11.5 16.6833C14.6167 16.6833 17.1833 14.1167 17.1833 11C17.1833 7.88333 14.6167 5.31667 11.5 5.31667ZM11.5 14.6667C9.48333 14.6667 7.83333 13.0167 7.83333 11C7.83333 8.98333 9.48333 7.33333 11.5 7.33333C13.5167 7.33333 15.1667 8.98333 15.1667 11C15.1667 13.0167 13.5167 14.6667 11.5 14.6667ZM17.3667 3.85C16.6333 3.85 16.0833 4.4 16.0833 5.13333C16.0833 5.86667 16.6333 6.41667 17.3667 6.41667C18.1 6.41667 18.65 5.86667 18.65 5.13333C18.65 4.4 18.1 3.85 17.3667 3.85Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                </li>
                <li class="socials-item">
                  <a
                    href="https://t.me/desire_company"
                    class="footer-link"
                    rel="nofollow"
                    target="_blank"
                  >
                    <svg
                      width="23"
                      height="19"
                      viewBox="0 0 23 19"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21.0399 0.167751C21.0399 0.167751 23.1674 -0.654674 22.9894 1.34249C22.9308 2.16491 22.3991 5.04367 21.9851 8.15695L20.5668 17.38C20.5668 17.38 20.4485 18.7312 19.3845 18.9663C18.321 19.2008 16.7253 18.1438 16.4296 17.9088C16.193 17.7324 11.9972 15.0887 10.5198 13.7967C10.1058 13.4438 9.63264 12.7392 10.5789 11.9168L16.7839 6.04198C17.4931 5.33736 18.2022 3.69251 15.2473 5.68967L6.97289 11.2702C6.97289 11.2702 6.02717 11.8581 4.25455 11.3294L0.412512 10.1541C0.412512 10.1541 -1.0058 9.27306 1.41738 8.392C7.32775 5.63104 14.5973 2.81145 21.0388 0.167751H21.0399Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                </li>
                <li class="socials-item">
                  <a
                    href="https://vc.ru/u/1373045-desire"
                    class="footer-link"
                    rel="nofollow"
                    target="_blank"
                  >
                    <svg
                      width="25"
                      height="23"
                      viewBox="0 0 25 23"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M18.6818 0.0881863C16.879 0.517519 15.4264 1.86685 14.8453 3.66085C14.6218 4.34319 14.5622 5.64652 14.7261 6.41319C14.9496 7.50952 15.6573 8.66719 16.5587 9.43385C17.0206 9.82485 17.9816 10.2925 18.6222 10.4382C19.3672 10.6069 20.3505 10.5915 21.0731 10.4075C21.9596 10.1775 22.5407 9.84019 23.2484 9.14252L23.8742 8.52919L23.2261 8.01552L22.5705 7.49419L22.1608 7.88519C21.4605 8.54452 20.6634 8.87419 19.7471 8.87419C18.8308 8.87419 17.9518 8.48319 17.3484 7.79319C16.3576 6.65852 16.1415 4.95652 16.812 3.54585C17.2441 2.64885 17.8922 2.05852 18.8085 1.73652C19.6577 1.44519 21.2966 1.64452 21.7808 2.09685C21.9 2.21185 21.9224 2.34985 21.9224 3.06285V3.89085H22.7418H23.5613V2.62585V1.36852L23.2112 1.09252C22.7567 0.732186 22.1012 0.417852 21.4009 0.210853C20.6783 0.00385284 19.315 -0.0574808 18.6818 0.0881863Z"
                        fill="white"
                      />
                      <path
                        d="M3.22656 1.05437V1.89771H4.07581C4.81332 1.89771 4.93251 1.91304 4.97721 2.02804C5.007 2.10471 5.66256 3.97537 6.42987 6.19104C7.20462 8.40671 7.85273 10.2774 7.88253 10.3464C7.92723 10.469 8.03897 10.4844 8.70198 10.4844H9.46928L9.59593 10.147C9.66297 9.96304 10.3632 8.03871 11.1529 5.87671L12.5832 1.93604L13.3803 1.91304L14.1774 1.89004V1.04671V0.211041L12.7471 0.226375L11.3242 0.249374L10.0876 3.94471C9.40969 5.97637 8.83607 7.65537 8.81372 7.67837C8.79137 7.69371 8.3444 6.41337 7.81548 4.82637C7.28657 3.23937 6.7204 1.54504 6.55651 1.06971L6.26598 0.211041H4.74627H3.22656V1.05437Z"
                        fill="white"
                      />
                      <path
                        d="M3.96875 13.3976V14.1643H4.75095H5.53315V17.6143V21.0643H4.75095H3.96875V21.8693V22.6743H7.73077H11.4928V21.9076V21.141L9.39202 21.1256L7.2838 21.1026L7.26145 19.071C7.254 17.875 7.27635 16.8783 7.32105 16.656C7.57433 15.3986 8.60237 14.3483 9.72725 14.195L10.0774 14.1413V14.9233V15.6976H10.8968H11.7163V14.1643V12.631H10.8521C10.3456 12.631 9.78685 12.677 9.48141 12.7536C8.64707 12.9453 7.81272 13.551 7.3285 14.2947L7.11991 14.6243L7.06776 14.333C7.04541 14.1797 7.02306 13.8347 7.02306 13.5816C7.02306 13.321 7.00072 12.999 6.97837 12.8686L6.93367 12.631H5.45121H3.96875V13.3976Z"
                        fill="white"
                      />
                      <path
                        d="M13.5781 13.4743V14.31L14.3082 14.333L15.0308 14.356L15.0755 17.231C15.1202 20.3436 15.1202 20.3513 15.5672 21.2406C16.1706 22.4213 17.3476 23.05 18.8003 22.9656C19.6644 22.912 20.1784 22.6973 20.7595 22.1376C21.0128 21.8923 21.2884 21.5626 21.3629 21.417C21.4895 21.1716 21.6236 21.0566 21.6236 21.187C21.6236 21.2636 21.7801 22.3293 21.8173 22.498C21.8471 22.6743 21.862 22.6743 23.1508 22.6743H24.4545V21.8693V21.0643H23.8362H23.2104L23.1657 19.899C23.1359 19.2626 23.1135 17.369 23.1135 15.6823V12.631H21.4001H19.6868V13.4743V14.31L20.5286 14.333L21.3629 14.356V16.7786V19.1936L21.0798 19.7763C20.7744 20.4203 20.3572 20.865 19.7761 21.1563C19.359 21.3633 18.4948 21.4323 18.0851 21.2943C17.4817 21.0873 17.0198 20.4356 16.8634 19.5693C16.8112 19.2933 16.7814 17.8903 16.7814 15.874V12.631H15.1798H13.5781V13.4743Z"
                        fill="white"
                      />
                      <path
                        d="M0.587666 21.0413C0.565317 21.072 0.542969 21.463 0.542969 21.923V22.751H1.36242H2.18932L2.16697 21.8846L2.14462 21.026L1.39222 21.0106C0.975042 21.003 0.610015 21.0183 0.587666 21.0413Z"
                        fill="white"
                      />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="whoweare-section">
        <div class="white_wrap block-animation">
          <div
            class="div_ul ul_white marquee3k"
            data-speed="0.5"
            data-reverse="true"
          >
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
          <div class="wrapper whoweare-container">
            <h2 class="section-logo white-logo whoweare-logo">
              Мы <br />
              DESIRE
            </h2>
            <div class="section-text white-section-text">
              <h3 class="section-text__header">
                Мы ориентируемся на ваши цели, помогая выйти на новый уровень:
                не просто «быть», а «менять мир»
              </h3>

              <div class="textbox whoweare-textbox">
                <p class="textbox-item">
                  Наша команда всегда знает, как реализовать любую, даже самую
                  смелую идею. Мы помогаем вам раскрыть потенциал бизнеса
                </p>

                <p class="textbox-item">
                  Ориентируемся на клиента, создаем новое, меняем старое до
                  неузнаваемости!
                </p>
                <a class="textbox-link page-link" href="index-team.html"
                  >Познакомиться поближе</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="resps">
        <div class="resps-container">
          <div class="black_wrap">
            <div class="wrapper">
            <div class="resp-container block-animation development">
              
              
              <div class="resp-desc">
                <h2 class="resp-header">Разработка</h2>
                <p class="resp-desc__text">
                  Создаем удобные и эффективные сайты, которые нравятся
                  пользователям и хорошо продвигаются в поисковых системах.
                </p>
              </div>
              <div class="resp-btn__wrapper">
                <button class="btn-reset btn-stroke-light resp-btn">
                  <a href="/dev" class="resp-link">Подробнее</a>
                  </button>
                </div>
              <ul class="resp-list">
                <li class="resp-list-item">Корпоративный сайт</li>
                <li class="resp-list-item">Мобильное приложение</li>
                <li class="resp-list-item">Лендинг</li>
                <li class="resp-list-item">Интернет-Магазин</li>
              </ul>
            </div>
          </div>
          </div>
          <div class="white_wrap">
            <div class="wrapper">
            <div class="resp-container block-animation promotion">
              
              
              <div class="resp-desc">
                <h2 class="resp-header">Продвижение</h2>
                <p class="resp-desc__text">
                  Увеличиваем органический трафик на сайте и снижаем затраты на
                  привлечение клиентов.
                </p>
                
              </div>
              <div class="resp-btn__wrapper">
                <button class="btn-reset btn-stroke-dark resp-btn">
                  <a href="/promotion" class="resp-link">Подробнее</a>
                  </button>
                </div>
              <ul class="resp-list resp-list__promotion">
                <li class="resp-list-item">SEO-аудит</li>
                <li class="resp-list-item">Маркетинг-стратегия</li>
                <li class="resp-list-item">Продвижение в ТОП</li>
                <li class="resp-list-item">SMM</li>
                <li class="resp-list-item">Оптимизация</li>
                <li class="resp-list-item">
                  Реклама (таргетированная и контекстная)
                </li>
              </ul>
            </div>
            </div>
          </div>

          <div class="black_wrap">
            <div class="wrapper">
            <div class="resp-container block-animation design">
             
              
              <div class="resp-desc">
                <h2 class="resp-header">Дизайн</h2>
                <p class="resp-desc__text">
                  Сервисный дизайн на основе аналитики, метрик и
                  пользовательского опыта — продуктовый подход для создания
                  привлекательных и эффективных решений.
                </p>
                
              </div>
              <div class="resp-btn__wrapper">
                <button class="btn-reset btn-stroke-light resp-btn">
                  <a href="/design" class="resp-link">Подробнее</a>
                  </button>
                </div>
              
              <ul class="resp-list resp-list__design">
                <li class="resp-list-item">Дизайн сайта</li>
                <li class="resp-list-item">Разработка брендбука</li>
                <li class="resp-list-item">Дизайн мобильного приложения</li>
                <li class="resp-list-item">Создание гайдлайна</li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </section>
      <section id="portfolio" class="section-portfolio">
        <div class="white_wrap block-animation">
          <div
            class="div_ul ul_white ul_white-portfolio marquee3k"
            data-speed="0.5"
            data-reverse="true"
          >
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
      <section class="section-timeline">
        <div class="black_wrap block-animation">
          <div
            class="div_ul ul_black marquee3k"
            data-speed="0.5"
            data-reverse="true"
          >
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
          <div
            class="wrapper"
            style="flex-direction: column; align-items: normal"
          >
            <div class="test-new-timeline">
              <ol class="timeline-source">
                <li class="timeline-item">
                  <div class="timeline-item__src">
                    <h3 class="timeline-item__header">знакомство</h3>
                    <p class="timeline-item__desc">
                      Мы IT-компания по развитию бизнеса. Вы можете узнать о
                      наших услугах на страницах «Дизайн», «Разработка» и
                      «Продвижение»
                    </p>
                  </div>
                </li>
                <li class="timeline-item">
                  <div class="timeline-item__src">
                    <h3 class="timeline-item__header">оформление заказа</h3>
                    <p class="timeline-item__desc">
                      Оставьте pаявку<br>нам в Telegram, через сайт или по рабочей почте и мы с вами свяжемся
                    </p>
                  </div>
                </li>
                <li class="timeline-item">
                  <div class="timeline-item__src">
                    <h3 class="timeline-item__header">оценка</h3>
                    <p class="timeline-item__desc">
                      Мы ответим на любые интересующие вас вопросы, предоставим примерную оценку работы, а также уточним все важные детали
                    </p>
                  </div>
                </li>
                <li class="timeline-item">
                  <div class="timeline-item__src">
                    <h3 class="timeline-item__header">оплата</h3>
                    <p class="timeline-item__desc">
                      Гарантируем безопасную сделку по договору и предлагаем несколько вариантов оплаты

                    </p>
                  </div>
                </li>
                <li class="timeline-item">
                  <div class="timeline-item__src">
                    <h3 class="timeline-item__header">исполнение</h3>
                    <p class="timeline-item__desc">
                      После создания заказа берём его в работу, отправляем промежуточные отчёты и поддерживаем связь с вами
                    </p>
                  </div>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </section>
      <section class="section-start">
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
            <button class="btn-reset btn-stroke-green"><a href="/new-project">Начать проект</a></button>
          </div>
        </div>
      </section>


    </main>

<!-- <main class="mainPage-content">
    <section class="banner">
        <div class="desire_p p_1">desire</div>
        <div class="desire_p p_2">desire</div>
        <div class="desire_p p_3">desire</div>
        <div class="desire_p p_4">desire</div>
        <div class="wrapper">
            <div class="content">
                <div class="content-text">
                    <h1 class="title">Cоздаём <br /> и продвигаем</h1>
                    <p>Мы стремимся реализовывать потенциал каждой идеи, которая есть у наших клиентов.</p>
                </div>
                <a href="/new-project" class="content-logo">
                    <img class="logo-text" src="{{asset('assets/svg/button-text.svg')}}" alt="кнопка начать проект" />
                    <img class="logo-arrow" src="{{asset('assets/svg/arrowLogo.svg')}}" alt="стрелка" />
                </a>
            </div>
        </div>
    </section>
    <section class="main_wrap">
        <div class="white_wrap">
            <div class="div_ul ul_white marquee3k marque-animation" data-speed="0.5" data-reverse="true">
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
                <div class="white_logo block-animation">
                    Мы <br /> DESIRE
                </div>
                <div class="white_wrap_p block-animation">
                    <div>
                        <h2>Мы ориентируемся на ваши цели, помогая выйти на новый уровень: не просто «быть», а «менять мир»</h2>
                    </div>
                    <div class="text-box" style="display: flex;">
                        <div>
                            <p>Наша команда всегда знает, как реализовать любую, даже самую смелую идею. Мы помогаем вам начать свой путь в e-commerce</p>
                        </div>
                        <div>
                            <p>Ориентируемся на клиента, создаем новое, меняем старое до неузнаваемости!</p>
                            <div class="white_a">
                                <a href="/projects">
                                    Познакомиться поближе
                                    <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 8.5L9 0.5" stroke="#282828" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 0.5H9V8.5" stroke="#282828" stroke-linecap="square" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="black_wrap">
            <div class="div_ul ul_black marquee3k marque-animation" data-speed="0.5" data-reverse="true">
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
                    <div class="black_wrap_wrap_content block-animation">
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
                        <a href="/web-design-and-dev" class="wrap_button">
                            <button>Подробнее</button>
                        </a>
                    </div>
                    <div class="black_wrap_wrap_content block-animation">
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
                        <a href="/web-design-and-dev" class="wrap_button">
                            <button>Подробнее</button>
                        </a>
                    </div>
                    <div class="black_wrap_wrap_content block-animation">
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
                        <a href="/promotion" class="wrap_button">
                            <button>Подробнее</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="white_wrap ">
            <div class="div_ul ul_white  marquee3k marque-animation" data-speed="0.5" data-reverse="true">
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
            <div class="white_wrap_wrap_slider block-animation">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="/projects/noiceland"><img class="slider-img" src="{{asset('assets/img/slider-image-1.png')}}" alt="Обложка проекта - NoiceLand" /></a>
                            <div class="swiper-slide-main">
                                <h3 class="swiper-slide-title">NoiceLand </h3>
                                <a href="/projects/noiceland">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх" /> </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="/projects/atlant"><img class="slider-img" src="{{asset('assets/img/slider-image-5.png')}}" alt="Обложка проекта - Atlant" /></a>
                            <div class="swiper-slide-main">
                                <h3 class="swiper-slide-title">Atlant: Трекер задач</h3>
                                <a href="/projects/atlant">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх" /> </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="/projects/dolfie"><img class="slider-img" src="{{asset('assets/img/slider-image-2.png')}}" alt="Обложка проекта - Dolfie" /></a>
                            <div class="swiper-slide-main">
                                <h3 class="swiper-slide-title">Dolfie: Hard to choose. Easy to wear</h3>
                                <a href="/projects/dolfie">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх" /> </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="/projects/hike"><img class="slider-img" src="{{asset('assets/img/slider-image-3.png')}}" alt="Обложка проекта - Hike" /></a>
                            <div class="swiper-slide-main">
                                <h3 class="swiper-slide-title">Hike: Выбери свой маршрут для похода</h3>
                                <a href="/projects/hike">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх" /> </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="/projects/tocha"><img class="slider-img" src="{{asset('assets/img/slider-image-4.png')}}" alt="Обложка проекта - Tocha" /></a>
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
            </div>
            <div class="wrap_button_white block-animation">
                <a href="/projects" class="wrap_button">
                    <button>Смотреть всё</button>
                </a>
            </div>
        </div>
        <div class="black_wrap ">
            <div class="div_ul ul_black  marquee3k marque-animation" data-speed="0.5" data-reverse="true">
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
                        <li class="timeline__item block-animation">
                            <div class="timeline-item">
                                <div class="timeline-item__title">Знакомство</div>
                                <div class="timeline-item__info">Мы создали отдельный блок для каждого направления, где вы сможете узнать больше о наших услугах и их ценовой диапазон</div>
                            </div>
                        </li>
                        <li class="timeline__item block-animation">
                            <div class="timeline-item">
                                <div class="timeline-item__title">Оформление заказа</div>
                                <div class="timeline-item__info">Оставьте заявку нам в Telegram, через сайт или по рабочей почте и мы с вами свяжемся</div>
                            </div>
                        </li>
                        <li class="timeline__item block-animation">
                            <div class="timeline-item">
                                <div class="timeline-item__title">Оценка</div>
                                <div class="timeline-item__info">Мы ответим на любые интересующие вас вопросы, предоставим примерную оценку работы, а также уточним все важные детали</div>
                            </div>
                        </li>
                        <li class="timeline__item block-animation">
                            <div class="timeline-item">
                                <div class="timeline-item__title">Оплата</div>
                                <div class="timeline-item__info">Гарантируем безопасную сделку по договору и предлагаем несколько вариантов оплаты</div>
                            </div>
                        </li>
                        <li class="timeline__item block-animation">
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
        <div class="white_wrap" style="overflow: hidden">
            <div class="mainpage-back b1"></div>
            <div class="mainpage-back b2"></div>
            <div class="mainpage-back b3"></div>
            <div class="mainpage-back b4"></div>
            <div class="white_wrap_pp block-animation">
                <p>Мы предоставляем <span>весь спектр услуг</span> для вашего digital-проекта: <span>от</span>
                    разработки сайта <span>и</span> мобильных приложений <span>до</span> продвижения проекта в
                    поисковых системах Яндекс и Google.
                </p>
            </div>
            <div class="wrap_button_white wrap_button_green block-animation" style="margin-bottom: 0;">
                <a href="/new-project">
                    <button style="margin-top: 0">Начать проект</button>
                </a>
            </div>
        </div>
    </section>
</main> -->

@endsection
