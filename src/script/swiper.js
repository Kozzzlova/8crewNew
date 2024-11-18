//import './swiper-bundle.min';
//import { Swiper } from './swiper-bundle.min';

import './swiper-bundle';
// //import { Swiper } from './swiper-bundle';
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';
// import Swiper from 'swiper';

const basicSwiper = new Swiper('.basic-swiper', {
   // Optional parameters

   loop: true,
   freeMode: true,
   slidesPerView: 1,

   navigation: {
      nextEl: '.basic-swiper-btn-next',
      prevEl: '.basic-swiper-btn-prev',
   },
});

const swiperProductSmall = new Swiper('.product-swiper-small', {
   // Optional parameters

   loop: true,
   freeMode: true,
   slidesPerView: 'auto',

   // Navigation arrows
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
   // Optional parameters

   // loop: true,
   freeMode: true,
   slidesPerView: 'auto',
   spaceBetween: 20,

   // Navigation arrows
   navigation: {
      nextEl: '.product-swiper-button-next',
      prevEl: '.product-swiper-button-prev',
   },
});
const swiperProduct = new Swiper('.main-swiper', {
   // Optional parameters

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
