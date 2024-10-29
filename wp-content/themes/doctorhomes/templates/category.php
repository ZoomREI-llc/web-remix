<?php
    
    $the_content = [
        do_shortcode("[doctor_homes_blog-category-hero]"),
        do_shortcode("[doctor_homes_blog-category]"),
        do_shortcode("[doctor_homes_blog-post-banner]")
    ];
    
    doctor_homes_get_header();
?>
<main>
    <?= implode(' ', $the_content) ?>
</main>
<?php doctor_homes_get_footer(); ?>
