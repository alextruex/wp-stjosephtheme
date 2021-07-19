<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body>
	<div class="st-joseph__header">
		
			<header class="blog-header">

				<div class="st-joseph__header-topbar">
					<div class="container">
					    --     43-19 30th Ave, Astoria NY 11103     --     718-278-1611     --    
					</div>
				</div>


				<div class="row st-joseph__header-banner">
					<div class="st-joseph__header-banner-container container">
					<div class="logo-wrapper">
							<?php
								if ( function_exists( 'the_custom_logo' ) ) {
									the_custom_logo();
								}
							?>
						</div>
					</div>
				</div>

				<nav id="site-navigation" class="navbar navbar-expand-lg">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<!--button class="" aria-controls="primary-menu" aria-expanded="false" php esc_html_e( 'Primary Menu', 'template' ); ?></button-->
							<div class="container">
					<?php
						wp_nav_menu(array(
							'theme_location'	=> 'primary',
							'menu'				=> 2,
							'depth'				=> 2,
							'container'			=> 'div',
							'container_class'	=> 'collapse navbar-collapse',
							'container_id'		=> 'bs-example-navbar-collapse-1',
							'menu_class'		=> 'navbar-nav',
							'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
							'items_wrap'		=> '<ul id="%1$s" class="%2$s m-2">%3$s</ul>',
							'walker'			=> new WP_Bootstrap_Navwalker()
						));
					?>
	</div>
				</nav><!-- #site-navigation -->
			</header>

	</div>