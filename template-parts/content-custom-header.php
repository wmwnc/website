<div class="site-banner-content banner-custom-header">

	<?php

	/**
	 * Media
	 */

	?>

	<div class="site-banner-media">
		<?php $header_image = get_header_image(); ?>
		<div class="site-banner-thumbnail" <?php if ( $header_image ) { echo 'style="background-image: url(' . esc_url( $header_image ) . ');"'; } ?>></div>
	</div>

	<?php

	/**
	 * Custom Header text
	 */
	$description = get_bloginfo( 'description', 'display' );
	if ( '' != $description || is_customize_preview() ) : ?>
		<div class="site-banner-header banner-description">
			<?php
			if ( function_exists( 'jetpack_the_site_logo' ) ) {
			  jetpack_the_site_logo();
			}
			?>
			<h1 class="entry-title site-description">
				<?php echo $description; /* WPCS: xss ok. */ ?>
			</h1>
			<div class="counter-container">
				<?php dynamic_sidebar( 'counter-bar' ); ?>
			</div><!-- .counter-container -->

		</div><!-- .site-banner-header -->
	<?php endif; ?>
</div><!-- .site-banner-content -->
