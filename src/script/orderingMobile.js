document.addEventListener('DOMContentLoaded', () => {
   const nextButtons = document.querySelectorAll('.ordering__next-button');
   let currentPage = 1;

   if (nextButtons.length > 0) {
      nextButtons.forEach((button) => {
         button.addEventListener('click', () => {
            const currentColumn = document.querySelector(
               `.ordering__column[data-page='${currentPage}']`
            );
            const nextColumn = document.querySelector(
               `.ordering__column[data-page='${currentPage + 1}']`
            );
            const currentPageIndicator = document.querySelector(
               `.ordering__page[data-page='${currentPage}']`
            );
            const nextPageIndicator = document.querySelector(
               `.ordering__page[data-page='${currentPage + 1}']`
            );

            if (nextColumn) {
               currentColumn.classList.remove('active');
               nextColumn.classList.add('active');

               currentPageIndicator.classList.remove('active');
               nextPageIndicator.classList.add('active');

               currentPage++;
            }
         });
      });
   }
});
