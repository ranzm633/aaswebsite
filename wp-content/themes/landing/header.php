<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Landing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="navbar-brand"><?php the_custom_logo(); ?></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <?php
         wp_nav_menu( array(
         		'menu'				=> 'Menu 1',
                 'theme_location'    => 'Primary',
                 'container'         => '',
                 'menu_class'        => 'top-navbar',
                 'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	             'walker'            => new WP_Bootstrap_Navwalker(),
             )
         );
    ?>
  </div>
</nav>
	<div id="content" class="site-content">
