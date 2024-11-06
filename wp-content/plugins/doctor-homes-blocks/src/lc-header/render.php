<?php
$phoneNumber = isset($attributes['phoneNumber']) ? esc_html($attributes['phoneNumber']) : '';
?>

<header class="lc-header">
    <div class="lc-header__content">
        <div class="lc-header__logo">
            <?php echo get_responsive_image('lc-header/dh-logo', 'Logo'); ?>
        </div>
        <a class="call-btn" href="tel:<?php echo $phoneNumber; ?>">
            <div class="lc-header__phone-number">
                <span class="lc-header__phone--icon">
                    <?php echo get_responsive_image('lc-header/telephone', 'Phone Icon'); ?>
                </span>
                <span class="lc-header__phone--text">Call Us</span>
                <span class="lc-header__phone-number--number"><?php echo $phoneNumber; ?></span>
            </div>
            <div class="contact-phone">
                <?php echo get_responsive_image('cw-header/phone-icon', 'Phone Icon', 'phone-icon'); ?>
            </div>
        </a>
    </div>
</header>