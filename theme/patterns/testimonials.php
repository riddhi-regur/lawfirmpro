<?php

/**
 * Title: Testimonials
 * Slug: lawfirmpro/testimonials
 * Categories: featured
 * Description: Dynamic testimonials grid.
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:100px;padding-bottom:100px"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textAlign":"center","fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.1","letterSpacing":"0px"}},"fontFamily":"plus-jakarta-sans"} -->
            <h2 class="wp-block-heading has-text-align-center has-plus-jakarta-sans-font-family" style="font-size:48px;font-style:normal;font-weight:700;letter-spacing:0px;line-height:1.1">Real Stories from Real Clients</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:query {"queryId":117,"query":{"perPage":3,"pages":0,"offset":0,"postType":"testimonial","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
        <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:group {"className":"testimonial-card","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group testimonial-card" style="border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group"><!-- wp:post-title {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1","letterSpacing":"0px","textTransform":"uppercase","fontSize":"16px"}},"fontFamily":"plus-jakarta-sans"} /-->

                    <!-- wp:image {"id":296,"sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"31px"}}} -->
                    <figure class="wp-block-image size-full"><img src="http://lawfirmpro.local/wp-content/uploads/2026/05/google-icon.png" alt="" class="wp-image-296" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:html -->
                <style data-wp-block-html="css">
                    .testimonial-location {
                        font-family: 'Plus Jakarta Sans';
                        font-size: 12px;
                        text-transform: uppercase;
                        color: #464646;
                        margin: 4px 0 12px;
                        font-weight: 700;
                        line-height: 15px;
                    }
                </style>

                <!-- wp:lawfirmpro/testimonial-meta {"field":"location"} /-->
                <!-- /wp:html -->

                <!-- wp:html -->
                <style data-wp-block-html="css">
                    .testimonial-stars {
                        color: #FBC618;
                        font-size: 18px;
                        margin-bottom: 10px;
                    }
                </style>

                <!-- wp:lawfirmpro/testimonial-meta {"field":"rating"} /-->
                <!-- /wp:html -->

                <!-- wp:post-excerpt {"textAlign":"left","moreText":"","excerptLength":30,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1","letterSpacing":"0px"},"layout":{"selfStretch":"fixed","flexSize":""},"elements":{"link":{"color":{"text":"var:preset|color|custom-464646"}}}},"textColor":"custom-464646","fontFamily":"plus-jakarta-sans"} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->