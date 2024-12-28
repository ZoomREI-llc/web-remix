<?php
$phoneNumber = isset($attributes['phoneNumber']) ? esc_html($attributes['phoneNumber']) : '';
?>

<header class="lc-header">
    <div class="lc-header__content">
        <div class="lc-header__logo">
            <?php
            echo get_responsive_image([
                'image_name'       => 'lc-header/dh-logo',
                'alt'              => 'Doctor Homes Logo',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading' => 'lazy',
                ]
            ]);
            ?>
        </div>
        <a class="call-btn" href="tel:<?php echo $phoneNumber; ?>">
            <div class="lc-header__phone-number">
                <span class="lc-header__phone--icon">
                    <?php
                    echo get_responsive_image([
                        'image_name'       => 'lc-header/telephone',
                        'alt'              => 'Phone Icon',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>
                </span>
                <span class="lc-header__phone--text">Call Us</span>
                <span class="lc-header__phone-number--number"><?php echo $phoneNumber; ?></span>
            </div>
            <div class="contact-phone">
                <?php
                echo get_responsive_image([
                    'image_name'       => 'lc-header/phone-icon',
                    'alt'              => 'Phone Icon',
                    'class'           => 'phone-icon',
                    'additional_attrs' => [
                        'decoding'      => 'async',
                        'loading' => 'lazy',
                    ]
                ]);
                ?>
            </div>
        </a>
    </div>
</header>