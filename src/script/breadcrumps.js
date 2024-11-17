document.addEventListener('DOMContentLoaded', function () {
   function addBreadcrumbIcons() {
      // Находим список хлебных крошек
      const breadcrumbsList = document.querySelector('.breadcrumps__list');

      // Если список не найден, выходим из функции
      if (!breadcrumbsList) return;

      // Находим все элементы хлебных крошек
      const breadcrumbItems =
         breadcrumbsList.querySelectorAll('.breadcrumps__item');

      // Пропускаем добавление для последнего элемента
      breadcrumbItems.forEach((item, index) => {
         if (index < breadcrumbItems.length - 1) {
            // HTML-код для вставки
            const iconHTML = `
          <span class="breadcrumps__icon">
            <svg width='10' height='16' viewBox="0 0 10 16" fill="none">
              <use xlink:href="#arrow-crump"></use>
            </svg>
          </span>
        `;

            // Вставляем HTML после текущего элемента
            item.insertAdjacentHTML('afterend', iconHTML);
         }
      });
   }

   // Вызываем функцию
   addBreadcrumbIcons();
});
