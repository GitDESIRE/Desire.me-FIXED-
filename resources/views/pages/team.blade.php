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
      <section class="main_container">
        <h1 class="title">Начнём <br/> ваш проект</h1>
        <p>Кратко опишите свою задачу, и мы свяжемся с вами в кратчайшие сроки</p>
      </section>
      <section class="aside_container">
        <form class="newProject_form" name="newProject_form">
          <div class="inputsBox">
            <div class="inputsBox_top">
              <div class="inputsBox_leftSide">
                <label for="name"><span class="label-title">Введите своё имя</span></label>
                <input name="name" id="name" placeholder="ИМЯ"/>
                <label for="email"><span class="label-title">Введите свою почту</span></label>
                <input type="email" name="email" id="email" placeholder="EMAIL" required/>
              </div>
              <div class="inputsBox_rightSide">
                <label for="tel"><span class="label-title">Введите свой телефон</span></label>
                <input type="tel" name="tel" id="tel" placeholder="ТЕЛЕФОН" required/>
                <label for="telegram"><span class="label-title">Введите свой Телеграм</span></label>
                <input name="telegram" id="telegram" placeholder="TELEGRAM"/>
              </div>
            </div>
            <div class="inputsBox_bot">
              <label for="category"><span class="label-title">Выберите категорию</span></label>
                <div class="custom-select">
                  <select id="category">
                    <option value="select">выберите категорию проекта</option>
                    <option value="select">выберите категорию проекта</option>
                    <option value="SEO">SEO</option>
                    <option value="Лендинг">Лендинг</option>
                    <option value="Корпоративный сайт">Корпоративный сайт</option>
                    <option value="Интернет - магазин">Интернет - магазин</option>
                    <option value="Дополнительные страницы">Дополнительные страницы</option>
                    <option value="Редизайн сайта">Редизайн сайта</option>
                    <option value="Разработка уникального дизайна">Разработка уникального дизайна</option>
                    <option value="Другое">Другое</option>
                  </select>
                </div>
              <label for="tarif"><span class="label-title">Тариф</span></label>
                <div class="custom-select">
                  <select id="tarif">
                    <option value="select">выберите тариф</option>
                    <option value="select">выберите тариф</option>
                    <option value="Start">Комплексное решение «START»</option>
                    <option value="Arrow">разработка сайта NoCode - ARROW</option>
                  </select>
                </div>
            </div>
          </div>
          <div class="buttonsBox">
            <button class="file-button" type="button"><span class="file-button-text">Прикрепить файл</span>
              <label for="file"><span class="label-title">Прикрепите документ</span></label>
              <input class="file-input" multiple type="file" name="file" id="file" accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
            </button>
            <button class="submit-button" type="submit">Отправить</button>
          </div>
          <div class="agreement_box">
            <label class="checkbox-label">
              <input type="checkbox" class="checkbox-input">
              <div class="checkbox">
                  <svg id='agr-arrow-icon' width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M14 1.20284L4.7828 10.5L0 5.67571L0.696799 4.97287L4.7828 9.09431L13.3032 0.5L14 1.20284Z" fill="Grey"/>
                  </svg>
              </div> 
              <span class="rights">Даю согласие на обработку 
              <a href="#" class="agreementData-link">Персональных данных</a></span>
            </label>
          </div>
        </form>
      </section>
    </div>

@endsection