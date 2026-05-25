<?php

/**
 * Title: FAQ
 * Slug: lawfirmpro/faq
 * Categories: featured
 * Description: Dynamic FAQ section.
 * Inserter: true
 */
?>
<!-- wp:group {"backgroundColor":"custom-f-6-f-6-f-6","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-f-6-f-6-f-6-background-color has-background"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group alignwide"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"50px"}}}} -->
            <div class="wp-block-column" style="padding-top:50px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"48px","lineHeight":"1.1","letterSpacing":"0px"},"spacing":{"padding":{"bottom":"20px"}}},"fontFamily":"plus-jakarta-sans"} -->
                <h2 class="wp-block-heading has-plus-jakarta-sans-font-family" style="padding-bottom:20px;font-size:48px;font-style:normal;font-weight:700;letter-spacing:0px;line-height:1.1">Frequently Asked Questions</h2>
                <!-- /wp:heading -->

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:query {"queryId":64,"query":{"perPage":10,"pages":0,"offset":0,"postType":"faq","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
                    <div class="wp-block-query"><!-- wp:post-template -->
                        <!-- wp:group {"className":"lawfirmpro-faq-item","style":{"border":{"width":"1px","color":"#3b3b3b","radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group lawfirmpro-faq-item has-border-color" style="border-color:#3b3b3b;border-width:1px;border-top-left-radius:6px;border-top-right-radius:6px;border-bottom-left-radius:6px;border-bottom-right-radius:6px"><!-- wp:post-title {"className":"faq-title"} /-->

                            <!-- wp:post-excerpt {"showMoreOnNewLine":false,"className":"faq-content"} /-->
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
            <div class="wp-block-column"><!-- wp:image {"id":356,"sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed"}}} -->
                <figure class="wp-block-image size-full"><img src="http://lawfirmpro.local/wp-content/uploads/2026/05/faq.png" alt="" class="wp-image-356" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->