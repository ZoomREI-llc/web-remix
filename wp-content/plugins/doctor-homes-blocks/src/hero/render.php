<?php
// dynamically rendering images and SVGs



$star_icon_id = 408;
$star_icon_url = wp_get_attachment_url($star_icon_id);

$checkmark_icon_id = 411;
$checkmark_icon_url = wp_get_attachment_url($checkmark_icon_id);

$testimonial_image_id = 455;
$testimonial_image_url = wp_get_attachment_url($testimonial_image_id);

$google_icon_id = 431;
$google_icon_url = wp_get_attachment_url($google_icon_id);

$bbb_icon_id = 430;
$bbb_icon_url = wp_get_attachment_url($bbb_icon_id);

$a_plus_icon_id = 429;
$a_plus_icon_url = wp_get_attachment_url($a_plus_icon_id);
?>
<a id="top"></a>
<section class="dh-hero" style="
    --background-image-small: url('<?php echo get_image_url('hero/hero-background', 768); ?>');
    --background-image-medium: url('<?php echo get_image_url('hero/hero-background', 1024); ?>');
    --background-image-large: url('<?php echo get_image_url('hero/hero-background', 2048); ?>');
    ">
    <div class="dh-hero__content">
        <div class="dh-hero__reviews">
            <div class="dh-hero__reviews-stars-wrapper">
                <span class="dh-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                <span class="dh-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                <span class="dh-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                <span class="dh-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                <span class="dh-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
            </div>
            <div class="dh-hero__reviews-text">
                <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
            </div>
        </div>
        <div class="dh-hero__titles">
            <h1>Sell Your Home To Doctor Homes</h1>
            <h2>Sell Your House Fast For Cash In Any Condition.</h2>
        </div>
        <?php echo do_shortcode('[doctor_homes_lead-form-multistep]'); ?>
        <!-- [gravityform id="1" title="false"] -->
        <div class="dh-hero__trust-icons">
            <?php echo get_responsive_image('hero/google-five-stars', 'google-five-stars', 'dh-hero__trust-icon'); ?>
            <?php echo get_responsive_image('hero/BBB', 'BBB', 'dh-hero__trust-icon'); ?>
            <?php echo get_responsive_image('hero/a-plus', 'a-plus', 'dh-hero__trust-icon'); ?>
        </div>
        <ul class="dh-hero__bullet-points">
            <li class="dh-hero__bullet-point"><?php echo get_responsive_image('hero/check-mark-yellow', 'checkmark'); ?>
                <span>No need for you to clean or make repairs.</span>
            </li>
            <li class="dh-hero__bullet-point"><?php echo get_responsive_image('hero/check-mark-yellow', 'checkmark'); ?>
                <span>No realtors, fees, banks, commissions, or inspectors.</span>
            </li>
            <li class="dh-hero__bullet-point"><?php echo get_responsive_image('hero/check-mark-yellow', 'checkmark'); ?>
                <span>Close on Your timeline Whenever You're Ready.</span>
            </li>
        </ul>
        <div class="dh-hero__credibility">
            <div class="dh-hero__credibility-testimonial">
                <?php echo get_responsive_image('hero/liv-skyler', '', 'dh-hero__credibility-testimonial-image'); ?>
                <div class="dh-hero__credibility-content">
                    <p class="dh-hero__credibility-text">“We are very grateful for Doctor Homes. They were always professional and reliable, they answered my first call right away and kept me updated throughout the whole selling process.”</p>
                    <div class="dh-hero__credibility-testimonial-name">
                        <span class="dh-hero__credibility-testimonial-name-container">
                            <span>Liv Skyler</span>
                            <div class="dh-hero__credibility-stars-wrapper">
                                <span class="dh-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                                <span class="dh-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                                <span class="dh-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                                <span class="dh-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                                <span class="dh-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <ul class="dh-hero__credibility-data">
                <li>
                    <span class="dh-hero__credibility-data-number">36M+</span>
                    <span class="dh-hero__credibility-data-text">SAVED FEES</span>
                </li>
                <li>
                    <span class="dh-hero__credibility-data-number">1500+</span>
                    <span class="dh-hero__credibility-data-text">HOUSES BOUGHT</span>
                </li>
                <li>
                    <span class="dh-hero__credibility-data-number">96%</span>
                    <span class="dh-hero__credibility-data-text">SATISFIED CUSTOMERS</span>
                </li>
            </ul>
        </div>
    </div>
</section>