(function($) {
  $(document).ready(function() {

    // $(window).scroll(function () {
    //     var top = $(document).scrollTop();
    //     $('.splash').css({
    //       'background-position': '0px -'+(top/3).toFixed(2)+'px'
    //     });
    //     if(top > 50)
    //       $('#home > .navbar').removeClass('navbar-transparent');
    //     else
    //       $('#home > .navbar').addClass('navbar-transparent');
    // });

    $("a[href='#']").click(function(e) {
      e.preventDefault();
    });

    $(".fancybox").fancybox({
      margin : [5, 5, 5, 5],
      autoSize: false,
      width: '95%'
    });

  });
})(jQuery);