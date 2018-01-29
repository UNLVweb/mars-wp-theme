<?php
/**
 * Twenty Seventeen: Mars
 *
 */

add_filter( 'gettext', 'mars_change_label_names');

/**
 * Updates the Tagline field to "Short Title" in the theme customizer.
 *
 */
function mars_change_label_names($translated_text){

    if (is_admin()){
        switch ( $translated_text ) {
            /*
            case 'Site Title' :

                $translated_text = __( 'New Site Title label', 'theme_text_domain' );
                break;
            */
            case 'Tagline' :

                $translated_text = __( 'Short Title (Responsive)', 'theme_text_domain' );
                break;
        }
    }

    return $translated_text;
}

add_action( 'customize_register', 'mars_customizer_settings' );

/**
 * Using the Theme Customization API, adding fields for the front-page template.
 *
 */
function mars_customizer_settings( $wp_customize ) {

  // Create section Front Page options.
  $wp_customize->add_section( 'mars_frontpage' , array(
    'title'      => 'Front Page Options',
    'priority'   => 30,
  ) );
  

  // Create hero image upload form control.
  $wp_customize->add_setting( 'hero_image' , array(
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'logo',
           array(
               'label'      => __( 'Please choose a hero image.', 'mars' ),
               'section'    => 'mars_frontpage',
               'settings'   => 'hero_image',
           )
       )
   );

  // Create hero text heading field.
  $wp_customize->add_setting( 'hero_image_heading' , array(
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'hero_image_heading', array(
      'label' => 'Hero Image Heading',
      'section' => 'mars_frontpage',
      'type'   => 'text',
  ) );

  // Create hero descrption field.
  $wp_customize->add_setting( 'hero_image_description' , array(
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'hero_image_description', array(
      'label' => 'Hero Image Description (HTML allowed)',
      'section' => 'mars_frontpage',
      'type'   => 'textarea',
  ) );

  // Pass to customizer.js for real-time updates during theme customization.
  $wp_customize->get_setting( 'hero_image_description' )->transport = 'postMessage';
  $wp_customize->get_setting( 'hero_image_heading' )->transport = 'postMessage';
  $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
  $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

}

add_action( 'customize_preview_init', 'mars_customizer' );
/**
 * Include customizer.js to be used during theme customization.
 *
 */
function mars_customizer() {
  wp_enqueue_script(
      'mars_customizer',
      get_template_directory_uri() . '/inc/customizer.js',
      array( 'jquery','customize-preview' ),
      '',
      true
  );
}
