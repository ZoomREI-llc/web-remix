<?php
$logoUrl = plugins_url('src/ao-header/assets/logo.svg', dirname(__FILE__, 2));

$telephoneUrl = plugins_url('src/ao-header/assets/telephone.svg', dirname(__FILE__, 2));
$phoneNumber = isset($attributes['phoneNumber']) ? esc_html($attributes['phoneNumber']) : '';
?>

<header class="ao-header">
    <div class="ao-header__content">
        <div class="ao-header__logo">
            <img src="<?php echo $logoUrl; ?>" alt="Logo" />
        </div>
        <div class="ao-header__phone-number">
            <span class="ao-header__phone-icon"><img src="<?php echo $telephoneUrl; ?>" alt="Phone Icon"></span>
            <span class="ao-header__phone-text">Call Us On
                <a href="tel:<?php echo $phoneNumber; ?>"><?php echo $phoneNumber; ?></a>
            </span>
        </div>
    </div>
</header>
