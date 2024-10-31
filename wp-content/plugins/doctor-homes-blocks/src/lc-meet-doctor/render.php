<?php

$star_icon_url = plugins_url('src/lc-meet-doctor/assets/star.svg', dirname(__FILE__, 2));
$arrow_icon_url = plugins_url('src/lc-meet-doctor/assets/cta-arrow.svg', dirname(__FILE__, 2));

$person = plugins_url('src/lc-meet-doctor/assets/person.webp', dirname(__FILE__, 2));

$cbs_logo_url = plugins_url('src/lc-meet-doctor/assets/cbs.svg', dirname(__FILE__, 2));
$nbc_logo_url = plugins_url('src/lc-meet-doctor/assets/nbc.svg', dirname(__FILE__, 2));
$forbes_logo_url = plugins_url('src/lc-meet-doctor/assets/forbes.svg', dirname(__FILE__, 2));
$fox_logo_url = plugins_url('src/lc-meet-doctor/assets/fox.svg', dirname(__FILE__, 2));
?>

<section class="lc-meet-doctor">
    <div class="lc-meet-doctor__container">
        <div class="lc-meet-doctor__content">
            <div class="lc-meet-doctor__text">
                <span class="lc-meet-doctor__hi">Hi, I'm Doctor Homes</span>
                <h2 class="lc-meet-doctor__title">Have your circumstances changed and you need to sell your home quickly?</h2>
                <h3 class="lc-meet-doctor__subtitle">Let me help! We are genuine homebuyers, and we buy ANY house!</h3>
                <div class="lc-meet-doctor__description">
                    <p>Sometimes the unexpected happens and our plans need to change. Maybe you’re working through a divorce, need to relocate for work, or are just looking for a fresh start.</p>
                    <p>Whatever your circumstances and whatever state your home is in – it doesn’t matter to us. <strong>We’ll buy it, quickly and discreetly.</strong></p>
                    <p>All this, <strong>without the hassle.</strong> No real estate agents. No repairs or cleaning. Plus, we always make you a fair offer.</p>
                </div>
                <h3 class="lc-meet-doctor__cta-text">Ready to sell your house right now?</h3>
            </div>
            <a class="cta-btn lc-meet-doctor__cta" href="#lc-form">GET MY CASH OFFER NOW <img src="<?php echo esc_url($arrow_icon_url); ?>" alt="Arrow"></a>
            <div class="lc-hero__reviews">
                <div class="lc-hero__reviews-stars-wrapper">
                    <span class="lc-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                    <span class="lc-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                    <span class="lc-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                    <span class="lc-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                    <span class="lc-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                </div>
                <div class="lc-hero__reviews-text">
                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>
        </div>
        <div class="lc-meet-doctor__img">
            <img src="<?php echo esc_url($person); ?>" alt="Doctor Homes">
        </div>
    </div>


    <div class="lc-featured-in">
        <div class="lc-featured-in__container">
            <span class="lc-featured-in__text">AS SEEN ON:</span>
            <div class="lc-featured-in__logos-wrapper">
                <div class="lc-featured-in__logos">
                    <div class="lc-featured-in__logo"><img src="<?php echo esc_url($cbs_logo_url); ?>" alt="CBS"></div>
                    <div class="lc-featured-in__logo"><img src="<?php echo esc_url($nbc_logo_url); ?>" alt="NBC"></div>
                    <div class="lc-featured-in__logo"><img src="<?php echo esc_url($forbes_logo_url); ?>" alt="Forbes"></div>
                    <div class="lc-featured-in__logo"><img src="<?php echo esc_url($fox_logo_url); ?>" alt="FOX"></div>
                </div>
            </div>
        </div>
    </div>
</section>
