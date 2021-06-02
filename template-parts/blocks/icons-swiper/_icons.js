(function($) {
  $(document).ready(function() {

      $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 15,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          600: {
            items: 3,
            nav: false
          },
          1000: {
            items: 5,
            nav: false,
            loop: false
          }
        }
      });


    $(function () {
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({ default_offset_pct: 0.7 });
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({ default_offset_pct: 0.3, orientation: 'vertical' });
    });

    // AOS.init({
    //   easing: 'ease-in-out-sine'
    // });

    $(function () {
      $('.popover-1').popover({
        container: 'body'
      })
    })

}); // document
})(jQuery);