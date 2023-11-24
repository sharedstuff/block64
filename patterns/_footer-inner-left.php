<?php

/**
 * Title: footer-inner-left
 * Slug: block64/footer-inner-left
 * Categories: block64
 * Inserter: no
 */
?>

<?php $options = get_option('block64_theme_options'); ?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

	<!-- wp:site-logo {"width":32,"isLink":false} /-->

	<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} /-->

	<?php if ($options['Organization_name']) : ?>
		<!-- wp:paragraph -->
		<p><?php echo $options['Organization_name'] ?></p>
		<!-- /wp:paragraph -->
	<?php endif; ?>

	<?php if ($options['Organization_address_PostalAddress_streetAddress'] || $options['Organization_address_PostalAddress_postalcode'] || $options['Organization_address_PostalAddress_addressLocality']) : ?>
		<!-- wp:paragraph -->
		<p>
			<?php if ($options['Organization_address_PostalAddress_streetAddress']) : ?>
				<?php echo $options['Organization_address_PostalAddress_streetAddress'] ?><br>
			<?php endif; ?>
			<?php if ($options['Organization_address_PostalAddress_postalcode']) : ?>
				<?php echo $options['Organization_address_PostalAddress_postalcode'] . ' ' ?>
			<?php endif; ?>
			<?php if ($options['Organization_address_PostalAddress_addressLocality']) : ?>
				<?php echo $options['Organization_address_PostalAddress_addressLocality'] ?>
			<?php endif; ?>
		</p>
		<!-- /wp:paragraph -->
	<?php endif; ?>

	<?php if ($options['Organization_email']) : ?>
		<!-- wp:paragraph -->
		<p>
			<a href="mailto:<?php echo $options['Organization_email'] ?>" data-type="mailto" data-id="mailto:<?php echo $options['Organization_email'] ?>" target="_blank" rel="noreferrer noopener" style="display: flex; align-items: center;">
				<img style="width: 24px;" class="material-symbol" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/material-symbols/alternate_email_FILL0_wght400_GRAD0_opsz24.svg')) ?>" alt="alternate_email">
				<span><?php echo $options['Organization_email'] ?></span>
			</a>
		</p>
		<!-- /wp:paragraph -->
	<?php endif; ?>

	<?php if ($options['Organization_telephone']) : ?>
		<!-- wp:paragraph -->
		<p>
			<a href="tel:<?php echo preg_replace('/[^\+0-9]/', '', $options['Organization_telephone']) ?>" target="_blank" rel="noreferrer noopener" style="display: flex; align-items: center;">
				<img style="width: 24px;" class="material-symbol" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/material-symbols/call_FILL0_wght400_GRAD0_opsz24.svg')) ?>" alt="call">
				<span><?php echo $options['Organization_telephone'] ?></span>
			</a>
		</p>
		<!-- /wp:paragraph -->
	<?php endif; ?>

	<?php if ($options['Organization_faxNumber']) : ?>
		<!-- wp:paragraph -->
		<p>
			<a href="fax:<?php echo preg_replace('/[^\+0-9]/', '', $options['Organization_faxNumber']) ?>" target="_blank" rel="noreferrer noopener" style="display: flex; align-items: center;">
				<img style="width: 24px;" class="material-symbol" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/material-symbols/fax_FILL0_wght400_GRAD0_opsz24.svg')) ?>" alt="fax">
				<span><?php echo $options['Organization_faxNumber'] ?></span>
			</a>
		</p>
		<!-- /wp:paragraph -->
	<?php endif; ?>

	<?php if ($options['Organization_url']) : ?>
		<!-- wp:paragraph -->
		<p>
			<a href="<?php echo $options['Organization_url'] ?>" target="_blank" rel="noreferrer noopener" style="display: flex; align-items: center;">
				<img style="width: 24px;" class="material-symbol" src="<?php echo esc_url(get_theme_file_uri('/assets/icons/material-symbols/link_FILL0_wght400_GRAD0_opsz24.svg')) ?>" alt="link">
				<span><?php echo $options['Organization_url'] ?></span>
			</a>
		</p>
		<!-- /wp:paragraph -->
	<?php endif; ?>

	<?php if ($options['SocialMedia_Facebook'] || $options['SocialMedia_YouTube'] || $options['SocialMedia_Instagram']) : ?>
		<!-- wp:social-links -->
		<ul class="wp-block-social-links">

			<?php if ($options['SocialMedia_Facebook']) : ?>
				<!-- wp:social-link {"url":"<?php echo $options['SocialMedia_Facebook'] ?>","service":"facebook"} /-->
			<?php endif; ?>

			<?php if ($options['SocialMedia_YouTube']) : ?>
				<!-- wp:social-link {"url":"<?php echo $options['SocialMedia_YouTube'] ?>","service":"youtube"} /-->
			<?php endif; ?>

			<?php if ($options['SocialMedia_Instagram']) : ?>
				<!-- wp:social-link {"url":"<?php echo $options['SocialMedia_Instagram'] ?>","service":"instagram"} /-->
			<?php endif; ?>

		</ul>
		<!-- /wp:social-links -->
	<?php endif; ?>

</div>
<!-- /wp:group -->
