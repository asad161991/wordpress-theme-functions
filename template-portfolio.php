<?php
/**
 *   Template Name: Portfolio Template 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package asadffg
 */

get_header(); ?>

	<div id="primary" class="content-area container custom-margin-area">
		<div id="main" class="site-main col-md-12">

			<?php
			$portfoli = new WP_QUERY(array('post_type' => 'portfolio'));
			if ( $portfoli->have_posts() ) :

			while ( $portfoli->have_posts() ) : $portfoli->the_post(); ?>
			<div class="col-md-4">
				<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail('full');
					  the_title();
					  the_excerpt();
				?>
				</a>
			</div>
				<?php endwhile;
				
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	
		</div><!-- #main -->
		 
	</div><!-- #primary -->

<?php
get_footer();
