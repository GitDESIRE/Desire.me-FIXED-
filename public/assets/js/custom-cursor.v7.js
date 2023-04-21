document.addEventListener('DOMContentLoaded', () => {

    const followCursor = () => { // объявляем функцию followCursor
        const isTouchDevice = ('ontouchstart' in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0);

if (!isTouchDevice) {
    const el = document.querySelector('.custom-cursor');
    el.style.display = 'block';
} else {
    const el = document.querySelector('.custom-cursor');
    el.style.display = 'none';
}
        const el = document.querySelector('.custom-cursor') // ищем элемент, который будет следовать за курсором
        window.addEventListener('mousemove', e => {// при движении курсора
            const target = e.target // определяем, где находится курсор
            if (!target) return

            // Анимация курсора для свайпера
            if (target.closest('.swiper-button-next')) {
                el.classList.add('swiper-btn-right');
            } else {
                el.classList.remove('swiper-btn-right');
            }

            if (target.closest('.swiper-button-prev')) {
                el.classList.add('swiper-btn-left');
            } else {
                el.classList.remove('swiper-btn-left');
            }

            // Анимация курсора для активных элементов
            if (target.closest('button') ||
                target.closest('.arrowBox') ||
                target.closest('.custom-select') ||
                target.closest('.nav-list_link') ||
                target.closest('.tab-wrapper') ||
                target.closest('.iti__selected-flag') ||
                target.closest('.iti__country') ||
                target.closest('.checkbox') ||
                target.closest('.service-chips') ||
                target.closest('.tab-toggle-btn') ||
                target.closest('input')) { // если курсор наведён на элементс таким классом или тегом
                el.classList.add('custom-cursor_active') // элементу добавляем активный класс
            } else if (target.closest('a')) { // проверяем кнопку на аттирибут disabled
                const btn = target.closest('a').getElementsByTagName('button')[0];
                if (btn && btn.hasAttribute('disabled')) {
                    el.classList.remove('custom-cursor_active')
                } else {
                    el.classList.add('custom-cursor_active')
                }
            } else { // иначе
                el.classList.remove('custom-cursor_active') // удаляем активный класс
            }

            // Затемняем курсор при наводе на элементы
            if (target.closest('.content-logo') ||
                target.closest('.arrowBox') ||
                target.closest('.file-button') ||
                target.closest('.select-items') ||
                target.closest('.swiper-slide.swiper-slide-active') ||
                target.closest('.dropdown_content a') ||
                target.closest('.wrap_button button') ||
                target.closest('.wrap_button_white button') ||
                target.closest('.white_a a') ||
                target.closest('.cases-btn') ||
                target.closest('.about-btn') ||
                target.closest('.project-screen.adaptive')
            ) {
                el.classList.add('custom-cursor_dark')
            } else {
                el.classList.remove('custom-cursor_dark')
            }


            // Убираем курсор при отстуствии в body
            if (e.clientY <= 0 || !target.closest('body')) {
                el.classList.add('leave');
            } else {
                el.classList.remove('leave');
            }

            el.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
        });
    }

    followCursor() // вызываем функцию followCursor

    const scrollTop = () => {
        const scrollBtn = document.querySelector('.arrowBox');
        
        window.addEventListener('scroll', function() {
            if (document.body.scrollTop > 750 || document.documentElement.scrollTop > 750) {
                scrollBtn.style.display = 'flex';
            } else {
                scrollBtn.style.display = 'none';
            }
        });

        scrollBtn.addEventListener('click', function() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        })
      }
      
    scrollTop();

})

