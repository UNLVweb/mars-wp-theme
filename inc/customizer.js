( function( $ ) {

  wp.customize( 'background_color', function( value ) {
    value.bind( function( newval ) {
      $( 'body' ).css( 'font-color', newval );
    } );
  } );
  
  wp.customize( 'blogname', function( value ) {
    value.bind( function( newval ) {
      $( 'div.website-title > a.full-title' ).html( newval );
    } );  
  } );

  wp.customize( 'blogdescription', function( value ) {
    value.bind( function( newval ) {
      $( 'div.website-title > a.short-title' ).html( newval );
    } );
  } );

} )( jQuery );
