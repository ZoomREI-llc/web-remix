<?php
$phoneNumber = isset($attributes['phoneNumber']) ? esc_html($attributes['phoneNumber']) : '';
?>

<header class="ao-header">
    <div class="ao-header__content">
        <div class="ao-header__logo">
            <?php echo get_responsive_image('ao-header/dh-logo', 'Logo'); ?>
        </div>
        <a class="call-btn" href="tel:<?php echo $phoneNumber; ?>">
            <div class="ao-header__phone-number">
                <span class="ao-header__phone--icon">
                    <?php echo get_responsive_image('ao-header/telephone', 'Phone Icon'); ?>
                </span>
                <span class="ao-header__phone--text">Call Us</span>
                <span class="ao-header__phone-number--number"><?php echo $phoneNumber; ?></span>
            </div>
            <div class="contact-phone">
                <?php echo get_responsive_image('ao-header/phone-icon', 'phone-icon'); ?>
            </div>
        </a>
    </div>
</header>