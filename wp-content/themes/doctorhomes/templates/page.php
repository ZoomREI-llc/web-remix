<?php
// Include the header
doctor_homes_get_header(); ?>

<main id="main" class="site-main" role="main">
        <?php
        // Start the loop
        while (have_posts()) : the_post();
            // Display the content
            the_content();
        endwhile; // End of the loop
        ?>
</main>

<?php
// Include the footer
doctor_homes_get_footer();
