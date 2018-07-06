$(function() {
      $('#pagination').hover(
       function() {
        $('#carrousel').trigger( 'pause' );
       }, function() {
        $('#carrousel').trigger( 'play' );
       }
      );

      $('#carrousel').carouFredSel({
       scroll: {
        fx: 'crossfade'
       },
       auto: {
        onBefore: function( oldI, newI ) {
         $('#thumbnails').trigger( 'slideTo', [ '#thumbnails img[alt='+ newI.attr( 'alt' ) +']', -2 ] );
        }
       }
      });

      $('#thumbnails').carouFredSel({
       auto: false,
       items: {
        start: -2
       }
      });

      $('#thumbnails img').click(function() {
       $('#thumbnails').trigger( 'slideTo', [ this, -2 ] );
       $('#carrousel').trigger( 'slideTo', [ '#carrousel img[alt='+ $(this).attr( 'alt' ) +']' ] );

      }).css( 'cursor', 'pointer' );
     });
