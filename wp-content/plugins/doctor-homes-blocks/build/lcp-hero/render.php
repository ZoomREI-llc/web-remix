<?php
// $formId = isset($attributes['formId']) ? esc_html($attributes['formId']) : '1';

$selectedMarket = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'Saint Louis';
$background_image_url = plugins_url('src/lcp-hero/assets/hero-background.webp', dirname(__FILE__, 2));
$testimonee_url = plugins_url('src/lcp-hero/assets/hero-testimoniels.webp', dirname(__FILE__, 2));
$star_icon_url = plugins_url('src/lcp-hero/assets/star.svg', dirname(__FILE__, 2));
$checkmark_icon_url = plugins_url('src/lcp-hero/assets/check-circle.svg', dirname(__FILE__, 2));
?>

<section class="lcp-hero-wrapper" style="--background-image: url('<?php echo esc_url($background_image_url); ?>');">
    <div class="lcp-hero">
        <div class="lcp-hero__content">
            <div class="lcp-hero__reviews">
                <div class="lcp-hero__reviews-stars-wrapper">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <span class="lcp-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                    <?php endfor; ?>
                </div>
                <div class="lcp-hero__reviews-text">
                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>
            <div class="lcp-hero__titles">
                <h1>Want to sell your house in <?= $selectedMarket ?> with no hassle?</h1>
                <p>We Buy Houses Quickly for Cash – No Realtors, No Fees, No Repairs Needed!</p>
            </div>
            <ul class="lcp-hero__bullet-points">
                <li class="lcp-hero__bullet-point"><img src="<?php echo esc_url($checkmark_icon_url); ?>" alt="checkmark">
                    <span><strong>No need for you to clean</strong> or make repairs</span>
                </li>
                <li class="lcp-hero__bullet-point"><img src="<?php echo esc_url($checkmark_icon_url); ?>" alt="checkmark">
                    <span>No realtors, <strong>fees, banks, commissions,</strong> or inspectors</span>
                </li>
                <li class="lcp-hero__bullet-point"><img src="<?php echo esc_url($checkmark_icon_url); ?>" alt="checkmark">
                    <span>We pay all closing costs - <strong>you pay nothing</strong></span>
                </li>
            </ul>
            <div class="lcp-hero__content--footer">
                <div class="cw-fresh-start__testimonial">
                    <img class="cw-fresh-start__testimonee" src="<?php echo esc_url($testimonee_url); ?>" alt="Leigh Williams">
                    <div class="lcp-hero-start__testimonial--content cw-fresh-start__testimonial--content">
                        <blockquote>
                            <p>We are very grateful for Doctor Homes and his team's work. They were always professional and reliable, Doctor Homes answered my first call right away and kept me updated throughout the whole selling process.</p>
                            <cite>
                                <span>Liv Skyler</span>
                                <div class="lcp-hero__reviews-stars-wrapper">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <span class="lcp-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                                    <?php endfor; ?>
                                </div>
                            </cite>
                        </blockquote>
                    </div>
                </div>
                <ul class="lcp-hero__statistic--list">
                    <li class="lcp-hero__statistic--item">
                        <div class="lcp-hero__statistic--amunt">36M+</div>
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
        </div>
        <div id="lcp-form" class="lcp-hero__form">
            <?php echo $content; ?>
        </div>
    </div>
</section>
