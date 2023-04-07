@extends('layouts.app')

<head>
    <title>Оставьте заявку на создание своего проекта</title>
    <meta name="description" content="Уже есть идея? Давайте скорее начнём ваш проект! Заполните небольшую форму, чтобы мы могли с вами связаться - и ждите ответа в самое ближайшее время." />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Оставьте заявку на создание своего проекта">
    <meta property="og:url" content="https://desire-company.com/new-project">
    <meta property="og:image" content="https://desire-company.com/assets/img/snippet-image.png">
    <meta property="og:description" content="Уже есть идея? Давайте скорее начнём ваш проект! Заполните небольшую форму, чтобы мы могли с вами связаться - и ждите ответа в самое ближайшее время">
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
                "name": "Оставить заявку",
                "item": "https://desire-company.com/new-project"
            }]
        }
    </script>
</head>
@section('content')

<main class="main">
    <div class="wrapper">
      <div class="new-project-container">
        <div class="new-project-text">
          <h1 class="new-project-title">Начнём <br> ваш проект!</h1>
          <p class="new-project-desc">Оставьте заявку, и мы свяжемся с вами в&nbsp;ближайшее время.</p>
        </div>
        <div class="main-link new-project__main-link">
          <a href="index.html" class="main-link__src">Главная</a>
          <span class="main-link__span">Оставить заявку</span>
        </div>

        <div class="form-container">
          <form class="personal-data new-project__personal-data" name="new-project" id="new-project" action="https://desire-company.com/newCandidate" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="EIFxb7KwM5HjABoE1biWxTHdGQt1qZDdGfyZq1Ed">
            <div class="personal-data_inputs-box">
                <div class="inputs-box_top">
                    <div class="inputs-box_left">
                        <label for="name">
                            <span class="label-title">Имя</span>
                        </label>
                        <input class="input" name="name" id="name" type="text" placeholder="ИМЯ">
                        <label for="email">
                            <span class="label-title">Email</span>
                        </label>
                        <input class="input" name="email" id="email" type="text" placeholder="EMAIL">
                        <p class="email_error" id="email_error"></p>
                    </div>
                    <div class="inputs-box_right">
                        <label for="tel">
                            <span class="label-title">Телефон</span>
                        </label>
                        <input class="input" class="tel" name="tel" id="tel" type="tel" placeholder="ТЕЛЕФОН">
                        <p class="tel_error" id="tel_error"></p>
                        <label for="telegram">
                            <span class="label-title">Телеграм</span>
                        </label>
                        <input class="input" class="telegram" name="telegram" id="telegram" type="text" placeholder="TELEGRAM">
                        <p class="telegram_error" id="telegram_error"></p>
                    </div>
                </div>
                <div class="inputs-box_bottom">
                    <label for="about">
                        <span class="label-title chips-title">Выберите услугу:</span>
                    </label>
                    <ul class="form-list" id="service" >
                      <li class="form-list__item"><button class="chip-chosen form-list__chip">Лендинг</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Корпоративный сайт</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Мобильное приложение</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Интернет - магазин</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Дополнительные страницы</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Продвижение</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Дизайн мобильного приложения</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Дизайн сайта</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Брендбук</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Гайдлайн</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Решение START</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Решение ARROW</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Решение INFLUENCER</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Решение FULL DIGITAL</button></li>
                      <li class="form-list__item"><button class="form-list__chip">Другое</button></li>
                    </ul>
                </div>
            </div>
            <div class="buttonsBox">
                <button class="btn-reset btn-stroke-green file-button" type="button">
                    <span class="file-button-text">Прикрепить файл</span>
                    <label for="file">
                        <span class="label-title">Прикрепите документ</span>
                    </label>
                    <input class="file-input" type="file" name="file" id="file" accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                </button>
                <button class="btn-reset btn-fill submit-button" id="btn" disabled="disabled" type="submit">Отправить</button>
            </div>
            <div class="agreement_box">
                <label class="checkbox-label">
                    <input type="checkbox" id="input" class="checkbox-input">
                    <div class="checkbox">
                        <svg id='agr-arrow-icon' width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14 1.20284L4.7828 10.5L0 5.67571L0.696799 4.97287L4.7828 9.09431L13.3032 0.5L14 1.20284Z" fill="Grey"/>
                        </svg>
                    </div>
                    <span class="rights">
                        Даю согласие на обработку
                    <a href="privacy-policy.html" target="_blank" class="agreementData-link">Персональных данных</a>
                    </span>
                </label>
            </div>
        </form>
        </div>
      </div>

    </div>
  </main>

@endsection