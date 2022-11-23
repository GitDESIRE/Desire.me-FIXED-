@extends('layouts.app')

<head>
    <title>Подробнее о комплексном решении FULL DIGITAL</title>
    <meta name="description" content="Есть хороший продукт, а заказы все не появляются? Тариф FULL DIGITAL - и никаких проблем: мы продвинем вас в соцсетях, сформируем маркетинговые воронки и стратегии, быстро и красиво выведя бизнес на новый уровень" />
</head>
@section('content')
<main>
    <section class="banner">
        <div class="wrapper">
            <div class="content">
                <div class="seo-banner-top">
                    <h1 class="title arrow-title">Тариф <br /> «FULL DIGITAL»</h1>
                    <p class="seo-banner-section"><a href="/complex-tariffs">Комплексные тарифы </a>&nbsp / &nbsp Тариф «FULL DIGITAL»</p>
                </div>
                <div class="seo-banner-bottom">
                    <h2 class="seo-banner-description">Маркетинг — основная составляющая любого типа бизнеса.</h2>
                    <div class="banner-content">
                        <p class="seo-content-text">Увеличения трафика, лидов, выстраивание брендирования, а также популяризация вашей компании и управление её репутацией — все это лишь малая часть того, что может компания Desire.
                        </p>
                        <p class="seo-content-text">Раскрывайте весь потенциал вашего бизнеса и выводите его на совершенно новый уровень!</p>
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
                        <li>Создадим социальные сети, настроим их и заполним описание вашей компании/проекта</li>
                        <li>Предложим варианты продвижения через кросс-сейл и апсейл системы</li>
                        <li>Сформируем стратегию рекламной кампании онлайн (таргетированная и контекстная реклама) и оффлайн</li>
                        <li>Разработаем варианты маркетинговых воронок для привлечения вашей целевой аудитории и роста трафика</li>
                        <li>Сформируем или доработаем брендирование вашего бизнеса</li>
                    </ul>
                </div>
                <div class="content-box">
                    <h2 class="subTitle">что вы получите</h2>
                    <ul>
                        <li>Несколько готовых и корректно настроенных инструментов работы с вашими клиентами и целевой аудиторией</li>
                        <li>Индивидуальную маркетинговую стратегию, ориентированную на развитие вашего бизнеса в медиа и онлайн пространстве.</li>
                        <li>Несколько индивидуальных маркетинговых стратегий, в том числе для социальных сетей и продвижения сайта</li>
                        <li>Отличного партнёра в виде компании Desire, который знает особенности вашего приложения и всегда готов помочь вашему бизнесу расти и дальше!</li>
                    </ul>
                </div>
                <div class="content-box">
                    <h2 class="subTitle">стоимость</h2>
                    <span>от 50 000 РУБ.</span>
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
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "Комплексные тарифы",
            "item": "https://desire-company.com/complex-tariffs"
        }, {
            "@type": "ListItem",
            "position": 3,
            "name": "Решение FULL DIGITAL",
            "item": "https://desire-company.com/complex-tariffs/full-digital"
        }]
    }
</script>


@endsection