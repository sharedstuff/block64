<?php

/**
 * Title: testimonial
 * Slug: block64/testimonial
 * Categories: block64
 */
?>

<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast-2","textColor":"base","className":"block64_pattern_testimonial","layout":{"type":"default"},"metadata":{"name":"testimonal"}} -->
<div class="wp-block-group alignfull block64_pattern_testimonial has-base-color has-contrast-2-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|500","bottom":"var:preset|spacing|500","left":"var:preset|spacing|300","right":"var:preset|spacing|300"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--500);padding-right:var(--wp--preset--spacing--300);padding-bottom:var(--wp--preset--spacing--500);padding-left:var(--wp--preset--spacing--300)">

		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|200","bottom":"var:preset|spacing|200"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"layout":{"type":"default"},"fontSize":"xx-large","fontFamily":"league-spartan"} -->
		<div class="wp-block-group alignwide has-league-spartan-font-family has-xx-large-font-size" style="padding-top:var(--wp--preset--spacing--200);padding-bottom:var(--wp--preset--spacing--200);font-style:normal;font-weight:600">

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">"testimonial Paragraph: Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat"</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained","contentSize":"8rem"}} -->
		<div class="wp-block-group">

			<!-- wp:image {"id":493,"aspectRatio":"1","scale":"cover","sizeSlug":"medium","linkDestination":"none","style":{"border":{"radius":"100%"}}} -->
			<figure class="wp-block-image size-medium has-custom-border">
				<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>" alt="" class="wp-image-493" style="border-radius:100%;aspect-ratio:1;object-fit:cover" />
			</figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group">

			<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
			<p class="has-text-align-center has-large-font-size">Paragraph: John Doe</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"small"} -->
			<p class="has-text-align-center has-base-2-color has-text-color has-link-color has-small-font-size">Paragraph: Contoso Inc</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
