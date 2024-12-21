document.addEventListener('DOMContentLoaded', () => {
   const headerLogin = document.getElementById('header-login');
   const buttons = document.querySelectorAll('.header-account__button');
   const accountPopup = document.querySelector('.header-account__popup');
   const accountLogin = document.querySelector('.header-account__login');
   const popup = document.querySelector('.popup');
   const closeButtons = document.querySelectorAll('.popup__close');
   const body = document.body;

   const accountPopupToggle = () => {
      accountPopup.classList.toggle('open');
      accountLogin.classList.toggle('open');
   };
   const closePopup = () => {
      popup.classList.remove('open');
      body.classList.remove('fixed');
   };

   headerLogin.addEventListener('click', () => {
      accountPopupToggle();
   });

   buttons.forEach((button) => {
      button.addEventListener('click', () => {
         const targetId = button.dataset.target;
         const popupBody = document.getElementById(targetId);

         if (popupBody) {
            body.classList.add('fixed');
            popup.classList.add('open');
            popupBody.classList.add('open');
            accountPopupToggle();
         }
      });
   });

   closeButtons.forEach((closeButton) => {
      closeButton.addEventListener('click', () => {
         closeButton.closest('.popup__body').classList.remove('open');
         closePopup();
      });
   });

   popup.addEventListener('click', (e) => {
      if (!e.target.closest('.popup__body') && !e.target.closest('.cart')) {
         popup.querySelectorAll('.popup__body').forEach((popupBody) => {
            popupBody.classList.remove('open');
         });
         closePopup();
      }
   });

   document.addEventListener('click', (e) => {
      if (
         !e.target.closest('.header-account__popup') &&
         !e.target.closest('#header-login') &&
         accountPopup.classList.contains('open') &&
         !e.target.closest('#header-cart')
      ) {
         accountPopupToggle();
      }
   });
});
