<?php

/**
 * Title: Practice Areas
 * Slug: lawfirmpro/practice-areas
 * Categories: featured
 * Description: Dynamic practice areas grid.
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"50px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"backgroundColor":"primary","textColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:50px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="padding-top:50px;padding-bottom:50px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"className":"practice-area-heading","style":{"typography":{"textAlign":"center","fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.1","letterSpacing":"0px"}},"fontFamily":"plus-jakarta-sans"} -->
            <h2 class="wp-block-heading has-text-align-center practice-area-heading has-plus-jakarta-sans-font-family" style="font-size:48px;font-style:normal;font-weight:700;letter-spacing:0px;line-height:1.1">Our Expertise Practice Areas</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"practice-area-paragraph","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5","letterSpacing":"0px","textAlign":"center"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"right":"300px","left":"300px"}}},"fontFamily":"plus-jakarta-sans"} -->
            <p class="has-text-align-center practice-area-paragraph has-plus-jakarta-sans-font-family" style="margin-right:300px;margin-left:300px;font-size:16px;font-style:normal;font-weight:400;letter-spacing:0px;line-height:1.5">Tempor ipsum efficitur posuere rutrum uspendisse mollis neque sed orci dignissim, in convallis dui molestie.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"custom-post-slider","layout":{"type":"default"}} -->
        <div class="wp-block-group custom-post-slider"><!-- wp:query {"queryId":117,"query":{"perPage":3,"pages":0,"offset":0,"postType":"practice-area","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
            <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
                <!-- wp:group {"style":{"border":{"width":"1px"}},"backgroundColor":"accent-4","borderColor":"accent-3","layout":{"type":"default"}} -->
                <div class="wp-block-group has-border-color has-accent-3-border-color has-accent-4-background-color has-background" style="border-width:1px"><!-- wp:post-featured-image {"isLink":true,"height":"240px"} /-->

                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"25px","left":"25px","bottom":"35px","top":"25px"}}},"layout":{"type":"default"}} -->
                    <div class="wp-block-group" style="padding-top:25px;padding-right:25px;padding-bottom:35px;padding-left:25px"><!-- wp:post-title {"isLink":true,"className":"practice-area-post-tile","style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"plus-jakarta-sans"} /-->

                        <!-- wp:post-excerpt {"moreText":"","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|custom-a-6-a-6-a-6"}}}},"textColor":"custom-a-6-a-6-a-6","fontFamily":"plus-jakarta-sans"} /-->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"800","textTransform":"uppercase"}},"fontFamily":"plus-jakarta-sans"} -->
                        <p class="has-plus-jakarta-sans-font-family" style="font-size:16px;font-style:normal;font-weight:800;text-transform:uppercase">View Service ➔</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"style":{"spacing":{"padding":{"top":"30px","bottom":"0px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons" style="padding-top:30px;padding-bottom:0px"><!-- wp:button {"backgroundColor":"background","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"800","lineHeight":"1","letterSpacing":"0px","textTransform":"uppercase"}},"fontFamily":"plus-jakarta-sans"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color has-plus-jakarta-sans-font-family has-custom-font-size wp-element-button" style="font-size:16px;font-style:normal;font-weight:800;letter-spacing:0px;line-height:1;text-transform:uppercase">View All Services ➔</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"textColor":"background","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"800","lineHeight":"1","letterSpacing":"0px","textTransform":"uppercase"},"spacing":{"padding":{"left":"60px","right":"60px","top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm"}}},"fontFamily":"plus-jakarta-sans"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color has-link-color has-plus-jakarta-sans-font-family has-custom-font-size wp-element-button" style="padding-top:var(--wp--preset--spacing--sm);padding-right:60px;padding-bottom:var(--wp--preset--spacing--sm);padding-left:60px;font-size:16px;font-style:normal;font-weight:800;letter-spacing:0px;line-height:1;text-transform:uppercase">request a quote ➔</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->