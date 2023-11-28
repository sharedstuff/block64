<?php

/**
 * Title: cover-background
 * Slug: block64/cover-background
 * Categories: block64
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"className":"block64_pattern_cover-background","layout":{"type":"default"},"metadata":{"name":"cover-background"}} -->
<div class="wp-block-group alignfull block64_pattern_cover-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

	<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>","dimRatio":70,"style":{"color":[],"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim">
		</span>
		<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>" data-object-fit="cover" />
		<div class="wp-block-cover__inner-container">

			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|200","bottom":"var:preset|spacing|200"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--200);padding-bottom:var(--wp--preset--spacing--200)">

				<!-- wp:heading -->
				<h2 class="wp-block-heading">cover-background Headline h2 MMMMMMMMMMMMMMMMMMMMMMMMMMMMMM</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Paragraph: Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","orientation":"horizontal"}} -->
				<div class="wp-block-buttons">

					<!-- wp:button {"textAlign":"left","className":"is-style-fill"} -->
					<div class="wp-block-button is-style-fill">
						<a class="wp-block-button__link has-text-align-left wp-element-button" href="#">Button</a>
					</div>
					<!-- /wp:button -->

				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:group -->

		</div>
	</div>
	<!-- /wp:cover -->

</div>
<!-- /wp:group -->
