<?php
$the_content = [
    do_shortcode("[doctor_homes_blog]")
];

doctor_homes_get_header();
?>

<main id="main" class="site-main" role="main">
    <?php
    while (have_posts()) : the_post();
        error_log('single.php - Start rendering post ID: ' . get_the_ID());
        doctor_homes_get_template_part_with_fallback('template-parts/content', 'single');
        error_log('single.php - End rendering post ID: ' . get_the_ID());
    endwhile; // End of the loop.
    ?>

    <?= implode(' ', $the_content) ?>
</main>

<?php
doctor_homes_get_footer();
