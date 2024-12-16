document.addEventListener('DOMContentLoaded', () => {
   const orders = document.querySelectorAll('.order');

   orders.forEach((order) => {
      const selects = order.querySelectorAll('.cancel-select');
      selects.forEach((select) => {
         const selected = select.querySelector('.cancel-select__selected');
         const options = select.querySelectorAll('.cancel-select__option');
         const text = select.querySelector('.cancel-select__text');
         selected.addEventListener('click', () => {
            select.classList.toggle('open');
         });
         options.forEach((option) => {
            option.addEventListener('click', () => {
               text.textContent = option.textContent;
               text.dataset.value = option.dataset.value;
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
