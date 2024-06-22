<?php
function doctor_homes_enqueue_assets()
{
    // Get the file modification time
    $style_version = filemtime(get_template_directory() . '/dist/style.css');
    $script_version = filemtime(get_template_directory() . '/dist/script.js');

    // Enqueue the main stylesheet with file modification time as version
    wp_enqueue_style('doctorhomes-style', get_template_directory_uri() . '/dist/style.css', array(), $style_version);

    // Enqueue the Interactivity API script with file modification time as version
    wp_enqueue_script('interactivity-api', get_template_directory_uri() . '/dist/script.js', array(), $script_version, true);

    // Enqueue the mobile menu script with no version
    wp_enqueue_script('doctor-homes-mobile-menu', get_template_directory_uri() . '/src/js/mobile-menu.js', array(), null, true);

    // Localize script with API keys and webhook URL
    wp_localize_script('interactivity-api', 'formConfig', array(
        'googleMapsApiKey' => GOOGLE_MAPS_API_KEY,
        'crmWebhookUrl' => CRM_WEBHOOK_URL,
    ));
}
add_action('wp_enqueue_scripts', 'doctor_homes_enqueue_assets');

// Function to add async and defer attributes to scripts
function add_async_defer_attributes($tag, $handle)
{
    if ('google-maps' === $handle) {
        return str_replace(' src', ' async="async" defer="defer" src', $tag);
    }
    return $tag;
}

// Theme support for various features
function doctor_homes_theme_support()
{
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_theme_support('editor-color-palette');
    add_editor_style('dist/style.css');
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));
}

add_action('after_setup_theme', 'doctor_homes_theme_support');

function doctor_homes_register_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu'),
        'footer-company-menu' => __('Footer Company Menu'),
        'footer-locations-menu' => __('Footer Locations Menu'),
        'footer-resources-menu' => __('Footer Resources Menu'),
        'footer-legal-menu' => __('Footer Legal Menu'),
    ));
}
add_action('init', 'doctor_homes_register_menus');
