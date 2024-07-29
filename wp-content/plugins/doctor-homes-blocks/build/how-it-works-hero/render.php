<?php
// dynamically rendering images and SVGs
$background_image_id = 566;
$background_image_url = wp_get_attachment_url($background_image_id);

$desktop_text_vector_id = 567;
$desktop_text_vector_url = wp_get_attachment_url($desktop_text_vector_id);

$mobile_text_vector_id = 543;
$mobile_text_vector_url = wp_get_attachment_url($mobile_text_vector_id);
?>

<a id="top"></a>
<section class="hit-hero" style="
    --desktop-text-vector: url('<?php echo esc_url($desktop_text_vector_url); ?>'); 
    --mobile-text-vector: url('<?php echo esc_url($mobile_text_vector_url); ?>'); 
    --background-image: url('<?php echo esc_url($background_image_url); ?>');
">
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