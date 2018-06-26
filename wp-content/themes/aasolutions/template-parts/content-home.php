<?php
/**
 * Template part for home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aasolutions
 */

?>

<div class="hero container-fluid">
	<div class="carousel">
		<div class="carousel-inner">
			<div class="carousel-caption">
				<h1><?php the_field("hero_text"); ?></h1>
            </div>
			<div class="carousel-item active">
				<img class="img-fluid d-block" src='<?php the_field("hero_image"); ?>' >
			</div>
		</div>
	</div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="container">
	<div class="pt-5 py-5 row text-center">
		<img class="h-center" src="<?php the_field('optional_home_image'); ?>" />
	</div>

	<div class="row">
		<div class="container">
			<div class="entry-content">
				<?php
				the_field('second_section');
				?>
			</div><!-- .entry-content -->
		</div>
	</div>

	<?php 
	$scontent = get_field('show_services_thumbnails');
	if ( $scontent == 'yes' ) : ?>

		<div class="row pt-4 py-5">  
			<?php
				$gpost = get_posts(array (
					'post_type'		=>	'services',
					'post_status'	=>	'publish',
					'orderby'		=>	'menu_order',
					'order'			=>	'ASC'
				)	);

				foreach ( $gpost as $slist ) { 
					$pID = $slist->ID;
					?>
						<div class="col-lg-4 col-md-4 col-sm-12 text-center service-thumb">
							<a href="<?php the_permalink($pID); ?>">
								<div class="img-placeholder"><?php echo get_the_post_thumbnail($pID); ?></div>
								<h3><?php echo $slist->post_title; ?></h3>
								<p><?php echo $slist->post_excerpt; ?></p>
							</a>
						</div>
					<?php
				};
			?>
		</div> 

	<?php endif;

	?>

	

</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'aasolutions' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
