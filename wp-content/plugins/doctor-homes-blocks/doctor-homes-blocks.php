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
	$blocks = [
		'hero',
		'sell-fast-hero',
		'how-it-works-hero',
		'about-us-hero',
		'our-story',
		'our-mission',
		'lead-form',
		'contact-form',
		'banner-form',
		'media',
		'benefits',
		'sell-fast-benefits',
		'about-us-benefits',
		'steps',
		'sell-fast-steps',
		'about-us-steps',
		'why-us',
		'how-it-works-why-us',
		'forbes',
		'comparison',
		'sell-fast-comparison',
		'testimonials',
		'sell-fast-testimonials',
		'faqs',
		'sell-fast-faqs',
		'contact-us-faqs',
		'how-it-works-faqs',
		'cta',
		'blog',
		'post-banner',
        
        'cw-as-seen-on-carousel',
        'cw-blockquote',
        'cw-cta',
        'cw-faqs',
        'cw-footer',
        'cw-footer-v2',
        'cw-fresh-start',
        'cw-guarantee',
        'cw-header',
        'cw-hero',
        'cw-meet-doctorhomes',
        'cw-number-one',
        'cw-property-management',
        'cw-sell-today',
        'cw-service',
        'cw-steps',
        'cw-testimonials',
        'cw-virtue-carousel',
        'cw-why-choose-us',
        
        
        'lc-cta',
        'lc-faqs',
        'lc-fresh-start',
        'lc-guarantee',
        'lc-header',
        'lc-hero',
        'lc-meet-doctor',
        'lc-number-one',
        'lc-steps',
        'lc-testimonials',
        'lc-virtue-carousel',
        'lc-why-choose-us',
        
        'ao-why-choose-us',
        'ao-virtue-carousel',
        'ao-testimonials',
        'ao-steps',
        'ao-property-management',
        'ao-meet-doctor',
        'ao-hero',
        'ao-header',
        'ao-guarantee',
        'ao-fresh-start',
        'ao-faqs',
        'ao-cta',
        'ao-as-seen-on-carousel',
        
        
        'blog-hero',
        'blog-latest',
        'blog-categories',
	];

	foreach ($blocks as $block) {
		register_block_type(__DIR__ . "/build/$block");
		add_shortcode("doctor_homes_$block", function ($atts) use ($block) {
			$attributes = shortcode_atts([], $atts);
			return render_block([
				'blockName' => "doctor-homes/$block",
				'attrs' => $attributes,
			]);
		});
	}
}

add_action('init', 'doctor_homes_blocks_doctor_homes_blocks_block_init');
