@extends('layouts.app')
@section('content')
    <body>
    <main class="main">
        <section class="team-banner">
            <div class="wrapper">
                <div class="team-banner-left">
                    <h1 class="title">О нас</h1>
                    <p class="team-banner-description">Качество, креативность и открытость. Новые веяния и дух авантюризма. Мы — DESIRE, и мы готовы показать вам, каково это — совмещать мечты и реальность в каждом проекте.</p>
                </div>
                <div class="team-banner-right">
                    <a href="/project/new" class="content-logo">
                        <img class="logo-circle" src="{{asset('assets/svg/button-text.svg')}}" alt="кнопка начать проект" />
                        <img class="logo-arrow" src="{{asset('assets/svg/arrowLogo.svg')}}" alt="стрелка" />
                    </a>
                    <img src="{{asset('assets/img/team-banner.png')}}" alt="Работа команды" class="banner-img">
                </div>
            </div>
        </section>
        <section class="team">
            <div class="wrapper team-wrapper">
                <h2 class="team-title">Наша <span class="color-text">команда</span></h2>
                <ul class="team-list">
                    <li class="team-item">
                        <span class="name-team">Артур Шарифулин</span>
                        <span class="team-function">основатель и генеральный директор</span>
                    </li>
                    <li class="team-item">
                        <span class="name-team">Кирилл кислухин</span>
                        <span class="team-function">руководитель HR-отдела</span>
                    </li>
                    <li class="team-item">
                        <span class="name-team">Галина Михайлова</span>
                        <span class="team-function">проектный директор</span>
                    </li>
                    <li class="team-item">
                        <span class="name-team">Ольга Дубовская</span>
                        <span class="team-function">ведущий  UX/UI дизайнер</span>
                    </li>
                    <li class="team-item">
                        <span class="name-team">Данила Леонтьев</span>
                        <span class="team-function">руководитель SEO-отдела</span>
                    </li>
                    <li class="team-item team-item1">
                        <span class="name-team">Иван Кокшаров</span>
                        <span class="team-function">руководитель отдела продаж</span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="mission">
            <div class="wrapper team-wrapper">
                <h2 class="team-title team-title1">Наша <span class="color-text">миссия</span></h2>
                <div class="task">
                    <p class="team-text">Наша главная задача: делать незаурядные digital-проекты, которые привлекут внимание и ваших клиентов.</p>
                    <img src="{{asset('assets/img/team-mission-1.png')}}" alt="Команда DESIRE" class="task-img">
                </div>
                <div class="rule">
                    <img src="{{asset('assets/img/team-mission-2.png')}}" alt="Команда DESIRE" class="rule-img">
                    <p class="team-text1 team-text">Наше главное правило заключается в открытости процессов. Мы всегда демонстрируем все возможности и перспективы бизнеса клиента, а также рассказываем о своих этапах работы над проектом.</p>
                </div>
            </div>
        </section>
        <section class="invitation">
            <div class="wrapper">
                <h2 class="invitation-title"><span class="color-text">Хочешь </span>в нашу<br> команду?</h2>
                <div class="forms">
                    <form class="personal-data" action="{{url('newCandidate')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="personal-data_inputs-box">
                            <div class="inputs-box_top">
                                <div class="inputs-box_left">
                                    <label for="name"><span class="label-title">Имя</span></label>
                                    <input class="input" name="name" id="name" type="text" placeholder="ИМЯ">
                                    <label for="email"><span class="label-title">Email</span></label>
                                    <input class="input" name="email" id="email" type="email" placeholder="EMAIL">
                                </div>
                                <div class="inputs-box_right">
                                    <label for="tel"><span class="label-title">Телефон</span></label>
                                    <input class="input" name="tel" id="tel" type="tel" placeholder="телефон">
                                    <label for="telegram"><span class="label-title">Телеграм</span></label>
                                    <input class="input" name="telegram" id="telegram" type="text" placeholder="TELEGRAM">
                                </div>
                            </div>
                            <div class="inputs-box_bottom">
                                <label for="about"><span class="label-title">Расскажите о себе</span></label>
                                <input class="input inputs" name="about" id="about" type="text" placeholder="РАССКАЖИТЕ НЕМНОГО О СЕБЕ">
                            </div>
                        </div>
                        <div class="buttonsBox">
                            <button class="file-button" type="button"><span class="file-button-text">Прикрепить файл</span>
                                <label for="file"><span class="label-title">Прикрепите документ</span></label>
                                <input class="file-input" type="file" name="file" id="file" accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                            </button>
                            <button class="submit-button" id="btn" disabled="disabled" type="submit">Отправить</button>
                        </div>
                        <div class="agreement_box">
                            <label class="checkbox-label">
                                <input type="checkbox" id="input" class="checkbox-input">
                                <div class="checkbox">
                                    <svg id='agr-arrow-icon' width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14 1.20284L4.7828 10.5L0 5.67571L0.696799 4.97287L4.7828 9.09431L13.3032 0.5L14 1.20284Z" fill="Grey"/>
                                    </svg>
                                </div>
                                <span class="rights">Даю согласие на обработку
                              <a href="{{asset('assets/Privacy politic.pdf')}}" target="_blank" class="agreementData-link">Персональных данных</a></span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    </body>
@endsection
