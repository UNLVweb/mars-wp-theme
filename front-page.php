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

// Custom Fields
$test_page_title      = get_post_meta( 2, 'test_page_title', true );
$test_page_paragraph  = get_post_meta( 2, 'test_page_paragraph', true);
$test_card_title      = get_post_meta( 2, 'test_card_title', true);
$test_card_paragraph  = get_post_meta( 2, 'test_card_paragraph', true);

get_header(); ?>

     <div class="row">
        <div class="col-sm-12">
          <ol class="breadcrumb">
            <li><a href="/"><?php echo get_bloginfo( 'name' ); ?></a></li>
            <li>Page Title</li>
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

            <section class="bg-gray">
              <div class="container">
                <div class="row">

                  <div class="col-sm-8">
                    <h2><?php echo $test_page_title ?></h2>
                    <p><?php echo $test_page_paragraph ?></p>
                    <div class="card card-block">
                    <div class="card-title"><h3><?php echo $test_card_title; ?></h3></div>
                      <p><?php echo $test_card_paragraph; ?></p>
                    </div>
                    <?php if ( have_posts() ) : ?>
                      <?php
                      // Start the loop.
                      while ( have_posts() ) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );

                      // End the loop.
                      endwhile;

                      // Previous/next page navigation.
                      the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'twentysixteen' ),
                        'next_text'          => __( 'Next page', 'twentysixteen' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
                      ) );

                      // If no content, include the "No posts found" template.
                      else :
                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                  </div> <!-- /.col -->

                  <div class="col-sm-4">
                    <div class="card card-block">
                    <?php get_sidebar(); ?>
                    </div>
                  </div>
                </div> <!-- /.row -->
              </div>
            </section>

          </section>  <!-- /.block-system-main -->
        </div> <!-- /.region-content -->
      </div> <!-- /#content-main-->
    </div> <!--end #content-->

<?php get_footer(); ?>
