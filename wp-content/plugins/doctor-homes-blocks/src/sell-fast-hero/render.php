<?php
// dynamically rendering images and SVGs
$background_image_id = 535;
$background_image_url = wp_get_attachment_url($background_image_id);

$doctor_homes_image_id = 416;
$doctor_homes_image_url = wp_get_attachment_url($doctor_homes_image_id);

$desktop_text_vector_id = 536;
$desktop_text_vector_url = wp_get_attachment_url($desktop_text_vector_id);

$mobile_text_vector_id = 543;
$mobile_text_vector_url = wp_get_attachment_url($mobile_text_vector_id);

$google_icon_id = 431;
$google_icon_url = wp_get_attachment_url($google_icon_id);

$bbb_icon_id = 430;
$bbb_icon_url = wp_get_attachment_url($bbb_icon_id);

$a_plus_icon_id = 429;
$a_plus_icon_url = wp_get_attachment_url($a_plus_icon_id);
?>

<a id="top"></a>
<section class="sf-hero" style="
    --desktop-text-vector: url('<?php echo esc_url($desktop_text_vector_url); ?>'); 
    --mobile-text-vector: url('<?php echo esc_url($mobile_text_vector_url); ?>'); 
    --background-image: url('<?php echo esc_url($background_image_url); ?>');
">
    <div class="sf-hero__doctor-homes"><img src="<?php echo esc_url($doctor_homes_image_url); ?>" alt="Sell your house fast for cash with Doctor Homes"></div>
    <div class="sf-hero__content">
        <div class="sf-hero__heading-wrapper">
            <h1>Sell Your House Fast</br>
                No Realtors, No Fees, No Repairs</h1>
        </div>
        <h2>Get a Fair Cash Offer Today</br>
            and Sell Your House as is</h2>
        <p>Selling your home can be stressful and time-consuming.</br>
            We make it fast and hassle-free. At Doctor Homes, we buy houses in any condition, offering you a fair cash offer with no fees, no commissions, and no repairs needed.</p>
        <?php echo do_shortcode('[doctor_homes_form]'); ?>
        <!-- [gravityform id="1" title="false"] -->
        <div class="sf-hero__trust-icons">
            <img class="dh-hero__trust-icon" src="<?php echo esc_url($google_icon_url); ?>" alt="">
            <img class="dh-hero__trust-icon" src="<?php echo esc_url($bbb_icon_url); ?>" alt="">
            <img class="dh-hero__trust-icon" src="<?php echo esc_url($a_plus_icon_url); ?>" alt="">
        </div>
    </div>
</section>