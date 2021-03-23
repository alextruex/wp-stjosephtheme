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

<div class="st-joseph__main">
	<main id="main" class="container py-5">
		<div class="row">
			<div class="col">
				<header class="entry-header">
					<h1 class="entry-title">Search results</h1>
				</header>
				<?php
				if (have_posts()) :

					if (is_home() && !is_front_page()) :
				?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
				<?php
					endif;

					/* Start the Loop */
					while (have_posts()) {
						the_post();
						get_template_part('template-parts/content-search');
					}

					the_posts_navigation();

				else :

					get_template_part('template-parts/content-search', 'none');

				endif;
				?>

			</div>
		</div>
	</main><!-- #main -->
</div>




<?php
get_footer();
?>