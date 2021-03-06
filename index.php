<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template
 */

get_header();
?>

	<main id="main" class="st-joseph__main container">
		<div class="row">
			<div class="col-lg-8 order-2 order-lg-1">
				<?php 
					if ( have_posts() ) {
					/* Start the Loop */
						while ( have_posts() ) {
							the_post();
							get_template_part( 'template-parts/content' );
						}
						the_posts_navigation();
					} else {
						get_template_part( 'template-parts/content', 'none' );
					}
				?>
			</div>
			<div class="col-lg-4 order-1 order-lg-2 st-joseph__main-sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
?>