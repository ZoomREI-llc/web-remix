<?php
$logos = [
    "Kansas City" => plugins_url('src/lc-header/assets/kc-logo.svg', dirname(__FILE__, 2)),
    "San Francisco Bay Area" => plugins_url('src/lc-header/assets/sf-logo.svg', dirname(__FILE__, 2)),
    "St. Louis" => plugins_url('src/lc-header/assets/stl-logo.svg', dirname(__FILE__, 2)),
    "Metro Detroit" => plugins_url('src/lc-header/assets/det-logo.svg', dirname(__FILE__, 2)),
    "Cleveland" => plugins_url('src/lc-header/assets/cle-logo.svg', dirname(__FILE__, 2)),
    "Indianapolis" => plugins_url('src/lc-header/assets/ind-logo.svg', dirname(__FILE__, 2)),
];

$selected_market = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'St. Louis';
$logoUrl = plugins_url('src/lc-header/assets/dh-logo.svg', dirname(__FILE__, 2));

$telephoneUrl = plugins_url('src/lc-header/assets/telephone.svg', dirname(__FILE__, 2));
$phoneNumber = isset($attributes['phoneNumber']) ? esc_html($attributes['phoneNumber']) : '';
?>

<header class="lc-header">
    <div class="lc-header__content">
        <div class="lc-header__logo">
            <img src="<?php echo $logoUrl; ?>" alt="Logo" />
        </div>
        <a href="call-btn" href="tel:<?php echo $phoneNumber; ?>">
            <div class="lc-header__phone-number">
                <span class="lc-header__phone--icon"><img src="<?php echo $telephoneUrl; ?>" alt="Phone Icon"></span>
                <span class="lc-header__phone--text">Call Us</span>
                <span class="lc-header__phone-number--number"><?php echo $phoneNumber; ?></span>
            </div>
            <div class="contact-phone">
                <img src="<?php echo wp_get_attachment_url(437); ?>" alt="Phone Icon" class="phone-icon">
            </div>
        </a>
    </div>
</header>