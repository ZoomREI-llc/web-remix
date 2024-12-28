<section class="dh-banner-form">
    <div class="dh-banner-form-bg">
        <?php
        echo get_responsive_image([
            'image_name'       => 'banner-form/bg',
            'alt'              => 'banner background',
            'class'           => 'dh-banner-form-img',
            'default_size'     => 768,
            'additional_attrs' => [
                'decoding'      => 'async',
                'fetchpriority' => 'high',
            ]
        ]);
        ?>
    </div>
    <div class="grid-container">
        <div class="dh-banner-form__content">
            <div class="dh-hero__reviews">
                <div class="dh-hero__reviews-stars-wrapper">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <span class="dh-hero__star"><?php
                                                    echo get_responsive_image([
                                                        'image_name'       => 'banner-form/star',
                                                        'alt'              => 'Star',
                                                        'additional_attrs' => [
                                                            'decoding'      => 'async',
                                                            'loading'      => 'lazy',
                                                        ]
                                                    ]);
                                                    ?></span>
                    <?php endfor; ?>
                </div>
                <div class="dh-hero__reviews-text">
                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>
            <h4 class="sub-title">We Buy ANY House In ANY Condition, On YOUR Timeline</h4>
            <h3 class="title-1">
                <span class="dh-banner-form__sell">Sell Your Home to &nbsp;</span>
                <span class="dh-banner-form__doctor-homes">Doctor Homes</span>
            </h3>
            <?= $content ?>
        </div>
    </div>
</section>