@extends('layouts.app')
@section('content')
<body>
    <main class="main">
    <div class="wrapper">
        <section class="main_container">
            <h1 class="title">Начнём ваш проект</h1>
            <p>Кратко опишите свою задачу, и мы свяжемся с вами в кратчайшие сроки</p>
        </section>
        <section class="aside_container">
            <form class="newProject_form" name="newProject_form">
                <div class="inputsBox">
                    <div class="inputsBox_leftSide">
                        <label for="name"><span class="label-title">Введите своё имя</span></label>
                        <input name="name" id="name" placeholder="ИМЯ"/>
                        <label for="email"><span class="label-title">Введите свою почту</span></label>
                        <input type="email" name="email" id="email" placeholder="EMAIL" required/>
                        <label for="category"><span class="label-title">Выберите категорию</span></label>
                        <!-- Кастомизировать селект -->
                        <select type="select" name="category" id="category">
                            <option value="">выберите категорию проекта</option>
                            <option value="SEO">SEO</option>
                            <option value="Лендинг">Лендинг</option>
                            <option value="Корпоративный сайт">Корпоративный сайт</option>
                            <option value="Интернет - магазин">Интернет - магазин</option>
                            <option value="Дополнительные страницы">Дополнительные страницы</option>
                            <option value="Редизайн сайта">Редизайн сайта</option>
                            <option value="Разработка уникального дизайна">Разработка уникального дизайна</option>
                        </select>
                    </div>
                    <div class="inputsBox_rightSide">
                        <label for="tel"><span class="label-title">Введите свой телефон</span></label>
                        <input type="tel" name="tel" id="tel" placeholder="телефон" required/>
                        <label for="telegram"><span class="label-title">Введите свой Телеграм</span></label>
                        <input name="telegram" id="telegram" placeholder="telegram"/>
                    </div>
                </div>
                <!-- TODO: Разобраться почему не получается прикрепить файл 2 раз -->
                <div class="buttonsBox">
                    <button class="file-button" type="button">Прикрепить файл
                        <label for="file"><span class="label-title">Прикрепите документ</span></label>
                        <input class="file-input" type="file" name="file" id="file" accept=".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
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
              <a href="/policy" target="_blank" class="agreementData-link">Персональных данных</a></span>
                    </label>
                </div>
            </form>
        </section>
    </div>
</main>
</body>
@endsection
