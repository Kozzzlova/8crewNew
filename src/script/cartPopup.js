document.addEventListener('DOMContentLoaded', () => {
   const cartButton = document.getElementById('header-cart');
   const closeButton = document.querySelector('.cart__close');

   if (closeButton) {
      const popup = closeButton.closest('.popup');
      closeButton.addEventListener('click', () => {
         popup.classList.remove('open');
      });

      cartButton.addEventListener('click', () => {
         popup.classList.add('open');
      });
   }
});
