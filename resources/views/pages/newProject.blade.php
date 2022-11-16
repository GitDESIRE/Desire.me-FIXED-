@extends('layouts.app')
@section('content')
    <body xmlns="http://www.w3.org/1999/html">
    <main class="main">
        <div class="wrapper newProject-wrapper">
            <section class="main_container">
                <h1 class="title">Начнём <br/> ваш проект</h1>
                <p>Кратко опишите свою задачу, и мы свяжемся с вами в кратчайшие сроки</p>
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
                            <label for="category"><span class="label-title">Выберите категорию</span></label>
                            <div class="custom-select">
                                <select name="category" id="category">
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
                                <select name="tarif" id="tarif">
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
@endsection
