<?php

/**
 * Title: Offers
 * Slug: lawfirmpro/offers
 * Categories: featured
 * Description: Dynamic offers grid.
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:100px;padding-bottom:100px"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textAlign":"center","fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.1","letterSpacing":"0px"}},"fontFamily":"plus-jakarta-sans"} -->
            <h2 class="wp-block-heading has-text-align-center has-plus-jakarta-sans-font-family" style="font-size:48px;font-style:normal;font-weight:700;letter-spacing:0px;line-height:1.1">How Can I Help You?</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"is-style-default","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1","letterSpacing":"0px","textAlign":"center"},"layout":{"selfStretch":"fit","flexSize":null}},"fontFamily":"plus-jakarta-sans"} -->
            <p class="has-text-align-center is-style-default has-plus-jakarta-sans-font-family" style="font-size:16px;font-style:normal;font-weight:400;letter-spacing:0px;line-height:1">Tempor ipsum efficitur posuere rutrum uspendisse mollis neque sed orci </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"is-style-default","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1","letterSpacing":"0px","textAlign":"center"},"layout":{"selfStretch":"fit","flexSize":null}},"fontFamily":"plus-jakarta-sans"} -->
            <p class="has-text-align-center is-style-default has-plus-jakarta-sans-font-family" style="font-size:16px;font-style:normal;font-weight:400;letter-spacing:0px;line-height:1">dignissim, in convallis dui molestie.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:query {"queryId":117,"query":{"perPage":3,"pages":0,"offset":0,"postType":"offer","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
        <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:group {"style":{"border":{"width":"1px"}},"borderColor":"custom-2-f-2-f-2-f","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-custom-2-f-2-f-2-f-border-color" style="border-width:1px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#8b7469","isUserOverlayColor":false,"contentPosition":"bottom center","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-center"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#8b7469"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"frosted-card","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group frosted-card" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group"><!-- wp:post-title {"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600","lineHeight":"1","letterSpacing":"0px"}},"fontFamily":"plus-jakarta-sans"} /-->

                                <!-- wp:post-excerpt {"moreText":"read more","excerptLength":30,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1","letterSpacing":"0px"},"layout":{"selfStretch":"fixed","flexSize":""}},"fontFamily":"plus-jakarta-sans"} /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:image {"id":246,"sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}}} -->
                            <figure class="wp-block-image size-full"><img src="http://lawfirmpro.local/wp-content/uploads/2026/05/up-arrow.png" alt="" class="wp-image-246" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->

        <!-- wp:buttons {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}}} -->
        <div class="wp-block-buttons" style="padding-top:50px;padding-bottom:50px"><!-- wp:button {"backgroundColor":"custom-000000","textColor":"background","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"800","lineHeight":"1","letterSpacing":"0px","textTransform":"uppercase"}},"fontFamily":"plus-jakarta-sans"} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-custom-000000-background-color has-text-color has-background has-link-color has-plus-jakarta-sans-font-family has-custom-font-size wp-element-button" style="font-size:16px;font-style:normal;font-weight:800;letter-spacing:0px;line-height:1;text-transform:uppercase">request a quote ➔</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->