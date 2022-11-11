<header class="header">
    <div class="wrapper">
        <a @if($_SERVER['REQUEST_URI'] != '/') href="/" @endif class="logo-link">
            <img src="{{asset('assets/svg/logo.svg')}}" alt="DESIRE" class="logo">
        </a>
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-list_item">
                    <a href="/about" class="nav-list_link">О нас</a>
                </li>
                <li class="nav-list_item dropdown">
                    <span class="nav-list_link">Услуги</span>
                    <div class="dropdown_content">
                        <a href="/service/web">Веб-дизайн и разработка</a>
                        <a href="/service/seo">SEO</a>
                        <a href="/service/rate">Комплексные тарифы</a>
                    </div>
                </li>
                <li class="nav-list_item">
                    <a href="/portfolio" class="nav-list_link">Проекты</a>
                </li>
                <li class="nav-list_item"><a href="/project/new" class="nav-list_link">Оставить заявку</a>
                </li>
            </ul>
        </nav>
        <div class="burger-menu">
            <a href="" class="burger-menu_button">
                <span class="burger-menu_lines"></span>
            </a>
            <nav class="burger-menu_nav">
                <a href="/about" class="burger-menu_link">
                    О нас
                </a>
                <div class="burger-menu_link openLink">Услуги
                    <div class="hidden-links">
                        <a href="/services/web" class="burger-menu_hidden-link">Web-дизайн и разработка</a>
                        <a href="/services/seo" class="burger-menu_hidden-link">SEO</a>
                        <a href="/services/rate" class="burger-menu_hidden-link">Комплексные тарифы</a>
                    </div>
                </div>
                <a href="/portfolio" class="burger-menu_link">Проекты</a>
                <a href="/project/new" class="burger-menu_link">Оставить заявку</a>
            </nav>
        </div>
    </div>
</header>
