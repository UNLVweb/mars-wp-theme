<?php
/**
 * Twenty Seventeen: Mars
 *
 */

add_filter( 'gettext', 'mars_change_label_names');
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
function mars_customizer_settings( $wp_customize ) {

  $wp_customize->add_section( 'mars_colors' , array(
    'title'      => 'Colors',
    'priority'   => 30,
  ) );
  
  $wp_customize->add_setting( 'background_color' , array(
      'default'     => '#43C6E4',
      'transport'   => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
    'label'        => 'Background Color',
    'section'    => 'mars_colors',
    'settings'   => 'background_color',
  ) ) );

  $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
  $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

}

add_action( 'wp_head', 'cd_customizer_css');
function cd_customizer_css() {
    ?>
         <style type="text/css">
             body { background: #<?php echo get_theme_mod('background_color', '#43C6E4'); ?>; }
         </style>
    <?php
}

/*
add_action( 'customize_preview_init', 'mars_customizer' );
function mars_customizer() {
  wp_enqueue_script(
      'mars_customizer',
      get_template_directory_uri() . 'inc/customizer.js',
      array( 'jquery','customize-preview' ),
      '',
      true
  );

}
*/
