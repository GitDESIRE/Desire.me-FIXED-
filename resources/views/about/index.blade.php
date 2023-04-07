@extends('layouts.app')

<head>
    <title>Знакомимся ближе: всё о компании Desire</title>
    <meta name="description" content="Всё о нашей компании и даже немного больше. Здесь мы познакомимся ближе, расскажем вам о миссии и мечтах Desire, а также о мечтах каждого члена команды. У каждой компании ведь есть душа, правда?" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Знакомимся ближе: всё о компании Desire">
    <meta property="og:url" content="https://desire-company.com/about-us">
    <meta property="og:image" content="https://desire-company.com/assets/svg/footerLogo.svg">
    <meta property="og:description" content="Всё о нашей компании и даже немного больше. Здесь мы познакомимся ближе, расскажем вам о миссии и мечтах Desire, а также о мечтах каждого члена команды. У каждой компании ведь есть душа, правда?">
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
                "name": "О нас",
                "item": "https://desire-company.com/about-us"
            }]
        }
    </script>
</head>
@section('content')

<body>
<main class="main">
            <section class="team-banner">
                <div class="wrapper">
                    <div class="team-banner-left">
                        <h1 class="title team-header">О нас</h1>
                        <h2 class="team-banner-description">Качество, креативность и открытость. Новые веяния и дух авантюризма. Мы — DESIRE, и мы готовы показать вам, каково это — совмещать мечты и реальность в каждом проекте.</h2>
                    </div>
                    <div class="team-banner-right">
                        <div class="logo-wrapper">
                            <a href="/new-project" class="content-logo">
                                <img class="logo-text" src="{{asset('assets/svg/button-text.svg')}}" alt="кнопка начать проект"/>
                                <img class="logo-arrow" src="{{asset('assets/svg/arrowLogo.svg')}}" alt="стрелка"/>
                            </a>
                        </div>
                        <img src="{{asset('assets/img/team-banner.png')}}" src="" alt="Работа команды DESIRE" class="banner-img">
                    </div>
                </div>
            </section>
            <section class="team">
                <div class="wrapper team-wrapper">
                    <h2 class="team-title team-title1">
                        Наша <span class="color-text">команда</span>
                    </h2>
                    <ul class="team-list">
                        <li class="team-item">
                            <span class="name-team">Артур Шарифулин</span>
                            <span class="team-function">основатель и генеральный директор</span>
                        </li>
                        <li class="team-item">
                            <span class="name-team">Анастасия Минкина</span>
                            <span class="team-function">исполнительный директор</span>
                        </li>
                        <li class="team-item">
                            <span class="name-team">Кирилл Кислухин</span>
                            <span class="team-function">руководитель HR-отдела</span>
                        </li>
                        <li class="team-item">
                            <span class="name-team">Галина Михайлова</span>
                            <span class="team-function">руководитель отдела разработки</span>
                        </li>
                        <li class="team-item">
                            <span class="name-team">Данила Леонтьев</span>
                            <span class="team-function">руководитель отдела продвижения</span>
                        </li>
                        <li class="team-item team-item1">
                            <span class="name-team">Дмитрий Субот</span>
                            <span class="team-function">руководитель отдела продаж</span>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="mission">
                <div class="wrapper mission-wrapper">
                    <h2 class="team-title mission-title team-title1">
                        Наша  <span class="color-text">миссия</span>
                    </h2>
                    <div class="task">
                        <p class="team-text">Мы хотим не просто реализовывать ваши запросы, а помогать вам стать лучше, меняя принципы подачи продукта, образ компании и выводя ваш бизнес на новый уровень. </p>
                    <div class="task-img__wrap"></div>
                    </div>
                    <div class="rule">
                        <div class="rule-img__wrap"></div>
                        <div class="rule-text__wrap"><p class="team-text1 team-text">Desire - это желание. Наше желание - предоставлять лучший сервис и услуги. Постоянно совершенствуясь и идя в ногу со временем, мы помогаем и вам, раскрывая желания ваших клиентов через яркую подачу, уникальные решения и удобство вашего продукта.</p></div>
                    </div>
                </div>
            </section>
            <section class="policy">
                <div class="wrapper policy-wrapper">
                    <h2 class="policy-title team-title">
                         <br> <span class="color-text">политика</span> <br> нашей компании
                    </h2>
                    <ul class="policy-list">
                        <li class="policy-list__item">
                            <h2 class="color-text item-number">01</h2>
                            <div class="policy-item__description">
                               
                                <h3 class="description-header">разбиваем «бабушкин сервис»</h3>
                                <p class="description-text">
                                    Главный принцип нашей работы – уважение. 
                                    Мы отказываемся от привычных схем взаимодействия 
                                    «заказчик-исполнитель», становясь вашими партнерами 
                                    в развитии бизнеса, опираясь на качество и идею, а не на цену.</p>
                            </div>
                            
                        </li>
                        <li class="policy-list__item">
                            <h2 class="color-text item-number">02</h2>
                            <div class="policy-item__description">
                                
                                <h3 class="description-header">в поисках идеала</h3>
                                <p class="description-text">Проходя с нами путь от начала до конца,
                                    вы принимаете непосредственное участие в каждом этапе, 
                                    получая удовольствие не только от результатов, но и от с
                                    амого процесса, пока мы шлифуем конечный продукт до идеала. </p>
                            </div>
                           
                        </li>
                        <li class="policy-list__item">
                            <h2 class="color-text item-number">03</h2>
                            <div class="policy-item__description">
                                
                                <h3 class="description-header">быть лидером или не быть?</h3>
                                <p class="description-text">Мы хотим не просто реализовывать ваши запросы,
                                    а помогать вам стать лучше, меняя принципы подачи продукта,
                                     образ компании и выводя ваш бизнес на новый уровень. </p>
                            </div>
                            
                        </li>
                        <li class="policy-list__item">
                            <h2 class="color-text item-number">04</h2>
                            <div class="policy-item__description">
                                
                                <h3 class="description-header">через огонь и медные трубы</h3>
                                <p class="description-text">Долгосрочное партнерство, как и дружба,
                                    начинается с доверия, а оно, в свою очередь – с поддержки.
                                     Мы помогаем вашему бизнесу расти, проходим вместе каждый 
                                     этап с самого старта до конечного релиза продукта. И даже
                                      после – мы остаемся рядом, чтобы поддерживать ваш бизнес
                                       и прийти на помощь в трудную минуту. </p>
                            </div>
                           
                        </li>
                    </ul>
                </div>
            </section>

            <section class="invitation">
                <div class="wrapper">
                    <h2 class="invitation-title">
                        <span class="color-text">Хочешь </span>
                        в нашу<br>команду?
                    </h2>
                    <div class="forms">
                        <form class="personal-data" name="personal-data" id="personal-data" action="https://desire-company.com/newCandidate" method="post" enctype="multipart/form-data">
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
                                        <span class="label-title textarea-title">Расскажите немного о себе</span>
                                    </label>
                                    <textarea class="about-input" name="about" id="about" type="text" rows="5" cols="65" placeholder=""> </textarea>
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
            </section>
        </main>
    <!-- <main class="main">
        <section class="team-banner">
            <div class="wrapper">
                <div class="team-banner-left">
                    <h1 class="title">О нас</h1>
                    <h2 class="team-banner-description">Качество, креативность и открытость. Новые веяния и дух авантюризма. Мы — DESIRE, и мы готовы показать вам, каково это — совмещать мечты и реальность в каждом проекте.</h2>
                </div>
                <div class="team-banner-right">
                    <div class="logo-wrapper">
                        <a href="/new-project" class="content-logo">
                            <img class="logo-text" src="{{asset('assets/svg/button-text.svg')}}" alt="кнопка начать проект" />
                            <img class="logo-arrow" src="{{asset('assets/svg/arrowLogo.svg')}}" alt="стрелка" />
                        </a>
                    </div>
                    <img src="{{asset('assets/img/team-banner.png')}}" alt="Работа команды DESIRE" class="banner-img">
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
                        <span class="team-function">ведущий UX/UI дизайнер</span>
                    </li>
                    <li class="team-item">
                        <span class="name-team">Данила Леонтьев</span>
                        <span class="team-function">руководитель SEO-отдела</span>
                    </li>
                    <li class="team-item team-item1">
                        <span class="name-team">Сергей Купец</span>
                        <span class="team-function">руководитель отдела продаж</span>
                    </li>
                </ul>
            </div>
        </section>
        <section class="mission">
            <div class="wrapper team-wrapper">
                <h2 class="team-title team-title1">Наша <span class="color-text">миссия</span></h2>
                <div class="task">
                    <p class="team-text">Мы хотим не просто реализовывать ваши запросы, а помогать вам стать лучше, меняя принципы подачи продукта, образ компании и выводя ваш бизнес на новый уровень. </p>
                    <img src="{{asset('assets/img/team-mission-1.png')}}" alt="Команда DESIRE в работе" class="task-img">
                </div>
                <div class="rule">
                    <img src="{{asset('assets/img/team-mission-2.png')}}" alt="Команда DESIRE" class="rule-img">
                    <p class="team-text1 team-text">Desire - это желание. Наше желание - предоставлять лучший сервис и услуги. Постоянно совершенствуясь и идя в ногу со временем, мы помогаем и вам, раскрывая желания ваших клиентов через яркую подачу, уникальные решения и удобство вашего продукта.</p>
                </div>
            </div>
        </section>
        <section class="invitation">
            <div class="wrapper">
                <h2 class="invitation-title"><span class="color-text">Хочешь </span>в нашу<br> команду?</h2>
                <div class="forms">
                    <form class="personal-data" name="personal-data" id="personal-data" action="{{url('newCandidate')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="personal-data_inputs-box">
                            <div class="inputs-box_top">
                                <div class="inputs-box_left">
                                    <label for="name"><span class="label-title">Имя</span></label>
                                    <input class="input" name="name" id="name" type="text" placeholder="ИМЯ">
                                    <label for="email"><span class="label-title">Email</span></label>
                                    <input class="input" name="email" id="email" type="text" placeholder="EMAIL">
                                    <p class="email_error" id="email_error"></p>
                                </div>
                                <div class="inputs-box_right">
                                    <label for="tel"><span class="label-title">Телефон</span></label>
                                    <input class="input" class="tel" name="tel" id="tel" type="tel" placeholder="ТЕЛЕФОН">
                                    <p class="tel_error" id="tel_error"></p>
                                    <label for="telegram"><span class="label-title">Телеграм</span></label>
                                    <input class="input" class="telegram" name="telegram" id="telegram" type="text" placeholder="TELEGRAM">
                                    <p class="telegram_error" id="telegram_error"></p>
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
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14 1.20284L4.7828 10.5L0 5.67571L0.696799 4.97287L4.7828 9.09431L13.3032 0.5L14 1.20284Z" fill="Grey" />
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
    </main> -->
</body>

@endsection
