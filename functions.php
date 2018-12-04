<?php
/**
 * mars functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mars
 */


/**
 * Appearance customizer.
 */
include('inc/customizer.php');


/**
 * Registers menus
 *
 * @link https://codex.wordpress.org/Navigation_Menus
 */
function mars_register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'secondary-menu' => __( 'Secondary Menu' ),
/*
      'footer-menu' => __( 'Footer Menu' ),
      'topic-menu' => __( 'Topics Menu (Advanced Users)' ),
      'audience-menu' => __( 'Audiences Menu (Advanced Users)' ),
*/
    )
  );
}
add_action( 'init', 'mars_register_menus' );


/**
 * Sets default values for theme for the display toggles.
 *
 */
function mars_set_theme_mods() {

  // @debug
  // Clear theme mod variables.
  /*
  remove_theme_mod ( 'hero_toggle_display' );
  remove_theme_mod ( 'hero_image' );
  remove_theme_mod ( 'hero_image_heading' );
  remove_theme_mod ( 'hero_image_alt' );
  remove_theme_mod ( 'hero_image_description' );

  remove_theme_mod ( 'section_one_toggle_display' );
  remove_theme_mod ( 'section_one_card_heading' );
  remove_theme_mod ( 'section_one_card_text' );
  remove_theme_mod ( 'section_one_right_column_text' );

  remove_theme_mod ( 'section_two_toggle_display' );
  remove_theme_mod ( 'section_two_right_column_text' );
  remove_theme_mod ( 'section_two_image' );
  remove_theme_mod ( 'section_two_image_caption' );
  remove_theme_mod ( 'section_two_image_alt' );
  remove_theme_mod ( 'section_two_right_column_text' );

  remove_theme_mod ( 'frontpage_advanced_content' );

  echo '<pre>';
    print_r(get_theme_mods());
  echo '</pre>';
  */

  $theme_mods = get_theme_mods();

  // Hero Image Defaults
  // ##############################################

  // If hero toggle not set, set it to "show".
  if ( !isset( $theme_mods['hero_toggle_display'] ) )
      set_theme_mod ( 'hero_toggle_display', 'show' );

  // Set default image for hero image if no image is provided.
  if ( !isset( $theme_mods['hero_image']) )
      set_theme_mod ( 'hero_image', get_template_directory_uri() . '/assets/images/D65847_18.jpg' );

  // If hero_image_heading not set, set it to default value.
  if ( !isset( $theme_mods['hero_image_heading'] ) )
      set_theme_mod ( 'hero_image_heading', 'Life at UNLV: Something for Everyone' );

  // If hero_image_heading not set, set it to default value.
  if ( !isset( $theme_mods['hero_image_alt'] ) )
      set_theme_mod ( 'hero_image_alt', 'Night time shot of Lied Library, with Las Vegas Strip in background.' );

  // If hero_image_description not set, set it to default value.
  if ( !isset( $theme_mods['hero_image_description'] ) )
      set_theme_mod ( 'hero_image_description', 'We don\'t separate life and education. At UNLV living is learning.' );

  // Section One Defaults
  // ##############################################

  // If section_one_toggle_display not set, set it to "show".
  if ( !isset( $theme_mods['section_one_toggle_display'] ) )
      set_theme_mod ( 'section_one_toggle_display', 'show' );

  // If section_one_card_heading not set, set it to default value.
  if ( !isset( $theme_mods['section_one_card_heading'] ) )
      set_theme_mod ( 'section_one_card_heading', 'Welcome' );

  // If section_one_card_text not set, set it to default value.
  if ( !isset( $theme_mods['section_one_card_text'] ) )
      set_theme_mod ( 'section_one_card_text', '<p>Praesent porttitor velit id venenatis sollicitudin. Nullam id mollis elit, at mollis eros. Sed non interdum quam, non sollicitudin justo. Maecenas porta arcu nec elit malesuada ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                    <p>Vestibulum accumsan tortor et imperdiet dictum. Proin lacus libero, varius eget gravida eget, dapibus eu nunc.</p>
                      <p class="clear-margin-bottom"><a class="btn btn-primary" role="button" href="#">Button</a></p>' );

  // If section_one_right_column_text not set, set it to default value.
  if ( !isset( $theme_mods['section_one_right_column_text'] ) )
      set_theme_mod ( 'section_one_right_column_text', '<p>Nunc tortor ante, volutpat ut eros non, porta porttitor orci. Pellentesque lectus turpis, auctor at faucibus gravida, semper ac arcu.</p>
                    <ul>
                      <li>Nullam bibendum nunc lobortis ante gravida euismod.</li>
                      <li>Nullam condimentum mi sit amet pellentesque molestie.</li>
                      <li>Fusce pellentesque nunc eget scelerisque bibendum.</li>
                      <li>Fusce accumsan ipsum vel erat commodo feugiat.</li>
                      <li>Cras nec nunc in est finibus pulvinar.</li>
                    </ul>' );

  // Section Two Defaults
  // ##############################################

  // If section_one_toggle_display not set, set it to "show".
  if ( !isset( $theme_mods['section_two_toggle_display'] ) )
      set_theme_mod ( 'section_two_toggle_display', 'show' );

  // Image default.
  if ( !isset( $theme_mods['section_two_image'] ) )
      set_theme_mod ( 'section_two_image', get_template_directory_uri() . '/assets/images/D67387_23-1.jpg' );

  // Image default alt attribute.
  if ( !isset( $theme_mods['section_two_image_alt'] ) )
      set_theme_mod ( 'section_two_image_alt', 'Close-up, day-time shot of cube shaped U N L V sign.' );

  // Default image caption.
  if ( !isset( $theme_mods['section_two_image_caption'] ) )
      set_theme_mod ( 'section_two_image_caption', 'Welcome to our campus!' );

  // If section_two_right_column_text not set, set it to default value.
  if ( !isset( $theme_mods['section_two_right_column_text'] ) )
      set_theme_mod ( 'section_two_right_column_text', '<h3 class="clear-margin-top">Header Title</h3>
                      <p>Praesent porttitor velit id venenatis sollicitudin. Nullam id mollis elit, at mollis eros. Sed non interdum quam, non sollicitudin justo. Maecenas porta arcu nec elit malesuada ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>' );

  // Section Two Defaults
  // ##############################################

  // Set to blank string.
  if ( !isset( $theme_mods['frontpage_advanced_content'] ) )
      set_theme_mod ( 'frontpage_advanced_content', '' );
  /*
  echo '<pre>';
    print_r(get_theme_mods());
  echo '</pre>';
  */
}

add_action( 'init', 'mars_set_theme_mods' );


/**
 * Removes WordPress Header margin-top when logged in
 *
 */
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


/**
 * Default Topics menu in header.
 *
 */
function mars_default_topic_menu() {
  $html = '<a class="btn btn-default dropdown-toggle" role="button" id="topic-dropdown" data-toggle="dropdown" aria-haspopup="true" tabindex="6">Topics <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right" role="navigation" aria-label="topics dropdown">
                    <li class="menu-13004 first"><a href="https://www.unlv.edu/about" title="About">About</a></li>
                    <li class="menu-13005"><a href="https://www.unlv.edu/academics" title="Academics">Academics</a></li>
                    <li class="menu-13032"><a href="https://www.unlv.edu/apply" title="Admissions">Admissions</a></li>
                    <li class="menu-13033"><a href="https://www.unlv.edu/athletics" title="Athletics">Athletics</a></li>
                    <li class="menu-13006"><a href="https://www.unlv.edu/campuslife" title="Campus Life">Campus Life</a></li>
                    <li class="menu-13031 last"><a href="https://www.unlv.edu/about-research" title="Research">Research</a></li>
                  </ul>  ';
  echo $html;
} // end mars_default_topic_menu

/**
 * Default Audiences menu in header.
 *
 */
function mars_default_audience_menu() {
  $html = '<a class="btn btn-default dropdown-toggle" role="button" id="audience-dropdown" data-toggle="dropdown" aria-haspopup="true" tabindex="7 ">Audiences <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right" role="navigation" aria-label="audiences dropdown">
                    <li class="menu-13034 first"><a href="https://www.unlv.edu/students" title="Students">Students</a></li>
                    <li class="menu-13035"><a href="https://www.unlv.edu/facultystaff" title="Faculty/Staff">Faculty/Staff</a></li>
                    <li class="menu-13036"><a href="https://www.unlv.edu/alumni" title="Alumni">Alumni</a></li>
                    <li class="menu-13037"><a href="https://www.unlv.edu/donors" title="Donors">Donors</a></li>
                    <li class="menu-13038 last"><a href="https://www.unlv.edu/community" title="Community">Community</a></li>
                  </ul>';
  echo $html;
} // end mars_default_audience_menu

/**
 * Provides a default menu featuring the 'Home' link, if not other menu has been provided.
 * Also, will list any pages currently in the system.
 * Does not currently support generating submenus.
 *
 */
function mars_default_menu() {
  $wp_pages = get_pages(
    array(
      'post_type' => 'page',
      'sort_column' => 'menu_order'
    )
  );
  $html = '<ul class="menu-sections">';
    $html .= '<li>';
      $html .= '<a href="' . esc_url( home_url() ) . '" title="' . __( 'Home', 'mars' ) . '">';
        $html .= __( 'Home', 'mars' );
      $html .= '</a>';
    $html .= '</li>';

    if (!empty($wp_pages)) {
      foreach ($wp_pages as $page) {
        $post_title = $page->post_title;
        $post_url  = get_permalink($page->ID);
        $html .= '<li>';
        $html .= '<a href="' . esc_url( $post_url ) . '" title="' . __( $post_title, 'mars' ) . '">';
          $html .= __( $post_title, 'mars' );
        $html .= '</a>';
        $html .= '</li>';
      }
    }

  $html .= '</ul>';
  echo $html;
} // end mars_default_menu

/**
 * Default footer
 *
 */
function mars_default_footer_menu() {

  echo $html = '<div class="col-sm-4">
                  <ul class="list-unstyled">
                    <li><a href="https://www.unlv.edu/60">60th Anniversary</a></li>
                    <li><a href="https://www.unlv.edu/about/statements-compliance" title="Compliance">Compliance</a></li>
                    <li><a href="https://www.unlv.edu/diversity" title="Diversity">Diversity</a></li>
                    <li><a href="https://www.unlv.edu/toptier" title="Top Tier">Top Tier</a></li>
                    <li><a href="https://www.unlv.edu/news" title="News Center">News Center</a></li>
                  </ul>
                </div><!--/.col-sm-4-->

                <div class="col-sm-4">
                  <ul class="list-unstyled">
                    <li><a href="https://www.unlv.edu/campuslife/our-campus" title="Visit UNLV">Visit UNLV</a></li>
                    <li><a href="https://www.unlv.edu/jobs" title="Employment">Employment</a></li>
                    <li><a href="https://www.unlv.edu/maps" title="Campus Maps">Campus Maps</a></li>
                    <li><a href="https://www.unlv.edu/parking" title="Parking Information">Parking Information</a></li>
                    <li><a href="https://www.unlv.edu/safety" title="Safety and Emergency">Safety and Emergency</a></li>
                  </ul>
                </div><!--/.col-sm-4-->

                <div class="col-sm-4">
                  <ul class="list-unstyled">
                    <li><a href="https://www.unlv.edu/directories/contact" title="Contact UNLV">Contact UNLV</a></li>
                    <li><address><a href="https://www.unlv.edu/maps/campus" title="View Campus Map">University of Nevada, Las Vegas<br>
                    4505 S. Maryland Pkwy.<br>
                    Las Vegas, NV 89154</a></address></li>
                    <li><a href="tel:+17028953011" title="Phone">Phone: 702-895-3011</a></li>
                    <li><a href="https://www.unlv.edu/info">Campus Notifications</a></li>
                  </ul>
                </div><!--/.col-sm-4-->

                <div class="col-xs-12 text-center">
                  <div class="row produced-copy">
                    <div class="col-sm-4 text-sm-left text-xs-center">
                      Produced by <a href="https://www.unlv.edu/web">UNLV Web &amp; Digital Strategy</a>
                    </div><!--/.col-sm-4-->
                    <div class="col-sm-4 text-xs-center">
                      <ul class="list-inline">
                        <li><a href="https://www.unlv.edu/about/copyright">© ' . date('Y') . ' UNLV</a></li>
                      </ul>
                    </div><!--/.col-sm-4-->
                    <div class="col-sm-4 text-sm-right text-xs-center social-media-links">
                      <a href="https://www.facebook.com/OfficialUNLV" title="Find us on Facebook" aria-label="Find us on Facebook"><span class="sm-footer-facebook"></span></a> <a href="https://www.instagram.com/unlv/" title="Follow us on Twitter" aria-label="Follow us on Twitter"><span class="sm-footer-instagram"></span></a> <a href="https://twitter.com/UNLV" title="Find us on Instagram" aria-label="Find us on Instagram"><span class="sm-footer-twitter"></span></a> <a href="https://www.youtube.com/user/UNLV" title="Watch us on YouTube" aria-label="Watch us on YouTube"><span class="sm-footer-youtube"></span></a>
                    </div><!--/.col-sm-4-->
                  </div><!--/.row-->
                </div><!--/.col-xs-12-->';

} // end mars_default_footer_menu

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function mars_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'mars' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="card-title">',
        'after_title'   => '</h4>',
    ) );
    // TODO: Figure out if this widget area is still needed.
    register_sidebar( array(
        'name'          => __( 'Find', 'mars' ),
        'id'            => 'find',
    ) );

    register_sidebar( array(
      'name'            => __( 'Before Content Widget Area' ),
      'id'              => 'before-widget-area',
      'before_widget'   => '<div class="col-sm-12">',
      'after_widget'    => '</div>'
    ));

    register_sidebar( array(
      'name'            => __( 'After Content Widget Area' ),
      'id'              => 'after-widget-area',
      'before_widget'   => '<div class="col-sm-12">',
      'after_widget'    => '</div>' 
    ));
}

add_action( 'widgets_init', 'mars_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mars_scripts() {

  $version = '?v=1.2';

  wp_enqueue_style( 'mars-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );
  wp_enqueue_style( 'mars-google-font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700|Roboto+Condensed:400,100,300,700|Roboto+Mono|Roboto+Slab:400,100,300,400,700' );
  wp_enqueue_style( 'mars-font-awesome-4', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'mars-style', get_stylesheet_uri() );
  wp_enqueue_style( 'mars-bootstrap-4-alpha', get_template_directory_uri() . '/assets/css/bootstrap-4-alpha.css' . $version );
  wp_enqueue_style( 'mars-base', get_template_directory_uri() . '/assets/css/base.css' . $version );
  wp_enqueue_style( 'mars-layout', get_template_directory_uri() . '/assets/css/layout.css' . $version );
  wp_enqueue_style( 'mars-content', get_template_directory_uri() . '/assets/css/content.css' . $version );
  wp_enqueue_style( 'mars-in-page-menu', get_template_directory_uri() . '/assets/css/in-page-menu.css' . $version );

}

add_action( 'wp_enqueue_scripts', 'mars_scripts' );

// Add scripts to wp_footer()
function mars_footer_script() {

  $version = '?v=1.3';

  wp_enqueue_script( 'mars-jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js' . $version );
  wp_enqueue_script( 'mars-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js' . $version );
  wp_enqueue_style( 'mars-jquery-ui-css', '//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css' . $version );

  wp_enqueue_script( 'jquery-ui', '//code.jquery.com/ui/1.11.4/jquery-ui.js' . $version );
  wp_enqueue_script( 'mars-menu', get_template_directory_uri() . '/assets/js/menu.js' . $version );
  wp_enqueue_script( 'mars-ui', get_template_directory_uri() . '/assets/js/ui.js' . $version );


}
add_action( 'wp_footer', 'mars_footer_script' );

// Add specific CSS class by filter.
add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array(
      'html',
      'not-front',
      'not-logged-in',
      'no-sidebars',
      'node-type-secondary-page',
      'navbar-is-fixed-top',
    ));
} );

if ( !function_exists( 'mars_setup' ) ) {
    function mars_setup() {
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
    }
    add_action( 'after_setup_theme', 'mars_setup' );
}
