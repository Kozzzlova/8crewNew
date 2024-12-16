document.addEventListener('DOMContentLoaded', () => {
   const accordion = document.querySelector('.order-accordion');
   if (!accordion) return;

   const accordionHeaders = accordion.querySelectorAll(
      '.order-accordion__header'
   );
   accordionHeaders.forEach((header) => {
      header.addEventListener('click', () => {
         header.closest('.order-accordion__item').classList.toggle('active');
      });
   });
});
