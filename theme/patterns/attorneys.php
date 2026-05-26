<?php

/**
 * Title: Attorneys
 * Slug: lawfirmpro/attorneys
 * Categories: featured
 * Description: Dynamic attoreys grid.
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"100px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:100px"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textAlign":"center","fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.1","letterSpacing":"0px"}},"fontFamily":"plus-jakarta-sans"} -->
            <h2 class="wp-block-heading has-text-align-center has-plus-jakarta-sans-font-family" style="font-size:48px;font-style:normal;font-weight:700;letter-spacing:0px;line-height:1.1">Meet Our Experienced Attorneys</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:query {"queryId":117,"query":{"perPage":3,"pages":0,"offset":0,"postType":"attorney","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
        <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:post-featured-image /-->

                <!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600","lineHeight":"1","letterSpacing":"0px"}},"fontFamily":"plus-jakarta-sans"} /-->

                <!-- wp:post-excerpt {"textAlign":"center","moreText":"","excerptLength":30,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1","letterSpacing":"0px"},"layout":{"selfStretch":"fixed","flexSize":""},"elements":{"link":{"color":{"text":"var:preset|color|custom-393939"}}}},"textColor":"custom-393939","fontFamily":"plus-jakarta-sans"} /-->

                <!-- wp:social-links {"iconColor":"custom-c-4-c-4-c-4","iconColorValue":"#c4c4c4","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
                <ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->

                    <!-- wp:social-link {"url":"https://x.com/","service":"twitter"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->