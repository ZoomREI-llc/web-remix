<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Start Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-H3Y9EBZKYD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-H3Y9EBZKYD');
    </script>
    <!-- End Google tag (gtag.js) -->

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="doctor-homes-header">
        <div class="header-content">
            <button id="mobile-menu-button" class="mobile-menu-button">
                <img src="<?php echo wp_get_attachment_url(436); ?>" alt="Mobile Navigation Menu">
            </button>
            <div class="logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'container'      => '',
                    'menu_class'     => 'nav-menu',
                ));
                ?>
            </nav>
            <div class="contact-actions">
                <a href="tel:5109453588" class="contact-phone">
                    <img src="<?php echo wp_get_attachment_url(437); ?>" alt="Phone Icon" class="phone-icon">
                    <span>Call us on: (510) 945-3588</span>
                </a>
                <a href="<?php echo get_offer_button_link(); ?>" class="get-offer-button">
                    Get My Offer
                </a>
            </div>
        </div>
        <div id="mobile-menu" class="mobile-menu">
            <button id="close-mobile-menu" class="close-mobile-menu">
                <img src="<?php echo wp_get_attachment_url(432); ?>" alt="Close Mobile Navigation Menu">
            </button>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container'      => '',
                'menu_class'     => 'mobile-nav-menu',
                'walker'         => new Mobile_Walker_Nav_Menu(),
                'add_polygon'    => true,
            ));
            ?>
            <a href="<?php echo get_offer_button_link(); ?>" class="get-offer-button">
                Get My Offer <img src="<?php echo wp_get_attachment_url(412); ?>" alt="Get My Offer">
            </a>
        </div>
    </header>