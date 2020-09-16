// Swiper
import Swiper from 'swiper/bundle';
export default {
  makeSwiper() {
    new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 10,
      // slidesPerColumn: 2,
      freeMode: true,
      slidesOffsetBefore: 40,
      slidesOffsetAfter: 40,

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        576: {
          slidesPerView: 3,
          spaceBetween: 20,
          // slidesPerColumn: 2,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
          // slidesPerColumn: 2,
        },
        992: {
          slidesPerView: 4,
          spaceBetween: 20,
          // slidesPerColumn: 2,
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 20,
          // slidesPerColumn: 2,
        },
      },
      mousewheel: {
        forceToAxis: true,
      },
    });

    // console.log(mySwiper);
  },
};
