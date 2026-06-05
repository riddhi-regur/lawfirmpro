<?php

/**
 * Title: Articles
 * Slug: lawfirmpro/articles
 * Categories: featured
 * Description: Dynamic articles grid.
 * Inserter: true
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons alignfull"><!-- wp:button {"textColor":"accent-7","className":"is-style-outline","style":{"typography":{"textAlign":"center","fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|accent-7"}}},"border":{"width":"1px","color":"#afafaf","radius":{"topLeft":"300px","topRight":"300px","bottomLeft":"300px","bottomRight":"300px"}},"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"24px","right":"24px"}}},"fontFamily":"plus-jakarta-sans"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-accent-7-color has-text-color has-link-color has-border-color has-plus-jakarta-sans-font-family has-text-align-center has-custom-font-size wp-element-button" style="border-color:#afafaf;border-width:1px;border-top-left-radius:300px;border-top-right-radius:300px;border-bottom-left-radius:300px;border-bottom-right-radius:300px;padding-top:var(--wp--preset--spacing--xs);padding-right:24px;padding-bottom:var(--wp--preset--spacing--xs);padding-left:24px;font-size:16px;font-style:normal;font-weight:600">Blog</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

    <!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"50px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull" style="margin-top:50px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"20px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
            <div class="wp-block-group" style="margin-bottom:20px"><!-- wp:heading {"className":"practice-area-heading","style":{"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"800","lineHeight":"1.1","letterSpacing":"0px","fontSize":"56px"},"spacing":{"margin":{"right":"200px","left":"200px"}}},"fontFamily":"plus-jakarta-sans"} -->
                <h2 class="wp-block-heading has-text-align-center practice-area-heading has-plus-jakarta-sans-font-family" style="margin-right:200px;margin-left:200px;font-size:56px;font-style:normal;font-weight:800;letter-spacing:0px;line-height:1.1">Your Guide to Understanding the Law</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"practice-area-paragraph","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5","letterSpacing":"0px","textAlign":"center"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"right":"250px","left":"250px"}},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontFamily":"plus-jakarta-sans"} -->
                <p class="has-text-align-center practice-area-paragraph has-accent-color has-text-color has-link-color has-plus-jakarta-sans-font-family" style="margin-right:250px;margin-left:250px;font-size:16px;font-style:normal;font-weight:500;letter-spacing:0px;line-height:1.5">Suspendisse turpis augue, aliquam eget ligula id, suscipit blandit magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"custom-posts-grid","layout":{"type":"default"}} -->
            <div class="wp-block-group custom-posts-grid"><!-- wp:query {"queryId":78,"query":{"perPage":9,"pages":0,"offset":0,"postType":"article","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
                <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
                    <!-- wp:post-featured-image {"height":"239px","className":"practice-area-post-image"} /-->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"30px","bottom":"50px"},"blockGap":"var:preset|spacing|0"}},"layout":{"inherit":false}} -->
                    <div class="wp-block-group" style="margin-top:30px;margin-bottom:50px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:icon {"icon":"core/tag","style":{"css":"color:#8F8F8F;"}} /-->

                            <!-- wp:post-excerpt {"textAlign":"left","showMoreOnNewLine":false,"className":"practice-area-paragraph","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","letterSpacing":"0px"}},"textColor":"accent","fontFamily":"plus-jakarta-sans"} /-->

                            <!-- wp:icon {"icon":"core/calendar","style":{"css":"color:#8F8F8F;"}} /-->

                            <!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-title {"textAlign":"left","isLink":true,"className":"practice-area-post-tile","style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0px","fontSize":"24px"}},"fontFamily":"plus-jakarta-sans"} /-->
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