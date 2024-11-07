function toggleDropdown() {
   document.getElementById('dropdown').classList.toggle('show');
   console.log('dsd');
}

// Закрытие меню, если пользователь кликает вне его
window.onclick = function (event) {
   if (!event.target.matches('.select-button')) {
      var dropdowns = document.getElementsByClassName('select-dropdown');
      for (var i = 0; i < dropdowns.length; i++) {
         var openDropdown = dropdowns[i];
         if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
         }
      }
   }
};
