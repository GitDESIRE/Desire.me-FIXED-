const tinkoffLink = document.querySelectorAll('.modal-link');
const modal = document.querySelector('.modal');
if(tinkoffLink) {
    tinkoffLink.forEach(element => {
      element.addEventListener('click', () => {
      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
    })}
    )}

const closeModal = document.querySelector('.modal-close');
if (closeModal) {
  closeModal.addEventListener('click', () => {
    modal.classList.remove('active');
    document.body.style.overflow = 'visible';
  })
}
