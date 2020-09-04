// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

// fontawesome
import '@fortawesome/fontawesome-free/js/all.js';

// swiper
import './swiperScripts.js';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

// Video Sharing Tabs
// pure js
// var copySocialBtn = document.querySelector('#copySocialShareValue');
// copySocialBtn.addEventListener('click', () => {
//   var activeSocialTab = document
//     .querySelector('.social-tab.active')
//     .querySelector('.form-control');
//   activeSocialTab.select();
//   document.execCommand('copy');
// });

// jquery
var copySocialBtnJquery = $('#copySocialShareValue');
copySocialBtnJquery.click(() => {
  var activeSocialTabJquery = $('.social-tab.active').children('.form-control');
  activeSocialTabJquery.select();
  document.execCommand('copy');
});
copySocialBtnJquery.tooltip({
  trigger: 'focus',
  title: 'copied to clipboard',
  delay: {
    show: 0,
    hide: 5000,
  },
});
