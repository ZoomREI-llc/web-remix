<?php
// dynamically rendering images and SVGs
$background_image_url = plugins_url('src/sell-fast-hero/assets/bg.webp', dirname(__FILE__, 2));

$google_icon_id = 431;
$google_icon_url = wp_get_attachment_url($google_icon_id);

$bbb_icon_id = 430;
$bbb_icon_url = wp_get_attachment_url($bbb_icon_id);

$a_plus_icon_id = 429;
$a_plus_icon_url = wp_get_attachment_url($a_plus_icon_id);
?>

<a id="top"></a>
<section class="sf-hero" style="--background-image: url('<?= $background_image_url ?>');">
    <div class="sf-hero__content">
        <div class="sf-hero__heading-wrapper">
            <h1>Sell Your House Fast</br>
                No Realtors, No Fees, No Repairs</h1>
        </div>
        <h2>Get a Fair Cash Offer Today</br>
            and Sell Your House as is</h2>
        <p>Selling your home can be stressful and time-consuming.</br>
            We make it fast and hassle-free. At Doctor Homes, we buy houses in any condition, offering you a fair cash offer with no fees, no commissions, and no repairs needed.</p>
        <?php echo do_shortcode('[doctor_homes_lead-form-multistep]'); ?>
        <!-- [gravityform id="1" title="false"] -->
        <div class="sf-hero__trust-icons">
            <img class="dh-hero__trust-icon" src="<?php echo esc_url($google_icon_url); ?>" alt="">
            <img class="dh-hero__trust-icon" src="<?php echo esc_url($bbb_icon_url); ?>" alt="">
            <img class="dh-hero__trust-icon" src="<?php echo esc_url($a_plus_icon_url); ?>" alt="">
        </div>
    </div>
</section>