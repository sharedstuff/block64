<?php

/**
 * Title: wide_img-right
 * Slug: block64/wide_img-right
 * Categories: block64
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}},"className":"block64_pattern_wide_img-right","layout":{"type":"constrained"},"metadata":{"name":"wide_img-right"}} -->
<div class="wp-block-group alignwide block64_pattern_wide_img-right" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)">

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"verticalAlignment":"center","width":"68%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:68%">

			<!-- wp:heading {"align":"wide"} -->
			<h2 class="wp-block-heading alignwide">Headline h2</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Paragraph: Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">

				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button">Button</a>
				</div>
				<!-- /wp:button -->

			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"32%"} -->
		<div class="wp-block-column" style="flex-basis:32%">

			<!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"color":[]},"className":"is-style-rounded"} -->
			<figure class="wp-block-image aligncenter size-full is-style-rounded">
				<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>" alt="" />
			</figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
