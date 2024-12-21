document.addEventListener('DOMContentLoaded', () => {
   const button = document.querySelector('.contacts-block__button');
   const content = document.querySelector('.contacts-block__content');

   if (button && content) {
      button.addEventListener('click', () => {
         content.classList.toggle('open');
      });
      document.addEventListener('click', (e) => {
         if (!content.contains(e.target) && !button.contains(e.target)) {
            content.classList.remove('open');
         }
      });
   }
});
