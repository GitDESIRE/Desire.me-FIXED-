@extends('layouts.app')
@section('content')
<body>
<main class="unexist-main main">
                <div class="wrapper unexist-wrapper">
                        <div class="unexist-container">
                                <div class="unexist-controls">
                                    <h2 class="unexist-title">ОШИБКИ БЫВАЮТ - У МЕНЯ ЖЕ ЛАПКИ</h2>  
                                    <button class="btn-reset btn-fill btn-unexist"><a href="" class="unexist-link">Вернуться назад</a></button> 

                                </div>
                                <div class="unexist-img">
                                        <img src="{{asset('assets/img/404_img.png')}}"  alt="" class="unexist-img__src">
                                </div>
                        </div>
                </div>
              </main>
<!-- <main class="main">
    <section class="banner">
        <div class="wrapper">
            <div class="content-404">
                <div class="content-text_404">
                    <p>ошибки бывают - у меня же лапки</p>
                    <a onclick="history.back()" class="btn-404">Вернуться назад</a>
                </div>
                <img src="{{asset('assets/svg/error-kitten.svg')}}" alt="котик"/>
            </div>
        </div>
    </section>
</main> -->
</body>
@endsection
