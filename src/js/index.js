(function($) {
  $(document).ready(function() {

    const showNavigation = () => {
      $('#navbarSupportedContent').toggleClass('show');
      $('.sae-filter').toggleClass('is-open');
      $('.trigger').toggleClass('is-open');
    }

    $(".trigger").click(showNavigation);
    $(".sae-filter").click(showNavigation);
  

  }); // document
})(jQuery);