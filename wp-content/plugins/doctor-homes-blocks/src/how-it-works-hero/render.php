<?php
// dynamically rendering images and SVGs
$background_image_url = plugins_url('src/how-it-works-hero/assets/bg.webp', dirname(__FILE__, 2));

?>

<a id="top"></a>
<section class="hit-hero" style="--background-image: url('<?php echo esc_url($background_image_url); ?>');">
    <div class="hit-hero__content">
        <div class="hit-hero__text">
            <div class="hit-hero__heading-wrapper">
                <h1>How Doctor Homes Works</h1>
            </div>
            <h2>Sell Your House As Is with Our Easy Process</h2>
            <p>At Doctor Homes, we want you to enjoy peace of mind while we do all the work for you. We make selling your house a fast, easy, and simple-to-understand process.</p>
        </div>
    </div>
</section>