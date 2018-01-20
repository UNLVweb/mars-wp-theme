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

     <div class="row">
        <div class="col-sm-12">
          <ol class="breadcrumb">
            <li><a href="/"><?php echo get_bloginfo( 'name' ); ?></a></li>
            <li>Home</li>
          </ol>
        </div>
      </div>
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

            <section class="marquee" style="background-image:url('<?php echo THEME_IMG_PATH; ?>/hero-placeholder.JPG')" /> <!-- dynamic image pull -->
              <div class="overlay"></div>
              <div class="marquee-text">
                <h2>[dynamic hero title]</h2>
                <p>[dynamic hero caption]</p>
              </div>
            </section>
            <section class="bg-white">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <h3>[dynamic section title]</h3>
                    <p>[dynamic section paragraph]</p>
                  </div>
                </div>
              </div>
            </section>
            <section class="bg-blue">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <h3>[dynamic section title]</h3>
                    <p>[dynamic section paragraph]</p>
                  </div>
                </div>
              </div>
            </section>

          </section>  <!-- /.block-system-main -->
        </div> <!-- /.region-content -->
      </div> <!-- /#content-main-->
    </div> <!--end #content-->

<?php get_footer(); ?>
