<?php
// dynamically rendering images and SVGs
$background_image_url = plugins_url('src/about-us-hero/assets/bg.webp', dirname(__FILE__, 2));

?>

<a id="top"></a>
<section class="about-us-hero" style="--background-image: url('<?php echo esc_url($background_image_url); ?>');">
    <div class="about-us-hero__content">
        <div class="about-us-hero__text">
            <div class="about-us-hero__heading-wrapper">
                <h1 class="about-us-hero__heading">
                    About<br>
                    Doctor Homes
                </h1>
            </div>
            <h2>Simplifying Home Sales with Fast, Stress-Free Solutions.</h2>
        </div>
    </div>
</section>