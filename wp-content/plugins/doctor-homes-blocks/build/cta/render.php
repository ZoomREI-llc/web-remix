<?php
$dh_image_id = 153;
$dh_image_url = wp_get_attachment_url($dh_image_id);

$arrow_icon_id = 131;
$arrow_icon_url = wp_get_attachment_url($arrow_icon_id);

$testi_image_id = 100;
$testi_image_url = wp_get_attachment_url($testi_image_id);

$star_icon_id = 124;
$star_icon_url = wp_get_attachment_url($star_icon_id);
?>

<section class="sell-house">
    <div class="sell-house__content">
        <div class="sell-house__content--titles">
            <h2>Sell Your House As Is Fast</h2>
            <h3>We Make It Incredibly Easy To Sell Your House For Cash</h3>
        </div>
        <p>Whatever your circumstances, no matter the condition of your house, we're happy to buy. Contact us today, get an instant cash offer for your house, and let's get that house sold!</p>
        <a href="#lead-form">
            <button class="cta-button" type="button">
                Get My Offer
                <img class="btn-arrow" src="<?php echo esc_url($arrow_icon_url); ?>" alt="Arrow Icon">
            </button>
        </a>
        <ul class="cta__credibility-data">
            <li>
                <span class="cta__credibility-data-number">36M+</span>
                <span class="cta__credibility-data-text">SAVED FEES</span>
            </li>
            <li>
                <span class="cta__credibility-data-number">1500+</span>
                <span class="cta__credibility-data-text">HOUSES BOUGHT</span>
            </li>
            <li>
                <span class="cta__credibility-data-number">96%</span>
                <span class="cta__credibility-data-text">SATISFIED CUSTOMERS</span>
            </li>
        </ul>
    </div>
    <div class="sell-house__image">
        <img src="<?php echo esc_url($dh_image_url); ?>" alt="We make the process of selling your house fast and easy">
    </div>
</section>