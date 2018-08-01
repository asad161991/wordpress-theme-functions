<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package malerejuvi
 */

?>

	</div><!-- #content -->
<!-- Sart Footer Section -->
<footer id="main-footer">
  <div class="container">
    <div class="row">
          <?php dynamic_sidebar( 'footer-sidebar' ); ?>
    </div>
  </div>
</footer>
<footer id="info">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="copy-right-left">
          <p>©2017 Male Rejuvi, Frankfort, Illinois</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-footer-social">
			 <?php
        wp_nav_menu( array(
          'menu_class' => 'footer-social',
          'theme_location' => 'footer-social-menu',
          'manu_id' => 'footer-social-menu'
        ));
        ?>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer Section -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
