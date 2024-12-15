const btnLogin = document.querySelector('#header-login');
const popup = document.querySelector('.popup');
const popupBody = document.querySelector('.popup__body');
const closeLogin = document.querySelector('.popup__close');
btnLogin.addEventListener('click', (e) => {
   e.preventDefault();
   popup.classList.add('open');
   document.body.classList.add('fixed');
});

if (closeLogin) {
   closeLogin.addEventListener('click', () => {
      popup.classList.remove('open');
      document.body.classList.remove('fixed');
   });
}

popup.addEventListener('click', (event) => {
   if (
      popup.classList.contains('open') &&
      !popupBody.contains(event.target) &&
      !btnLogin.contains(event.target)
   ) {
      popup.classList.remove('open');
      document.body.classList.remove('fixed');
   }
});
