<?php

/**
 * Title: wide_img-left
 * Slug: block64/wide_img-left
 * Categories: block64
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"className":"block64_pattern_wide_img-left","layout":{"type":"default"},"metadata":{"name":"wide_img-left"}} -->
<div class="wp-block-group alignfull block64_pattern_wide_img-left" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">

        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|200","left":"var:preset|spacing|300"},"padding":{"top":"var:preset|spacing|200","bottom":"var:preset|spacing|200"}}}} -->
        <div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--200);padding-bottom:var(--wp--preset--spacing--200)">

            <!-- wp:column {"width":"62%"} -->
            <div class="wp-block-column" style="flex-basis:62%">

                <!-- wp:image {"align":"center","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]},"className":"is-style-rounded"} -->
                <figure class="wp-block-image aligncenter size-full is-style-rounded">
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/test.webp')) ?>" alt="" style="aspect-ratio:1;object-fit:cover" />
                </figure>
                <!-- /wp:image -->

            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%">

                <!-- wp:heading {"align":"wide"} -->
                <h2 class="wp-block-heading alignwide">wide_img-left Headline h2 MMMMMMMMMMMMMMMMMMMMMMMMMMMMM</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Paragraph: Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                <!-- /wp:paragraph -->

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
            <!-- /wp:column -->

        </div>
        <!-- /wp:columns -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
