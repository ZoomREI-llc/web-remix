<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="bg-blue-500 text-white p-4">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </header>
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
  <footer>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>