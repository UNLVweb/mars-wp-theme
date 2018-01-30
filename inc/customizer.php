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

  // Create homepage panel.
  $wp_customize->add_panel( 'panel_front_page', array(
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => __('Theme Front Page Options', 'mars'),
      'description'    => __('Customize your homepage settings.', 'mars'),
  ) );

  // Create section Front Page options.
  $wp_customize->add_section( 'mars_frontpage_hero_image' , array(
    'title'      => 'Hero Image Settings',
    'priority'   => 30,
    'panel'  => 'panel_front_page',
  ) );

  // Create hero image display toggle.
  $wp_customize->add_setting( 'hero_toggle_display' , array(
        'default'     => 'show',
        'transport'   => 'refresh',
  ) );

    $wp_customize->add_control( 'hero_toggle_display', array(
        'label' => 'Toggle Hero Display',
        'section' => 'mars_frontpage_hero_image',
        'settings' => 'hero_toggle_display',
        'type' => 'radio',
        'choices' => array(
          'show' => 'Show',
          'hide' => 'Hide',
        ),
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
               'label'      => __( 'Hero Image', 'mars' ),
               'section'    => 'mars_frontpage_hero_image',
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
      'section' => 'mars_frontpage_hero_image',
      'type'   => 'text',
  ) );

  // Create hero description field.
  $wp_customize->add_setting( 'hero_image_description' , array(
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'hero_image_description', array(
      'label' => 'Hero Image Description (HTML allowed)',
      'section' => 'mars_frontpage_hero_image',
      'type'   => 'textarea',
  ) );

  // Create hero alt text field.
  $wp_customize->add_setting( 'hero_image_alt' , array(
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'hero_image_alt', array(
      'label' => 'Hero Image Alt Text',
      'section' => 'mars_frontpage_hero_image',
      'type'   => 'textarea',
  ) );

  // Create section for first section options.
  $wp_customize->add_section( 'mars_frontpage_section_one' , array(
    'title'      => 'Section One Options',
    'priority'   => 30,
    'panel'  => 'panel_front_page',
    'description'    => __('Manage the content in section one of the front page.', 'mars'),
  ) );

    $wp_customize->add_setting( 'section_one_toggle_display' , array(
        'default'     => 'show',
        'transport'   => 'refresh',
  ) );

    $wp_customize->add_control( 'section_one_toggle_display', array(
        'label' => 'Toggle Section Display',
        'section' => 'mars_frontpage_section_one',
        'settings' => 'section_one_toggle_display',
        'type' => 'radio',
        'choices' => array(
          'show' => 'Show',
          'hide' => 'Hide',
        ),
  ) );

  // Create card text heading field.
  $wp_customize->add_setting( 'section_one_card_heading' , array(
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'section_one_card_heading', array(
      'label' => 'Card Heading',
      'section' => 'mars_frontpage_section_one',
      'type'   => 'text',
  ) );

  // Create card text.
  $wp_customize->add_setting( 'section_one_card_text' , array(
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'section_one_card_text', array(
      'label' => 'Card Text (HTML Allowed)',
      'section' => 'mars_frontpage_section_one',
      'type'   => 'textarea',
  ) );

  // Right column text.
  $wp_customize->add_setting( 'section_one_right_column_text' , array(
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'section_one_right_column_text', array(
      'label' => 'Right Column Text (HTML Allowed)',
      'section' => 'mars_frontpage_section_one',
      'type'   => 'textarea',
  ) );

  // Create section for second section options.
  $wp_customize->add_section( 'mars_frontpage_section_two' , array(
    'title'      => 'Section Two Options',
    'priority'   => 30,
    'panel'  => 'panel_front_page',
    'description'    => __('Manage the content in section two of the front page.', 'mars'),
  ) );

    $wp_customize->add_setting( 'section_two_toggle_display' , array(
        'default'     => 'show',
        'transport'   => 'refresh',
  ) );

    $wp_customize->add_control( 'section_two_toggle_display', array(
        'label' => 'Toggle Section Display',
        'section' => 'mars_frontpage_section_two',
        'settings' => 'section_two_toggle_display',
        'type' => 'radio',
        'choices' => array(
          'show' => 'Show',
          'hide' => 'Hide',
        ),
  ) );

  // Create section two image upload form control.
  $wp_customize->add_setting( 'section_two_image' , array(
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'logo',
           array(
               'label'      => __( 'Section Image', 'mars' ),
               'section'    => 'mars_frontpage_section_two',
               'settings'   => 'section_two_image',
           )
       )
   );

  // Create second image caption text field.
  $wp_customize->add_setting( 'section_two_image_caption' , array(
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'section_two_image_caption', array(
      'label' => 'Section Image Caption Text',
      'section' => 'mars_frontpage_section_two',
      'type'   => 'textarea',
  ) );

  // Create second image alt text field.
  $wp_customize->add_setting( 'section_two_image_alt' , array(
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'section_two_image_alt', array(
      'label' => 'Section Image Alt Text',
      'section' => 'mars_frontpage_section_two',
      'type'   => 'textarea',
  ) );


  // Right column text.
  $wp_customize->add_setting( 'section_two_right_column_text' , array(
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'section_two_right_column_text', array(
      'label' => 'Right Column Text (HTML Allowed)',
      'section' => 'mars_frontpage_section_two',
      'type'   => 'textarea',
  ) );

 // Create section for advanced options.
  $wp_customize->add_section( 'mars_frontpage_advanced' , array(
    'title'      => 'Advanced Options',
    'priority'   => 30,
    'panel'  => 'panel_front_page',
    'description'    => __('Using HTML, create custom content for your front page. For a completely custom front page, you can hide section one, section two, and the hero image by setting their display option to "Hide".<br><br><strong>Output appears at the bottom of the page content.</strong>', 'mars'),
  ) );

    // Create second image caption text field.
  $wp_customize->add_setting( 'frontpage_advanced_content' , array(
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( 'frontpage_advanced_content', array(
      'label' => 'Custom Code (HTML Allowed)',
      'section' => 'mars_frontpage_advanced',
      'type'   => 'textarea',
  ) );


  // Pass to customizer.js for real-time updates during theme customization.

  // Hero image settings.
  $wp_customize->get_setting( 'hero_toggle_display' )->transport = 'postMessage';
  $wp_customize->get_setting( 'hero_image_description' )->transport = 'postMessage';
  $wp_customize->get_setting( 'hero_image_heading' )->transport = 'postMessage';

  // Section one settings.
  $wp_customize->get_setting( 'section_one_toggle_display' )->transport = 'postMessage';
  $wp_customize->get_setting( 'section_one_card_heading' )->transport = 'postMessage';
  $wp_customize->get_setting( 'section_one_card_text' )->transport = 'postMessage';
  $wp_customize->get_setting( 'section_one_right_column_text' )->transport = 'postMessage';

  // Section two settings.
  $wp_customize->get_setting( 'section_two_toggle_display' )->transport = 'postMessage';
  $wp_customize->get_setting( 'section_two_right_column_text' )->transport = 'postMessage';
  $wp_customize->get_setting( 'section_two_image_caption' )->transport = 'postMessage';

  // Advanced settings.
  $wp_customize->get_setting( 'frontpage_advanced_content' )->transport = 'postMessage';

  // Header settings.
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
