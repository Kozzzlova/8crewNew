document.addEventListener('DOMContentLoaded', () => {
   const btnSize = document.querySelector('.size-button');
   const modal = document.querySelector('.modal');
   const modalBody = document.querySelector('.modal__body');
   const close = document.querySelector('.modal__close');
   if (btnSize && modal && modalBody && close) {
      btnSize.addEventListener('click', () => {
         modal.classList.add('open');
         document.body.classList.add('fixed');
      });

      close.addEventListener('click', () => {
         modal.classList.remove('open');
         document.body.classList.remove('fixed');
      });

      modal.addEventListener('click', (event) => {
         if (
            modal.classList.contains('open') &&
            !modalBody.contains(event.target) &&
            !btnSize.contains(event.target)
         ) {
            modal.classList.remove('open');
            document.body.classList.remove('fixed');
         }
      });
   }
});
