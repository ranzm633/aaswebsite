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
 * @package Landing
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->

		<!-- CTA #1 -->
		<div class="call-to-action">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-12 col-sm-12">
	            <div class="row">
	              	<h2 class="cta-title col-md-6">Get VIP Access When we Launch!</h2> 
	                <form class="col-md-6">
		              <div class="form-row">
		                <div class="col-12 col-md-9 mb-2 mb-md-0">
		                  <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
		                </div>
		                <div class="col-12 col-md-3">
		                  <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
		                </div>
		              </div>
		            </form>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>


	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
