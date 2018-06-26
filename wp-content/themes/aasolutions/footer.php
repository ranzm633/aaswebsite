<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aasolutions
 */

?>

	</div><!-- #content -->

<div class="cta-section">
	<div class="container-fluid">
		<div class="row pt-5 py-5">
			<div class="col-lg col-md col-sm-12 text-right b-margin-y media-r">
				<h1><?php echo get_option( 'cta_label', '' ); ?></h1>
			</div>
			<div class="col-lg col-md col-sm-12 text-center media-r">
				<a class="btn cs-btn" href="<?php echo get_option( 'cta_link', '' ); ?>">Contact Us</a>
			</div>
		</div>
	</div>
</div>

	<div class="subfooter">
		<div class="container">
			
				<div class="pt-5 pb-5 row">
					<?php if ( is_active_sidebar( 'subfooter-1' ) ) : ?>
			    		<?php dynamic_sidebar( 'subfooter-1' ); ?>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'subfooter-2' ) ) : ?>
			    		<?php dynamic_sidebar( 'subfooter-2' ); ?>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'subfooter-3' ) ) : ?>
			    		<?php dynamic_sidebar( 'subfooter-3' ); ?>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'subfooter-4' ) ) : ?>
			    		<?php dynamic_sidebar( 'subfooter-4' ); ?>
					<?php endif; ?>
				</div>
			
		</div>
	</div>

	<footer id="colophon" class="site-footer text-white text-center">
		<div class="site-info center pt-4 py-4">
				<?php
				echo wpb_copyright();
				printf( esc_html__( 'Active Apps Solutions. All Rights Reserved.', 'aasolutions' ), 'aasolutions');
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
