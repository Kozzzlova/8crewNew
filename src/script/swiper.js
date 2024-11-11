//import './swiper-bundle.min';
//import { Swiper } from './swiper-bundle.min';

import './swiper-bundle';
// //import { Swiper } from './swiper-bundle';
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';
// import Swiper from 'swiper';
const swiperProductSmall = new Swiper('.product-swiper-small', {
   // Optional parameters
   direction: 'horizontal',
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

const swiperProduct = new Swiper('.product-swiper', {
   // Optional parameters
   direction: 'horizontal',
   loop: true,
   freeMode: true,
   slidesPerView: 'auto',
   spaceBetween: 20,

   // Navigation arrows
   navigation: {
      nextEl: '.product-swiper-button-next',
      prevEl: '.product-swiper-button-prev',
   },
});
