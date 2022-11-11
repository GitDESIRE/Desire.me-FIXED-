const button = document.querySelector('.burger-menu_button');
const menu = document.querySelector('.burger-menu');
const openLink = document.querySelector('.openLink');
const openLinkToggler = document.querySelector('.openLink-toggler');
const body = document.body;

button.addEventListener('click', (e) => {
  e.preventDefault();
  menu.classList.toggle('burger-menu_active');
  if (menu.classList.contains('burger-menu_active')) {
    body.style.overflow = 'hidden';
  } else {
    body.style.overflow = 'visible';
  }
})

openLinkToggler.addEventListener('click', (e) => {
  e.preventDefault();
  openLink.classList.toggle('openLink_active');
})
