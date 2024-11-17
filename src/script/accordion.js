const tabs = document.querySelectorAll('.accordion');
if (tabs.length > 0) {
   tabs.forEach((t) =>
      t.addEventListener('click', () => {
         t.classList.toggle('hidden');
      })
   );
}
