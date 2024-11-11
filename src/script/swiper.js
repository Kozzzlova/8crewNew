//import './swiper-bundle.min';
//import { Swiper } from './swiper-bundle.min';
//import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11.1.14/+esm';
//import '../scss/slider/swiper-bundle.min.css';

import './swiper-bundle';
//import { Swiper } from './swiper-bundle';
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';
// document.addEventListener('DOMContentLoaded', () => {
//    const swiper = new Swiper('.swiper', {
//       modules: [Navigation],
//       navigation: {
//          nextEl: '.swiper-button-next',
//          prevEl: '.swiper-button-prev',
//       },

//       direction: 'horizontal',
//       loop: true,
//       autoplay: {
//          delay: 3000,
//       },
//    });
// });

const swiper = new Swiper('.swiper', {
   // Optional parameters
   direction: 'horizontal',
   loop: true,
   slidesPerView: 3,
   spaceBetween: 20,
   freeMode: true,

   // If we need pagination
   pagination: {
      el: '.swiper-pagination',
   },

   // Navigation arrows
   navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
   },

   // And if we need scrollbar
   scrollbar: {
      el: '.swiper-scrollbar',
   },
});
