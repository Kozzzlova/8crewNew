document.addEventListener('DOMContentLoaded', () => {
   const cartButton = document.getElementById('header-cart');
   const popup = document.querySelector('.popup');
   const cart = document.querySelector('.cart');
   const closeButton = document.querySelector('.cart__close');
   const body = document.body;

   const openCart = () => {
      body.classList.add('fixed');
      popup.classList.add('open');
      cart.classList.add('open');
      cartButton.classList.add('active');
   };

   const closeCart = () => {
      cartButton.classList.remove('active');
      cart.classList.remove('open');
      popup.classList.remove('open');
      body.classList.remove('fixed');
   };
   cartButton.addEventListener('click', () => {
      openCart();
   });

   closeButton.addEventListener('click', () => {
      closeCart();
   });

   popup.addEventListener('click', (e) => {
      if (!e.target.closest('.popup__body') && !e.target.closest('.cart')) {
         closeCart();
      }
   });
});
