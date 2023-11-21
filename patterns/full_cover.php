<?php
/**
 * Title: full_cover
 * Slug: block64/full
 * Categories: block64
 */
?>

<!-- wp:group {"align":"full","className":"block64_pattern_full_cover","layout":{"type":"default"},"metadata":{"name":"full_cover"}} -->
<div class="wp-block-group alignfull block64_pattern_full_cover">

    <!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>","dimRatio":0,"contentPosition":"bottom center","isDark":false,"style":{"color":[]},"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim">
        </span>
        <img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">

            <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
            <div class="wp-block-group alignwide">

                <!-- wp:heading -->
                <h2 class="wp-block-heading">Headline h2</h2>
                <!-- /wp:heading -->

            </div>
            <!-- /wp:group -->

        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">

        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)">

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
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
