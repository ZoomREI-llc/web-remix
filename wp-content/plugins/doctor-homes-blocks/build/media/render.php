<?php
$nbc_logo_id = 94;
$nbc_logo_url = wp_get_attachment_url($nbc_logo_id);

$forbes_logo_id = 92;
$forbes_logo_url = wp_get_attachment_url($forbes_logo_id);

$abc_logo_id = 90;
$abc_logo_url = wp_get_attachment_url($abc_logo_id);

$cbs_logo_id = 91;
$cbs_logo_url = wp_get_attachment_url($cbs_logo_id);

$fox_logo_id = 93;
$fox_logo_url = wp_get_attachment_url($fox_logo_id);
?>

<div class="featured-in">
    <div class="featured-in__container">
        <span class="featured-in__text">Featured in:</span>
        <div class="featured-in__logos-wrapper">
            <div class="featured-in__logos">
                <div class="featured-in__logo"><img src="<?php echo esc_url($nbc_logo_url); ?>" alt="NBC"></div>
                <div class="featured-in__logo"><img src="<?php echo esc_url($forbes_logo_url); ?>" alt="Forbes"></div>
                <div class="featured-in__logo"><img src="<?php echo esc_url($abc_logo_url); ?>" alt="ABC"></div>
                <div class="featured-in__logo"><img src="<?php echo esc_url($cbs_logo_url); ?>" alt="CBS"></div>
                <div class="featured-in__logo"><img src="<?php echo esc_url($fox_logo_url); ?>" alt="FOX"></div>
            </div>
        </div>
    </div>
</div>