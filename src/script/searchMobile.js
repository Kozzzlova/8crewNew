document.addEventListener('DOMContentLoaded', () => {
   const searchButton = document.querySelector('.search-form__button');
   const headerMain = document.querySelector('.header__main');
   const searchClose = document.querySelector('.search-form__close');
   searchButton.addEventListener('click', (e) => {
      if (window.innerWidth < 768 && !headerMain.classList.contains('mobile')) {
         e.preventDefault();
         headerMain.classList.add('mobile');
      }
   });
   searchClose.addEventListener('click', () => {
      headerMain.classList.remove('mobile');
   });
});
