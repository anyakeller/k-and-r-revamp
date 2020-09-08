// Swiper
import Swiper from 'swiper/bundle';

var mySwiper = new Swiper('.swiper-container', {
  slidesPerView: 3,
  spaceBetween: 5,
  slidesPerColumn: 2,
  freeMode: true,
  // Disable preloading of all images
  preloadImages: false,
  loadPrevNextAmount: 4,
  watchSlidesVisibility: true,
  // Enable lazy loading
  lazy: true,
  loadOnTransitionStart: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    576: {
      slidesPerView: 3,
      spaceBetween: 20,
      slidesPerColumn: 2,
      loadPrevNextAmount: 5,
    },
    768: {
      slidesPerView: 3,
      slidesPerColumn: 2,
      spaceBetween: 30,
    },
    992: {
      slidesPerView: 4,
      slidesPerColumn: 2,
      spaceBetween: 20,
      loadPrevNextAmount: 6,
    },
    1200: {
      slidesPerView: 4,
      slidesPerColumn: 2,
      spaceBetween: 20,
    },
  },
  mousewheel: {
    forceToAxis: true,
  },
});

console.log(mySwiper);
