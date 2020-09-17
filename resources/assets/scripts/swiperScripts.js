// Swiper
import Swiper from 'swiper/bundle';
var mySwiper = new Swiper('.swiper-container', {
  slidesPerView: 3,
  spaceBetween: 10,
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
  on: {
    init: function() {
      console.log('init');
    },
    // reachBeginning: function() {
    //   this.el.parentNode.classList.add('shift-left');
    //   console.log(this.el.parentNode.classList);
    // },
    // fromEdge: function() {
    //   this.el.parentNode.classList.remove('shift-left');
    //   console.log(this.el.parentNode.classList);
    // },
  },
});

console.log(mySwiper);
