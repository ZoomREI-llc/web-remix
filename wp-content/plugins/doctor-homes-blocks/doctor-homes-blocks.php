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
	];

	foreach ($blocks as $block) {
		register_block_type(__DIR__ . "/build/$block", [
			// Note: CSS is no longer automatically loaded. We removed the "style" field from block.json 
			// and now enqueue it manually through the render_callback.
			'render_callback' => function ($attributes, $content) use ($block) {
				// Conditionally enqueue CSS.
				wp_enqueue_style(
					"doctor-homes-$block-style",
					plugins_url("build/$block/style-index.css", __FILE__),
					[],
					filemtime(__DIR__ . "/build/$block/style-index.css")
				);

				// Render the block’s dynamic content.
				ob_start();
				include __DIR__ . "/src/$block/render.php";
				return ob_get_clean();
			}
		]);

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
