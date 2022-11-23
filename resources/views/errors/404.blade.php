@extends('layouts.app')
@section('content')
<body>
<main class="main">
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
</main>
</body>
@endsection
