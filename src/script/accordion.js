const tab = document.querySelectorAll('.accordion');
tab.forEach((t) =>
   t.addEventListener('click', () => {
      t.classList.toggle('hidden');
   })
);
