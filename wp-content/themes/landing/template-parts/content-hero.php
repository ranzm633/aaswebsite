<?php
/**
 * Template part for HERO Banner
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Landing
 */

?>

<div class="container-fluid hero">
	<div class="row">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<?php 
				$featured_img = get_the_post_thumbnail_url();
				if ( ! empty( $featured_img ) ) { ?>
					<img class="slide" src='<?php echo $featured_img; ?>' alt="Hero Image">
				<?php } else { ?>
					<img class="slide" src="<?php echo get_theme_file_uri('images/default.jpg'); ?>" alt="Hero Image">
				<?php } ?>
			    <div class="container">
			        <div class="carousel-caption text-left">
			            <h1>Example headline.</h1>
			                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
			        </div>
		        </div>
		    </div>
		</div>
	</div>
</div>

