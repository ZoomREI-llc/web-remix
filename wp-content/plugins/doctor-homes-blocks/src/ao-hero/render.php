<?php
$formId = isset($attributes['formId']) ? esc_html($attributes['formId']) : '1';
?>

<section class="ao-hero-wrapper">
    <div class="ao-hero-bg">
        <?php
        $url_for_preload = get_image_url('ao-hero/life-changes-hero-background', 768);
        schedule_preload($url_for_preload, 'image', ['fetchpriority' => 'high']);

        echo get_responsive_image([
            'image_name'       => 'ao-hero/life-changes-hero-background',
            'alt'              => 'Hero background',
            'class'           => 'ao-hero-img',
            'default_size'     => 768,
            'additional_attrs' => [
                'decoding'      => 'async',
                'fetchpriority' => 'high',
            ]
        ]);
        ?>
    </div>
    <div class="ao-hero">
        <div class=" ao-hero__content">
            <div class="ao-hero__reviews">
                <div class="ao-hero__reviews-stars-wrapper">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <span class="ao-hero__star"><?php echo get_responsive_image([
                                                        'image_name'       => 'ao-hero/star',
                                                        'alt'              => 'star',
                                                        'additional_attrs' => [
                                                            'decoding'      => 'async',
                                                            'loading'       => 'lazy',
                                                        ]
                                                    ]); ?></span>
                    <?php endfor; ?>
                </div>
                <div class="ao-hero__reviews-text">
                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>
            <div class="ao-hero__titles">
                <h1>Are You An Absentee
                    <br>Owner Or Landlord?
                    <br>Get A Cash Offer On Your
                    <br>Property in 7 Minutes
                </h1>
                <p>Looking for a stress-free property sale? Get an immediate cash offer on your property. No commissions and no repairs are needed.</p>
            </div>
            <ul class="ao-hero__bullet-points">
                <li class="ao-hero__bullet-point">
                    <?php echo get_responsive_image([
                        'image_name'       => 'ao-hero/check-circle',
                        'alt'              => 'Checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading'       => 'lazy',
                        ]
                    ]); ?>
                    <span>We’ll purchase your home ‘as is’ - <strong>no cleaning or repairs needed</strong></span>
                </li>
                <li class="ao-hero__bullet-point">
                    <?php echo get_responsive_image([
                        'image_name'       => 'ao-hero/check-circle',
                        'alt'              => 'Checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading'       => 'lazy',
                        ]
                    ]); ?>
                    <span>Get a <strong>competitive cash offer</strong> in <strong>just 7 minutes</strong></span>
                </li>
                <li class="ao-hero__bullet-point">
                    <?php echo get_responsive_image([
                        'image_name'       => 'ao-hero/check-circle',
                        'alt'              => 'Checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading'       => 'lazy',
                        ]
                    ]); ?>
                    <span>We work to <strong>your timeline</strong>, you choose the closing date</span>
                </li>
            </ul>
        </div>
        <div id="ao-form" class="ao-hero__form" data-form-name="Property Inquiry">
            <div class="gform_heading">
                <div class="gform__header">
                    <h3>Ready For Your Cash Offer?</h3>
                    <p>Please tell us a few details to get started</p>
                </div>
            </div>
            <div class="gform_body">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</section>