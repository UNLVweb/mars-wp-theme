( function( $ ) {
  
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

  wp.customize( 'section_one_toggle_display', function( value ) {
    value.bind( function( newval ) {
      if ( newval === 'hide' )
        $( '#section-one' ).hide();
      else
        $( '#section-one' ).show();
    } );
  } );

  wp.customize( 'section_one_card_heading', function( value ) {
    value.bind( function( newval ) {
      $( '#card-heading' ).html( newval );
    } );
  } );

  wp.customize( 'section_one_card_text', function( value ) {
    value.bind( function( newval ) {
      $( '#card-description' ).html( newval );
    } );
  } );

  wp.customize( 'section_one_right_column_text', function( value ) {
    value.bind( function( newval ) {
      $( '#section-one-content' ).html( newval );
    } );
  } );

  wp.customize( 'hero_toggle_display', function( value ) {
    value.bind( function( newval ) {
      if ( newval === 'hide' )
        $( '#hero-image' ).hide();
      else
        $( '#hero-image' ).show();
    } );
  } );

  wp.customize( 'section_two_toggle_display', function( value ) {
    value.bind( function( newval ) {
      if ( newval === 'hide' )
        $( '#section-two' ).hide();
      else
        $( '#section-two' ).show();
    } );
  } );

  wp.customize( 'section_two_right_column_text', function( value ) {
    value.bind( function( newval ) {
      $( '#section-two-right-col' ).html( newval );
    } );
  } );

  wp.customize( 'section_two_image_caption', function( value ) {
    value.bind( function( newval ) {
      $( '#section-two-img-caption' ).html( newval );
    } );
  } );


} )( jQuery );
