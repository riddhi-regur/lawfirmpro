<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Settings
 */
add_action('admin_init', function () {

    register_setting(
        'lawfirmpro_contact_settings',
        'lawfirmpro_contact'
    );
});

/**
 * Admin Menu
 */
add_action('admin_menu', function () {

    add_menu_page(
        __('Theme Settings', 'lawfirmpro'),
        __('Theme Settings', 'lawfirmpro'),
        'manage_options',
        'lawfirmpro-theme-settings',
        'lawfirmpro_theme_settings_page',
        'dashicons-admin-generic',
        60
    );
});

/**
 * Settings Page
 */
function lawfirmpro_theme_settings_page()
{
    $contact = get_option('lawfirmpro_contact', []);

?>
    <div class="wrap">
        <h1>Theme Settings</h1>

        <form method="post" action="options.php">

            <?php settings_fields('lawfirmpro_contact_settings'); ?>

            <table class="form-table">

                <tr>
                    <th>Phone</th>
                    <td>
                        <input
                            type="text"
                            class="regular-text"
                            name="lawfirmpro_contact[phone]"
                            value="<?php echo esc_attr($contact['phone'] ?? ''); ?>">
                    </td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>
                        <input
                            type="email"
                            class="regular-text"
                            name="lawfirmpro_contact[email]"
                            value="<?php echo esc_attr($contact['email'] ?? ''); ?>">
                    </td>
                </tr>

                <tr>
                    <th>Address</th>
                    <td>
                        <textarea
                            rows="5"
                            cols="50"
                            name="lawfirmpro_contact[address]"><?php echo esc_textarea($contact['address'] ?? ''); ?></textarea>
                    </td>
                </tr>

                <tr>
                    <th>WhatsApp</th>
                    <td>
                        <input
                            type="text"
                            class="regular-text"
                            name="lawfirmpro_contact[whatsapp]"
                            value="<?php echo esc_attr($contact['whatsapp'] ?? ''); ?>">
                    </td>
                </tr>

            </table>

            <?php submit_button(); ?>

        </form>
    </div>
<?php
}
function lawfirmpro_get_contact($key = '')
{
    $contact = get_option('lawfirmpro_contact', []);

    return $contact[$key] ?? '';
}
function lawfirmpro_phone_shortcode()
{
    $phone = lawfirmpro_get_contact('phone');

    if (!$phone) {
        return '';
    }

    return sprintf(
        '<a href="tel:%1$s">%2$s</a>',
        esc_attr($phone),
        esc_html($phone)
    );
}
add_shortcode('lawfirmpro_phone', 'lawfirmpro_phone_shortcode');
function lawfirmpro_email_shortcode()
{
    $email = lawfirmpro_get_contact('email');

    if (!$email) {
        return '';
    }

    return sprintf(
        '<a href="mailto:%1$s">%2$s</a>',
        esc_attr($email),
        esc_html($email)
    );
}
add_shortcode('lawfirmpro_email', 'lawfirmpro_email_shortcode');
function lawfirmpro_address_shortcode()
{
    $address = lawfirmpro_get_contact('address');

    if (!$address) {
        return '';
    }

    return nl2br(
        esc_html($address)
    );
}
add_shortcode('lawfirmpro_address', 'lawfirmpro_address_shortcode');
function lawfirmpro_whatsapp_shortcode()
{
    $number = lawfirmpro_get_contact('whatsapp');

    if (!$number) {
        return '';
    }

    $clean = preg_replace('/[^0-9]/', '', $number);

    return sprintf(
        '<a target="_blank" href="https://wa.me/%1$s">%2$s</a>',
        esc_attr($clean),
        esc_html($number)
    );
}
add_shortcode('lawfirmpro_whatsapp', 'lawfirmpro_whatsapp_shortcode');
