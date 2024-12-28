<?php

/**
 * Schedules an image (or other resource) for preloading in <head>.
 * We'll store them in a static array and print them later via wp_head.
 *
 * @param string $url        The absolute URL of the resource to preload.
 * @param string $as         The value for the 'as' attribute in <link rel="preload" as="..."> (e.g. 'image', 'script', etc.).
 * @param array  $extra_atts Additional attributes (e.g. ['fetchpriority'=>'high']).
 */
function schedule_preload($url, $as = 'image', $extra_atts = [])
{
    static $preloads = [];

    // If no URL, just return the current array (hack to fetch them later).
    if (!$url) {
        return $preloads;
    }

    // Add this preload
    $preloads[] = [
        'url'  => $url,
        'as'   => $as,
        'atts' => $extra_atts
    ];

    // Ensure we hook the printing function
    add_action('wp_head', 'print_scheduled_preloads', 5);
}

/**
 * Callback that actually prints the scheduled <link rel="preload"> tags.
 */
function print_scheduled_preloads()
{
    // We'll fetch the static array from schedule_preload by calling it with empty args
    $preloads = schedule_preload('', '', []);

    if (empty($preloads)) {
        return;
    }

    foreach ($preloads as $preload) {
        $url = esc_url($preload['url']);
        $as  = esc_attr($preload['as']);

        $extra_attr_str = '';
        foreach ($preload['atts'] as $k => $v) {
            $extra_attr_str .= ' ' . esc_attr($k) . '="' . esc_attr($v) . '"';
        }

        echo "<link rel=\"preload\" as=\"{$as}\" href=\"{$url}\"{$extra_attr_str} />\n";
    }
}
