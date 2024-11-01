<?php
    // $formId = isset($attributes['formId']) ? esc_html($attributes['formId']) : '1';
    
    $background_image_url = plugins_url('src/hero-form/assets/bg.webp', dirname(__FILE__, 2));
    $testimonial_image_id = 455;
    $testimonee_url = wp_get_attachment_url($testimonial_image_id);
    $star_icon_url = plugins_url('src/hero-form/assets/star.svg', dirname(__FILE__, 2));
    $checkmark_icon_url = plugins_url('src/hero-form/assets/check-circle.svg', dirname(__FILE__, 2));
    
    $logo_1 = plugins_url('src/hero-form/assets/logo-google.webp', dirname(__FILE__, 2));
    $logo_2 = plugins_url('src/hero-form/assets/logo-bbb.webp', dirname(__FILE__, 2));
    $logo_3 = plugins_url('src/hero-form/assets/logo-a-plus.webp', dirname(__FILE__, 2));
?>

<section class="dh-hero-form-wrapper" style="--background-image: url('<?php echo esc_url($background_image_url); ?>');">
    <div class="dh-hero-form">
        <div class="dh-hero-form__content">
            <div class="dh-hero-form__reviews">
                <div class="dh-hero-form__reviews-stars-wrapper">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <span class="dh-hero-form__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                    <?php endfor; ?>
                </div>
                <div class="dh-hero-form__reviews-text">
                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>
            <div class="dh-hero-form__titles">
                <h1>Sell Your Home To Doctor Homes</h1>
                <p>Sell Your House Fast For Cash In Any Condition.</p>
            </div>
            <ul class="dh-hero-form__bullet-points">
                <li class="dh-hero-form__bullet-point"><img src="<?php echo esc_url($checkmark_icon_url); ?>" alt="checkmark">
                    <span><strong>No need for you to clean or make repairs.</strong></span>
                </li>
                <li class="dh-hero-form__bullet-point"><img src="<?php echo esc_url($checkmark_icon_url); ?>" alt="checkmark">
                    <span><strong>No realtors, fees, banks, commissions, or inspectors.</strong></span>
                </li>
                <li class="dh-hero-form__bullet-point"><img src="<?php echo esc_url($checkmark_icon_url); ?>" alt="checkmark">
                    <span><strong>Close on Your timeline Whenever You're Ready.</strong></span>
                </li>
            </ul>
            <div class="dh-hero__logos">
                <img src="<?= $logo_1 ?>" alt="Google">
                <img src="<?= $logo_2 ?>" alt="BBB">
                <img src="<?= $logo_3 ?>" alt="A+">
            </div>
            <div class="dh-hero-form__content--footer">
                <div class="cw-fresh-start__testimonial">
                    <img class="cw-fresh-start__testimonee" src="<?php echo esc_url($testimonee_url); ?>" alt="Leigh Williams">
                    <div class="dh-hero-form-start__testimonial--content cw-fresh-start__testimonial--content">
                        <blockquote>
                            <p>We are very grateful for Doctor Homes and his team's work. They were always professional and reliable, Doctor Homes answered my first call right away and kept me updated throughout the whole selling process.</p>
                            <cite>
                                <span>Liv Skyler</span>
                                <div class="dh-hero-form__reviews-stars-wrapper">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <span class="dh-hero-form__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
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
        <div id="cw-form" class="dh-hero-form__form">
            <div class="dh-hero-form__title">
                <span>Get Your Offer In Record Time</span>
            </div>
            <div class="dh-hero-form__subtitle">
                <span>Fill out the form. We’ll contact you ASAP.</span>
            </div>
            <?php echo $content; ?>
        </div>
    </div>
</section>
