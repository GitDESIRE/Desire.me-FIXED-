<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(91224212, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <!-- /Yandex.Metrika counter -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.v3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.v14.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/cursor.v3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blockAnimation.v2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/creditModal.v2.css')}}">
    <link type="image/x-icon" href="{{asset('assets/svg/favicon.svg')}}" rel="shortcut icon">
    <link rel="stylesheet" href="{{asset('assets/css/intlTelInput.v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/timeline.v1.css')}}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;800;900&display=swap');
    </style>
</head>

@include('headers.header')

<noscript>
    <div><img src="https://mc.yandex.ru/watch/91224212" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>


@yield('content')



<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/blockAnimation.v2.js')}}"></script>
<script src="{{asset('assets/js/burgerMenu.js')}}"></script>
<script src="{{asset('assets/js/checkPrivacy.v1.js')}}"></script>
<script src="{{asset('assets/js/custom-cursor.v7.js')}}"></script>
<script src="{{asset('assets/js/marquee3k.js')}}"></script>
<script src="{{asset('assets/js/script.v5.js')}}"></script>
<script src="{{asset('assets/js/newProject.v2.js')}}"></script>
<script src="{{asset('assets/js/candidate.v1.js')}}"></script>
<script src="{{asset('assets/js/swiper.js')}}"></script>
<script src="{{asset('assets/js/tinkoffModal.js')}}"></script>

@if($_SERVER['REQUEST_URI'] == 'new-project' | $_SERVER['REQUEST_URI'] == 'about-us')

<script src="{{asset('assets/js/intlTelInput.js')}}"></script>
<script>
    var input = document.querySelector("#tel");
    window.intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "us";
                callback(countryCode);
            });
        },
        utilsScript: "{{asset('assets/js/utils.js')}}",
        hiddenInput: "tel"
    });
</script>

@endif


@if($_SERVER['REQUEST_URI'] == '/contacts' )

@include('headers.shortfooter')

@else 
@include('headers.footer')

@endif
<div class="custom-cursor"></div>
<div class="arrowBox">
    <svg width="57" height="48" viewBox="0 0 57 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M28.5 0L44.0885 27H12.9115L28.5 0Z" fill="#9AD351" />
        <path d="M10.5116 32.64V44H9.07163V38.832H2.81563V44H1.37563V32.64H2.81563V37.552H9.07163V32.64H10.5116ZM12.2769 41.584C12.2769 41.0507 12.4262 40.592 12.7249 40.208C13.0342 39.8133 13.4555 39.5093 13.9889 39.296C14.5222 39.0827 15.1409 38.976 15.8449 38.976C16.2182 38.976 16.6129 39.008 17.0289 39.072C17.4449 39.1253 17.8129 39.2107 18.1329 39.328V38.72C18.1329 38.08 17.9409 37.5787 17.5569 37.216C17.1729 36.8427 16.6289 36.656 15.9249 36.656C15.4662 36.656 15.0235 36.7413 14.5969 36.912C14.1809 37.072 13.7382 37.3067 13.2689 37.616L12.7569 36.624C13.3009 36.2507 13.8449 35.9733 14.3889 35.792C14.9329 35.6 15.4982 35.504 16.0849 35.504C17.1515 35.504 17.9942 35.8027 18.6129 36.4C19.2315 36.9867 19.5409 37.808 19.5409 38.864V42.4C19.5409 42.5707 19.5729 42.6987 19.6369 42.784C19.7115 42.8587 19.8289 42.9013 19.9889 42.912V44C19.8502 44.0213 19.7275 44.0373 19.6209 44.048C19.5249 44.0587 19.4449 44.064 19.3809 44.064C19.0502 44.064 18.7995 43.9733 18.6289 43.792C18.4689 43.6107 18.3782 43.4187 18.3569 43.216L18.3249 42.688C17.9622 43.1573 17.4875 43.52 16.9009 43.776C16.3142 44.032 15.7329 44.16 15.1569 44.16C14.6022 44.16 14.1062 44.048 13.6689 43.824C13.2315 43.5893 12.8902 43.28 12.6449 42.896C12.3995 42.5013 12.2769 42.064 12.2769 41.584ZM17.7169 42.176C17.8449 42.0267 17.9462 41.8773 18.0209 41.728C18.0955 41.568 18.1329 41.4347 18.1329 41.328V40.288C17.8022 40.16 17.4555 40.064 17.0929 40C16.7302 39.9253 16.3729 39.888 16.0209 39.888C15.3062 39.888 14.7249 40.032 14.2769 40.32C13.8395 40.5973 13.6209 40.9813 13.6209 41.472C13.6209 41.7387 13.6902 42 13.8289 42.256C13.9782 42.5013 14.1915 42.704 14.4689 42.864C14.7569 43.024 15.1089 43.104 15.5249 43.104C15.9622 43.104 16.3782 43.0187 16.7729 42.848C17.1675 42.6667 17.4822 42.4427 17.7169 42.176ZM21.7763 44V35.648H26.0963C26.5976 35.648 27.0136 35.7493 27.3443 35.952C27.6749 36.144 27.9203 36.3947 28.0803 36.704C28.2509 37.0133 28.3363 37.344 28.3363 37.696C28.3363 38.144 28.2296 38.5493 28.0163 38.912C27.8029 39.264 27.4936 39.5307 27.0883 39.712C27.5683 39.8507 27.9576 40.1013 28.2563 40.464C28.5549 40.816 28.7043 41.2533 28.7043 41.776C28.7043 42.2453 28.5923 42.6453 28.3683 42.976C28.1443 43.3067 27.8296 43.5627 27.4243 43.744C27.0189 43.9147 26.5496 44 26.0163 44H21.7763ZM23.1203 43.008H25.9843C26.2403 43.008 26.4696 42.944 26.6723 42.816C26.8856 42.688 27.0509 42.5173 27.1683 42.304C27.2856 42.0907 27.3443 41.8667 27.3443 41.632C27.3443 41.376 27.2856 41.1467 27.1683 40.944C27.0616 40.7307 26.9069 40.5653 26.7043 40.448C26.5123 40.32 26.2883 40.256 26.0323 40.256H23.1203V43.008ZM23.1203 39.328H25.7283C25.9843 39.328 26.2083 39.264 26.4003 39.136C26.5923 38.9973 26.7416 38.8213 26.8483 38.608C26.9549 38.3947 27.0083 38.1707 27.0083 37.936C27.0083 37.584 26.8909 37.28 26.6563 37.024C26.4323 36.768 26.1389 36.64 25.7763 36.64H23.1203V39.328ZM34.1914 44.16C33.562 44.16 32.986 44.048 32.4634 43.824C31.9514 43.5893 31.5034 43.2747 31.1194 42.88C30.746 42.4747 30.4527 42.0107 30.2394 41.488C30.0367 40.9653 29.9354 40.4107 29.9354 39.824C29.9354 39.0347 30.1167 38.3147 30.4794 37.664C30.842 37.0133 31.3434 36.4907 31.9834 36.096C32.634 35.7013 33.3754 35.504 34.2074 35.504C35.05 35.504 35.7807 35.7067 36.3994 36.112C37.0287 36.5067 37.514 37.0293 37.8554 37.68C38.2074 38.32 38.3834 39.0133 38.3834 39.76C38.3834 39.8667 38.378 39.9733 38.3674 40.08C38.3674 40.176 38.362 40.2507 38.3514 40.304H31.4234C31.466 40.848 31.6154 41.3333 31.8714 41.76C32.138 42.176 32.4794 42.5067 32.8954 42.752C33.3114 42.9867 33.7594 43.104 34.2394 43.104C34.7514 43.104 35.2314 42.976 35.6794 42.72C36.138 42.464 36.4527 42.128 36.6234 41.712L37.8394 42.048C37.658 42.4533 37.386 42.816 37.0234 43.136C36.6714 43.456 36.25 43.7067 35.7594 43.888C35.2794 44.0693 34.7567 44.16 34.1914 44.16ZM31.3754 39.328H37.0714C37.0287 38.784 36.874 38.304 36.6074 37.888C36.3407 37.472 35.9994 37.1467 35.5834 36.912C35.1674 36.6773 34.7087 36.56 34.2074 36.56C33.7167 36.56 33.2634 36.6773 32.8474 36.912C32.4314 37.1467 32.09 37.472 31.8234 37.888C31.5674 38.304 31.418 38.784 31.3754 39.328ZM44.4445 44.16C43.7618 44.16 43.1538 43.9893 42.6205 43.648C42.0872 43.3067 41.6658 42.8747 41.3565 42.352V47.408H39.9485V35.648H41.1965V37.216C41.5272 36.704 41.9592 36.2933 42.4925 35.984C43.0258 35.664 43.6072 35.504 44.2365 35.504C44.8125 35.504 45.3405 35.6213 45.8205 35.856C46.3005 36.0907 46.7165 36.4107 47.0685 36.816C47.4205 37.2213 47.6925 37.6853 47.8845 38.208C48.0872 38.72 48.1885 39.2587 48.1885 39.824C48.1885 40.6133 48.0285 41.3387 47.7085 42C47.3992 42.6613 46.9618 43.1893 46.3965 43.584C45.8312 43.968 45.1805 44.16 44.4445 44.16ZM44.0125 42.944C44.4285 42.944 44.8018 42.8587 45.1325 42.688C45.4738 42.5067 45.7618 42.272 45.9965 41.984C46.2418 41.6853 46.4285 41.3493 46.5565 40.976C46.6845 40.6027 46.7485 40.2187 46.7485 39.824C46.7485 39.408 46.6738 39.0133 46.5245 38.64C46.3858 38.2667 46.1832 37.936 45.9165 37.648C45.6605 37.36 45.3565 37.136 45.0045 36.976C44.6632 36.8053 44.2898 36.72 43.8845 36.72C43.6285 36.72 43.3618 36.768 43.0845 36.864C42.8178 36.96 42.5618 37.0987 42.3165 37.28C42.0712 37.4507 41.8632 37.648 41.6925 37.872C41.5218 38.096 41.4098 38.336 41.3565 38.592V40.976C41.5165 41.3387 41.7298 41.6693 41.9965 41.968C42.2632 42.2667 42.5725 42.5067 42.9245 42.688C43.2765 42.8587 43.6392 42.944 44.0125 42.944ZM50.5413 35.648L52.7493 38.72L52.8773 38.976L53.0213 38.72L55.2133 35.648H56.7812L53.6933 39.84L56.7973 44H55.2293L53.0213 40.944L52.8773 40.704L52.7493 40.944L50.5413 44H48.9733L52.0773 39.84L48.9893 35.648H50.5413Z" fill="#8BC245" />
    </svg>
</div>
</body>

</html>
