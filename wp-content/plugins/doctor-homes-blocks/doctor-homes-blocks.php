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

		'cw-number-one',
		'cw-header',
		'cw-hero',
		'cw-as-seen-on-carousel',
		'cw-steps',
		'cw-blockquote',
		'cw-meet-doctorhomes',
		'cw-why-choose-us',
		'cw-service',
		'cw-testimonials',
		'cw-faqs',
		'cw-sell-today',
		'cw-footer',

		// 'cw-fresh-start',
		// 'cw-guarantee',
		// 'cw-property-management',
		// 'cw-virtue-carousel',
		// 'cw-cta',

		'lc-header',
		'lc-number-one',
		'lc-hero',
		'lc-virtue-carousel',
		'lc-steps',
		'lc-meet-doctor',
		'lc-fresh-start',
		'lc-why-choose-us',
		'lc-guarantee',
		'lc-testimonials',
		'lc-faqs',
		'lc-cta',
		'cw-footer-v2',

		'ao-header',
		'ao-virtue-carousel',
		'ao-hero',
		'ao-as-seen-on-carousel',
		'ao-steps',
		'ao-meet-doctor',
		'ao-property-management',
		'ao-fresh-start',
		'ao-why-choose-us',
		'ao-guarantee',
		'ao-testimonials',
		'ao-faqs',
		'ao-cta',

		'blog-hero',
		'blog-latest',
		'blog-post-banner',
		'blog-categories',

		'blog-category-hero',
		'blog-category',

		'faq-accordions',
		'faq-form',

		'lcp-hero',
		'lcp-as-seen-on-carousel',
		'lcp-benefits',
		'lcp-steps',
		'lcp-why-sell',
		'lcp-comparison',
		'lcp-testimonials',
		'lcp-faqs',
		'lcp-sell-today',
  
		's2-form',
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

add_action('wp_enqueue_scripts', function () {
    wp_register_script('doctor-homes-inline', '', [], false, false);
    
    $loadScripts = file_get_contents(__DIR__ . '/utils/loadScript.js');
    
    if ($loadScripts !== false) {
        wp_add_inline_script('doctor-homes-inline', $loadScripts);
    }
    
    wp_enqueue_script('doctor-homes-inline');
}, 0);

add_filter('should_load_separate_core_block_assets', '__return_true');
