document.addEventListener('DOMContentLoaded', () => {
   const searchInput = document.querySelector('.search-form__input');
   const searchFormBody = document.querySelector('.search-form__body');

   function getScrollbarWidth() {
      return window.innerWidth - document.documentElement.clientWidth;
   }

   function positionDropdown() {
      if (window.innerWidth > 767) {
         const scrollbarWidth = getScrollbarWidth();
         const rect = searchInput.getBoundingClientRect();
         searchFormBody.style.right = `${
            window.innerWidth - rect.right - scrollbarWidth
         }px`;
      }
   }

   searchInput.addEventListener('input', () => {
      if (searchInput.value.trim() !== '') {
         positionDropdown();
         searchFormBody.classList.add('active');
         if (window.innerWidth < 768) {
            document.documentElement.style.overflow = 'hidden';
         }
      } else {
         searchFormBody.classList.remove('active');
         document.documentElement.style.overflow = '';
      }
   });

   // document.addEventListener('click', (e) => {
   //    if (
   //       !searchInput.contains(e.target) &&
   //       !searchFormBody.contains(e.target)
   //    ) {
   //       searchFormBody.classList.remove('active');
   //       searchInput.value = '';
   //       document.documentElement.style.overflow = '';
   //    }
   // });
});
