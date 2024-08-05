<?php
// dynamically rendering images and SVGs
$desktop_background_image_id = 574;
$desktop_background_image_url = wp_get_attachment_url($desktop_background_image_id);

$mobile_background_image_id = 575;
$mobile_background_image_url = wp_get_attachment_url($mobile_background_image_id);

$desktop_text_vector_id = 567;
$desktop_text_vector_url = wp_get_attachment_url($desktop_text_vector_id);

$mobile_text_vector_id = 543;
$mobile_text_vector_url = wp_get_attachment_url($mobile_text_vector_id);
?>

<a id="top"></a>
<section class="about-us-hero" style="
    --desktop-text-vector: url('<?php echo esc_url($desktop_text_vector_url); ?>'); 
    --mobile-text-vector: url('<?php echo esc_url($mobile_text_vector_url); ?>'); 
    --desktop-background-image: url('<?php echo esc_url($desktop_background_image_url); ?>');
    --mobile-background-image: url('<?php echo esc_url($mobile_background_image_url); ?>');
">
    <div class="about-us-hero__content">
        <div class="about-us-hero__text">
            <div class="about-us-hero__heading-wrapper">
                <h1 class="about-us-hero__heading">
                    <span class="about-us-hero__about">About</span>
                    <span class="about-us-hero__doctor">Doctor Homes</span>
                </h1>
            </div>
            <h2>Simplifying Home Sales with Fast, Stress-Free Solutions.</h2>
        </div>
    </div>
</section>