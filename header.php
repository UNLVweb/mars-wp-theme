<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "system-container" div.
 *
 * @package mars
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">
  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body class="html not-front not-logged-in no-sidebars node-type-secondary-page navbar-is-fixed-top">

    <div id="skip-link">
      <a href="#main-content" class="element-invisible element-focusable sr-only sr-only-focusable" tabindex="1">Skip to main content</a>
    </div>

    <header role="banner" aria-label="header">
      <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-top">
          <div class="container">
            <div class="row">
              <div class="unlv-name col-xs-5">
                <a href="/" tabindex="-1" role="presentation" aria-hidden="true">University of Nevada, Las Vegas</a>
              </div><!--end .unlv-name-->

              <div id="dropdown-container" class="col-xs-7">

                <div id="audience-dropdown-container" class="dropdown">
                  <?php
                  wp_nav_menu(
                    array(
                      'theme_location' => 'audience-menu',
                      'fallback_cb'    => 'mars_default_audience_menu'
                    )
                  );
                  ?>
                </div><!--end #audience-dropdown-container-->

                <div id="topic-dropdown-container" class="dropdown">
                  <?php
                  wp_nav_menu(
                    array(
                      'theme_location' => 'topic-menu',
                      'fallback_cb'    => 'mars_default_topic_menu'
                    )
                  );
                  ?>
                </div><!--end #topic-dropdown-container-->
              </div><!--end #dropdown-container-->

            </div><!--end .row-->
          </div><!--end .container-->
        </div><!--end .navbar-top-->

        <div class="navbar-bottom">
          <div class="container">
            <div class="row">
              <div class="menu-button-container">
                <a role="button" id="menu-button" href="#" tabindex="4" data-toggle="tooltip" data-placement="right" title="" data-original-title="Menu" onclick="void(0)">
                  <span class="sr-only" aria-label="open menu">Menu</span>
                </a>
              </div><!--end .menu-button-container-->

              <div class="unlv-logo-container">
                <h1 class="clear-margins clear-padding"><a class="transition" href="/" tabindex="2">U-N-L-V</a></h1>
              </div><!--end .unlv-logo-container-->

              <div class="website-title">
                <h1>
                  <a href="<?php echo esc_url( home_url() ); ?>" tabindex="3">
                    <span class="short-title"><?php echo get_bloginfo( 'description' ); ?></span>
                    <span class="full-title"><?php echo get_bloginfo( 'name' ); ?></span>
                  </a>
                </h1>
              </div><!--end .website-title-->

              <div class="search-button-container">
                <a role="button" class="search-button transition pull-right text-hide" href="#" id="search-button" tabindex="5" data-toggle="tooltip" data-placement="left" title="" data-original-title="Find" onclick="void(0)" aria-label="open find region">Find</a>
              </div><!--end .search-button-container-->

            </div><!--end .row-->
          </div><!--end .container-->
        </div><!--end .navbar-bottom-->
      </nav>
    </header>

    <div id="navigation" role="navigation" aria-label="Style Guide navigation">

      <div class="scroller" id="navigation-scroller" tabindex="-1">
        <div class="nav-close"><a href="#" id="menu-close">close Style Guide menu</a></div>
        <h2><?php echo get_bloginfo( 'description' ); ?></h2>
        <div class="region region-section-menu">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'header-menu',
              'fallback_cb'    => 'mars_default_menu'
            )
          );
          ?>
        </div>
      </div> <!--end .scroller-->
    </div> <!-- #navigation -->

    <div id="search" role="search">
      <div class="scroller" id="search-scroller" tabindex="-1">
        <div class="nav-close"><a href="#" id="search-close">close find region</a></div>
        <h2>Find</h2>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 padding-top-sm">
              <p>Search within this site.</p>
              <?php echo get_search_form(); ?>
            </div>
          </div>
        </div>
      </div><!--end .scroller-->
    </div><!--end #search-->

    <div class="system-container container">
