const tinkoffLink = document.querySelectorAll('.modal-link');
const modal = document.querySelector('.modal');
if(tinkoffLink) {
    tinkoffLink.forEach(element => {
      element.addEventListener('click', () => {
      modal.classList.add('modal-revealed');
      document.body.style.overflow = 'hidden';
    })}
    )}

const closeModal = document.querySelector('.modal-close');

if (closeModal) {
  closeModal.addEventListener('click', () => {
    modal.classList.remove('modal-revealed');
    document.body.style.overflow = 'visible';
  })
}


  if (modal) {
  modal.addEventListener('click', (e) => {
    console.log(e.target)
    modal.classList.remove('modal-revealed');
    document.body.style.overflow = 'visible';
  })

  }