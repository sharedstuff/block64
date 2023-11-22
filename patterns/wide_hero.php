<?php

/**
 * Title: wide_hero
 * Slug: block64/wide_hero
 * Categories: block64
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}},"className":"block64_pattern_wide_hero","layout":{"type":"constrained","contentSize":""},"metadata":{"name":"wide_hero"}} -->
<div class="wp-block-group alignwide block64_pattern_wide_hero" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)">

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:image {"align":"center","aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]},"className":"is-style-rounded"} -->
		<figure class="wp-block-image aligncenter size-full is-style-rounded">
			<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>" alt="" style="aspect-ratio:16/9;object-fit:cover" />
		</figure>
		<!-- /wp:image -->

		<!-- wp:heading -->
		<h2 class="wp-block-heading">Headline h2</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Paragraph: Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:buttons {"layout":{"type":"flex","orientation":"horizontal"}} -->
			<div class="wp-block-buttons">

				<!-- wp:button {"textAlign":"left","className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill">
					<a class="wp-block-button__link has-text-align-left wp-element-button">Button</a>
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
