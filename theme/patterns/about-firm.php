<?php

/**
 * Title: About Law Firm
 * Slug: lawfirmpro/about-firm
 * Categories: featured
 * Description: Law firm introduction section.
 * Keywords: law, legal, attorney, about
 * Inserter: true
 */
?>

<!-- wp:group {
	"style":{
		"spacing":{
			"padding":{
				"top":"100px",
				"bottom":"100px"
			}
		}
	},
	"layout":{"type":"constrained"},
	"className":"lfp-about-section"
} -->

<div class="wp-block-group lfp-about-section">

    <!-- wp:columns {
		"verticalAlignment":"center",
		"style":{
			"spacing":{
				"blockGap":"60px"
			}
		}
	} -->

    <div class="wp-block-columns are-vertically-aligned-center">

        <!-- LEFT IMAGE -->
        <!-- wp:column {"width":"50%"} -->

        <div class="wp-block-column">

            <!-- wp:image {
				"sizeSlug":"large",
				"className":"lfp-about-image"
			} -->

            <figure class="wp-block-image size-large lfp-about-image">

                <img
                    src="<?php echo esc_url(
                                get_theme_file_uri(
                                    'assets/images/about-lawyer.png'
                                )
                            ); ?>"
                    alt="Lawyer">

            </figure>

            <!-- /wp:image -->

        </div>

        <!-- /wp:column -->

        <!-- RIGHT CONTENT -->
        <!-- wp:column {"width":"50%"} -->

        <div class="wp-block-column">

            <!-- wp:paragraph {
				"className":"lfp-section-label"
			} -->

            <p class="lfp-section-label">
                About Our Firm
            </p>

            <!-- /wp:paragraph -->

            <!-- wp:heading {
				"level":2,
				"className":"lfp-about-title"
			} -->

            <h2 class="lfp-about-title">
                Protecting Your Rights
                With Dedication
            </h2>

            <!-- /wp:heading -->

            <!-- wp:paragraph {
				"className":"lfp-about-text"
			} -->

            <p class="lfp-about-text">
                We are committed to delivering
                exceptional legal representation with
                integrity, expertise, and a strong
                client-focused approach.
            </p>

            <!-- /wp:paragraph -->

            <!-- wp:list {
				"className":"lfp-about-list"
			} -->

            <ul class="lfp-about-list">
                <li>Experienced Legal Team</li>
                <li>Trusted Client Representation</li>
                <li>Results Driven Strategy</li>
                <li>Professional Legal Advice</li>
            </ul>

            <!-- /wp:list -->

            <!-- wp:buttons -->

            <div class="wp-block-buttons">

                <!-- wp:button {
					"backgroundColor":"secondary",
					"textColor":"background"
				} -->

                <div class="wp-block-button">

                    <a class="wp-block-button__link">
                        Learn More
                    </a>

                </div>

                <!-- /wp:button -->

            </div>

            <!-- /wp:buttons -->

        </div>

        <!-- /wp:column -->

    </div>

    <!-- /wp:columns -->

</div>

<!-- /wp:group -->