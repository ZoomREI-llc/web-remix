<?php
// File: includes/image-helper.php

function get_responsive_image($image_name, $alt = '', $class = '', $extension = 'webp')
{
    $base_url = get_stylesheet_directory_uri() . '/build/images/';
    $sizes = [150, 300, 768, 1024, 1536, 2048];
    $srcset = [];

    if ($extension === 'svg') {
        // Serve SVG directly without responsive logic
        return "<img src='{$base_url}{$image_name}.svg' alt='{$alt}' class='{$class}'>";
    }

    foreach ($sizes as $size) {
        $srcset[] = "{$base_url}{$image_name}-{$size}.{$extension} {$size}w";
    }

    $srcset_attr = implode(', ', $srcset);

    return "<img src='{$base_url}{$image_name}-300.{$extension}' alt='{$alt}' class='{$class}' srcset='{$srcset_attr}' sizes='(max-width: 768px) 768px, (max-width: 1024px) 1024px, 2048px'>";
}
