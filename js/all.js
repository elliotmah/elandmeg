$(window).on("load",function() {
    function fade() {
        var animation_height = $(window).innerHeight() * 0.25;
        var ratio = Math.round( (1 / animation_height) * 10000 ) / 10000;

        $('.fade').each(function() {

            var objectTop = $(this).offset().top;
            var windowBottom = $(window).scrollTop() + $(window).innerHeight();

            if ( objectTop < windowBottom ) {
                if ( objectTop < windowBottom - animation_height ) {
                    $(this).html();
                    $(this).css( {
                        transition: 'opacity 0.1s linear',
                        opacity: 1
                    } );

                } else {
                    $(this).html();
                    $(this).css( {
                        transition: 'opacity 0.25s linear',
                        opacity: (windowBottom - objectTop) * ratio
                    } );
                }
            } else {
                $(this).html();
                $(this).css( 'opacity', 0 );
            }
        });
    }
    $('.fade').css( 'opacity', 0 );
    fade();
    $(window).scroll(function() {fade();});

    $('#toggle').click(function() {
      $(this).toggleClass('active');
      $('#overlay').toggleClass('open');
      $('#subnav').toggle();
    });

  $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top-120
    }, 500);
    return false;
  });

});
