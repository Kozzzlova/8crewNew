document.addEventListener('DOMContentLoaded', () => {
   const formFields = document.querySelectorAll('.data-form__field');
   formFields.forEach((field) => {
      const input = field.querySelector('.data-form__input');
      const dropdown = field.querySelector('.data-dropdown');
      if (input && dropdown) {
         input.addEventListener('focus', () => {
            dropdown.classList.add('open');
         });
         input.addEventListener('blur', () => {
            dropdown.classList.remove('open');
         });
      }
   });
});
