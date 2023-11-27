<?php

/**
 * Title: wide_hero
 * Slug: block64/wide_hero
 * Categories: block64
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"className":"block64_pattern_wide_hero","layout":{"type":"default"},"metadata":{"name":"wide_hero"}} -->
<div class="wp-block-group alignfull block64_pattern_wide_hero" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">

		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|200","bottom":"var:preset|spacing|200"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--200);padding-bottom:var(--wp--preset--spacing--200)">

			<!-- wp:image {"align":"wide","sizeSlug":"full","linkDestination":"none","style":{"color":[]},"className":"is-style-rounded"} -->
			<figure class="wp-block-image alignwide size-full is-style-rounded">
				<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>" alt="" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|200"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--200)">

				<!-- wp:heading -->
				<h2 class="wp-block-heading">wide_hero Headline h2 MMMMMMMMMMMMMMMMMMMMMMMMMMMMMM</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Paragraph: Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
				<div class="wp-block-group alignwide">

					<!-- wp:buttons -->
					<div class="wp-block-buttons">

						<!-- wp:button -->
						<div class="wp-block-button">
							<a class="wp-block-button__link wp-element-button" href="#">Button</a>
						</div>
						<!-- /wp:button -->

					</div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
