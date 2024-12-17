document.addEventListener('DOMContentLoaded', () => {
   const delivery = document.querySelector('#content-world');

   if (delivery) {
      const select = delivery.querySelector('.select');
      const selected = delivery.querySelector('.select__selected');
      const options = delivery.querySelectorAll('.select__option');
      const text = delivery.querySelector('.select__text');
      selected.addEventListener('click', () => {
         select.classList.toggle('open');
      });

      options.forEach((option) => {
         option.addEventListener('click', () => {
            text.textContent = option.textContent;
            select.classList.remove('open');
         });
      });
      window.addEventListener('click', (e) => {
         if (!select.contains(e.target)) {
            select.classList.remove('open');
         }
      });
   }
});
