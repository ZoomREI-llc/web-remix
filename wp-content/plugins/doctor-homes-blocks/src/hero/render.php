<?php
// dynamically rendering images and SVGs
$background_image_id = 84;
$background_image_url = wp_get_attachment_url($background_image_id);

$doctor_homes_image_id = 83;
$doctor_homes_image_url = wp_get_attachment_url($doctor_homes_image_id);

$arrow_icon_id = 131;
$arrow_icon_url = wp_get_attachment_url($arrow_icon_id);

$star_icon_id = 124;
$star_icon_url = wp_get_attachment_url($star_icon_id);

$checkmark_icon_id = 123;
$checkmark_icon_url = wp_get_attachment_url($checkmark_icon_id);

$testimonial_image_id = 100;
$testimonial_image_url = wp_get_attachment_url($testimonial_image_id);

$google_icon_id = 89;
$google_icon_url = wp_get_attachment_url($google_icon_id);

$bbb_icon_id = 88;
$bbb_icon_url = wp_get_attachment_url($bbb_icon_id);

$a_plus_icon_id = 87;
$a_plus_icon_url = wp_get_attachment_url($a_plus_icon_id);
?>
<a id="top"></a>
<section class="hero" style="--background-image: url('<?php echo esc_url($background_image_url); ?>');">
    <div class="hero__content">
        <div class="hero__reviews">
            <div class="hero__reviews-stars-wrapper">
                <span class="hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                <span class="hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                <span class="hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                <span class="hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                <span class="hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
            </div>
            <div class="hero__reviews-text">
                <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
            </div>
        </div>
        <div class="hero__titles">
            <h1>Sell Your Home To Doctor Homes</h1>
            <h3>Sell Your House Fast For Cash In Any Condition.</h3>
        </div>
        <form id="lead-form" method="POST">
            <div class="address-wrapper">
                <input type="text" name="property_address" placeholder="Type Your Property Address" required>
                <button id="form-btn-next" type="button">
                    Get My Offer
                    <img class="form-btn-arrow" src="<?php echo esc_url($arrow_icon_url); ?>" alt="Arrow Icon">
                </button>
            </div>
            <div class="hidden-fields">
                <input type="text" name="full_name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="phone" placeholder="Phone Number" maxlength="16" required>
                <input type="hidden" name="utm_source" value="<?php echo esc_attr($_GET['utm_source']); ?>">
                <input type="hidden" name="utm_campaign" value="<?php echo esc_attr($_GET['utm_campaign']); ?>">
                <input type="hidden" name="utm_medium" value="<?php echo esc_attr($_GET['utm_medium']); ?>">
                <input type="hidden" name="utm_term" value="<?php echo esc_attr($_GET['utm_term']); ?>">
                <input type="hidden" name="utm_content" value="<?php echo esc_attr($_GET['utm_content']); ?>">
                <button type="submit" class="form-submit">
                    Get My Offer
                    <img class="form-btn-arrow" src="<?php echo esc_url($arrow_icon_url); ?>" alt="Arrow Icon">
                </button>
            </div>
        </form>
        <!-- [gravityform id="1" title="false"] -->
        <div class="hero__trust-icons">
            <img class="hero__trust-icon" src="<?php echo esc_url($google_icon_url); ?>" alt="">
            <img class="hero__trust-icon" src="<?php echo esc_url($bbb_icon_url); ?>" alt="">
            <img class="hero__trust-icon" src="<?php echo esc_url($a_plus_icon_url); ?>" alt="">
        </div>
        <ul class="hero__bullet-points">
            <li class="hero__bullet-point"><img src="<?php echo esc_url($checkmark_icon_url); ?>" alt="checkmark">
                <span>No need for you to clean or make repairs.</span>
            </li>
            <li class="hero__bullet-point"><img src="<?php echo esc_url($checkmark_icon_url); ?>" alt="checkmark">
                <span>No realtors, fees, banks, commissions, or inspectors.</span>
            </li>
            <li class="hero__bullet-point"><img src="<?php echo esc_url($checkmark_icon_url); ?>" alt="checkmark">
                <span>Close on Your timeline Whenever You're Ready.</span>
            </li>
        </ul>
        <div class="hero__credibility">
            <div class="hero__credibility-testimonial">
                <img class="hero__credibility-testimonial-image" src="<?php echo esc_url($testimonial_image_url); ?>" alt="">
                <div class="hero__credibility-content">
                    <p class="hero__credibility-text">“We are very grateful for Doctor Homes. They were always professional and reliable, they answered my first call right away and kept me updated throughout the whole selling process.”</p>
                    <div class="hero__credibility-testimonial-name">
                        <span class="hero__credibility-testimonial-name-container">
                            <span>Liv Skyler</span>
                            <div class="hero__credibility-stars-wrapper">
                                <span class="hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                                <span class="hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                                <span class="hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                                <span class="hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                                <span class="hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <ul class="hero__credibility-data">
                <li>
                    <span class="hero__credibility-data-number">36M+</span>
                    <span class="hero__credibility-data-text">SAVED FEES</span>
                </li>
                <li>
                    <span class="hero__credibility-data-number">1500+</span>
                    <span class="hero__credibility-data-text">HOUSES BOUGHT</span>
                </li>
                <li>
                    <span class="hero__credibility-data-number">96%</span>
                    <span class="hero__credibility-data-text">SATISFIED CUSTOMERS</span>
                </li>
            </ul>
        </div>
        <div class="hero__doctor-homes"><img src="<?php echo esc_url($doctor_homes_image_url); ?>" alt="Sell your house fast for cash with Doctor Homes"></div>
    </div>
</section>