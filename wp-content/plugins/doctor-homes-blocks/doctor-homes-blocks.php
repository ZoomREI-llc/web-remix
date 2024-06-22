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
	register_block_type(__DIR__ . '/build/media');
	register_block_type(__DIR__ . '/build/benefits');
	register_block_type(__DIR__ . '/build/benefits-dynamic');
	register_block_type(__DIR__ . '/build/steps');
	register_block_type(__DIR__ . '/build/forbes');
	register_block_type(__DIR__ . '/build/comparison');
	register_block_type(__DIR__ . '/build/testimonials');
	register_block_type(__DIR__ . '/build/faqs');
	register_block_type(__DIR__ . '/build/cta');
	register_block_type(__DIR__ . '/build/blog');
}

add_action('init', 'doctor_homes_blocks_doctor_homes_blocks_block_init');
