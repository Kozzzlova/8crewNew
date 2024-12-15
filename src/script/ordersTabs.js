document.addEventListener('DOMContentLoaded', () => {
   const tabButtons = document.querySelectorAll('.order-tabs__button');
   const tabContents = document.querySelectorAll('.order-tabs__content');
   if (tabButtons.length === 0) {
      return;
   }
   tabButtons.forEach((button) => {
      button.addEventListener('click', () => {
         tabButtons.forEach((btn) => btn.classList.remove('active'));
         tabContents.forEach((content) => content.classList.remove('active'));

         button.classList.add('active');
         const tabId = button.getAttribute('data-tab');
         document.getElementById(tabId).classList.add('active');
      });
   });
});

document.addEventListener('DOMContentLoaded', () => {
   const orderHeaders = document.querySelectorAll('.order__header');

   orderHeaders.forEach((header) => {
      header.addEventListener('click', () => {
         // Найти родительский элемент с классом .order
         const order = header.closest('.order');

         if (order) {
            order.classList.toggle('hidden');
         }
      });
   });
});
