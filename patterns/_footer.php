<?php

/**
 * Title: footer
 * Slug: block64/footer
 * Categories: block64
 * Inserter: no
 */
?>

<?php $options = get_option('block64_theme_options'); ?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|125","bottom":"var:preset|spacing|500"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--125);padding-bottom:var(--wp--preset--spacing--500)">

	<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top">

		<!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%">

			<!-- wp:template-part {"slug":"footer-inner-left","theme":"block64","tagName":"footer-inner-left"} /-->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%">

			<!-- wp:template-part {"slug":"footer-inner-right","theme":"block64","tagName":"footer-inner-right"} /-->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
