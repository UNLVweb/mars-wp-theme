<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mars
 */
get_header(); ?>

    </div> <!-- /.system-container -->

    <div id="content" class="unlv-node-published">
      <div id="content-main" role="main" aria-label="main content">
        <div class="region region-content">
          <section id="block-system-main" class="block block-system clearfix clear-padding">
            <div class="content-area-start"></div>

            <?php if ( is_home() && ! is_front_page() ) : ?>
              <section>
                <div class="container">
                  <h2 class="clear-margin-bottom"><?php single_post_title(); ?></h2>
                </div>
              </section>
            <?php endif; ?>

            <?php
            if (get_theme_mod( 'hero_toggle_display', 'show' ) == 'show') {
              ?>
              <section class="hero" id="hero-image">
                <?php
                if (get_theme_mod( 'hero_image' ))
                  $hero_image_path = get_theme_mod( 'hero_image');
                else
                  $hero_image_path = get_template_directory_uri() . '/assets/images/D65847_18.jpg';

                if (get_theme_mod( 'hero_image_alt' ))
                  $hero_image_alt = htmlspecialchars( get_theme_mod( 'hero_image_alt') );
                else
                  $hero_image_alt = 'Hero image.';

                  echo '<img src="' . $hero_image_path . '" alt="' . $hero_image_alt . '"/>';
                ?>

                <div class="overlay"></div>
                  <div class="hero-text">
                    <div class="hero-text-inner">
                      <?php
                      if (get_theme_mod( 'hero_image_heading' ))
                        $hero_image_heading = htmlspecialchars(get_theme_mod( 'hero_image_heading'));
                      else
                        $hero_image_heading = 'Life at UNLV: Something for Everyone';

                      if (get_theme_mod( 'hero_image_description' ))
                        $hero_image_description = get_theme_mod( 'hero_image_description' );
                        else
                        $hero_image_description = "We don't separate life and education. At UNLV living is learning.";
                      ?>
                        <h2 id="hero-heading"><?php echo $hero_image_heading; ?></h2>
                        <p id="hero-description"><?php echo $hero_image_description; ?></p>
                    </div>
                  </div>
              </section>
              <?php
            }
            ?>

            <?php
            if (get_theme_mod( 'section_one_toggle_display', 'show' ) == 'show') {

              if (get_theme_mod( 'section_one_card_heading' ))
                $section_one_card_heading = get_theme_mod( 'section_one_card_heading' );
              else
                $section_one_card_heading = 'Welcome';

              if (get_theme_mod( 'section_one_card_text' ))
                $section_one_card_text = get_theme_mod( 'section_one_card_text' );
              else
                $section_one_card_text = '<p>Praesent porttitor velit id venenatis sollicitudin. Nullam id mollis elit, at mollis eros. Sed non interdum quam, non sollicitudin justo. Maecenas porta arcu nec elit malesuada ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                    <p>Vestibulum accumsan tortor et imperdiet dictum. Proin lacus libero, varius eget gravida eget, dapibus eu nunc.</p>
                      <p class="clear-margin-bottom"><a class="btn btn-primary" role="button" href="#">Button</a></p>';      
                      
              if (get_theme_mod( 'section_one_right_column_text' ))
                $section_one_right_column_text = get_theme_mod( 'section_one_right_column_text' );
              else
                $section_one_right_column_text = '<p>Nunc tortor ante, volutpat ut eros non, porta porttitor orci. Pellentesque lectus turpis, auctor at faucibus gravida, semper ac arcu.</p>
                    <ul>
                      <li>Nullam bibendum nunc lobortis ante gravida euismod.</li>
                      <li>Nullam condimentum mi sit amet pellentesque molestie.</li>
                      <li>Fusce pellentesque nunc eget scelerisque bibendum.</li>
                      <li>Fusce accumsan ipsum vel erat commodo feugiat.</li>
                      <li>Cras nec nunc in est finibus pulvinar.</li>
                    </ul>';   
              ?>
              <section class="bg-white" id="section-one">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="offset-top card card-block bg-gray">
                      <div class="card-title">
                        <h3 class="clear-margin-top" id="card-heading"><?php echo $section_one_card_heading; ?></h3>
                      </div>
                        <div class="card-text" id="card-description">
                          <?php echo $section_one_card_text; ?>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-6" id="section-one-content">
                    <?php echo $section_one_right_column_text; ?>
                  </div>
                </div>
              </div>
              </section> <!--/#section -->
              <?php
            }
            ?>
            <?php
            if (get_theme_mod( 'section_two_toggle_display', 'show' ) == 'show') {
              ?>            
              <section class="bg-tan" id="section-two">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-5">
                      <?php
                      if (get_theme_mod( 'section_two_image' ))
                        $section_two_image = get_theme_mod( 'section_two_image');
                      else
                        $section_two_image = get_template_directory_uri() . '/assets/images/D67387_23-1.jpg';

                      if (get_theme_mod( 'section_two_image_alt' ))
                        $section_two_image_alt = htmlspecialchars( get_theme_mod( 'section_two_image_alt') );
                      else
                        $section_two_image_alt = 'Supplementary Image.';

                      if (get_theme_mod( 'section_two_image_caption' ))
                        $section_two_image_caption = get_theme_mod( 'section_two_image_caption');
                      else
                        $section_two_image_caption = 'Image Caption.';


                      if (get_theme_mod( 'section_two_right_column_text' ))
                        $section_two_right_column_text = get_theme_mod( 'section_two_image_alt');
                      else
                        $section_two_right_column_text = '<h3 class="clear-margin-top">Header Title</h3>
                      <p>Praesent porttitor velit id venenatis sollicitudin. Nullam id mollis elit, at mollis eros. Sed non interdum quam, non sollicitudin justo. Maecenas porta arcu nec elit malesuada ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>';
                      ?>                    
                    <figure>
                      <?php echo '<img src="' . $section_two_image . '" alt="' . $section_two_image_alt . '" class="img-responsive"/>'; ?>
                      <figcaption id="section-two-img-caption"><?php echo $section_two_image_caption; ?></figcaption>
                    </figure>
                    </div>
                    <div class="col-sm-7" id="section-two-right-col">
                      <?php echo $section_two_right_column_text; ?>
                    </div> <!-- /.col -->
                  </div> <!-- /.row -->
                </div>
              </section>
              <?php
            }

            // Display custom HTML.
            if ( get_theme_mod( 'frontpage_advanced_content', true ) ) {
              ?>
              <div id="front-page-custom-content">
                <?php echo get_theme_mod( 'frontpage_advanced_content', '' ); ?>
              </div>
              <?php
            }
            ?>
          </section>  <!-- /.block-system-main -->
        </div> <!-- /.region-content -->
      </div> <!-- /#content-main-->
    </div> <!--end #content-->

<?php get_footer(); ?>
