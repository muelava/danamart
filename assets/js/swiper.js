import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

const swiper = new Swiper('.swiper', {

  spaceBetween: 1,
  slidesPerView: 1,
  spaceBetween: 30,
  centeredSlides: true,
  roundLengths: true,
  loop: true,
  loopAdditionalSlides: 30,

  // if we need responsive
  breakpoints:{
        // when window width is >= 640px
        640: {
          slidesPerView: 3,
          spaceBetween: 40
        }
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});