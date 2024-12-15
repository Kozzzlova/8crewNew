const tabs = document.querySelectorAll('.accordion');
if (tabs.length > 0) {
   tabs.forEach((tab) => {
      tab.addEventListener('click', () => {
         tabs.forEach((item) => {
            if (item !== tab) {
               item.classList.add('hidden');
            }
         });
         tab.classList.toggle('hidden');
      });
   });
}
