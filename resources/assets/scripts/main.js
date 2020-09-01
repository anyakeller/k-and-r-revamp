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

// Enable tooltips

$(function() {
  $('.video-sharing-icon').tooltip({
    trigger: 'hover',
  });
  $('#video-sharing-modal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var shareType = button.data('originalTitle');
    var shareData = button.data('toshare');
    var modal = $(this);
    modal.find('.modal-title').text(shareType);
    modal.find('.modal-body code').text(shareData);
  });
});
