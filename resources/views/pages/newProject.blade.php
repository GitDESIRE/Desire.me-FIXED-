@extends('layouts.app')
    <head>
        <title>Оставьте заявку на создание своего проекта</title>
        <meta name="description" content="Уже есть идея? Давайте скорее начнём ваш проект! Заполните небольшую форму, чтобы мы могли с вами связаться - и ждите ответа в самое ближайшее время."/>
        <meta property="og:type" content="website">
        <meta property="og:title" content="Оставьте заявку на создание своего проекта">
        <meta property="og:url" content="https://desire-company.com/new-project">
        <meta property="og:image" content="https://desire-company.com/assets/svg/footerLogo.svg">
        <meta property="og:description" content="Уже есть идея? Давайте скорее начнём ваш проект! Заполните небольшую форму, чтобы мы могли с вами связаться - и ждите ответа в самое ближайшее время">
    </head>
@section('content')
    <body xmlns="http://www.w3.org/1999/html">
    <main class="main">
        <div class="wrapper newProject-wrapper">
            <section class="main_container">
                <h1 class="title">Начнём <br/> ваш проект</h1>
                <h2>Кратко опишите свою задачу, и мы свяжемся с вами в кратчайшие сроки</h2>
            </section>
            <section class="aside_container">
                <form enctype="multipart/form-data" class="newProject_form" id="form" name="newProject_form" action="{{url('newOrder')}}" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="inputsBox">
                        <div class="inputsBox_top">
                            <div class="inputsBox_leftSide">
                                <label for="name"><span class="label-title">Введите своё имя</span></label>
                                <input name="name" id="name" placeholder="ИМЯ"/>
                                <label for="email"><span class="label-title">Введите свою почту</span></label>
                                <input type="email" name="email" id="email" placeholder="EMAIL"/>
                            </div>
                            <div class="inputsBox_rightSide">
                                <label for="tel"><span class="label-title">Введите свой телефон</span></label>
                                <input type="tel" class="tel" name="tel" id="tel" placeholder="ТЕЛЕФОН"/>
                                    <p class="tel_error" id="tel_error"></p>
                                <label for="telegram"><span class="label-title">Введите свой Телеграм</span></label>
                                <input name="telegram" class="telegram" id="telegram" placeholder="TELEGRAM"/>
                                    <p class="telegram_error" id="telegram_error"></p>
                            </div>
                        </div>
                        <div class="inputsBox_bot">
                            <legend>выберите услугу</legend>
                            <div class="services-box">
                                <div class="service-chips">
                                    <input type="radio" id="seo" name="service" value="seo" />
                                    <label for="seo">Продвижение</label>
                                </div>
                                <div class="service-chips">
                                    <input type="radio" id="landing" name="service" value="landing" checked />
                                    <label for="landing">Лендинг</label>
                                </div>
                                <div class="service-chips">
                                    <input type="radio" id="corp" name="service" value="corp" />
                                    <label for="corp">Корпоративный сайт</label>
                                </div>
                                <div class="service-chips">
                                    <input type="radio" id="internet" name="service" value="internet" />
                                    <label for="internet">Интернет-магазин</label>
                                </div>
                                <div class="service-chips">
                                    <input type="radio" id="pages" name="service" value="pages" />
                                    <label for="pages">Дополнительные страницы</label>
                                </div>
                                <div class="service-chips">
                                    <input type="radio" id="redesign" name="service" value="redesign" />
                                    <label for="redesign">Редизайн сайта</label>
                                </div>
                                <div class="service-chips">
                                    <input type="radio" id="uniq" name="service" value="uniq" />
                                    <label for="uniq">Разработка уникального дизайна</label>
                                </div>
                                <div class="service-chips">
                                    <input type="radio" id="start" name="service" value="start" />
                                    <label for="start">Решение «START»</label>
                                </div>
                                <div class="service-chips">
                                    <input type="radio" id="arrow" name="service" value="arrow" />
                                    <label for="arrow">Решение «ARROW»</label>
                                </div>
                                <div class="service-chips">
                                    <input type="radio" id="influencer" name="service" value="influencer" />
                                    <label for="influencer">Решение «INFLUENCER»</label>
                                </div>
                                <div class="service-chips">
                                    <input type="radio" id="digital" name="service" value="digital" />
                                    <label for="digital">Решение «FULL DIGITAL»</label>
                                </div>
                                <div class="service-chips">
                                    <input type="radio" id="other" name="service" value="other" />
                                    <label for="other">Другое</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttonsBox">
                        <button class="file-button" type="button"><span class="file-button-text">Прикрепить файл</span>
                            <label for="file"><span class="label-title">Прикрепите документ</span></label>
                            <input class="file-input" multiple type="file" name="file" id="file" accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                        </button>
                            <button type="submit" class="submit-button" id="btn" disabled="disabled">Отправить</button>
                    </div>
                    <div class="agreement_box">
                        <label class="checkbox-label">
                            <input type="checkbox" id = "input" class="checkbox-input">
                            <div class="checkbox">
                                <svg id='agr-arrow-icon' width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14 1.20284L4.7828 10.5L0 5.67571L0.696799 4.97287L4.7828 9.09431L13.3032 0.5L14 1.20284Z" fill="Grey"/>
                                </svg>
                            </div>
                            <span class="rights">Даю согласие на обработку
                            <a href="{{asset('assets/Privacy politic.pdf')}}" class="agreementData-link" target="_blank">Персональных данных</a></span>
                        </label>
                    </div>
                </form>
            </section>
        </div>
    </main>
    </body>
    <script type="application/ld+json">
        {
        "@context": "https://schema.org/", 
        "@type": "BreadcrumbList", 
        "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Desire Company",
            "item": "https://desire-company.com/"  
        },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Оставить заявку",
            "item": "https://desire-company.com/new-project"  
        }]
        }
    </script>

@endsection
