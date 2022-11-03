<footer class="footer">
    <div class="wrapper">
        <div class="footer-top">
            <div class="footer-request">
                <h4 class="footer-title">Оставьте заявку и мы свяжемся с вами!</h4>
                <form class="form">
                    <input type="text" placeholder="имя" class="input">
                    <input class="input" type="tel" placeholder="телефон">
                    <label class="checkbox-label">
                        <input type="checkbox" id="input" class="checkbox-input">
                        <div class="checkbox">
                            <svg id='arrow-icon' width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14 1.20284L4.7828 10.5L0 5.67571L0.696799 4.97287L4.7828 9.09431L13.3032 0.5L14 1.20284Z" fill="white"/>
                            </svg>
                        </div>
                        <span class="rights">Даю согласие на обработку
                            <a href="{{asset('assets/Privacy politic.pdf')}}" target="_blank" class="data-link">Персональных данных</a></span>
                    </label>
                    <a href="https://t.me/desire_manager">
                        <button type="button" id="btn" disabled="disabled" class="footer-btn">Оставить заявку</button></a>
                </form>
            </div>
            <div class="footer-social">
                <ul class="footer-list">
                    <li class="footer-item-title">Контакты</li>
                    <li class="footer-item">
                        <a href="mailto:desirecompany@yandex.ru" class="mail-link">desirecompany@yandex.ru</a>
                    </li>
                    <li class="footer-item">telegram-менеджер:</li>
                    <li class="footer-item">@desire_manager</li>
                </ul>
                <ul class="footer-list">
                    <li class="footer-item-title">Соцсети
                    </li>
                    <li class="footer-item">
                        <a href="https://t.me/desire_company" class="footer-link">Telegram</a>
                    </li>
                    <li class="footer-item">
                        <a href="https://www.instagram.com/desires.company/" class="footer-link">Instagram</a>
                    </li>
                    <li class="footer-item">
                        <a href="https://vk.com/desire.company" class="footer-link">VK</a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="footer-bottom">
            <ul class="footer-bottom-list">
                <li class="footer-bottom-item">
                    <a href="/about" class="footer-bottom-link">О нас</a>
                </li>
                <li class="footer-bottom-item">
                    <a href="/service/seo" class="footer-bottom-link">SEO</a>
                </li>
                <li class="footer-bottom-item">
                    <a href="/service/web" class="footer-bottom-link">Веб-дизайн и разработка</a>
                </li>
                <li class="footer-bottom-item">
                    <a href="/service/rate" class="footer-bottom-link">Комплексные тарифы</a>
                </li>
                <li class="footer-bottom-item">
                    <a href="/portfolio " class="footer-bottom-link">Проекты</a>
                </li>
            </ul>
            <div class="footer-author">
                <p class="footer-name">© </p>
                <img src="{{asset('assets/svg/footerLogo.svg')}}" alt="DESIRE" class="logo-footer">
                <p class="footer-name"> 2022 Все права защищены</p>
            </div>
        </div>
    </div>
</footer>