import intlTelInput from 'intl-tel-input';
import 'intl-tel-input/build/css/intlTelInput.css';
import '../scss/components/intl-tel-input.css';

document.addEventListener('DOMContentLoaded', () => {
   const phoneInputs = document.querySelectorAll('input[type="tel"]');
   if (phoneInputs.length === 0) {
      return;
   }

   phoneInputs.forEach((input) => {
      intlTelInput(input, {
         initialCountry: 'ua',
         strictMode: true,
         separateDialCode: true,
         utilsScript:
            'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js',
      });
   });
});
