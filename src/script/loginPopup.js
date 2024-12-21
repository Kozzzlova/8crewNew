document.addEventListener('DOMContentLoaded', () => {
   const headerLogin = document.getElementById('header-login');
   const buttons = document.querySelectorAll('.header-account__button');
   const accountPopup = document.querySelector('.header-account__popup');
   const accountLogin = document.querySelector('.header-account__login');
   const popup = document.querySelector('.popup');
   const closeBtns = document.querySelectorAll('.popup__close');
   const body = document.body;

   headerLogin.addEventListener('click', () => {
      accountPopup.classList.toggle('open');
      accountLogin.classList.toggle('open');
   });

   buttons.forEach((button) => {
      button.addEventListener('click', () => {
         const targetId = button.dataset.target;
         const popupBody = document.getElementById(targetId);

         if (popupBody) {
            body.classList.add('fixed');
            popup.classList.add('open');
            popupBody.classList.add('open');
            accountPopup.classList.toggle('open');
            accountLogin.classList.toggle('open');
         }
      });
   });

   closeBtns.forEach((closeButton) => {
      closeButton.addEventListener('click', () => {
         closeButton.closest('.popup__body').classList.remove('open');
         popup.classList.remove('open');
         body.classList.remove('fixed');
      });
   });

   popup.addEventListener('click', (e) => {
      if (!e.target.closest('.popup__body')) {
         popup.querySelectorAll('.popup__body').forEach((popupBody) => {
            popupBody.classList.remove('open');
         });
         popup.classList.remove('open');
         body.classList.remove('fixed');
      }
   });
});
