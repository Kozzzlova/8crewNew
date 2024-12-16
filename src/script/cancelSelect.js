document.addEventListener('DOMContentLoaded', () => {
   const select = document.querySelector('.cancel-select');
   if (!select) {
      return;
   }

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
         select.classList.toggle('open');
      });
   });

   window.addEventListener('click', (e) => {
      if (!select.contains(e.target)) {
         select.classList.remove('open');
      }
   });
});
