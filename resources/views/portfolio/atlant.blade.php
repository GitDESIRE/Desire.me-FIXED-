@extends('layouts.app')

<head>
  <title>Трекер задач «ATLANT»</title>
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
    <div class="project-screen">
      <img src="{{asset('assets/img/Atlant-about.png')}}" alt="Атлант - о проект" />
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
    <div class="project-screen">
      <img src="{{asset('assets/img/Atlant-wireframes.png')}}" alt="Атлант - дизайн" />
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
      <div class="wrapper screen-wrapper">
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
    <div class="project-screen">
      <img src="{{asset('assets/img/Atlant-colors.png')}}" alt="Атлант - цвета" />
    </div>
    <div class="project-screen">
      <img src="{{asset('assets/img/Atlant-android.png')}}" alt="Атлант - андройд" />
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
      "name": "Кейс Atlant",
      "item": "https://desire-company.com/projects/atlant"
    }]
  }
</script>

@endsection