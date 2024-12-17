<?php
$selectedMarket = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'Saint Louis';
?>

<section class="lcp-hero-wrapper" style="
    --background-image-small: url('<?php echo get_image_url('lcp-hero/hero-background', 768); ?>');
    --background-image-medium: url('<?php echo get_image_url('lcp-hero/hero-background', 1024); ?>');
    --background-image-large: url('<?php echo get_image_url('lcp-hero/hero-background', 2048); ?>');
    ">
    <div class="lcp-hero__content grid-container">
        <div class="lcp-hero__reviews">
            <div class="lcp-hero__reviews-stars-wrapper">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <span class="lcp-hero__star"><?php echo get_responsive_image('lcp-hero/star', 'star'); ?></span>
                <?php endfor; ?>
            </div>
            <div class="lcp-hero__reviews-text">
                <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
            </div>
        </div>
        <h1 class="lcp-hero__title title-1">Want to sell your house in <?= $selectedMarket ?> with no hassle?</h1>
        <h3 class="lcp-hero__subtitle sub-title">We Buy Houses Quickly for Cash – No Realtors, No Fees, No Repairs Needed!</h3>
        <div id="lcp-form" class="lcp-hero__form" data-form-name="Property Inquiry">
            <div class="lcp-hero__form--title">
                <span>Get Your Offer In Record Time</span>
            </div>
            <div class="lcp-hero__form--subtitle">
                <span>Fill out the form. We’ll contact you ASAP.</span>
            </div>
            <?php echo $content; ?>
        </div>
        <ul class="lcp-hero__bullet-points">
            <li class="lcp-hero__bullet-point"><?php echo get_responsive_image('lcp-hero/check-circle', 'checkmark'); ?>
                <span><strong>No need for you to clean or make repairs.</strong></span>
            </li>
            <li class="lcp-hero__bullet-point"><?php echo get_responsive_image('lcp-hero/check-circle', 'checkmark'); ?>
                <span><strong>No realtors, fees, banks, commissions, or inspectors.</strong></span>
            </li>
            <li class="lcp-hero__bullet-point"><?php echo get_responsive_image('lcp-hero/check-circle', 'checkmark'); ?>
                <span><strong>Close on Your timeline Whenever You're Ready.</strong></span>
            </li>
        </ul>
        <div class="lcp-hero__content--footer">
            <div class="cw-fresh-start__testimonial">
                <?php echo get_responsive_image('lcp-hero/liv-skyler', 'Liv Skyler', 'cw-fresh-start__testimonee'); ?>
                <div class="lcp-hero-start__testimonial--content cw-fresh-start__testimonial--content">
                    <blockquote>
                        <p>We are very grateful for Doctor Homes and his team's work. They were always professional and reliable, Doctor Homes answered my first call right away and kept me updated throughout the whole selling process.</p>
                        <cite>
                            <span>Liv Skyler</span>
                            <div class="lcp-hero__reviews-stars-wrapper">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <span class="lcp-hero__star"><?php echo get_responsive_image('lcp-hero/star', 'star'); ?></span>
                                <?php endfor; ?>
                            </div>
                        </cite>
                    </blockquote>
                </div>
            </div>
            <ul class="lcp-hero__statistic--list">
                <li class="lcp-hero__statistic--item">
                    <div class="lcp-hero__statistic--amunt">$36M+</div>
                    <div class="lcp-hero__statistic--text">Saved <span>Fees</span></div>
                </li>
                <li class="lcp-hero__statistic--item">
                    <div class="lcp-hero__statistic--amunt">1,500+</div>
                    <div class="lcp-hero__statistic--text">HOUSES <span>BOUGHT</span></div>
                </li>
                <li class="lcp-hero__statistic--item">
                    <div class="lcp-hero__statistic--amunt">96%</div>
                    <div class="lcp-hero__statistic--text">SATISFIED <span>CUSTOMERS</span></div>
                </li>
            </ul>
        </div>
        <div class="dh-hero__logos">
            <?php echo get_responsive_image('lcp-hero/logo-google', 'Google'); ?>
            <?php echo get_responsive_image('lcp-hero/logo-bbb', 'BBB'); ?>
            <?php echo get_responsive_image('lcp-hero/logo-a-plus', 'A+'); ?>
        </div>
    </div>
</section>