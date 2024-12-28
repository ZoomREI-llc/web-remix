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

// Include form handler
function doctor_homes_blocks_doctor_homes_blocks_block_init()
{
	$blocks = [
		'hero-form',
		'sell-fast-hero',
		'how-it-works-hero',
		'about-us-hero',
		'our-story',
		'our-mission',
		'lead-form',
		'lead-form-consent',
		'lead-form-contact',
		'form-step-2',
		'lead-form-compact',
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

		'cookie-banner'
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
	wp_enqueue_script('form-engine', plugin_dir_url(__FILE__) . 'includes/form-engine/script.js');

	add_filter('script_loader_tag', function ($tag, $handle) {
		if ('form-engine' === $handle) {
			$tag = str_replace('<script ', '<script type="module" ', $tag);
		}
		return $tag;
	}, 10, 2);
    
    if (is_page()) {
        $post_id = get_the_ID();
        $market_code = get_post_meta($post_id, '_market_code', true);

        if ($market_code) {
            $script = 'window.marketCode = "' . esc_js($market_code) . '";';
            wp_add_inline_script('doctor-homes-inline', $script);
        }
    }
}, 0);

function add_market_code_metabox() {
    add_meta_box(
        'market_code_metabox',
        'Market Code',
        'render_market_code_metabox',
        'page',
        'side'
    );
}
add_action('add_meta_boxes', 'add_market_code_metabox');

function render_market_code_metabox($post) {
    $market_code = get_post_meta($post->ID, '_market_code', true);
    
    wp_nonce_field('market_code_nonce_action', 'market_code_nonce');
    
    echo '<style>.postbox-header .handle-actions{flex-direction: row;display: flex;padding: 12px 10px;}.edit-post-meta-boxes-area .postbox .handle-order-higher, .edit-post-meta-boxes-area .postbox .handle-order-lower {width: 20px;height: 20px;padding: 0 !important;}</style>';
    echo '<label for="market_code_field">Market Code:</label>';
    echo '<input type="text" id="market_code_field" name="market_code_field" value="' . esc_attr($market_code) . '" style="width:100%;">';
}

function save_market_code_metabox($post_id) {
    if (!isset($_POST['market_code_nonce']) || !wp_verify_nonce($_POST['market_code_nonce'], 'market_code_nonce_action')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['market_code_field'])) {
        update_post_meta($post_id, '_market_code', sanitize_text_field($_POST['market_code_field']));
    }
}
add_action('save_post', 'save_market_code_metabox');

add_filter('should_load_separate_core_block_assets', '__return_true');

require_once plugin_dir_path(__FILE__) . 'includes/form-engine/handler.php';
include_once plugin_dir_path(__FILE__) . 'includes/image-helpers.php';
include_once plugin_dir_path(__FILE__) . 'includes/preload-helpers.php';
