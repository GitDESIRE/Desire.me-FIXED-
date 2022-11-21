@extends('layouts.app')
<head>
    <title>Подробнее о комплексном тарифе “START”</title>
    <meta name="description" content="Лучшее предложение для любого бизнеса на пути в e-commerce. Базовый тариф, включающий в себя всё от дизайна до продвижения."/>
</head>
@section('content')
    <main>
        <section class="banner">
            <div class="wrapper">
                <div class="content">
                    <div class="seo-banner-top">
                        <h1 class="title">Комплексное решение «START»</h1>
                        <p class="seo-banner-section"><a href="/complex-tariffs">Комплексные услуги </a>&nbsp / &nbsp Комплексное решение Start </p>
                    </div>
                    <div class="seo-banner-bottom">
                        <h2 class="seo-banner-description">Лучшее предложение <br/> для любого бизнеса <br/> на пути в e-commerce.</h2>
                        <div class="banner-content">
                            <p class="seo-content-text">Впервые появилась необходимость создать сайт для бизнеса?  Только выходите на online рынок?
                            </p>
                            <p class="seo-content-text">Команда DESIRE осуществляет весь спектр работ по разработке сайта и его оптимизации, помогая вывести проект в онлайн сферу, разрабатывая индивидуальный дизайн.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tarif-main">
            <div class="wrapper">
                <div class="content">
                    <div class="content-box">
                        <h2 class="subTitle">что мы сделаем</h2>
                        <ul>
                            <li>Выясним ваши цели, запросы и пожелания по сайту</li>
                            <li>Создадим индивидуальный дизайн или доработаем имеющийся у вас макет, если у вас будут правки </li>
                            <li>Прорабатаем целевую аудиторию, а значит выстроим структуру и итоговый дизайн сайта так, чтобы ваши клиенты обращали внимание именно на вас</li>
                            <li>Перенесем весь дизайн на код и загрузим контент</li>
                            <li>После согласования с вами — выгрузим уже наполненный контентом и базово оптимизированный сайт в Интернет, чтобы ваш бизнес уже мог получать первых клиентов через него</li>
                            <li>Предложим маркетинговую стратегию по продвижению вашего сайта в ТОП поисковиков, а также стратегию по развитию социальных сетей и рекламе</li>
                        </ul>
                    </div>
                    <div class="content-box">
                        <h2 class="subTitle">что вы получите</h2>
                        <ul>
                            <li>Быструю визуализацию вашего будущего проекта </li>
                            <li>Удобный, качественный и эффективный в конверсии лидов сайт, который нравится как клиентам, так и поисковикам</li>
                            <li>Несколько индивидуальных маркетинговых стратегий, в том числе для социальных сетей и продвижения сайта</li>
                            <li>Отличного партнёра в виде компании Desire, который знает особенности вашего приложения и всегда готов помочь вашему бизнесу расти и дальше!</li>
                        </ul>
                    </div>
                    <div class="content-box">
                        <h2 class="subTitle">стоимость</h2>
                        <span>от 80 000 РУБ.</span>
                    </div>
                    <a href="/new-project" class="tarif-start-btn btn-project">Заказать</a>
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
    "name": "Комплексное решение START",
    "item": "https://desire-company.com/complex-tariffs/start"  
  }]
}
</script>

@endsection
