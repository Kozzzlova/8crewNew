document.addEventListener('DOMContentLoaded', () => {
   const basketButtons = document.querySelectorAll('.product-card__button');
   if (basketButtons.length > 0) {
      basketButtons.forEach((basketButton) => {
         basketButton.addEventListener('click', (event) => {
            event.preventDefault();
         });
      });
   }
});
