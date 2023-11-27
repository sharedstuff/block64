<?php

/**
 * Title: footer-inner-right
 * Slug: block64/footer-inner-right
 * Categories: block64
 * Inserter: no
 */
?>

<?php $options = get_option('block64_theme_options'); ?>

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|200","left":"var:preset|spacing|200"},"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
	<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

		<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
		<p class="has-large-font-size" style="font-style:normal;font-weight:500">Über uns</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>
			<a href="#">Team</a>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>
			<a href="#">Geschichte</a>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>
			<a href="#">Karriere</a>
		</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
	<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

		<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
		<p class="has-large-font-size" style="font-style:normal;font-weight:500">Rechtliches</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>
			<a href="#">Impressum</a>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>
			<a href="#">Datenschutz</a>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>
			<a href="#">Kontakt</a>
		</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
	<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

		<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} -->
		<p class="has-large-font-size" style="font-style:normal;font-weight:500">Social Media</p>
		<!-- /wp:paragraph -->

		<?php if ($options['SocialMedia_Facebook']) : ?>
			<!-- wp:paragraph -->
			<p>
				<a href="<?php echo $options['SocialMedia_Facebook'] ?>" target="_blank" rel="noreferrer noopener">Facebook</a>
			</p>
			<!-- /wp:paragraph -->
		<?php endif; ?>

		<?php if ($options['SocialMedia_YouTube']) : ?>
			<!-- wp:paragraph -->
			<p>
				<a href="<?php echo $options['SocialMedia_YouTube'] ?>" target="_blank" rel="noreferrer noopener">YouTube</a>
			</p>
			<!-- /wp:paragraph -->
		<?php endif; ?>

		<?php if ($options['SocialMedia_Instagram']) : ?>
			<!-- wp:paragraph -->
			<p>
				<a href="<?php echo $options['SocialMedia_Instagram'] ?>" target="_blank" rel="noreferrer noopener">Instagram</a>
			</p>
			<!-- /wp:paragraph -->
		<?php endif; ?>

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
