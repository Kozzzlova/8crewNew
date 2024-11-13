const btnSize = document.querySelector('.size-section__button');
const modal = document.querySelector('.modal');
const modalBody = document.querySelector('.modal__body');
const close = document.querySelector('.modal__close');
btnSize.addEventListener('click', () => {
   modal.classList.add('open');
   document.documentElement.style.overflow = 'hidden';
});

close.addEventListener('click', () => {
   modal.classList.remove('open');
   document.documentElement.style.overflow = '';
});

modal.addEventListener('click', (event) => {
   if (
      modal.classList.contains('open') &&
      !modalBody.contains(event.target) &&
      !btnSize.contains(event.target)
   ) {
      modal.classList.remove('open');
   }
});
