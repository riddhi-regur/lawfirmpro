<?php

/**
 * Title: FAQ
 * Slug: lawfirmpro/faq
 * Categories: featured
 * Description: Dynamic FAQ section.
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"50px","bottom":"50px"}}},"backgroundColor":"accent-5","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-5-background-color has-background" style="margin-top:50px;margin-bottom:50px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"className":"faq-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"48px","lineHeight":"1.1","letterSpacing":"0px"},"spacing":{"padding":{"bottom":"20px"}}},"fontFamily":"plus-jakarta-sans"} -->
                <h2 class="wp-block-heading faq-heading has-plus-jakarta-sans-font-family" style="padding-bottom:20px;font-size:48px;font-style:normal;font-weight:700;letter-spacing:0px;line-height:1.1">Frequently Asked Questions</h2>
                <!-- /wp:heading -->

                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group"><!-- wp:query {"queryId":64,"query":{"perPage":10,"pages":0,"offset":0,"postType":"faq","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
                    <div class="wp-block-query"><!-- wp:post-template -->
                        <!-- wp:group {"className":"lawfirmpro-faq-item","style":{"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"},"width":"1px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"borderColor":"custom-3-b-3-b-3-b","layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group lawfirmpro-faq-item has-border-color has-custom-3-b-3-b-3-b-border-color" style="border-width:1px;border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-title {"className":"faq-title","style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"plus-jakarta-sans"} /-->

                            <!-- wp:post-excerpt {"showMoreOnNewLine":false,"className":"faq-content","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|custom-393939"}}}},"textColor":"custom-393939","fontFamily":"plus-jakarta-sans"} /-->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:post-template -->
                    </div>
                    <!-- /wp:query -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"id":356,"style":{"color":[]}} -->
                <figure class="wp-block-image"><img src="http://lawfirmpro.local/wp-content/uploads/2026/05/faq.png" alt="" class="wp-image-356" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->