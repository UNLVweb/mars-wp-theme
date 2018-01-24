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
            <section class="hero">
              <img src="…" alt="">
              <div class="overlay"></div>
                <div class="hero-text">
                  <div class="hero-text-inner">
                    <h2>Life at UNLV: Something for Everyone</h2>
                      <p>We don't separate life and education. At UNLV living is learning. <a href="#">Read More</a></p>
                  </div>
                </div>
            </section>
            <section class="bg-white">
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card card-block bg-gray offset-top">
                    <div class="card-title"><h3 class="clear-margin-top">Lorem Ipsum Dolor Sit Amet</h3></div>
                      <div class="card-text">
                    <p>Praesent porttitor velit id venenatis sollicitudin. Nullam id mollis elit, at mollis eros. Sed non interdum quam, non sollicitudin justo. Maecenas porta arcu nec elit malesuada ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                    <p>Vestibulum accumsan tortor et imperdiet dictum. Proin lacus libero, varius eget gravida eget, dapibus eu nunc.</p>
                      <p class="clear-margin-bottom"><a class="btn btn-primary" role="button" href="#">Button</a></p></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <p>Nunc tortor ante, volutpat ut eros non, porta porttitor orci. Pellentesque lectus turpis, auctor at faucibus gravida, semper ac arcu.</p>
                  <ul>
                    <li>Nullam bibendum nunc lobortis ante gravida euismod.</li>
                    <li>Nullam condimentum mi sit amet pellentesque molestie.</li>
                    <li>Fusce pellentesque nunc eget scelerisque bibendum.</li>
                    <li>Fusce accumsan ipsum vel erat commodo feugiat.</li>
                    <li>Cras nec nunc in est finibus pulvinar.</li>
                  </ul>
                 </div>
              </div>
            </div>
            </section>
            <section class="bg-tan">
              <div class="container">
                <div class="row">
                  <div class="col-sm-5">
                  <figure><img src="http://www.unlv.edu/sites/default/files/styles/610_width/public/default_images/D67387_23-1.jpg?itok=FrlIx6Yd&timestamp=1438270618%201x" class="img-responsive" alt="...">
                    <figcaption>This is a caption for the image above</figcaption>
                  </figure>
                  </div>
                  <div class="col-sm-7">
                    <h3 class="clear-margin-top">Header Title</h3>
                    <p>Praesent porttitor velit id venenatis sollicitudin. Nullam id mollis elit, at mollis eros. Sed non interdum quam, non sollicitudin justo. Maecenas porta arcu nec elit malesuada ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                  </div> <!-- /.col -->
                </div> <!-- /.row -->
              </div>
            </section>

          </section>  <!-- /.block-system-main -->
        </div> <!-- /.region-content -->
      </div> <!-- /#content-main-->
    </div> <!--end #content-->

<?php get_footer(); ?>
