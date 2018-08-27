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
            <li><a href="<?php echo esc_url( home_url() ); ?>"><?php echo get_bloginfo( 'name' ); ?></a></li>
            <li><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div> <!-- /.system-container -->

    <div id="content" class="unlv-node-published">
      <div id="content-main" role="main" aria-label="main content">
        <div class="region region-content">
          <section id="block-system-main" class="block block-system clearfix clear-padding">
            <div class="content-area-start"></div>

              <section>
                <div class="container">
                  <?php the_title( '<h2 class="clear-margin-bottom">', '</h2>' ); ?>
                </div>
              </section>

            <section class="bg-gray">
              <div class="container">
                <div class="row">
                  <?php

                  // Set the default column size for the main column.
                  // If a menu is present, this will be the right column class.
                  $main_column_class = 'col-sm-12';

                  // Set the navigation menu properties.
                  // Set 'echo' to FALSE so it doesn't display by default.
                  $secondary_menu = wp_nav_menu(
                    array(
                      'theme_location' => 'secondary-menu',
                      'fallback_cb'    => FALSE,
                      'menu_class'     => 'menu-sections',
                      'echo'           => FALSE,
                    )
                  );

                  // If there is a secondary menu, then update right column classes and
                  // introduce a left column that will house the menu.
                  if ($secondary_menu) {
                    $main_column_class = 'col-sm-8 col-md-9';

                    // @todo
                    // Get the menu to style properly similar to the one located at:
                    // https://www.unlv.edu/about/policies
                    ?>
                    <div class="col-sm-4 col-md-3">
                      <?php echo $secondary_menu; ?>
                    </div>
                    <?php
                  }
                  ?>

                  <div class="<?php echo $main_column_class; ?>">              
                    <?php
                    while ( have_posts() ) : the_post();
                      get_template_part( 'template-parts/content', 'page' );
                      // If comments are open or we have at least one comment, load up the comment template.
                      if ( comments_open() || get_comments_number() ) :
                        comments_template();
                      endif;
                    endwhile; // End of the loop.
                    ?>
                  </div> <!-- /.col -->

                </div> <!-- /.row -->
              </div>
            </section>

          </section>  <!-- /.block-system-main -->   
        </div> <!-- /.region-content -->
      </div> <!-- /#content-main-->     
    </div> <!--end #content-->

<?php get_footer(); ?>
