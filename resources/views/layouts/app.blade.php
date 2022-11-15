<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/timeline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/cursor.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blockAnimation.css')}}">
    <title>Desire</title>
    <link type="image/x-icon" href="{{asset('assets/img/favicon.png')}}" rel="shortcut icon">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;800;900&display=swap');
    </style>
</head>
<body>
@include('headers.header')

@yield('content')

@include('headers.footer')

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/blockAnimation.js')}}"></script>
<script src="{{asset('assets/js/burgerMenu.js')}}"></script>
<script src="{{asset('assets/js/checkPrivacy.js')}}"></script>
<script src="{{asset('assets/js/custom-cursor.js')}}"></script>
<script src="{{asset('assets/js/marquee3k.js')}}"></script>

@if($_SERVER['REQUEST_URI'] == '/project/new')
    <script src="{{asset('assets/js/newProject.js')}}"></script>
@endif

<script src="{{asset('assets/js/candidate.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/swiper.js')}}"></script>
<div class="custom-cursor"></div>
</body>

</html>
