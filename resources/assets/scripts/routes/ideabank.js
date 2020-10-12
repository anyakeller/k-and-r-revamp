import Swiper from 'swiper/bundle';
export default {
  init() {
    // JavaScript to be fired on a post page
    new Swiper('.swiper-container', {
      slidesPerView: 2,
      spaceBetween: 10,
      centeredSlides: true,
      mousewheel: {
        forceToAxis: true,
      },

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  },
  finalize() {
    // JavaScript to be fired on a post page, after the init JS
  },
};