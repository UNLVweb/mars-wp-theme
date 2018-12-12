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
                  <h2 class="clear-margin-bottom"><?php single_post_title(); ?></h2>
                </div>
              </section>

            <section class="bg-gray">
              <div class="container">
                <div class="row">

                  <div class="col-sm-8">
                    <?php
                    if ( dynamic_sidebar('before-widget-area') ) : else : endif;

                    // Start the loop.
                    while ( have_posts() ) : the_post();

                        the_content();  

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                          
                        endif;
                        
                        // Previous/next post navigation.
                        the_post_navigation( array(
                            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'mars' ) . '</span> ' .
                                '<span class="screen-reader-text">' . __( 'Next post:', 'mars' ) . '</span> ' .
                                '<span class="post-title">%title</span>',
                            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'mars' ) . '</span> ' .
                                '<span class="screen-reader-text">' . __( 'Previous post:', 'mars' ) . '</span> ' .
                                '<span class="post-title">%title</span>',
                        ) );
                        
                    // End the loop.
                    endwhile;

                    if ( dynamic_sidebar('after-widget-area') ) : else : endif;
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
