( function( $ ) {

  wp.customize( 'background_color', function( value ) {
    value.bind( function( newval ) {
      $( 'body' ).css( 'font-color', newval );
    } );
  } );
  
  wp.customize( 'blogname', function( value ) {
    console.log(value);
    value.bind( function( newval ) {
      $( '.full-title' ).html( newval );
    } );  
  } );

  wp.customize( 'blogdescription', function( value ) {
    value.bind( function( newval ) {
      $( '.short-title' ).html( newval );
    } );
  } );

} )( jQuery );
