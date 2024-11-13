<section class="dh-hero-form-wrapper" style="
    --background-image-small: url('<?php echo get_image_url('hero-form/bg', 768); ?>');
    --background-image-medium: url('<?php echo get_image_url('hero-form/bg', 1024); ?>');
    --background-image-large: url('<?php echo get_image_url('hero-form/bg', 2048); ?>');
">
    <div class="dh-hero-form__content">
        <div class="dh-hero-form__reviews">
            <div class="dh-hero-form__reviews-stars-wrapper">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <span class="dh-hero-form__star"><?php echo get_responsive_image('hero-form/star', 'star'); ?></span>
                <?php endfor; ?>
            </div>
            <div class="dh-hero-form__reviews-text">
                <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
            </div>
        </div>
        <h1 class="dh-hero-form__title">Sell Your Home To Doctor Homes</h1>
        <div id="cw-form" class="dh-hero-form__form">
            <div class="dh-hero-form__form--title">
                <span>Get Your Offer In Record Time</span>
            </div>
            <div class="dh-hero-form__form--subtitle">
                <span>Fill out the form. We’ll contact you ASAP.</span>
            </div>
            <?php echo $content; ?>
        </div>
        <h3 class="dh-hero-form__subtitle">Sell Your House Fast For Cash In Any Condition.</h3>
        <ul class="dh-hero-form__bullet-points">
            <li class="dh-hero-form__bullet-point"><?php echo get_responsive_image('lcp-hero/check-circle', 'checkmark'); ?>
                <span><strong>No need for you to clean or make repairs.</strong></span>
            </li>
            <li class="dh-hero-form__bullet-point"><?php echo get_responsive_image('lcp-hero/check-circle', 'checkmark'); ?>
                <span><strong>No realtors, fees, banks, commissions, or inspectors.</strong></span>
            </li>
            <li class="dh-hero-form__bullet-point"><?php echo get_responsive_image('lcp-hero/check-circle', 'checkmark'); ?>
                <span><strong>Close on Your timeline Whenever You're Ready.</strong></span>
            </li>
        </ul>
        <div class="dh-hero__logos">
            <?php echo get_responsive_image('hero-form/logo-google', 'Google'); ?>
            <?php echo get_responsive_image('hero-form/logo-bbb', 'BBB'); ?>
            <?php echo get_responsive_image('hero-form/logo-a-plus', 'A+'); ?>
        </div>
        <div class="dh-hero-form__content--footer">
            <div class="cw-fresh-start__testimonial">
                <?php echo get_responsive_image('hero-form/liv-skyler', 'Liv Skyler', 'cw-fresh-start__testimonee'); ?>
                <div class="dh-hero-form-start__testimonial--content cw-fresh-start__testimonial--content">
                    <blockquote>
                        <p>We are very grateful for Doctor Homes and his team's work. They were always professional and reliable, Doctor Homes answered my first call right away and kept me updated throughout the whole selling process.</p>
                        <cite>
                            <span>Liv Skyler</span>
                            <div class="dh-hero-form__reviews-stars-wrapper">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <span class="dh-hero-form__star"><?php echo get_responsive_image('hero-form/star', 'star'); ?></span>
                                <?php endfor; ?>
                            </div>
                        </cite>
                    </blockquote>
                </div>
            </div>
            <ul class="dh-hero-form__statistic--list">
                <li class="dh-hero-form__statistic--item">
                    <div class="dh-hero-form__statistic--amunt">36M+</div>
                    <div class="dh-hero-form__statistic--text">Saved <span>Fees</span></div>
                </li>
                <li class="dh-hero-form__statistic--item">
                    <div class="dh-hero-form__statistic--amunt">1,500+</div>
                    <div class="dh-hero-form__statistic--text">HOUSES <span>BOUGHT</span></div>
                </li>
                <li class="dh-hero-form__statistic--item">
                    <div class="dh-hero-form__statistic--amunt">96%</div>
                    <div class="dh-hero-form__statistic--text">SATISFIED <span>CUSTOMERS</span></div>
                </li>
            </ul>
        </div>
    </div>
</section>