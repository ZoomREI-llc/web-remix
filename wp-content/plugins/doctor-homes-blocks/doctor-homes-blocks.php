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
	register_block_type(__DIR__ . '/build/benefits');
}
add_action('init', 'doctor_homes_blocks_doctor_homes_blocks_block_init');

function doctor_homes_blocks_enqueue_assets()
{
	wp_enqueue_style(
		'doctor-homes-brand-styles',
		plugins_url('brand-styles.css', __FILE__),
		array(),
		'1.0.0'
	);
}

add_action('enqueue_block_assets', 'doctor_homes_blocks_enqueue_assets');
