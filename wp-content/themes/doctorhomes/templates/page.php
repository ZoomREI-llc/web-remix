<?php
// Include the header

ob_start();
while (have_posts()) : the_post();
    the_content();
endwhile;
$the_content = ob_get_clean();

doctor_homes_get_header(); ?>

<main id="main" class="site-main" role="main">
    <div class="page-container">
        <?= $the_content ?>
    </div>
</main>

<?php
// Include the footer
doctor_homes_get_footer();
