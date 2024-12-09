<a id="top"></a>
<section class="sf-hero" style="
    --background-image-small: url('<?php echo get_image_url('sell-fast-hero/bg', 768); ?>');
    --background-image-medium: url('<?php echo get_image_url('sell-fast-hero/bg', 1024); ?>');
    --background-image-large: url('<?php echo get_image_url('sell-fast-hero/bg', 2048); ?>');
">
    <div class="grid-container">
        <div class="sf-hero__content">
            <div class="sf-hero__reviews">
                <div class="sf-hero__reviews-stars-wrapper">
                    <span class="sf-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                    <span class="sf-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                    <span class="sf-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                    <span class="sf-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                    <span class="sf-hero__star"><?php echo get_responsive_image('hero/star', 'star'); ?></span>
                </div>
                <div class="sf-hero__reviews-text">
                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>
            <div class="sf-hero__heading-wrapper">
                <h1 class="title-1">Sell Your House Fast</h1>
            </div>
            <h2 class="title-2">No Realtors, No Fees, No Repairs<br>
                Get a Fair Cash Offer Today  and Sell Your House as is</h2>
            <p class="title-4">Selling your home can be stressful and time-consuming.  We make it fast and hassle-free.
                At Doctor Homes, we buy houses in any condition, offering you a fair cash offer with no fees,
                no commissions, and no repairs needed.</p>
            <?php echo do_shortcode('[doctor_homes_lead-form-multistep]'); ?>
            <div class="sf-hero__trust-icons">
                <?php echo get_responsive_image('hero-form/logo-google', 'Google', 'dh-hero__trust-icon'); ?>
                <?php echo get_responsive_image('hero-form/logo-bbb', 'BBB', 'dh-hero__trust-icon'); ?>
                <?php echo get_responsive_image('hero-form/logo-a-plus', 'A+', 'dh-hero__trust-icon'); ?>
            </div>
        </div>
    </div>
</section>