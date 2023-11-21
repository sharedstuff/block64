<?php
/**
 * Title: footer
 * Slug: block64/footer
 * Categories: block64
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|300"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--300)">

	<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top">

		<!-- wp:column {"verticalAlignment":"top","width":"38%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:38%">

			<!-- wp:template-part {"slug":"footer-inner-left","theme":"block64","tagName":"footer-inner-left"} /-->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"62%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:62%">

			<!-- wp:template-part {"slug":"footer-inner-right","theme":"block64","tagName":"footer-inner-right"} /-->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
