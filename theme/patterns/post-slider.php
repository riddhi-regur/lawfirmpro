<?php

/**
 * Title: Post Slider
 * Slug: yourtheme/post-slider
 * Categories: featured
 * Description: Display latest posts in a slider layout.
 */
?>

<!-- wp:group {"className":"custom-post-slider","layout":{"type":"default"}} -->
<div class="wp-block-group custom-post-slider"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"className":"slider-prev"} -->
        <div class="wp-block-button slider-prev"><a class="wp-block-button__link wp-element-button">Left</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"slider-next"} -->
        <div class="wp-block-button slider-next"><a class="wp-block-button__link wp-element-button">right</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

    <!-- wp:query {"queryId":21,"query":{"perPage":6,"postType":"attorney","order":"desc","orderBy":"date","sticky":"","parents":[],"format":[]}} -->
    <div class="wp-block-query"><!-- wp:post-template -->
        <!-- wp:post-featured-image {"isLink":true} /-->

        <!-- wp:post-title {"level":3,"isLink":true} /-->

        <!-- wp:post-excerpt {"moreText":"Read More"} /-->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->