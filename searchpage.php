<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package template
 * 
 * Template Name: Search Page
 * 
 */

get_header();
?>

<div class="st-joseph__main">
<main id="main" class="container py-5">
	<div class="row">
		<div class="col-12">

			<h1>Search</h1>
			<p>Search for something on the St. Joseph Website:</p>

			<?php get_search_form(); ?>

		</div>
	</div>
</main><!-- #main -->
</div>


<?php

get_footer();
?>
