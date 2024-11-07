const tab = document.querySelectorAll('.tab');
tab.forEach((t) =>
   t.addEventListener('click', () => {
      t.classList.toggle('hidden');
      console.log('fdfds');
   })
);
// tab.addEventListener('click', () => {
//    tab.classList.toggle('hidden');
//    console.log('fdfds');
// });
