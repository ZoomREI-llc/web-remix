<?php
$logoUrl = esc_url(plugins_url('src/cw-header/assets/header_logo.svg', dirname(__FILE__, 2)));

$telephoneUrl = plugins_url('src/cw-header/assets/telephone_1.svg', dirname(__FILE__, 2));
$phoneNumber = isset($attributes['phoneNumber']) ? esc_html($attributes['phoneNumber']) : '';
?>

<header class="cw-header">
    <div class="cw-header__content">
        <div class="cw-header__logo">
            <img src="<?php echo $logoUrl; ?>" alt="Logo" />
        </div>
        <div class="cw-header__menu">
            <a href="#how-it-works" class="cw-header__menu--link">How it works</a>
            <a href="#about" class="cw-header__menu--link">About</a>
            <a href="#benefits" class="cw-header__menu--link">Benefits</a>
            <a href="#compare" class="cw-header__menu--link">Compare</a>
            <a href="#reviews" class="cw-header__menu--link">Reviews</a>
            <a href="#faq" class="cw-header__menu--link">FAQ</a>
        </div>
        <a class="call-btn" href="tel:<?php echo $phoneNumber; ?>">
            <div class="cw-header__phone-number">
                <span class="cw-header__phone-number--icon"><img src="<?php echo $telephoneUrl; ?>" alt="Phone Icon"></span>
                <span class="cw-header__phone-number--text">Call Us </span>
                <span class="cw-header__phone-number--number"><?php echo $phoneNumber; ?></span>
            </div>
            <div class="contact-phone">
                <img src="<?php echo wp_get_attachment_url(437); ?>" alt="Phone Icon" class="phone-icon">
            </div>
        </a>
    </div>
</header>