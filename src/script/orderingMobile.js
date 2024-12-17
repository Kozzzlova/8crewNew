document.addEventListener('DOMContentLoaded', () => {
   const buttons = document.querySelectorAll('.ordering__page');
   const columns = document.querySelectorAll('.ordering__column');

   buttons.forEach((button) => {
      button.addEventListener('click', () => {
         const page = button.dataset.page;
         buttons.forEach((btn) => btn.classList.remove('active'));
         columns.forEach((col) => col.classList.remove('active'));
         button.classList.add('active');
         const activeColumn = [...columns].find(
            (col) => col.dataset.page === page
         );
         if (activeColumn) activeColumn.classList.add('active');
      });
   });
});
