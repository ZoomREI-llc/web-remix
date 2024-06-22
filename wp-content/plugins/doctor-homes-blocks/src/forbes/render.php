<?php
$forbes_logo_id = 92;
$forbes_logo_url = wp_get_attachment_url($forbes_logo_id);

$quote_icon_id = 85;
$quote_icon_url = wp_get_attachment_url($quote_icon_id);
?>

<section class="quote-section">
    <div class="quote-container">
        <div class="quote-logo">
            <img src="<?php echo esc_url($forbes_logo_url); ?>" alt="Forbes">
        </div>
        <div class="quote-text">
            <img src="<?php echo esc_url($quote_icon_url); ?>" alt="Forbes">
            <p>Quite often investors are willing to pay cash for a home and with the recent tightening of financial restrictions, coupled with the growing number of complaints about low appraisals, having a cash buyer has become even more appealing.</p>
        </div>
    </div>
</section>