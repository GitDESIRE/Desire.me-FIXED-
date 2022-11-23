@extends('layouts.app')
<head>
    <title>Подробнее о комплексном тарифе “NoCode - Arrow”</title>
    <meta name="description" content="Сайт, для которого не нужно писать код - уже не сказка, а реальность. Если у кого вас нет времени ждать, то этот тариф - идеальный вариант: рабочий проект, созданный на подходящем конструкторе сайтов, в кратчайшие сроки будет у вас на руках."/>
    <meta property="og:type" content="website">
    <meta property="og:title" content="Подробнее о комплексном тарифе “NoCode - Arrow”">
    <meta property="og:url" content="https://desire-company.com/complex-tariffs/arrow">
    <meta property="og:image" content="https://desire-company.com/assets/svg/footerLogo.svg">
    <meta property="og:description" content="Сайт, для которого не нужно писать код - уже не сказка, а реальность. Если у кого вас нет времени ждать, то этот тариф - идеальный вариант: рабочий проект, созданный на подходящем конструкторе сайтов, в кратчайшие сроки будет у вас на руках.">
</head>
@section('content')
    <main>
        <section class="banner">
            <div class="wrapper">
                <div class="content">
                    <div class="seo-banner-top">
                        <h1 class="title arrow-title">Разработка сайта NoCode - ARROW</h1>
                        <p class="seo-banner-section"><a href="/complex-tariffs">Комплексные тарифы </a>&nbsp / &nbsp Комплексное решение Arrow </p>
                    </div>
                    <div class="seo-banner-bottom">
                        <h2 class="seo-banner-description">Что такое разработка NoCode и почему она требует в разы меньше времени и денежных вложений?</h2>
                        <div class="banner-content">
                            <p class="seo-content-text">Программирование NoCode - дословно: «программирование без кода», - в последнее время становится все более и более востребованным на рынке IT-продуктов.
                            </p>
                            <p class="seo-content-text">Простыми словами: этот тип разработки позволяет создавать сайты и мобильные приложения с помощью визуального моделирования по принципу «конструктора», с минимальным задействованием кода или вовсе без него.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tarif-main">
            <div class="wrapper">
                <div class="content">
                    <div class="content-box">
                        <h2 class="subTitle">кому подходит</h2>
                        <ul>
                            <li>Малому бизнесу, стартапам</li>
                            <p>Возможность быстро и недорого запустить и реализовать свои идеи, протестировать новые функции и оперативно изменять внутреннюю структуру самостоятельно, благодаря чёткой и понятной системе настройки сайта или приложения</p>
                            <li>Крупному бизнесу, предпринимателям</li>
                            <p>Возможность оптимизировать финансовые вложения в разработку, быстро протестировать новые идеи и в дальнейшем позволить сотрудникам самостоятельно настраивать сайт</p>
                        </ul>
                    </div>
                    <div class="content-box">
                        <h2 class="subTitle">что мы сделаем</h2>
                        <ul>
                            <li>Выясним ваши цели, запросы и пожелания по сайту</li>
                            <li>Проведём анализ целевой аудитории, чтобы готовый продукт был ориентирован именно на ваших будущих клиентов</li>
                            <li>Выполним анализ конкурентов, ведь благодаря исследованию ваших прямых конкурентов мы сможем выявить те элементы, которые будут наиболее эффективны на вашем сайте</li>
                            <li>Создадим структуру и дизайна вашего сайта</li>
                            <li>Разработаем сайта с использованием NoCode инструментов и его тестированием</li>
                            <li>После согласования с вами — выгрузим уже наполненный контентом и базово оптимизированный сайт в Интернет, чтобы ваш бизнес уже мог получать первых клиентов через него</li>
                        </ul>
                    </div>
                    <div class="content-box">
                        <h2 class="subTitle">что вы получите</h2>
                        <ul>
                            <li>Функционирующий сайт, способный конвертировать лиды и реализовывать вашу изначальную идею</li>
                            <li>Поддержку от наших специалистов в виде пошаговой инструкции по самостоятельной настройке и изменению/добавлению контента на ваш сайт</li>
                            <li>Месяц гарантийного срока, в течение которого вы можете спокойно обратиться к нашей компании за помощью в настройке или исправлении сайта</li>
                            <li>Отличного партнёра в виде компании Desire, который знает особенности вашего приложения и всегда готов помочь вашему бизнесу расти и дальше!</li>
                        </ul>
                    </div>
                    <div class="content-box">
                        <h2 class="subTitle">стоимость</h2>
                        <span>от 45 000 РУБ.</span>
                    </div>
                    <a href="/new-project"><button class="tarif-start-btn btn-project">Заказать</button></a>
                </div>
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
        },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Комплексные тарифы",
            "item": "https://desire-company.com/complex-tariffs"  
        },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "Разработка NoCODE - ARROW",
            "item": "https://desire-company.com/complex-tariffs/arrow"  
        }]
        }
    </script>

@endsection
