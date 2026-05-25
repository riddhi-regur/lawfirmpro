<?php

/**
 * Title: Contact-Form
 * Slug: lawfirmpro/contact-form
 * Categories: featured
 * Description: Dynamic contact form.
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"backgroundColor":"custom-f-6-f-6-f-6","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-f-6-f-6-f-6-background-color has-background" style="padding-top:50px;padding-bottom:50px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top","justifyContent":"center"}} -->
    <div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"48px","lineHeight":"1.1","letterSpacing":"0px","textAlign":"center"}},"fontFamily":"plus-jakarta-sans"} -->
        <h2 class="wp-block-heading has-text-align-center has-plus-jakarta-sans-font-family" style="font-size:48px;font-style:normal;font-weight:700;letter-spacing:0px;line-height:1.1">Get In Touch</h2>
        <!-- /wp:heading -->

        <!-- wp:html -->
        <style data-wp-block-html="css">
            .lawfirmpro-contact-form {
                margin-top: 40px;
            }

            .lawfirmpro-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 32px 28px;
            }

            .lawfirmpro-field {
                display: flex;
                flex-direction: column;
            }

            .lawfirmpro-field label {
                font-size: 14px;
                margin-bottom: 14px;
                color: #111827;
            }

            .lawfirmpro-field input,
            .lawfirmpro-field textarea {
                border: none;
                border-bottom: 1px solid #111;
                background: transparent;
                padding: 0 0 12px;
                outline: none;
                font-size: 15px;
                width: 100%;
            }

            .lawfirmpro-field input::placeholder,
            .lawfirmpro-field textarea::placeholder {
                color: #767676;
            }

            .lawfirmpro-message {
                margin-top: 28px;
            }

            .lawfirmpro-contact-form button {
                margin-top: 32px;
                width: 100%;
                height: 58px;
                background: #000;
                color: #fff;
                border: 0;
                cursor: pointer;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .04em;
                text-transform: uppercase;
            }

            /* Mobile */
            @media (max-width: 767px) {

                .lawfirmpro-grid {
                    grid-template-columns: 1fr;
                    gap: 24px;
                }
            }
        </style>

        <form class="lawfirmpro-contact-form" method="post">

            <div class="lawfirmpro-grid">

                <div class="lawfirmpro-field">
                    <label>Full Name</label>
                    <input type="text" name="name" required="" placeholder="John Wick">
                </div>

                <div class="lawfirmpro-field">
                    <label>Email</label>
                    <input type="email" name="email" required="" placeholder="Enter email">
                </div>

                <div class="lawfirmpro-field">
                    <label>Phone</label>
                    <input type="tel" name="phone" placeholder="Enter number">
                </div>

                <div class="lawfirmpro-field">
                    <label>Subject</label>
                    <input type="text" name="subject" placeholder="Enter subject">
                </div>

            </div>

            <div class="lawfirmpro-field">
                <label>Leave us a message</label>
                <textarea name="message" required="" placeholder="Write a message"></textarea>
            </div>

            <button type="submit" name="lawfirmpro_contact_submit" value="1">
                SUBMIT →
            </button>

        </form>
        <!-- /wp:html -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->