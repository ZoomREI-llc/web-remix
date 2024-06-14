<?php
// Function to enqueue scripts and styles
function doctor_homes_enqueue_assets()
{
    // Enqueue Tailwind CSS
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/dist/style.css', array(), '1.0.0');

    // Enqueue Interactivity API script
    wp_enqueue_script('interactivity-api', get_template_directory_uri() . '/dist/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'doctor_homes_enqueue_assets');

// Function to add theme support
function doctor_homes_theme_support()
{
    // Add various theme supports
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_editor_style('dist/style.css');
}
add_action('after_setup_theme', 'doctor_homes_theme_support');
