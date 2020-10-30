import Swiper from 'swiper/bundle';
export default {
  init() {
    // JavaScript to be fired on a post page
    new Swiper('.swiper-container', {
      slidesPerView: 3,
      // slidesPerView: 'auto',
      slidesPerGroup: 1,
      spaceBetween: 6,
      freeMode: true,
      slidesOffsetBefore: 3,
      slidesOffsetAfter: 46,

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        420: {
          slidesPerView: 3,
        },
        768: {
          slidesPerView: 3,
          slidesOffsetAfter: 6,
          // slidesOffsetBefore: 40,
        },
        992: {
          slidesPerView: 4,
          slidesPerGroup: 2,
        },
      },

      mousewheel: {
        forceToAxis: true,
      },
    });
  },
  finalize() {
    // JavaScript to be fired on a post page, after the init JS
  },
};
