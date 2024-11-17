document.addEventListener('DOMContentLoaded', () => {
   document.querySelectorAll('.product-card__icon').forEach((iconButton) => {
      iconButton.addEventListener('click', () => {
         iconButton.classList.toggle('fill');
         const svgs = iconButton.querySelectorAll('svg');
         svgs.forEach((svg) => {
            svg.classList.toggle('hidden');
         });
      });
   });
});

document.addEventListener('DOMContentLoaded', () => {
   const likeButton = document.querySelector('.product__like');
   likeButton.addEventListener('click', () => {
      const svgs = likeButton.querySelectorAll('svg');
      svgs.forEach((svg) => {
         svg.classList.toggle('hidden');
      });
   });
});
