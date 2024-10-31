<?php

// Choose the correct image based on the selected name
$image_url = plugins_url('src/cw-meet-doctorhomes/assets/meet-person-foto.webp', dirname(__FILE__, 2));

$fon_url = plugins_url('src/cw-meet-doctorhomes/assets/meet-person-fon.webp', dirname(__FILE__, 2));
$star_icon_url = plugins_url('src/cw-meet-doctorhomes/assets/star.svg', dirname(__FILE__, 2));
$arrow_icon_url = plugins_url('src/cw-meet-doctorhomes/assets/cta-arrow.svg', dirname(__FILE__, 2));
?>

<section id='about' class="cw-meet-doctorhomes-wrapper">
    <div class="cw-meet-doctorhomes">
        <div class="cw-meet-doctorhomes__media">
            <img src="<?php echo esc_url($fon_url); ?>" alt="image fon" class="cw-meet-doctorhomes__media--fon">
        </div>
        <div class="cw-meet-doctorhomes__container">
            <div class="cw-meet-doctorhomes__content">
                <div class="cw-meet-doctorhomes__text">
                    <span class="cw-meet-doctorhomes__hi">HI I'M DOCTOR HOMES!</span>
                    <h2 class="cw-meet-doctorhomes__title">Got A House You Need To Sell In St Louis, Missouri?</h2>
                    <h3 class="cw-meet-doctorhomes__subtitle">Let me help! We are genuine homebuyers, and we buy ANY house!</h3>
                    <div class="cw-meet-doctorhomes__description">
                        <p>It might be that you’ve inherited a house, are behind on payments, don’t want to spend money on repairs, or need to relocate in a hurry. Whatever your circumstance or whatever state your home is in – it doesn’t matter to us. <strong>We’ll buy it, and fast!</strong></p>
                        <p>All this, <strong>without the hassle.</strong> No real estate agents. No inspections. No repairs or cleaning. Plus, we always make you a fair offer and pay the closing costs ourselves.</p>
                    </div>
                    <h3 class="cw-meet-doctorhomes__cta-text">Ready to sell your house right now?</h3>
                </div>
                <div class="cw-meet-doctorhomes__footer-block">
                    <a class="cta-btn cw-meet-doctorhomes__cta" href="#cw-form">Get my offer<img src="<?php echo esc_url($arrow_icon_url); ?>" alt="Arrow"></a>
                    <div class="cw-hero__reviews">
                        <div class="cw-hero__reviews-stars-wrapper">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <span class="cw-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                            <?php endfor; ?>
                        </div>
                        <div class="cw-hero__reviews-text">
                            <p>Rated <strong>4.7</strong> Based on <strong>100+</strong> reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>