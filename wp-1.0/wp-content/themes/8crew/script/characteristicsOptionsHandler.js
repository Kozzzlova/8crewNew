document.addEventListener('DOMContentLoaded', () => {
   const optionsContainers = document.querySelectorAll(
      '.characteristics__options'
   );

   optionsContainers.forEach((container) => {
      container.addEventListener('click', (event) => {
         if (event.target.closest('.characteristics__element')) {
            const clickedElement = event.target.closest(
               '.characteristics__element'
            );

            container
               .querySelectorAll('.characteristics__element')
               .forEach((element) => {
                  element.classList.remove('active');
               });

            clickedElement.classList.add('active');
         }
      });
   });
});
