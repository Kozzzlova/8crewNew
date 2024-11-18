//import './swiper-bundle.min';
//import { Swiper } from './swiper-bundle.min';

import './swiper-bundle';
// //import { Swiper } from './swiper-bundle';
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';
// import Swiper from 'swiper';

const collectionSwiper = new Swiper('.collection-swiper', {});

const seasonSwiper = new Swiper('.season-swiper', {
   freeMode: true,
   slidesPerView: 'auto',

   navigation: {
      nextEl: '.season-swiper-btn-next',
      prevEl: '.season-swiper-btn-prev',
   },
   scrollbar: {
      el: '.season-swiper-scrollbar', // Элемент скроллбара
      draggable: true, // Разрешить перетаскивание скроллбара
      snapOnRelease: false, // Отключить привязку к слайдам после перетаскивания
   },
   mousewheel: {
      releaseOnEdges: true, // Позволяет прокручивать на границах
   },
   breakpoints: {
      767: {
         loop: true,
      },
   },
});
const arrivalsSwiper = new Swiper('.arrivals-swiper', {
   freeMode: true,
   slidesPerView: 'auto',

   navigation: {
      nextEl: '.arrivals-swiper-btn-next',
      prevEl: '.arrivals-swiper-btn-prev',
   },
   scrollbar: {
      el: '.arrivals-swiper-scrollbar', // Элемент скроллбара
      draggable: true, // Разрешить перетаскивание скроллбара
      snapOnRelease: false, // Отключить привязку к слайдам после перетаскивания
   },
   mousewheel: {
      releaseOnEdges: true, // Позволяет прокручивать на границах
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

const swiperBanner = new Swiper('.product-swiper', {
   // loop: true,
   freeMode: true,
   slidesPerView: 'auto',
   spaceBetween: 20,

   navigation: {
      nextEl: '.product-swiper-button-next',
      prevEl: '.product-swiper-button-prev',
   },
});
const swiperProduct = new Swiper('.main-swiper', {
   loop: true,

   //    autoplay: {
   //       delay: 2000,
   //    },

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
