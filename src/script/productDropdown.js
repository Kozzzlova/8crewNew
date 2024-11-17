const dropdown = document.querySelector('.dropdown');
const handler = document.querySelector('.dropdown-handler');
const mobileHandler = document.querySelector('.dropdown-mobile-handler');
const closeBtn = document.querySelector('.dropdown__close');

handler.addEventListener('click', (e) => {
   e.preventDefault();
   if (dropdown.classList.contains('open')) {
      dropdown.classList.remove('open');
   } else {
      dropdown.classList.add('open');
   }
});

mobileHandler.addEventListener('click', (e) => {
   e.preventDefault();
   if (dropdown.classList.contains('open')) {
      dropdown.classList.remove('open');
   } else {
      dropdown.classList.add('open');
   }
});

closeBtn.addEventListener('click', () => {
   dropdown.classList.remove('open');
});

dropdown.addEventListener('mouseleave', () => {
   dropdown.classList.remove('open');
});
