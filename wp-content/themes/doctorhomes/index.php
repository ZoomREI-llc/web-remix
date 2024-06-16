<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php get_header(); ?>
  <main>
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        get_template_part('template-parts/content', get_post_format());
      endwhile;
    else :
      get_template_part('template-parts/content', 'none');
    endif;
    ?>
  </main>
  <?php get_footer(); ?>
  <?php wp_footer(); ?>
</body>

</html>