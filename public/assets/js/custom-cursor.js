document.addEventListener('DOMContentLoaded', () => {

  const followCursor = () => { // объявляем функцию followCursor
    const el = document.querySelector('.custom-cursor') // ищем элемент, который будет следовать за курсором

    
    window.addEventListener('mousemove', e => { // при движении курсора
      const target = e.target // определяем, где находится курсор
      if (!target) return

      if (
          target.closest('.tab-wrapper') ||
          target.closest('.swiper-button-next') ||
          target.closest('.swiper-button-prev') ||
          target.closest('.checkbox') ||
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

      if (target.closest('.content-logo') || 
          target.closest('.swiper-slide.swiper-slide-active') ||
          target.closest('.dropdown_content a') ||
          target.closest('.wrap_button button') ||
          target.closest('.wrap_button_white button') ||
          target.closest('.white_a') ||
          target.closest('.cases-btn') ||
          target.closest('.about-btn')
          ) {
        el.classList.add('custom-cursor_dark')
      } else {
        el.classList.remove('custom-cursor_dark')
      }

      let translate = (a, b) => `translate(${a}, ${b})`;
      let px = 'px';

      el.style.transform = translate(e.pageX + px, e.pageY + px) // задаём элементу позиционирование слева
    });
  }

  followCursor() // вызываем функцию followCursor

})