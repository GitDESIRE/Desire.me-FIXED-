@extends('layouts.app')

<head>
  <title>Проект ATLANT: дизайн мобильного приложения</title>

  <meta name="description" content="Уникальный дизайн приложения для бренда с уникальным мифологическим позиционированием? Мы справились и с этим, превратив идею в стильный интерактивный макет с наполнением, выдержанным в стиле персонажа бренда - всесильного Атланта" />
  <meta property="og:type" content="website">
  <meta property="og:title" content="Проект ATLANT: дизайн мобильного приложения">
  <meta property="og:url" content="https://desire-company.com/projects/atlant">
  <meta property="og:image" content="https://desire-company.com/assets/img/snippet-image.png">
  <meta property="og:description" content="Уникальный дизайн приложения для бренда с уникальным мифологическим позиционированием? Мы справились и с этим, превратив идею в стильный интерактивный макет  с наполнением, выдержанным в стиле персонажа бренда - всесильного Атланта">
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
        "item": "https://desire-company.com/projects/"
      }, {
        "@type": "ListItem",
        "position": 3,
        "name": "Кейс ATLANT",
        "item": "https://desire-company.com/projects/atlant"
      }]
    }
  </script>

</head>
@section('content')
<main class="main">
  <section class="project-banner">
    <div class="wrapper project-wrapper">
      <div class="seo-banner-top">
        <h1 class="banner-title">
          Трекер задач<br> «ATLANT»
        </h1>
        <p class="seo-banner-section"><a href="/projects">Проекты</a> &nbsp / &nbsp Трекер задач «ATLANT» </p>
      </div>
      <div class="seo-banner-bot">
        <ul class="banner-description-list">
          <li class="banner-description-item">Аналитика и исследование (UX)</li>
          <li class="banner-description-item">Проектирование и разработка дизайна приложения под ios и Android</li>
          <li class="banner-description-item">Frontend разработка</li>
          <li class="banner-description-item">тестирование</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="about-project">
    <div class="wrapper">
      <div class="about-project-text">
        <h2 class="about-project-name">О проекте</h2>
        <p class="about-project-description">ATLANT —личный ассистент в мобильном приложении, который сэкономит силы пользователя на организацию рабочих задач и повысит качество и эффективность управления личным временем.</p>
        <p class="about-project-description">За счет уникальной базы данных, которая генерируется по мере взаимодействия с ассистентом, Атлант подстраивается под каждого пользователя, находя наиболее эффективные решения.</p>
      </div>
    </div>
  </section>
  <section class="project-screens">
    <div class="project-screen about">
      <div class="project-wrapper about">
        <h2 class="project-subtitle">ATLANT</h2>
        <p>Мобильное приложение на iOS и Android для планирования задач пользователя.</p>
      </div>
    </div>
    <div class="project-info">
      <div class="wrapper">
        <h2 class="project-subtitle">Цели и задачи</h2>
        <ul>
          <li>Разработать мобильное приложение для планирования дня пользователя</li>
          <li>Создать максимально простой дизайн, позволяющий совершать действия в минимальное количество кликов</li>
        </ul>
      </div>
    </div>
    <div class="project-screen wireframes">
      <div class="project-wrapper about">
        <h2 class="project-subtitle">wireframes</h2>
        <p>На основе анализа проведенных исследований были спроектированы низкодетализированные прототипы</p>
      </div>
    </div>
    <div class="project-info">
      <div class="wrapper screen-wrapper">
        <div class="text-content">
          <h2 class="project-subtitle">Онбординг</h2>
          <p>Знакомит пользователя с основным функционалом и назначением приложения</p>
        </div>
        <div class="image-content">
          <img src="{{asset('assets/img/Atlant-Onboarding.png')}}" alt="Атлант - Онбоардинг" />
        </div>
      </div>
      <div class="wrapper screen-wrapper reg-wrapper">
        <div class="image-content">
          <img src="{{asset('assets/img/Atlant-reg.png')}}" alt="Атлант - Регистрация" />
        </div>
        <div class="text-content">
          <h2 class="project-subtitle">Регистрация</h2>
          <p>Пользователь регистрируется в приложении по электронной почте или через Google, Apple ID, VK. Также есть возможность пропустить регистрацию и сразу начать пользоваться приложением. Наличие аккаунта в приложении гарантирует защиту данных от потери.</p>
        </div>
      </div>
      <div class="wrapper screen-wrapper">
        <div class="text-content">
          <h2 class="project-subtitle">Новая задача</h2>
          <p>Пользователь может создавать задачу вручную или записывать ее голосом, как голосовое сообщение.</p>
        </div>
        <div class="image-content">
          <img src="{{asset('assets/img/Atlant-newTask.png')}}" alt="Атлант - Новая задача" />
        </div>
      </div>
      <div class="wrapper screen-wrapper">
        <div class="image-content">
          <img src="{{asset('assets/img/Atlant-calendar.png')}}" alt="Атлант - Календарь" />
        </div>
        <div class="text-content">
          <p>Задаче можно задавать приоритет, дату и время выполнения, поместить её в конкретный болок задач (работа, личное, контакты, покупки и т.п.)</p>
        </div>
      </div>
      <div class="wrapper screen-wrapper">
        <div class="text-content">
          <h2 class="project-subtitle">Расписание</h2>
          <p>На экане расписание удобный просмотр задачи на текущий день, неделю и месяц. Любую задачу можно открыть и скорректировать информацию по ней.</p>
        </div>
        <div class="image-content">
          <img src="{{asset('assets/img/Atlant-tasking.png')}}" alt="Атлант - Расписание" />
        </div>
      </div>
      <div class="wrapper screen-wrapper">
        <div class="image-content">
          <img src="{{asset('assets/img/Atlant-lists.png')}}" alt="Атлант - списки" />
        </div>
        <div class="text-content">
          <h2 class="project-subtitle">Списки</h2>
          <p>Для удобства пользователей, на экране списки, задачи разделяются блоки. Можно использовать встроеные блоки или создавать собсвенные.</p>
        </div>
      </div>
      <div class="wrapper screen-wrapper">
        <div class="text-content">
          <h2 class="project-subtitle">Боковое меню</h2>
          <p>В боковом меню доступна дополнительная навигация для управления подпиской, уведомлениями и главным экраном. Можно выбрать что будет отображено на главном экране пользователя — Расписание или создание новой задачи.</p>
        </div>
        <div class="image-content">
          <img src="{{asset('assets/img/Atlant-menu.png')}}" alt="Атлант - боковое меню" />
        </div>
      </div>
    </div>
    <div class="project-screen colors">
      <div class="project-wrapper colors">
        <h2 class="project-subtitle">Цвет и типографика</h2>
        <div class="project-typography">
          <p class="project-font">INTER</p>
          <div class="typo-icons">
            <div class="icon-blue icon">
              <div class="icon-wrapper">
                <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_2501_2584)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9942 2.42101C19.4544 0.960903 21.4347 0.140625 23.4996 0.140625C25.5645 0.140625 27.5448 0.960903 29.0049 2.42101C30.465 3.88111 31.2853 5.86144 31.2853 7.92634V23.4978C31.2853 25.5627 30.465 27.543 29.0049 29.0031C27.5448 30.4632 25.5645 31.2835 23.4996 31.2835C21.4347 31.2835 19.4544 30.4632 17.9942 29.0031C16.5341 27.543 15.7139 25.5627 15.7139 23.4978V7.92634C15.7139 5.86144 16.5341 3.88111 17.9942 2.42101ZM23.4996 4.03348C22.4671 4.03348 21.477 4.44362 20.7469 5.17367C20.0169 5.90373 19.6067 6.89389 19.6067 7.92634V23.4978C19.6067 24.5302 20.0169 25.5204 20.7469 26.2504C21.477 26.9805 22.4671 27.3906 23.4996 27.3906C24.532 27.3906 25.5222 26.9805 26.2522 26.2504C26.9823 25.5204 27.3924 24.5302 27.3924 23.4978V7.92634C27.3924 6.89389 26.9823 5.90373 26.2522 5.17367C25.5222 4.44362 24.532 4.03348 23.4996 4.03348Z" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.87514 17.6641C10.9501 17.6641 11.8216 18.5355 11.8216 19.6105V23.5033C11.8216 26.6007 13.052 29.5712 15.2421 31.7613C17.4323 33.9515 20.4028 35.1819 23.5001 35.1819C26.5975 35.1819 29.568 33.9515 31.7581 31.7613C33.9483 29.5712 35.1787 26.6007 35.1787 23.5033V19.6105C35.1787 18.5355 36.0502 17.6641 37.1251 17.6641C38.2001 17.6641 39.0716 18.5355 39.0716 19.6105V23.5033C39.0716 27.6331 37.431 31.5938 34.5108 34.514C31.5906 37.4342 27.6299 39.0748 23.5001 39.0748C19.3703 39.0748 15.4097 37.4342 12.4895 34.514C9.56927 31.5938 7.92871 27.6331 7.92871 23.5033V19.6105C7.92871 18.5355 8.80016 17.6641 9.87514 17.6641Z" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.5001 35.1797C24.5751 35.1797 25.4466 36.0511 25.4466 37.1261V44.9118C25.4466 45.9868 24.5751 46.8583 23.5001 46.8583C22.4252 46.8583 21.5537 45.9868 21.5537 44.9118V37.1261C21.5537 36.0511 22.4252 35.1797 23.5001 35.1797Z" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7676 44.9074C13.7676 43.8324 14.639 42.9609 15.714 42.9609H31.2854C32.3604 42.9609 33.2319 43.8324 33.2319 44.9074C33.2319 45.9823 32.3604 46.8538 31.2854 46.8538H15.714C14.639 46.8538 13.7676 45.9823 13.7676 44.9074Z" fill="white" />
                  </g>
                  <defs>
                    <clipPath id="clip0_2501_2584">
                      <rect width="46.7143" height="46.7143" fill="white" transform="translate(0.142578 0.140625)" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <span>#127CBC</span>
            </div>
            <div class="icon-black icon">
              <div class="icon-wrapper">
                <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_2501_2584)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9942 2.42101C19.4544 0.960903 21.4347 0.140625 23.4996 0.140625C25.5645 0.140625 27.5448 0.960903 29.0049 2.42101C30.465 3.88111 31.2853 5.86144 31.2853 7.92634V23.4978C31.2853 25.5627 30.465 27.543 29.0049 29.0031C27.5448 30.4632 25.5645 31.2835 23.4996 31.2835C21.4347 31.2835 19.4544 30.4632 17.9942 29.0031C16.5341 27.543 15.7139 25.5627 15.7139 23.4978V7.92634C15.7139 5.86144 16.5341 3.88111 17.9942 2.42101ZM23.4996 4.03348C22.4671 4.03348 21.477 4.44362 20.7469 5.17367C20.0169 5.90373 19.6067 6.89389 19.6067 7.92634V23.4978C19.6067 24.5302 20.0169 25.5204 20.7469 26.2504C21.477 26.9805 22.4671 27.3906 23.4996 27.3906C24.532 27.3906 25.5222 26.9805 26.2522 26.2504C26.9823 25.5204 27.3924 24.5302 27.3924 23.4978V7.92634C27.3924 6.89389 26.9823 5.90373 26.2522 5.17367C25.5222 4.44362 24.532 4.03348 23.4996 4.03348Z" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.87514 17.6641C10.9501 17.6641 11.8216 18.5355 11.8216 19.6105V23.5033C11.8216 26.6007 13.052 29.5712 15.2421 31.7613C17.4323 33.9515 20.4028 35.1819 23.5001 35.1819C26.5975 35.1819 29.568 33.9515 31.7581 31.7613C33.9483 29.5712 35.1787 26.6007 35.1787 23.5033V19.6105C35.1787 18.5355 36.0502 17.6641 37.1251 17.6641C38.2001 17.6641 39.0716 18.5355 39.0716 19.6105V23.5033C39.0716 27.6331 37.431 31.5938 34.5108 34.514C31.5906 37.4342 27.6299 39.0748 23.5001 39.0748C19.3703 39.0748 15.4097 37.4342 12.4895 34.514C9.56927 31.5938 7.92871 27.6331 7.92871 23.5033V19.6105C7.92871 18.5355 8.80016 17.6641 9.87514 17.6641Z" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.5001 35.1797C24.5751 35.1797 25.4466 36.0511 25.4466 37.1261V44.9118C25.4466 45.9868 24.5751 46.8583 23.5001 46.8583C22.4252 46.8583 21.5537 45.9868 21.5537 44.9118V37.1261C21.5537 36.0511 22.4252 35.1797 23.5001 35.1797Z" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7676 44.9074C13.7676 43.8324 14.639 42.9609 15.714 42.9609H31.2854C32.3604 42.9609 33.2319 43.8324 33.2319 44.9074C33.2319 45.9823 32.3604 46.8538 31.2854 46.8538H15.714C14.639 46.8538 13.7676 45.9823 13.7676 44.9074Z" fill="white" />
                  </g>
                  <defs>
                    <clipPath id="clip0_2501_2584">
                      <rect width="46.7143" height="46.7143" fill="white" transform="translate(0.142578 0.140625)" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <span>#27282A</span>
            </div>
            <div class="icon-white icon">
              <div class="icon-wrapper">
                <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_2501_2584)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9942 2.42101C19.4544 0.960903 21.4347 0.140625 23.4996 0.140625C25.5645 0.140625 27.5448 0.960903 29.0049 2.42101C30.465 3.88111 31.2853 5.86144 31.2853 7.92634V23.4978C31.2853 25.5627 30.465 27.543 29.0049 29.0031C27.5448 30.4632 25.5645 31.2835 23.4996 31.2835C21.4347 31.2835 19.4544 30.4632 17.9942 29.0031C16.5341 27.543 15.7139 25.5627 15.7139 23.4978V7.92634C15.7139 5.86144 16.5341 3.88111 17.9942 2.42101ZM23.4996 4.03348C22.4671 4.03348 21.477 4.44362 20.7469 5.17367C20.0169 5.90373 19.6067 6.89389 19.6067 7.92634V23.4978C19.6067 24.5302 20.0169 25.5204 20.7469 26.2504C21.477 26.9805 22.4671 27.3906 23.4996 27.3906C24.532 27.3906 25.5222 26.9805 26.2522 26.2504C26.9823 25.5204 27.3924 24.5302 27.3924 23.4978V7.92634C27.3924 6.89389 26.9823 5.90373 26.2522 5.17367C25.5222 4.44362 24.532 4.03348 23.4996 4.03348Z" fill="#282828" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.87514 17.6641C10.9501 17.6641 11.8216 18.5355 11.8216 19.6105V23.5033C11.8216 26.6007 13.052 29.5712 15.2421 31.7613C17.4323 33.9515 20.4028 35.1819 23.5001 35.1819C26.5975 35.1819 29.568 33.9515 31.7581 31.7613C33.9483 29.5712 35.1787 26.6007 35.1787 23.5033V19.6105C35.1787 18.5355 36.0502 17.6641 37.1251 17.6641C38.2001 17.6641 39.0716 18.5355 39.0716 19.6105V23.5033C39.0716 27.6331 37.431 31.5938 34.5108 34.514C31.5906 37.4342 27.6299 39.0748 23.5001 39.0748C19.3703 39.0748 15.4097 37.4342 12.4895 34.514C9.56927 31.5938 7.92871 27.6331 7.92871 23.5033V19.6105C7.92871 18.5355 8.80016 17.6641 9.87514 17.6641Z" fill="#282828" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M23.5001 35.1797C24.5751 35.1797 25.4466 36.0511 25.4466 37.1261V44.9118C25.4466 45.9868 24.5751 46.8583 23.5001 46.8583C22.4252 46.8583 21.5537 45.9868 21.5537 44.9118V37.1261C21.5537 36.0511 22.4252 35.1797 23.5001 35.1797Z" fill="#282828" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7676 44.9074C13.7676 43.8324 14.639 42.9609 15.714 42.9609H31.2854C32.3604 42.9609 33.2319 43.8324 33.2319 44.9074C33.2319 45.9823 32.3604 46.8538 31.2854 46.8538H15.714C14.639 46.8538 13.7676 45.9823 13.7676 44.9074Z" fill="#282828" />
                  </g>
                  <defs>
                    <clipPath id="clip0_2501_2584">
                      <rect width="46.7143" height="46.7143" fill="#282828" transform="translate(0.142578 0.140625)" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <span>#FFFFFF</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="project-screen adaptive">
      <div class="project-wrapper about">
        <h2 class="subTitle">Адаптив <br /> на Android</h2>
      </div>
    </div>
  </section>
  <section class="cases">
    <div class="wrapper" style="max-width: 100%;">
      <div class="wrapper">
        <h2 class="subTitle">Смотреть ещё</h2>
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
          <div class="swiper-slide">
            <a href="/projects/atlant"><img class="slider-img" src="{{asset('assets/img/slider-image-5.png')}}" alt="Обложка проекта - Atlant" /></a>
            <div class="swiper-slide-main">
              <h3 class="swiper-slide-title">Atlant: Трекер задач</h3>
              <a href="/projects/atlant">Посмотреть <img src="{{asset('assets/svg/arrow-up-right.svg')}}" alt="стрелка вверх" /> </a>
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
      <a href="/projects"><button class="cases-btn">Смотреть все</button></a>
    </div>
  </section>
</main>

@endsection