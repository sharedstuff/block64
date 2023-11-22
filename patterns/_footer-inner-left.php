<?php
/**
 * Title: footer-inner-left
 * Slug: block64/footer-inner-left
 * Categories: block64
 * Inserter: no
 */
?>

<?php
$options = get_option('block64_theme_options');
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

    <!-- wp:site-logo {"width":32,"isLink":false} /-->

    <!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"large"} /-->

    <!-- wp:paragraph -->
    <p><?php echo $options['Organization_name'] ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><?php echo $options['Organization_address_PostalAddress_streetAddress'] ?><br><?php echo $options['Organization_address_PostalAddress_postalcode'] ?> <?php echo $options['Organization_address_PostalAddress_addressLocality'] ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><?php echo $options['Organization_email'] ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><?php echo $options['Organization_telephone'] ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><?php echo $options['Organization_faxNumber'] ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p><?php echo $options['Organization_url'] ?></p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
