<?php
$logoUrl = plugins_url('src/ao-header/assets/dh-logo.svg', dirname(__FILE__, 2));

$telephoneUrl = plugins_url('src/ao-header/assets/telephone.svg', dirname(__FILE__, 2));
$phoneNumber = isset($attributes['phoneNumber']) ? esc_html($attributes['phoneNumber']) : '';
?>

<header class="ao-header">
    <div class="ao-header__content">
        <div class="ao-header__logo">
            <img src="<?php echo $logoUrl; ?>" alt="Logo" />
        </div>
        <a class="call-btn" href="tel:<?php echo $phoneNumber; ?>">
            <div class="ao-header__phone-number">
                <span class="ao-header__phone--icon"><img src="<?php echo $telephoneUrl; ?>" alt="Phone Icon"></span>
                <span class="ao-header__phone--text">Call Us</span>
                <span class="ao-header__phone-number--number"><?php echo $phoneNumber; ?></span>
            </div>
            <div class="contact-phone">
                <?php echo get_responsive_image('ao-header/phone-icon', 'phone-icon'); ?>
            </div>
        </a>
    </div>
</header>