import Swiper from 'swiper/bundle';
export default {
  init() {
    // JavaScript to be fired on a post page
    new Swiper('.swiper-container', {
      slidesPerView: 2,
      slidesPerGroup: 1,
      spaceBetween: 0,
      freeMode: true,
      // slidesOffsetBefore: 30,
      slidesOffsetAfter: 40,

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 0,
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
