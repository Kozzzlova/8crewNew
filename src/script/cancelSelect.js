document.addEventListener('DOMContentLoaded', () => {
   const orders = document.querySelectorAll('.order');

   orders.forEach((order) => {
      const selects = order.querySelectorAll('.select');
      selects.forEach((select) => {
         const selected = select.querySelector('.select__selected');
         const options = select.querySelectorAll('.select__option');
         const text = select.querySelector('.select__text');
         selected.addEventListener('click', () => {
            select.classList.toggle('open');
         });
         options.forEach((option) => {
            option.addEventListener('click', () => {
               text.textContent = option.textContent;
               select.classList.remove('open');
            });
         });
      });
      window.addEventListener('click', (e) => {
         selects.forEach((select) => {
            if (!select.contains(e.target)) {
               select.classList.remove('open');
            }
         });
      });
   });
});
