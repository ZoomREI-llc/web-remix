<section class="dh-hero-form-wrapper">
    <div class="dh-hero-form-bg">
        <?php
        $url_for_preload = get_image_url('hero-form/bg', 768);
        schedule_preload($url_for_preload, 'image', ['fetchpriority' => 'high']);

        echo get_responsive_image([
            'image_name'       => 'hero-form/bg',
            'alt'              => 'Hero background',
            'class'           => 'dh-hero-form-img',
            'default_size'     => 768,
            'additional_attrs' => [
                'decoding'      => 'async',
                'fetchpriority' => 'high',
            ]
        ]);
        ?>
    </div>
    <div class="dh-hero-form__content grid-container">
        <div class="dh-hero-form__reviews">
            <div class="dh-hero-form__reviews-stars-wrapper">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <span class="dh-hero-form__star"> <?php
                                                        echo get_responsive_image([
                                                            'image_name'       => 'hero-form/star',
                                                            'alt'              => 'Star',
                                                            'additional_attrs' => [
                                                                'decoding'      => 'async',
                                                                'loading' => 'lazy',
                                                            ]
                                                        ]);
                                                        ?></span>
                <?php endfor; ?>
            </div>
            <div class="dh-hero-form__reviews-text">
                <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
            </div>
        </div>
        <h1 class="dh-hero-form__title title-1">Sell Your Home To Doctor Homes</h1>
        <h3 class="dh-hero-form__subtitle sub-title">Sell Your House Fast For Cash In Any Condition.</h3>
        <div id="cw-form" class="dh-hero-form__form" data-form-name="Property Inquiry">
            <div class="dh-hero-form__form--title">
                <span>Get Your Offer In Record Time</span>
            </div>
            <div class="dh-hero-form__form--subtitle">
                <span>Fill out the form. We’ll contact you ASAP.</span>
            </div>
            <?php echo $content; ?>
        </div>
        <ul class="dh-hero-form__bullet-points">
            <li class="dh-hero-form__bullet-point"><?php
                                                    echo get_responsive_image([
                                                        'image_name'       => 'hero-form/checkmark',
                                                        'alt'              => 'Checkmark',
                                                        'additional_attrs' => [
                                                            'decoding'      => 'async',
                                                            'loading' => 'lazy',
                                                        ]
                                                    ]);
                                                    ?>
                <span><strong>No need for you to clean or make repairs.</strong></span>
            </li>
            <li class="dh-hero-form__bullet-point"><?php
                                                    echo get_responsive_image([
                                                        'image_name'       => 'hero-form/checkmark',
                                                        'alt'              => 'Checkmark',
                                                        'additional_attrs' => [
                                                            'decoding'      => 'async',
                                                            'loading' => 'lazy',
                                                        ]
                                                    ]);
                                                    ?>
                <span><strong>No realtors, fees, banks, commissions, or inspectors.</strong></span>
            </li>
            <li class="dh-hero-form__bullet-point"><?php
                                                    echo get_responsive_image([
                                                        'image_name'       => 'hero-form/checkmark',
                                                        'alt'              => 'Checkmark',
                                                        'additional_attrs' => [
                                                            'decoding'      => 'async',
                                                            'loading' => 'lazy',
                                                        ]
                                                    ]);
                                                    ?>
                <span><strong>Close on Your timeline Whenever You're Ready.</strong></span>
            </li>
        </ul>
        <div class="dh-hero-form__content--footer">
            <div class="cw-fresh-start__testimonial">
                <?php
                echo get_responsive_image([
                    'image_name'       => 'hero-form/liv-skyler',
                    'alt'              => 'Liv Skyler',
                    'class'           => 'cw-fresh-start__testimonee',
                    'default_size'     => 300,
                    'sizes_attr'       => '80px',
                    'additional_attrs' => [
                        'decoding'      => 'async',
                        'loading' => 'lazy',
                    ]
                ]);
                ?>
                <div class="dh-hero-form-start__testimonial--content cw-fresh-start__testimonial--content">
                    <blockquote>
                        <p>We are very grateful for Doctor Homes and his team's work. They were always professional and reliable, Doctor Homes answered my first call right away and kept me updated throughout the whole selling process.</p>
                        <cite>
                            <span>Liv Skyler</span>
                            <div class="dh-hero-form__reviews-stars-wrapper">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <span class="dh-hero-form__star"><?php
                                                                        echo get_responsive_image([
                                                                            'image_name'       => 'hero-form/star',
                                                                            'alt'              => 'Star',
                                                                            'additional_attrs' => [
                                                                                'decoding'      => 'async',
                                                                                'loading' => 'lazy',
                                                                            ]
                                                                        ]);
                                                                        ?></span>
                                <?php endfor; ?>
                            </div>
                        </cite>
                    </blockquote>
                </div>
            </div>
            <ul class="dh-hero-form__statistic--list">
                <li class="dh-hero-form__statistic--item">
                    <div class="dh-hero-form__statistic--amunt">$36M+</div>
                    <div class="dh-hero-form__statistic--text">Saved <span>Fees</span></div>
                </li>
                <li class="dh-hero-form__statistic--item">
                    <div class="dh-hero-form__statistic--amunt">1,500+</div>
                    <div class="dh-hero-form__statistic--text">HOUSES <span>BOUGHT</span></div>
                </li>
                <li class="dh-hero-form__statistic--item">
                    <div class="dh-hero-form__statistic--amunt">96%</div>
                    <div class="dh-hero-form__statistic--text">SATISFIED <span>CUSTOMERS</span></div>
                </li>
            </ul>
        </div>
        <div class="dh-hero__logos">
            <?php
            echo get_responsive_image([
                'image_name'       => 'hero-form/logo-google',
                'alt'              => 'Google',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading' => 'lazy',
                ]
            ]);
            ?>
            <?php
            echo get_responsive_image([
                'image_name'       => 'hero-form/logo-bbb',
                'alt'              => 'BBB',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading' => 'lazy',
                ]
            ]);
            ?>
            <?php
            echo get_responsive_image([
                'image_name'       => 'hero-form/logo-a-plus',
                'alt'              => 'A+',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading' => 'lazy',
                ]
            ]);
            ?>
        </div>
    </div>
</section>