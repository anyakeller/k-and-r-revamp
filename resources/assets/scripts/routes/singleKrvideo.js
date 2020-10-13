import Swiper from 'swiper/bundle';
export default {
  init() {
    // JavaScript to be fired on a post page
    new Swiper('.swiper-container', {
      slidesPerView: 3,
      slidesPerGroup: 2,
      spaceBetween: 5,
      // slidesPerColumn: 2,
      freeMode: true,
      // slidesOffsetBefore: 30,
      // slidesOffsetAfter: 40,

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        576: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 3,
        },
        992: {
          slidesPerView: 4,
          slidesPerGroup: 3,
          spaceBetween: 0,
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 3,
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
