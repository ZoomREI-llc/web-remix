<section class="dh-banner-form" style="
    --background-image-small: url('<?php echo get_image_url('banner-form/bg', 768); ?>');
    --background-image-medium: url('<?php echo get_image_url('banner-form/bg', 1024); ?>');
    --background-image-large: url('<?php echo get_image_url('banner-form/bg', 2048); ?>');
">
    <div class="dh-hero__reviews">
        <div class="dh-hero__reviews-stars-wrapper">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <span class="dh-hero__star"><?php echo get_responsive_image('banner-form/star', 'Star Icon'); ?></span>
            <?php endfor; ?>
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