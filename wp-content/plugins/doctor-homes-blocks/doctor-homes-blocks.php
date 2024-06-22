<?php

/**
 * Plugin Name:       Doctor Homes Blocks
 * Description:       Custom blocks package developed for the Doctor Homes Website.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Omri Ashkenazi
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       doctor-homes-blocks
 *
 * @package DoctorHomesBlocks
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

function doctor_homes_blocks_doctor_homes_blocks_block_init()
{
	register_block_type(__DIR__ . '/build/hero');
	register_block_type(__DIR__ . '/build/form');
	register_block_type(__DIR__ . '/build/benefits-dynamic');
	register_block_type(__DIR__ . '/build/testimonials');
	register_block_type(__DIR__ . '/build/faqs');
}
add_action('init', 'doctor_homes_blocks_doctor_homes_blocks_block_init');

function doctor_homes_blocks_enqueue_scripts()
{
	// Enqueue the view.js script
	wp_enqueue_script(
		'hero-view-script',
		plugin_dir_url(__FILE__) . 'src/hero/view.js',
		array(),
		filemtime(plugin_dir_path(__FILE__) . 'src/hero/view.js'),
		true
	);

	// Fetch the arrow icon URL
	$arrow_icon_id = 131; // Replace with your arrow icon attachment ID
	$arrow_icon_url = wp_get_attachment_url($arrow_icon_id);

	// Localize script with arrow icon URL
	wp_localize_script('hero-view-script', 'gformData', array(
		'arrowIconUrl' => $arrow_icon_url,
	));
}
add_action('wp_enqueue_scripts', 'doctor_homes_blocks_enqueue_scripts');
