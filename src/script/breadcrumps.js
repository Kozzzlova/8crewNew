document.addEventListener('DOMContentLoaded', function () {
   function addBreadcrumbIcons() {
      const breadcrumbsList = document.querySelector('.breadcrumps__list');
      if (!breadcrumbsList) return;

      const breadcrumbItems =
         breadcrumbsList.querySelectorAll('.breadcrumps__item');

      breadcrumbItems.forEach((item, index) => {
         if (index < breadcrumbItems.length - 1) {
            const iconHTML = `
          <span class="breadcrumps__icon">
            <svg width='10' height='16' viewBox="0 0 10 16" fill="none">
              <use xlink:href="#arrow-crump"></use>
            </svg>
          </span>
        `;
            item.insertAdjacentHTML('afterend', iconHTML);
         }
      });
   }
   addBreadcrumbIcons();
});
