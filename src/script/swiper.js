import './swiper-bundle';
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';

const collectionSwiper = new Swiper('.collection-swiper', {
   slidesPerView: 'auto',

   pagination: {
      el: '.collection-swiper-pagination',
      dynamicBullets: true,
      clickable: true,
   },
   breakpoints: {
      767: {
         slidesPerGroup: 3,
         pagination: {
            renderBullet: function (index, className) {
               if (index < Math.ceil(this.slides.length / 3)) {
                  return `<span class="${className}"></span>`;
               }
               return '';
            },
         },
      },
   },
});

const seasonSwiper = new Swiper('.season-swiper', {
   slidesPerView: 'auto',
   loop: true,

   navigation: {
      nextEl: '.season-swiper-btn-next',
      prevEl: '.season-swiper-btn-prev',
   },
   scrollbar: {
      el: '.season-swiper-scrollbar',
      draggable: true,
      snapOnRelease: false,
   },
   mousewheel: {
      releaseOnEdges: true,
   },
   breakpoints: {
      767: {
         loop: true,
      },
   },
});

const arrivalsSwiper = new Swiper('.arrivals-swiper', {
   slidesPerView: 'auto',

   navigation: {
      nextEl: '.arrivals-swiper-btn-next',
      prevEl: '.arrivals-swiper-btn-prev',
   },
   scrollbar: {
      el: '.arrivals-swiper-scrollbar',
      draggable: true,
      snapOnRelease: false,
   },
   mousewheel: {
      releaseOnEdges: true,
   },
   breakpoints: {
      767: {
         loop: true,
      },
   },
});

const swiperProductSmall = new Swiper('.product-swiper-small', {
   loop: true,
   freeMode: true,
   slidesPerView: 'auto',

   navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
   },

   breakpoints: {
      992: {
         spaceBetween: 20,
      },
      767: {
         spaceBetween: 30,
      },
      300: {
         spaceBetween: 20,
      },
   },
});

const swiperProduct = new Swiper('.product-swiper', {
   slidesPerView: 'auto',
   spaceBetween: 20,

   navigation: {
      nextEl: '.product-swiper-button-next',
      prevEl: '.product-swiper-button-prev',
   },
});
const swiperBanner = new Swiper('.main-swiper', {
   loop: true,

   autoplay: {
      delay: 2000,
   },

   pagination: {
      el: '.main-swiper-pagination',
      dynamicBullets: true,
      clickable: true,
   },
});

document.addEventListener('DOMContentLoaded', () => {
   const swiperContainer = document.querySelector(
      '.product-swiper-wrapper-small'
   );
   if (swiperContainer) {
      swiperContainer.addEventListener('click', (event) => {
         const clickedSlide = event.target.closest(
            '.product-swiper-slide-small'
         );

         if (clickedSlide) {
            swiperContainer
               .querySelectorAll('.product-swiper-slide-small')
               .forEach((slide) => {
                  slide.classList.remove('active');
               });
            clickedSlide.classList.add('active');
         }
      });
   }
});
