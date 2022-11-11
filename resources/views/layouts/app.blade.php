<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/timeline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/cursor.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blockAnimation.css')}}">
    <title>Desire</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;800;900&display=swap');
    </style>
</head>
<body>
@include('headers.header')

@yield('content')

@include('headers.footer')

<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/blockAnimation.js')}}"></script>
<script src="{{asset('assets/js/burgerMenu.js')}}"></script>
<script src="{{asset('assets/js/checkPrivacy.js')}}"></script>
<script src="{{asset('assets/js/custom-cursor.js')}}"></script>
<script src="{{asset('assets/js/marquee3k.js')}}"></script>
<script src="{{asset('assets/js/newProject.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/swiper.js')}}"></script>

<div class="custom-cursor"></div>
</body>

</html>
