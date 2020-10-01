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

    function setModalMaxHeight(element) {
      var jQueryElement = $(element);
      console.log(jQueryElement);
      var dialogMargin = $(window).width() > 767 ? 62 : 22;
      var contentHeight = $(window).height() - dialogMargin;
      var headerHeight = jQueryElement.find('.modal-header').outerHeight() || 2;
      var footerHeight = jQueryElement.find('.modal-footer').outerHeight() || 2;
      var maxHeight = contentHeight - (headerHeight + footerHeight);

      jQueryElement.find('.modal-content').css({
        overflow: 'hidden',
      });

      jQueryElement.find('.modal-body').css({
        'max-height': maxHeight,
        'overflow-y': 'auto',
      });
    }
    $('.footer-modal').on('show.bs.modal', function() {
      setModalMaxHeight(this);
    });

    $('.workWithUsModal').click(function(event) {
      $('#workWithUsModal').modal('show');
      event.preventDefault();
      return false;
    });
    $('.contactModal').click(function(event) {
      $('#contactUsModal').modal('show');
      event.preventDefault();
      return false;
    });
    // $(window).resize(function() {
    //   if ($('.footer-modal.in').length != 0) {
    //     setModalMaxHeight($('.footer-modal.in'));
    //   }
    // });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
