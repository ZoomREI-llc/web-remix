<?php
$market_to_code = [
    'San Francisco' => 'sf',
    'Saint Louis' => 'stl',
    'Kansas City' => 'kc',
    'Metro Detroit' => 'det',
    'Cleveland' => 'cle',
    'Indianapolis' => 'ind'
];
$selectedMarket = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'Saint Louis';
$market_code = $market_to_code[$selectedMarket];
?>

<section class="lcp-hero-wrapper">
    <div class="lcp-hero-bg">
        <?php
        $url_for_preload = get_image_url('lcp-hero/bg-' . $market_code, 768);
        schedule_preload($url_for_preload, 'image', ['fetchpriority' => 'high']);

        echo get_responsive_image([
            'image_name'       => 'lcp-hero/bg-' . $market_code,
            'alt'              => 'Hero background',
            'class'           => 'lcp-hero-img',
            'default_size'     => 768,
            'additional_attrs' => [
                'decoding'      => 'async',
                'fetchpriority' => 'high',
            ]
        ]);
        ?>
    </div>
    <div class="lcp-hero__content grid-container">
        <div class="lcp-hero__reviews">
            <div class="lcp-hero__reviews-stars-wrapper">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <span class="lcp-hero__star"><?php
                                                    echo get_responsive_image([
                                                        'image_name'       => 'lcp-hero/star',
                                                        'alt'              => 'Star',
                                                        'additional_attrs' => [
                                                            'decoding'      => 'async',
                                                            'loading' => 'lazy',
                                                        ]
                                                    ]);
                                                    ?></span>
                <?php endfor; ?>
            </div>
            <div class="lcp-hero__reviews-text">
                <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
            </div>
        </div>
        <h1 class="lcp-hero__title title-1">Want to sell your house in <?= $selectedMarket ?> with no hassle?</h1>
        <h3 class="lcp-hero__subtitle sub-title">We Buy Houses Quickly for Cash – No Realtors, No Fees, No Repairs Needed!</h3>
        <div id="lcp-form" class="lcp-hero__form" data-form-name="Property Inquiry">
            <div class="lcp-hero__form--title">
                <span>Get Your Offer In Record Time</span>
            </div>
            <div class="lcp-hero__form--subtitle">
                <span>Fill out the form. We’ll contact you ASAP.</span>
            </div>
            <?php echo $content; ?>
        </div>
        <ul class="lcp-hero__bullet-points">
            <li class="lcp-hero__bullet-point"><?php
                                                echo get_responsive_image([
                                                    'image_name'       => 'lcp-hero/checkmark',
                                                    'alt'              => 'Checkmark',
                                                    'additional_attrs' => [
                                                        'decoding'      => 'async',
                                                        'loading' => 'lazy',
                                                    ]
                                                ]);
                                                ?>
                <span><strong>No need for you to clean or make repairs.</strong></span>
            </li>
            <li class="lcp-hero__bullet-point"><?php
                                                echo get_responsive_image([
                                                    'image_name'       => 'lcp-hero/checkmark',
                                                    'alt'              => 'Checkmark',
                                                    'additional_attrs' => [
                                                        'decoding'      => 'async',
                                                        'loading' => 'lazy',
                                                    ]
                                                ]);
                                                ?>
                <span><strong>No realtors, fees, banks, commissions, or inspectors.</strong></span>
            </li>
            <li class="lcp-hero__bullet-point"><?php
                                                echo get_responsive_image([
                                                    'image_name'       => 'lcp-hero/checkmark',
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
        <div class="lcp-hero__content--footer">
            <div class="cw-fresh-start__testimonial">
                <?php echo get_responsive_image('lcp-hero/liv-skyler', 'Liv Skyler', 'cw-fresh-start__testimonee'); ?>
                <div class="lcp-hero-start__testimonial--content cw-fresh-start__testimonial--content">
                    <blockquote>
                        <p>We are very grateful for Doctor Homes and his team's work. They were always professional and reliable, Doctor Homes answered my first call right away and kept me updated throughout the whole selling process.</p>
                        <cite>
                            <span>Liv Skyler</span>
                            <div class="lcp-hero__reviews-stars-wrapper">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <span class="lcp-hero__star"><?php
                                                                    echo get_responsive_image([
                                                                        'image_name'       => 'lcp-hero/star',
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
            <ul class="lcp-hero__statistic--list">
                <li class="lcp-hero__statistic--item">
                    <div class="lcp-hero__statistic--amunt">$36M+</div>
                    <div class="lcp-hero__statistic--text">Saved <span>Fees</span></div>
                </li>
                <li class="lcp-hero__statistic--item">
                    <div class="lcp-hero__statistic--amunt">1,500+</div>
                    <div class="lcp-hero__statistic--text">HOUSES <span>BOUGHT</span></div>
                </li>
                <li class="lcp-hero__statistic--item">
                    <div class="lcp-hero__statistic--amunt">96%</div>
                    <div class="lcp-hero__statistic--text">SATISFIED <span>CUSTOMERS</span></div>
                </li>
            </ul>
        </div>
        <div class="dh-hero__logos">
            <?php
            echo get_responsive_image([
                'image_name'       => 'lcp-hero/logo-google',
                'alt'              => 'Google',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading' => 'lazy',
                ]
            ]);
            ?>
            <?php
            echo get_responsive_image([
                'image_name'       => 'lcp-hero/logo-bbb',
                'alt'              => 'BBB',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading' => 'lazy',
                ]
            ]);
            ?>
            <?php
            echo get_responsive_image([
                'image_name'       => 'lcp-hero/logo-a-plus',
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