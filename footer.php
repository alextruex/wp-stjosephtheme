<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package template
 */

?>

<div class="st-joseph__footer">
	<div class="container">
		<footer id="colophon" class="blog-footer">
			<div class="secondary-menu">
				<?php
				wp_nav_menu(array(
					'theme_location'	=> 'secondary'
				));
				?>
			</div>
			<div class="site-info">
				<p>St. Joseph website version
					<?php
						$data = file_get_contents(__DIR__ . '/package.json');
						$json = json_decode($data, true);
						echo $json['version'];
					?>
				| Powered by Wordpress</p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div>
</div>

<?php wp_footer(); ?>

</div>
</body>

</html>