document.addEventListener('DOMContentLoaded', () => {
   const button = document.querySelector('.contacts-block__button');
   const content = document.querySelector('.contacts-block__content');

   if (button && content) {
      button.addEventListener('click', () => {
         content.classList.toggle('open');
      });
   }
});
