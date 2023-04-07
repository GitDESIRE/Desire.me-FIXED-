<header class="header">
    <div class="wrapper">
        <a @if($_SERVER['REQUEST_URI'] != '/') href="/" @endif class="logo-link">
            <img src="{{asset('assets/svg/logo.svg')}}" alt="DESIRE" class="logo">
        </a>
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-list_item">
                    <a href="/team" class="nav-list_link">О нас</a>
                </li>
                <li class="nav-list_item dropdown">
                    <span class="nav-list_link">Услуги</span>
                    <div class="dropdown_content">
                        <a href="/dev">Разработка</a>
                        <a href="/design">Дизайн</a>
                        <a href="/promotion">Продвижение</a>
                        <a href="/complex-tariffs">Комплексные тарифы</a>
                    </div>
                </li>
                <li class="nav-list_item">
                    <a href="/projects" class="nav-list_link">Проекты</a>
                </li>
                <li class="nav-list_item">
                    <a href="/contacts" class="nav-list_link">Контакты</a>
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
                <a href="/about-us" class="burger-menu_link">
                    О нас
                </a>
                <div class="burger-menu_link openLink"><span class="openLink-toggler">Услуги</span>
                    <div class="hidden-links">
                        <a href="/dev" class="burger-menu_hidden-link">Разработка</a>
                        <a href="/design" class="burger-menu_hidden-link">Дизайн</a>
                        <a href="/promotion" class="burger-menu_hidden-link">Продвижение</a>
                        <a href="/complex-tariffs" class="burger-menu_hidden-link">Комплексные тарифы</a>
                    </div>
                </div>
                <a href="/projects" class="burger-menu_link">Проекты</a>
                <a href="/contacts" class="burger-menu_link">Контакты</a>
                <a href="/new-project" class="burger-menu_link">Оставить заявку</a>
            </nav>
        </div>
    </div>
</header>


<!-- <header class="header">
            <div class="wrapper">
              <a href="index.html" class="logo-link">
                <img src="../assets/svg/logo.svg" alt="DESIRE" class="logo" />
              </a>
              <nav class="nav">
                <ul class="nav-list">
                  <li class="nav-list_item">
                    <a href="index-team.html" class="nav-list_link">О нас</a>
                  </li>
                  <li class="nav-list_item dropdown">
                    <span class="nav-list_link">Услуги</span>
                    <div class="dropdown_content">
                      <a href="index-web.html">Веб-дизайн и разработка</a>
                      <a href="index-promotion.html">Продвижение</a>
                      <a href="index-plans.html">Комплексные тарифы</a>
                    </div>
                  </li>
                  <li class="nav-list_item">
                    <a href="index.html#portfolio" class="nav-list_link">Проекты</a>
                  </li>
                  <li class="nav-list_item">
                    <a href="contacts.html" class="nav-list_link">Контакты</a>
                  </li>
                  <li class="nav-list_item">
                    <a href="index-newProject.html" class="nav-list_link">Оставить заявку</a>
                  </li>
                </ul>
              </nav>
              <div class="burger-menu">
                <a href="" class="burger-menu_button">
                  <span class="burger-menu_lines"></span>
                </a>
                <nav class="burger-menu_nav">
                  <a href="index-team.html" class="burger-menu_link"> О нас </a>
                  <div class="burger-menu_link openLink">
                    <span class="openLink-toggler">Услуги</span>
                    <div class="hidden-links">
                      <a href="index-web.html" class="burger-menu_hidden-link"
                        >Web-дизайн и разработка</a
                      >
                      <a href="index-promotion.html" class="burger-menu_hidden-link"
                        >Продвижение</a
                      >
                      <a href="index-plans.html" class="burger-menu_hidden-link"
                        >Комплексные тарифы</a
                      >
                    </div>
                  </div>
                  <a href="index.html#portfolio" class="burger-menu_link">Проекты</a>
                  <a href="contacts.html" class="burger-menu_link">Контакты</a>
                  <a href="index-newProject.html" class="burger-menu_link">Оставить заявку</a>
                </nav>
              </div>
            </div>
          </header> -->