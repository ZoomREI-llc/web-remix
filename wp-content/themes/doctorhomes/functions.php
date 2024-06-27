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
    add_theme_support('post-thumbnails');
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

class Mobile_Walker_Nav_Menu extends Walker_Nav_Menu
{
    // Start the element output.
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $polygon_icon_url = wp_get_attachment_url(150);
        $output .= '<li class="menu-item menu-item-' . $item->ID . '">';
        $output .= '<div class="menu-item-title"><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
        if (in_array('menu-item-has-children', $item->classes)) {
            $output .= '<img class="polygon-icon" src="' . $polygon_icon_url . '"></span></div>';
        }
    }

    // End the element output.
    public function end_el(&$output, $item, $depth = 0, $args = array())
    {
        $output .= "</li>\n";
    }
}
