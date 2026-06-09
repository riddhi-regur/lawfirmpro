<?php

/**
 * Title: Offers
 * Slug: lawfirmpro/offers
 * Categories: featured
 * Description: Dynamic offers grid.
 * Inserter: true
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons alignfull"><!-- wp:button {"textColor":"accent-7","className":"is-style-outline","style":{"typography":{"textAlign":"center","fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|accent-7"}}},"border":{"width":"1px","color":"#afafaf","radius":{"topLeft":"300px","topRight":"300px","bottomLeft":"300px","bottomRight":"300px"}},"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"24px","right":"24px"}}},"fontFamily":"plus-jakarta-sans"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-accent-7-color has-text-color has-link-color has-border-color has-plus-jakarta-sans-font-family has-text-align-center has-custom-font-size wp-element-button" style="border-color:#afafaf;border-width:1px;border-top-left-radius:300px;border-top-right-radius:300px;border-bottom-left-radius:300px;border-bottom-right-radius:300px;padding-top:var(--wp--preset--spacing--xs);padding-right:24px;padding-bottom:var(--wp--preset--spacing--xs);padding-left:24px;font-size:16px;font-style:normal;font-weight:600">Need Help?</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

    <!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"50px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull" style="margin-top:50px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"20px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
            <div class="wp-block-group" style="margin-bottom:20px"><!-- wp:heading {"className":"practice-area-heading","style":{"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"800","lineHeight":"1.1","letterSpacing":"0px","fontSize":"56px"},"spacing":{"margin":{"right":"200px","left":"200px"}}},"fontFamily":"plus-jakarta-sans"} -->
                <h2 class="wp-block-heading has-text-align-center practice-area-heading has-plus-jakarta-sans-font-family" style="margin-right:200px;margin-left:200px;font-size:56px;font-style:normal;font-weight:800;letter-spacing:0px;line-height:1.1">How Can I Help You?</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"practice-area-paragraph","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5","letterSpacing":"0px","textAlign":"center"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"right":"300px","left":"300px"}},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontFamily":"plus-jakarta-sans"} -->
                <p class="has-text-align-center practice-area-paragraph has-accent-color has-text-color has-link-color has-plus-jakarta-sans-font-family" style="margin-right:300px;margin-left:300px;font-size:16px;font-style:normal;font-weight:500;letter-spacing:0px;line-height:1.5">Tempor ipsum efficitur posuere rutrum uspendisse mollis neque sed orci dignissim, in convallis dui molestie.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"custom-posts-grid","layout":{"type":"default"}} -->
            <div class="wp-block-group custom-posts-grid"><!-- wp:query {"queryId":78,"query":{"perPage":9,"pages":0,"offset":0,"postType":"offer","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
                <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
                    <!-- wp:group {"className":"testimonial-card","style":{"border":{"width":"1px","color":"#EBEBEB","radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}}},"layout":{"inherit":false}} -->
                    <div class="wp-block-group testimonial-card has-border-color" style="border-color:#EBEBEB;border-width:1px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#6c645a","isUserOverlayColor":false,"contentPosition":"bottom center","layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover has-custom-content-position is-position-bottom-center"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#6c645a"></span>
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

                    <!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"layout":{"type":"flex","justifyContent":"center"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->