<?php
$forbes_logo_id = 426;
$forbes_logo_url = wp_get_attachment_url($forbes_logo_id);

$quote_icon_id = 407;
$quote_icon_url = wp_get_attachment_url($quote_icon_id);
?>

<div class="quote-section">
    <div class="quote-section__content">
        <img class="quote-section__forbes-logo" src="<?php echo esc_url($forbes_logo_url); ?>" alt="Forbes">
        <p><span><img class="quote-section__quote-logo" src="<?php echo esc_url($quote_icon_url); ?>" alt="Quote"></span> Quite often investors are willing to pay cash for a home and with the recent tightening of financial restrictions, coupled with the growing number of complaints about low appraisals, having a cash buyer has become even more appealing.</p>
    </div>
</div>