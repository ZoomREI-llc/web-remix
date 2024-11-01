<?php
$star_icon_id = 408;
$star_icon_url = wp_get_attachment_url($star_icon_id);

$arrow_icon_id = 412;
$arrow_icon_url = wp_get_attachment_url($arrow_icon_id);

$background_image_id = 586;
$background_image_url = wp_get_attachment_url($background_image_id);
?>

<section class="dh-banner-form" style="--background-image: url('<?php echo esc_url($background_image_url); ?>');">
    <div class="dh-hero__reviews">
        <div class="dh-hero__reviews-stars-wrapper">
            <span class="dh-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
            <span class="dh-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
            <span class="dh-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
            <span class="dh-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
            <span class="dh-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
        </div>
        <div class="dh-hero__reviews-text">
            <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
        </div>
    </div>
    <h4>We Buy ANY House In ANY Condition, On YOUR Timeline</h4>
    <h3>
        <span class="dh-banner-form__sell">Sell Your Home to</span>
        <span class="dh-banner-form__doctor-homes">Doctor Homes</span>
    </h3>

    <?php echo do_shortcode('[doctor_homes_lead-form-multistep]'); ?>
</section>