<?php

$the_content = [
    do_shortcode("[doctor_homes_blog-hero]"),
    do_shortcode("[doctor_homes_blog-latest]"),
    do_shortcode("[doctor_homes_blog-post-banner]"),
    do_shortcode("[doctor_homes_blog-categories]"),
    do_shortcode("[doctor_homes_blog-post-banner]")
];

doctor_homes_get_header();
?>
<main>
    <?= implode(' ', $the_content) ?>
</main>
<?php doctor_homes_get_footer(); ?>