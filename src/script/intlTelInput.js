import intlTelInput from 'intl-tel-input';
import 'intl-tel-input/build/css/intlTelInput.css';
import '../scss/components/intl-tel-input.css';

document.addEventListener('DOMContentLoaded', () => {
   const input = document.querySelector('#tel');
   if (!input) {
      return; // Выход из функции, если элемент не найден
   }

   intlTelInput(input, {
      initialCountry: 'ua',
      strictMode: true,
      separateDialCode: true,
      utilsScript:
         'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/19.0.0/js/utils.js',
   });
});
