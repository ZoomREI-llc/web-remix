<?php
/*
Template Name: Landing Page
*/
?>

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
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>

<main id="main" class="site-main" role="main">
    <div class="page-container">
        <?php
        // Start the loop
        while (have_posts()) : the_post();
            // Display the content
            the_content();
        endwhile; // End of the loop
        ?>
    </div>
</main>

<div class="footer-disclaimer">
    <hr style="border-top: 1px solid #CCCCCC;" /> <!-- Separator line -->
    <p>The content provided on this website is intended for informational purposes only and does not constitute an offer to buy or a solicitation to sell property. All representations regarding potential transactions are preliminary and subject to change. No content on this site should be interpreted as a binding promise or guarantee of a specific outcome. Each property purchase will be subject to individual negotiation and the execution of a definitive agreement, the terms of which may vary. We make no warranties regarding the accuracy, completeness, legality, or reliability of any information offered on this website. Sellers are advised to conduct their own due diligence and consult with professional advisors prior to entering into any transaction with us.</p>
</div>

<style>
    .footer-disclaimer hr {
        margin: 1rem 0;
    }

    .footer-disclaimer p {
        font-size: 0.75em;
        /*color: #666;*/
        padding: 0 1rem;
        line-height: 1rem;
        text-align: center;
    }
</style>

<?php wp_footer(); ?>
</body>

</html>