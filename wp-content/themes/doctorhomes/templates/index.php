<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php doctor_homes_get_header(); ?>
    <main>
        <?php
        echo do_shortcode("[doctor_homes_blog-hero]");
        echo do_shortcode("[doctor_homes_blog-latest]");
        echo do_shortcode("[doctor_homes_blog-post-banner]");
        echo do_shortcode("[doctor_homes_blog-categories]");
        echo do_shortcode("[doctor_homes_blog-post-banner]");
        ?>
    </main>
    <?php doctor_homes_get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>