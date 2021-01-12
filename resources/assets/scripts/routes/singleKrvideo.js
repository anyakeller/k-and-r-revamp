import Swiper from 'swiper/bundle';
export default {
  init() {
    // JavaScript to be fired on a post page
  },
  finalize() {
    // JavaScript to be fired on a post page, after the init JS

    new Swiper('.swiper-container', {
      slidesPerView: 2,
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
        // breakpoint sm
        576: {
          slidesPerView: 3,
        },
        // breakpoint md
        768: {
          slidesPerView: 3,
          slidesOffsetBefore: 33,
          slidesOffsetAfter: 33,
        },
        // breakpoint lg
        1200: {
          slidesPerView: 4,
          slidesPerGroup: 2,
          slidesOffsetBefore: 33,
        },
      },

      mousewheel: {
        forceToAxis: true,
      },
    });
  },
};
