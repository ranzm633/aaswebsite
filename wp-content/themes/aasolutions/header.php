<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aasolutions
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">
		<nav id="site-navigation" class="navbar-dark navbar-expand-md fixed-top navbar trans-dark">
			<div class="navbar-brand"><?php the_custom_logo(); ?></div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNav">
				<?php
				wp_nav_menu( array(
          'theme_location'    => 'menu-1',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'ml-auto top-navbar',
          'menu_class'        => 'nav nav-pills',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker()
				) );
				?>
			</div>
		</nav><!-- #site-navigation -->
    </div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
