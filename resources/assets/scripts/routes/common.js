export default {
  init() {
    // JavaScript to be fired on all pages

    //enable video sharing modal
    var copySocialBtnJquery = $('#copySocialShareValue');
    copySocialBtnJquery.click(() => {
      var activeSocialTabJquery = $('.social-tab.active').children(
        '.form-control'
      );
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

    //init hamburger
    $('.hamburger').click(function() {
      $(this).toggleClass('is-active');
      $('#sidebar-mobile').toggleClass(
        'is-open',
        $(this).hasClass('is-active')
      );
    });
    window.addEventListener('resize', function() {
      $('.hamburger').removeClass('is-active');
      $('#sidebar-mobile').removeClass('is-open');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
