<?php

/**
 * Title: Articles
 * Slug: lawfirmpro/articles
 * Categories: featured
 * Description: Dynamic articles grid.
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"100px","bottom":"100px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:100px;margin-bottom:100px"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"textAlign":"center","fontSize":"48px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.1","letterSpacing":"0px"}},"fontFamily":"plus-jakarta-sans"} -->
            <h2 class="wp-block-heading has-text-align-center has-plus-jakarta-sans-font-family" style="font-size:48px;font-style:normal;font-weight:700;letter-spacing:0px;line-height:1.1">Latest Articles</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:query {"queryId":117,"query":{"perPage":3,"pages":0,"offset":0,"postType":"article","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
        <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->

                <!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600","letterSpacing":"0px"}},"fontFamily":"plus-jakarta-sans"} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->