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

function scan_uploads_folder()
{
    $uploads_dir = wp_upload_dir();
    $directory = $uploads_dir['basedir'];

    // Suppress errors
    $old_error_reporting = error_reporting();
    error_reporting($old_error_reporting & ~E_WARNING);

    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
    foreach ($files as $file) {
        if (!$file->isDir()) {
            $file_path = $file->getRealPath();
            $file_type = wp_check_filetype($file_path);

            // Only import files with allowed mime types
            if (in_array($file_type['type'], get_allowed_mime_types())) {
                $attachment = array(
                    'guid'           => $uploads_dir['baseurl'] . '/' . _wp_relative_upload_path($file_path),
                    'post_mime_type' => $file_type['type'],
                    'post_title'     => preg_replace('/\.[^.]+$/', '', $file->getFilename()),
                    'post_content'   => '',
                    'post_status'    => 'inherit'
                );

                // Check if the file already exists in the Media Library
                $attachment_id = attachment_url_to_postid($attachment['guid']);
                if (!$attachment_id) {
                    $attachment_id = wp_insert_attachment($attachment, $file_path);
                    require_once(ABSPATH . 'wp-admin/includes/image.php');
                    $attach_data = wp_generate_attachment_metadata($attachment_id, $file_path);
                    wp_update_attachment_metadata($attachment_id, $attach_data);
                }
            }
        }
    }

    // Revert to the old error reporting level
    error_reporting($old_error_reporting);
}


add_action('admin_menu', 'add_scan_uploads_page');

function add_scan_uploads_page()
{
    add_management_page('Scan Uploads Folder', 'Scan Uploads', 'manage_options', 'scan-uploads', 'scan_uploads_page');
}

function scan_uploads_page()
{
    if (isset($_POST['scan_uploads'])) {
        scan_uploads_folder();
        echo '<div class="updated"><p>Uploads folder scanned successfully!</p></div>';
    }
?>
    <div class="wrap">
        <h2>Scan Uploads Folder</h2>
        <form method="post">
            <input type="hidden" name="scan_uploads" value="1">
            <?php submit_button('Scan Now'); ?>
        </form>
    </div>
<?php
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
