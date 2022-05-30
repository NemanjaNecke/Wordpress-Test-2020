( function( $ ) {

    wp.customize( 'background_color', function( value ) {
          value.bind( function( newval ) {
              $( 'div.container-fluid' ).css( 'background-color', newval );
          } );
      } );

      wp.customize( 'background_image', function( value ) {
        value.bind( function( newval ) {
            $( 'div.container-fluid' ).css( 'background-image', newval );
        } );
    } );

      wp.customize( 'blogname', function( value ) {
    value.bind( function( newval ) {
      $( '#pronto' ).html( newval );
    } );
  } );
  
  wp.customize( 'blogdescription', function( value ) {
    value.bind( function( newval ) {
      $( '#mainh1' ).html( newval );
    } );
  } );
  } )( jQuery );
