// Swiper
import Swiper from 'swiper/bundle';

var mySwiper = new Swiper('.swiper-container', {
  slidesPerView: 3,
  spaceBetween: 5,
  freeMode: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    576: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    992: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    1200: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
  mousewheel: {
    forceToAxis: true,
  },
});

console.log(mySwiper);
