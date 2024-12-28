<?php

/**
 * Image Helper Functions
 *
 * Provides functions to generate responsive images, image URLs, and handle
 * extra HTML attributes in a more developer-friendly way.
 *
 * @package YourPluginName
 */

/**
 * Helper to build a string of HTML attributes from an associative array.
 * E.g. ['class'=>'my-class','loading'=>'lazy'] -> ' class="my-class" loading="lazy"'
 *
 * @param array $attributes Associative array of attribute => value
 * @return string A space-prefixed string of HTML attributes (e.g. ` src="..." alt="..."`)
 */
function build_html_attributes($attributes)
{
    $attributes_str = '';

    foreach ($attributes as $key => $value) {
        // Allow boolean attributes: if true, add the attribute; if false, omit
        if (is_bool($value)) {
            if ($value) {
                $attributes_str .= ' ' . esc_attr($key);
            }
        } else {
            // Otherwise, key="value"
            $attributes_str .= ' ' . esc_attr($key) . '="' . esc_attr($value) . '"';
        }
    }

    return $attributes_str;
}

/**
 * Generates a responsive <img> tag (or SVG) using an array of arguments.
 * Developer-friendly: no more passing empty placeholder parameters!
 *
 * @param array $args {
 *     @type string $image_name        Required. Base name of the image in 'optimized-assets/'.
 *     @type string $alt               Alt text (default '').
 *     @type string $class             CSS class (default '').
 *     @type string $sizes_attr        The sizes attribute (default '100vw').
 *     @type string $extension         File extension (default 'webp').
 *     @type int    $default_size      Default width for the src (default 300).
 *     @type array  $additional_attrs  Extra HTML attributes, e.g. ['loading'=>'lazy'] (default []).
 * }
 * @return string <img> HTML string, or empty string if none found.
 */
function get_responsive_image($args = [])
{
    // 1) Define default arguments
    $defaults = [
        'image_name'       => '',
        'alt'              => '',
        'class'            => '',
        'sizes_attr'       => '',
        'extension'        => 'webp',
        'default_size'     => 300,
        'additional_attrs' => []
    ];

    // 2) Merge provided args with defaults
    $args = wp_parse_args($args, $defaults);

    // 3) Extract variables
    $image_name       = $args['image_name'];
    $alt              = $args['alt'];
    $class            = $args['class'];
    $sizes_attr       = $args['sizes_attr'];
    $extension        = $args['extension'];
    $default_size     = $args['default_size'];
    $additional_attrs = $args['additional_attrs'];

    // If no image name, bail out
    if (empty($image_name)) {
        return '';
    }

    static $file_cache = []; // Cache for file existence & dimensions

    $base_url = plugin_dir_url(__DIR__) . 'optimized-assets/';
    $base_dir = plugin_dir_path(__DIR__) . 'optimized-assets/';
    $sizes    = [150, 300, 768, 1024, 1536, 2048];

    // Sanitize the image path parts
    $image_parts = explode('/', $image_name);
    $image_parts = array_map('sanitize_file_name', $image_parts);
    $image_name_sanitized = implode('/', $image_parts);

    $alt   = esc_attr($alt);
    $class = esc_attr($class);

    // 4) Check if an SVG exists
    $svg_path = "{$base_dir}{$image_name_sanitized}.svg";
    if (!isset($file_cache[$svg_path])) {
        $file_cache[$svg_path] = file_exists($svg_path);
    }
    if ($file_cache[$svg_path]) {
        // Serve SVG directly (no srcset)
        $src = esc_url("{$base_url}{$image_name_sanitized}.svg");

        // Build <img> attributes
        $attributes = [
            'src'   => $src,
            'alt'   => $alt,
            'class' => $class
        ];
        $attributes = array_merge($attributes, $additional_attrs);

        return '<img' . build_html_attributes($attributes) . '>';
    }

    // 5) Build srcset for raster images
    $srcset = [];
    foreach ($sizes as $size) {
        $image_file = "{$base_dir}{$image_name_sanitized}-{$size}.{$extension}";

        if (!isset($file_cache[$image_file])) {
            $file_cache[$image_file] = file_exists($image_file);
            if ($file_cache[$image_file]) {
                // Store actual width in cache
                $img_info = getimagesize($image_file);
                $file_cache[$image_file . '_width'] = $img_info[0];
            }
        }
        if ($file_cache[$image_file]) {
            $actual_width = $file_cache[$image_file . '_width'];
            $srcset[] = esc_url("{$base_url}{$image_name_sanitized}-{$size}.{$extension}") . " {$actual_width}w";
        }
    }

    if (empty($srcset)) {
        // No images found
        return '';
    }
    $srcset_attr = implode(', ', $srcset);

    // 6) Fallback for sizes attribute
    if (empty($sizes_attr)) {
        $sizes_attr = '100vw';
    } else {
        $sizes_attr = esc_attr($sizes_attr);
    }

    // 7) Determine the default src
    $default_image_file = "{$base_dir}{$image_name_sanitized}-{$default_size}.{$extension}";
    if (!isset($file_cache[$default_image_file])) {
        $file_cache[$default_image_file] = file_exists($default_image_file);
    }

    // We'll store whichever file we end up using in $final_image_file
    $final_image_file = '';
    if ($file_cache[$default_image_file]) {
        $src = esc_url("{$base_url}{$image_name_sanitized}-{$default_size}.{$extension}");
        $final_image_file = $default_image_file;
    } else {
        // Fallback to first available
        $src = '';
        foreach ($sizes as $size) {
            $image_file = "{$base_dir}{$image_name_sanitized}-{$size}.{$extension}";
            if (!empty($file_cache[$image_file])) {
                $src = esc_url("{$base_url}{$image_name_sanitized}-{$size}.{$extension}");
                $final_image_file = $image_file;
                break;
            }
        }
        if (!$src) {
            // No valid src found
            return '';
        }
    }

    // 8) If we found a final image file, gather its intrinsic width/height for CLS
    $img_width  = '';
    $img_height = '';
    if ($final_image_file && !isset($file_cache[$final_image_file . '_dimensions'])) {
        // Not already cached, so get dimensions
        $image_info = getimagesize($final_image_file);
        $file_cache[$final_image_file . '_dimensions'] = [
            'width'  => $image_info[0],
            'height' => $image_info[1],
        ];
    }

    // Retrieve from cache or from just-stored array
    if (!empty($file_cache[$final_image_file . '_dimensions'])) {
        $img_width  = $file_cache[$final_image_file . '_dimensions']['width'];
        $img_height = $file_cache[$final_image_file . '_dimensions']['height'];
    }

    // 9) Build final <img> attributes
    $attributes = [
        'src'    => $src,
        'alt'    => $alt,
        'class'  => $class,
        'srcset' => $srcset_attr,
        'sizes'  => $sizes_attr
    ];

    // If we have valid dims, set them so the browser can reserve aspect ratio
    if (!empty($img_width) && !empty($img_height)) {
        $attributes['width']  = $img_width;
        $attributes['height'] = $img_height;
    }

    // Merge any additional attributes from user
    $attributes = array_merge($attributes, $additional_attrs);

    return '<img' . build_html_attributes($attributes) . '>';
}

/**
 * Generates the URL for an image file of a specific size, with support for SVG fallback.
 *
 * @param string   $image_name The base name of the image, including subdirectories relative to the optimized-assets folder.
 * @param int|null $size       The desired image size (e.g., 2048). If null, attempts to use the largest available size.
 * @param string   $extension  The primary image file extension (default 'webp').
 * @return string              The URL to the image file or an empty string if not found.
 */
function get_image_url($image_name, $size = null, $extension = 'webp')
{
    static $file_cache = []; // Cache to store file existence checks
    $base_url = plugin_dir_url(__DIR__) . 'optimized-assets/';
    $base_dir = plugin_dir_path(__DIR__) . 'optimized-assets/';
    $sizes    = [2048, 1536, 1024, 768, 300, 150];

    // Sanitize input
    $image_parts = explode('/', $image_name);
    $image_parts = array_map('sanitize_file_name', $image_parts);
    $image_name_sanitized = implode('/', $image_parts);

    // We'll try the primary extension first, then 'svg' if not found
    $extensions_to_try = [$extension];
    if ($extension !== 'svg') {
        $extensions_to_try[] = 'svg';
    }

    foreach ($extensions_to_try as $ext) {
        // 1) If size is specified, look for that size
        if ($size !== null) {
            $size = intval($size);
            $image_file = "{$image_name_sanitized}-{$size}.{$ext}";
            $image_path = "{$base_dir}{$image_file}";

            if (!isset($file_cache[$image_path])) {
                $file_cache[$image_path] = file_exists($image_path);
            }
            if ($file_cache[$image_path]) {
                return esc_url("{$base_url}{$image_file}");
            }
        }

        // 2) If size not found or null, try largest to smallest
        foreach ($sizes as $available_size) {
            $image_file = "{$image_name_sanitized}-{$available_size}.{$ext}";
            $image_path = "{$base_dir}{$image_file}";

            if (!isset($file_cache[$image_path])) {
                $file_cache[$image_path] = file_exists($image_path);
            }
            if ($file_cache[$image_path]) {
                return esc_url("{$base_url}{$image_file}");
            }
        }

        // 3) Check for unsuffixed file, e.g. 'image_name.webp'
        $image_file = "{$image_name_sanitized}.{$ext}";
        $image_path = "{$base_dir}{$image_file}";

        if (!isset($file_cache[$image_path])) {
            $file_cache[$image_path] = file_exists($image_path);
        }
        if ($file_cache[$image_path]) {
            return esc_url("{$base_url}{$image_file}");
        }
    }

    // Nothing found
    return '';
}
