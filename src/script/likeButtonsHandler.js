document.addEventListener('DOMContentLoaded', () => {
   const iconButtons = document.querySelectorAll('.product-card__icon');
   if (iconButtons.length > 0) {
      iconButtons.forEach((iconButton) => {
         iconButton.addEventListener('click', (event) => {
            event.preventDefault();
            iconButton.classList.toggle('fill');
            const svgs = iconButton.querySelectorAll('svg');
            svgs.forEach((svg) => {
               svg.classList.toggle('hidden');
            });
         });
      });
   }
});

document.addEventListener('DOMContentLoaded', () => {
   const likeButton = document.querySelector('.product__like');
   if (likeButton) {
      likeButton.addEventListener('click', () => {
         const svgs = likeButton.querySelectorAll('svg');
         svgs.forEach((svg) => {
            svg.classList.toggle('hidden');
         });
      });
   }
});
