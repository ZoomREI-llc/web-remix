<?php

// Enqueue Scripts and Styles
function doctor_homes_enqueue_assets()
{
    $style_version = filemtime(get_template_directory() . '/dist/style.css');
    $script_version = filemtime(get_template_directory() . '/src/js/script.js');

    wp_enqueue_style('doctorhomes-style', get_template_directory_uri() . '/dist/style.css', array(), $style_version);
    wp_enqueue_script('interactivity-api', get_template_directory_uri() . '/src/js/script.js', array(), $script_version, true);
    wp_enqueue_script('doctor-homes-mobile-menu', get_template_directory_uri() . '/src/js/mobile-menu.js', array(), null, true);

    wp_localize_script('interactivity-api', 'formConfig', array(
        'googleMapsApiKey' => GOOGLE_MAPS_API_KEY,
        'crmWebhookUrl' => CRM_WEBHOOK_URL,
    ));
}
add_action('wp_enqueue_scripts', 'doctor_homes_enqueue_assets');

// Theme Support
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

// Register Menus
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

// Custom Mobile Navigation Walker
class Mobile_Walker_Nav_Menu extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $polygon_icon_url = wp_get_attachment_url(406);
        $output .= '<li class="menu-item menu-item-' . $item->ID . '">';
        $output .= '<div class="menu-item-title"><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
        if (in_array('menu-item-has-children', $item->classes)) {
            $output .= '<img class="polygon-icon" src="' . $polygon_icon_url . '"></div>';
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = array())
    {
        $output .= "</li>\n";
    }
}

// Template Part Loading Function
function doctor_homes_get_template_part($slug, $name = null)
{
    $templates = array();

    if (isset($name)) {
        $templates[] = "templates/{$slug}-{$name}.php";
    }
    $templates[] = "templates/{$slug}.php";
    $templates[] = "{$slug}.php";

    locate_template($templates, true, false);
}

// Custom Header and Footer Functions
function doctor_homes_get_header($name = null)
{
    $template = $name ? locate_template("templates/header-{$name}.php") : locate_template("templates/header.php");
    if ($template) {
        load_template($template);
    }
}

function doctor_homes_get_footer($name = null)
{
    $template = $name ? locate_template("templates/footer-{$name}.php") : locate_template("templates/footer.php");
    if ($template) {
        load_template($template);
    }
}

// Template Part Loading with Fallback
function doctor_homes_get_template_part_with_fallback($slug, $name = null)
{
    $templates = array();

    if (isset($name)) {
        $templates[] = "templates/{$slug}-{$name}.php";
    }
    $templates[] = "templates/{$slug}.php";
    $templates[] = "{$slug}.php";

    $found_template = locate_template($templates, true, false);

    if (!$found_template) {
        get_template_part($slug, $name);
    }
}

// Template Include Filter
function doctor_homes_template_include($template)
{
    // Get the base name of the current template file
    $template_name = basename($template);

    // Log the current template and custom template path
    error_log('Current template: ' . $template);

    // Specific check for single posts
    if (is_single()) {
        $single_template = locate_template('templates/single.php');
        if ($single_template) {
            error_log('Single post template found: ' . $single_template);
            return $single_template;
        } else {
            error_log('Single post template not found');
        }
    }

    // Specific check for pages
    if (is_page()) {
        $page_template = locate_template('templates/page.php');
        if ($page_template) {
            error_log('Page template found: ' . $page_template);
            return $page_template;
        } else {
            error_log('Page template not found');
        }
    }

    // Create the path to the custom template in the 'templates' directory
    $custom_template_path = 'templates/' . $template_name;
    $custom_template = locate_template($custom_template_path);

    // If a custom template is found, return it
    if ($custom_template) {
        error_log('Custom template found: ' . $custom_template);
        return $custom_template;
    }

    // Log if no custom template was found
    error_log('Custom template not found, using default: ' . $template);

    // Return the original template if no custom template is found
    return $template;
}
add_filter('template_include', 'doctor_homes_template_include');
