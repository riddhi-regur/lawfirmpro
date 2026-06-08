<?php

/**
 * Title: Testimonials
 * Slug: lawfirmpro/testimonials
 * Categories: featured
 * Description: Dynamic testimonials grid.
 * Inserter: true
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:buttons {"align":"full","layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons alignfull"><!-- wp:button {"textColor":"accent-7","className":"is-style-outline","style":{"typography":{"textAlign":"center","fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|accent-7"}}},"border":{"width":"1px","color":"#afafaf","radius":{"topLeft":"300px","topRight":"300px","bottomLeft":"300px","bottomRight":"300px"}},"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"24px","right":"24px"}}},"fontFamily":"plus-jakarta-sans"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-accent-7-color has-text-color has-link-color has-border-color has-plus-jakarta-sans-font-family has-text-align-center has-custom-font-size wp-element-button" style="border-color:#afafaf;border-width:1px;border-top-left-radius:300px;border-top-right-radius:300px;border-bottom-left-radius:300px;border-bottom-right-radius:300px;padding-top:var(--wp--preset--spacing--xs);padding-right:24px;padding-bottom:var(--wp--preset--spacing--xs);padding-left:24px;font-size:16px;font-style:normal;font-weight:600">Testimonials</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

    <!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"50px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull" style="margin-top:50px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"20px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
            <div class="wp-block-group" style="margin-bottom:20px"><!-- wp:heading {"className":"practice-area-heading","style":{"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"800","lineHeight":"1.1","letterSpacing":"0px","fontSize":"56px"},"spacing":{"margin":{"right":"200px","left":"200px"}}},"fontFamily":"plus-jakarta-sans"} -->
                <h2 class="wp-block-heading has-text-align-center practice-area-heading has-plus-jakarta-sans-font-family" style="margin-right:200px;margin-left:200px;font-size:56px;font-style:normal;font-weight:800;letter-spacing:0px;line-height:1.1">Real Stories from Real Clients</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"custom-posts-grid","layout":{"type":"default"}} -->
            <div class="wp-block-group custom-posts-grid"><!-- wp:query {"queryId":78,"query":{"perPage":9,"pages":0,"offset":0,"postType":"testimonial","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
                <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
                    <!-- wp:group {"className":"testimonial-card","style":{"spacing":{"margin":{"top":"30px","bottom":"50px"},"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"width":"1px","color":"#EBEBEB","radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}}},"layout":{"inherit":false}} -->
                    <div class="wp-block-group testimonial-card has-border-color" style="border-color:#EBEBEB;border-width:1px;border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;margin-top:30px;margin-bottom:50px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group"><!-- wp:post-title {"textAlign":"left","isLink":true,"className":"practice-area-post-tile","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"0.3","letterSpacing":"0px","fontSize":"24px"}},"fontFamily":"plus-jakarta-sans"} /-->

                                <!-- wp:shortcode -->
                                [testimonial_meta field="location"]
                                <!-- /wp:shortcode -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:image {"id":296,"sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"31px"}}} -->
                            <figure class="wp-block-image size-full"><img src="http://lawfirmpro.local/wp-content/uploads/2026/05/google-icon.png" alt="" class="wp-image-296" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:shortcode -->
                        [testimonial_meta field="rating"]
                        <!-- /wp:shortcode -->

                        <!-- wp:post-excerpt {"textAlign":"left","showMoreOnNewLine":false,"className":"practice-area-paragraph","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","letterSpacing":"0px"},"spacing":{"padding":{"right":"30px"}}},"textColor":"accent","fontFamily":"plus-jakarta-sans"} /-->
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