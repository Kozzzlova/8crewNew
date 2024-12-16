document.addEventListener('DOMContentLoaded', () => {
   const orders = document.querySelectorAll('.order');

   orders.forEach((order) => {
      const tabButtons = order.querySelectorAll('.order-tabs__button');
      const tabContents = order.querySelectorAll('.order-tabs__content');

      if (tabButtons.length > 0) {
         tabButtons.forEach((button) => {
            button.addEventListener('click', () => {
               tabButtons.forEach((btn) => btn.classList.remove('active'));
               tabContents.forEach((content) =>
                  content.classList.remove('active')
               );
               button.classList.add('active');
               const tabId = button.getAttribute('data-tab');
               const activeContent = order.querySelector(`#${tabId}`);
               if (activeContent) {
                  activeContent.classList.add('active');
               }
            });
         });
      }
      const orderHeader = order.querySelector('.order__header');
      if (orderHeader) {
         orderHeader.addEventListener('click', () => {
            order.classList.toggle('hidden');
         });
      }
   });
});
