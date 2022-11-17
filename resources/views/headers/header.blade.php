<header class="header">
    <div class="wrapper">
        <a @if($_SERVER['REQUEST_URI'] != '/') href="/" @endif class="logo-link">
            <img src="{{asset('assets/svg/logo.svg')}}" alt="DESIRE" class="logo">
        </a>
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-list_item">
                    <a href="/about-us" class="nav-list_link">О нас</a>
                </li>
                <li class="nav-list_item dropdown">
                    <span class="nav-list_link">Услуги</span>
                    <div class="dropdown_content">
                        <a href="/web-design-and-dev">Веб-дизайн и разработка</a>
                        <a href="/promotion">Продвижение</a>
                        <a href="/complex-tariffs">Комплексные тарифы</a>
                    </div>
                </li>
                <li class="nav-list_item">
                    <a href="/projects" class="nav-list_link">Проекты</a>
                </li>
                <li class="nav-list_item"><a href="/new-project" class="nav-list_link">Оставить заявку</a>
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
                <div class="burger-menu_link openLink"><span class="openLink-toggler">Услуги</span>
                    <div class="hidden-links">
                        <a href="/web-design-and-dev" class="burger-menu_hidden-link">Web-дизайн и разработка</a>
                        <a href="/promotion" class="burger-menu_hidden-link">Продвижение</a>
                        <a href="/complex-tariffs" class="burger-menu_hidden-link">Комплексные тарифы</a>
                    </div>
                </div>
                <a href="/projects" class="burger-menu_link">Проекты</a>
                <a href="/new-project" class="burger-menu_link">Оставить заявку</a>
            </nav>
        </div>
    </div>
</header>
