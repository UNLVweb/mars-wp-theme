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
            if (get_theme_mod( 'hero_toggle_display' ) == 'show') {
              ?>
              <section class="hero" id="hero-image">
                <?php
                $hero_image_path = get_theme_mod( 'hero_image' );
                $hero_image_alt = htmlspecialchars( get_theme_mod( 'hero_image_alt') );

                echo '<img src="' . $hero_image_path . '" alt="' . $hero_image_alt . '"/>';
                ?>

                <div class="overlay"></div>
                  <div class="hero-text">
                    <div class="hero-text-inner">
                      <?php
                      if ( get_theme_mod( 'hero_image_heading' ) )
                        $hero_image_heading = htmlspecialchars(get_theme_mod( 'hero_image_heading'));
                      else
                        $hero_image_heading = '';

                      if ( get_theme_mod( 'hero_image_description' ) )
                        $hero_image_description = get_theme_mod( 'hero_image_description' );
                      else
                        $hero_image_description = '';
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
            if ( get_theme_mod( 'section_one_toggle_display' ) == 'show' ) {

              $section_one_card_heading = get_theme_mod( 'section_one_card_heading' );
              $section_one_card_text = get_theme_mod( 'section_one_card_text' );
              $section_one_right_column_text = get_theme_mod( 'section_one_right_column_text' );
 
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
            if (get_theme_mod( 'section_two_toggle_display' ) == 'show') {
              ?>            
              <section class="bg-tan" id="section-two">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-5">
                      <?php
                      $section_two_image = get_theme_mod( 'section_two_image');
                      $section_two_image_alt = htmlspecialchars( get_theme_mod( 'section_two_image_alt') );
                      $section_two_image_caption = get_theme_mod( 'section_two_image_caption');
                      $section_two_right_column_text = get_theme_mod( 'section_two_right_column_text' );
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
            ?>
            <div id="front-page-custom-content"><?php echo get_theme_mod( 'frontpage_advanced_content' ); ?></div>
          </section>  <!-- /.block-system-main -->
        </div> <!-- /.region-content -->
      </div> <!-- /#content-main-->
    </div> <!--end #content-->

<?php get_footer(); ?>
