<?php

/**
 * Title: Offers
 * Slug: lawfirmpro/offers
 * Categories: featured
 * Description: Dynamic offers grid.
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"100px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:100px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"className":"offers-heading","style":{"typography":{"textAlign":"center","fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.1","letterSpacing":"0px"}},"fontFamily":"plus-jakarta-sans"} -->
            <h2 class="wp-block-heading has-text-align-center offers-heading has-plus-jakarta-sans-font-family" style="font-size:48px;font-style:normal;font-weight:700;letter-spacing:0px;line-height:1.1">How Can I Help You?</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"offers-paragraph","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","letterSpacing":"0px","textAlign":"center"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"right":"350px","left":"350px"}},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontFamily":"plus-jakarta-sans"} -->
            <p class="has-text-align-center offers-paragraph has-accent-color has-text-color has-link-color has-plus-jakarta-sans-font-family" style="margin-right:350px;margin-left:350px;font-size:16px;font-style:normal;font-weight:400;letter-spacing:0px">Tempor ipsum efficitur posuere rutrum uspendisse mollis neque sed orci dignissim, in convallis dui molestie.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"custom-post-slider","layout":{"type":"constrained"}} -->
        <div class="wp-block-group custom-post-slider"><!-- wp:query {"queryId":117,"query":{"perPage":100,"pages":0,"offset":0,"postType":"offer","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
            <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#8b7469","isUserOverlayColor":false,"contentPosition":"bottom center","layout":{"type":"constrained"}} -->
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
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}}}} -->
        <div class="wp-block-buttons" style="padding-top:30px;padding-bottom:30px"><!-- wp:button {"backgroundColor":"custom-000000","textColor":"background","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"800","lineHeight":"1","letterSpacing":"0px","textTransform":"uppercase"}},"fontFamily":"plus-jakarta-sans"} -->
            <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-custom-000000-background-color has-text-color has-background has-link-color has-plus-jakarta-sans-font-family has-custom-font-size wp-element-button" style="font-size:16px;font-style:normal;font-weight:800;letter-spacing:0px;line-height:1;text-transform:uppercase">request a quote ➔</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->