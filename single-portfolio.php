<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package malerejuvi
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<div id="main" class="site-main col-md-9">
		<?php
		while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title() ?></h1>
			<div class="porfolio-thumb"><?php the_post_thumbnail() ?></div>
			<div class="porfolio-content"><?php the_content() ?></div>
		
		<?php

		endwhile; // End of the loop.
		?>

		</div><!-- #main -->
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
