<?php
$phoneNumber = isset($attributes['phoneNumber']) ? esc_html($attributes['phoneNumber']) : '';
?>

<header class="ao-header">
    <div class="ao-header__content">
        <div class="ao-header__logo">
            <img src="<?= get_template_directory_uri() ?>/src/assets/brand/dh-logo.svg" alt="Doctor homes" width="57" height="31">
        </div>
        <a class="call-btn" href="tel:<?php echo $phoneNumber; ?>">
            <div class="ao-header__phone-number">
                <span class="ao-header__phone--icon">
                    <?php echo get_responsive_image([
                        'image_name'       => 'ao-header/telephone',
                        'alt'              => 'Phone Icon',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading'       => 'lazy',
                        ]
                    ]); ?>
                </span>
                <span class="ao-header__phone--text">Call Us</span>
                <span class="ao-header__phone-number--number"><?php echo $phoneNumber; ?></span>
            </div>
            <div class="contact-phone">
                <?php echo get_responsive_image([
                    'image_name'       => 'ao-header/phone-icon',
                    'alt'              => 'Pjone Icon',
                    'additional_attrs' => [
                        'decoding'      => 'async',
                        'loading'       => 'lazy',
                    ]
                ]); ?>
            </div>
        </a>
    </div>
</header>