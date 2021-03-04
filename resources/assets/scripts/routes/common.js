export default {
  init() {
    // JavaScript to be fired on all pages

    //enable video sharing modal
    var copyLink = $("#copy-link");
    var linkText = $("#link-text");
    var copyEmbed = $("#copy-embed");
    var embedText = $("#embed-text");
    copyLink.click(() => {
      linkText.select();
      document.execCommand("copy");
    });
    copyLink.mouseenter(function () {
      linkText.select();
    });
    copyEmbed.click(() => {
      embedText.select();
      document.execCommand("copy");
    });
    copyEmbed.mouseenter(function () {
      embedText.select();
    });
    // $('#video-sharing-modal').on('shown.bs.modal', function() {
    //   linkText.select();
    // });

    copyLink.tooltip({
      trigger: "focus",
      title: "link copied to clipboard",
      delay: {
        show: 0,
        hide: 1000
      }
    });
    copyEmbed.tooltip({
      trigger: "focus",
      title: "embed code copied to clipboard",
      delay: {
        show: 0,
        hide: 1000
      }
    });

    $("#navToggle").on("show.bs.collapse", function () {
      console.log("yeet");
      $(".hamburger").addClass("is-active");
    });
    $("#navToggle").on("hide.bs.collapse", function () {
      console.log("close");
      $(".hamburger").removeClass("is-active");
    });
    // window.addEventListener('resize', function() {
    //   $('#navToggle').collapse('hide');
    // });

    // work with us and contact modal
    function setModalMaxHeight(element) {
      var jQueryElement = $(element);
      console.log(jQueryElement);
      var dialogMargin = $(window).width() > 767
        ? 62
        : 22;
      var contentHeight = $(window).height() - dialogMargin;
      var headerHeight = jQueryElement.find(".modal-header").outerHeight() || 2;
      var footerHeight = jQueryElement.find(".modal-footer").outerHeight() || 2;
      var maxHeight = contentHeight - (headerHeight + footerHeight);

      jQueryElement.find(".modal-content").css({overflow: "hidden"});

      jQueryElement.find(".modal-body").css({"max-height": maxHeight, "overflow-y": "auto"});
    }
    $(".footer-modal").on("show.bs.modal", function () {
      setModalMaxHeight(this);
    });

    $(".workWithUsModal").click(function (event) {
      $("#workWithUsModal").modal("show");
      event.preventDefault();
      return false;
    });
    $(".contactModal").click(function (event) {
      $("#contactUsModal").modal("show");
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
  }
};
