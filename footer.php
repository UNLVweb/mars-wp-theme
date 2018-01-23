<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package mars
 */
?>

    <footer id="footer" role="contentinfo">
      <div class="region region-footer">
        <section class="block block-block clearfix">
          <nav arial-label="footer links and copyright">
            <div class="container">
              <div class="row">
                <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'footer-menu',
                    'fallback_cb'    => 'mars_default_footer_menu'
                  )
                );
                ?>
              </div><!--/.row-->
            </div><!--/.container-->
          </nav>
        </section>
      </div>
    </footer>

    <div id="modal-menu-overlay"></div>

    <?php wp_footer(); ?>

  </body>
</html>
