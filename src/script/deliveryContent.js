document.addEventListener('DOMContentLoaded', () => {
   const deliveryOptions = document.querySelectorAll('input[name="delivery"]');
   const localContent = document.querySelector('#content-local');
   const worldContent = document.querySelector('#content-world');
   if (!localContent || !worldContent) {
      return;
   }
   const updateContent = (value) => {
      if (value === 'world') {
         localContent.classList.remove('selected');
         worldContent.classList.add('selected');
      } else {
         worldContent.classList.remove('selected');
         localContent.classList.add('selected');
      }
   };

   deliveryOptions.forEach((option) => {
      option.addEventListener('change', () => {
         updateContent(option.value);
      });
   });

   updateContent('local');
});
