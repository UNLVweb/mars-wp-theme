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

  wp.customize( 'hero_image_heading', function( value ) {
    value.bind( function( newval ) {
      $( '#hero-heading' ).html( newval );
    } );
  } );

  wp.customize( 'hero_image_description', function( value ) {
    value.bind( function( newval ) {
      $( '#hero-description' ).html( newval );
    } );
  } );
} )( jQuery );
