<?php
$selectedMarket = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'St. Louis, Missouri';
?>

<section class="cw-hero-wrapper">
    <div class="cw-hero-bg">
        <?php
        $url_for_preload = get_image_url('cw-hero/bg', 768);
        schedule_preload($url_for_preload, 'image', ['fetchpriority' => 'high']);

        echo get_responsive_image([
            'image_name'       => 'cw-hero/bg',
            'alt'              => 'Hero background',
            'class'           => 'cw-hero-img',
            'default_size'     => 768,
            'additional_attrs' => [
                'decoding'      => 'async',
                'fetchpriority' => 'high',
            ]
        ]);
        ?>
    </div>
    <div class="cw-hero__content">
        <div class="cw-hero__reviews">
            <div class="cw-hero__reviews-stars-wrapper">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <span class="cw-hero__star"><?php
                                                echo get_responsive_image([
                                                    'image_name'       => 'cw-hero/star',
                                                    'alt'              => 'Star',
                                                    'additional_attrs' => [
                                                        'decoding'      => 'async',
                                                        'loading' => 'lazy',
                                                    ]
                                                ]);
                                                ?></span>
                <?php endfor; ?>
            </div>
            <div class="cw-hero__reviews-text">
                <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
            </div>
        </div>
        <h1 class="cw-hero__title">We Buy ANY House In <span>ANY Condition, On YOUR Timeline</span></h1>
        <div id="cw-form" class="cw-hero__form" data-form-name="Property Inquiry">
            <div class="cw-hero__form-title">
                <span>Get Your Offer In Record Time</span>
            </div>
            <div class="cw-hero__form-subtitle">
                <span>Fill out the form. We’ll contact you ASAP.</span>
            </div>
            <?php echo $content; ?>
        </div>
        <h3 class="cw-hero__subtitle">House to sell in <?php echo esc_html($selectedMarket); ?>? <strong>Get a cash offer in just 7 minutes</strong>, and get the sale closed as soon as you want to.</h3>
        <ul class="cw-hero__bullet-points">
            <li class="cw-hero__bullet-point"><?php
                                                echo get_responsive_image([
                                                    'image_name'       => 'cw-hero/check-circle',
                                                    'alt'              => 'Checkmark',
                                                    'additional_attrs' => [
                                                        'decoding'      => 'async',
                                                        'loading' => 'lazy',
                                                    ]
                                                ]);
                                                ?>
                <span><strong>No need for you to clean</strong> or make repairs</span>
            </li>
            <li class="cw-hero__bullet-point"><?php
                                                echo get_responsive_image([
                                                    'image_name'       => 'cw-hero/check-circle',
                                                    'alt'              => 'Checkmark',
                                                    'additional_attrs' => [
                                                        'decoding'      => 'async',
                                                        'loading' => 'lazy',
                                                    ]
                                                ]);
                                                ?>
                <span>No realtors, <strong>fees, banks, commissions,</strong> or inspectors</span>
            </li>
            <li class="cw-hero__bullet-point"><?php
                                                echo get_responsive_image([
                                                    'image_name'       => 'cw-hero/check-circle',
                                                    'alt'              => 'Checkmark',
                                                    'additional_attrs' => [
                                                        'decoding'      => 'async',
                                                        'loading' => 'lazy',
                                                    ]
                                                ]);
                                                ?>
                <span>We pay all closing costs - <strong>you pay nothing</strong></span>
            </li>
        </ul>
        <div class="cw-hero__content--footer">
            <div class="cw-fresh-start__testimonial">
                <?php echo get_responsive_image('hero-form/liv-skyler', 'Liv Skyler', 'cw-fresh-start__testimonee'); ?>
                <?php
                echo get_responsive_image([
                    'image_name'       => 'cw-hero/liv-skyler',
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
                <div class="cw-hero-start__testimonial--content cw-fresh-start__testimonial--content">
                    <blockquote>
                        <p>We are very grateful for Doctor Homes and his team's work. They were always professional and reliable, Doctor Homes answered my first call right away and kept me updated throughout the whole selling process.</p>
                        <cite>
                            <span>Liv Skyler</span>
                            <div class="cw-hero__reviews-stars-wrapper">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <span class="cw-hero__star"><?php
                                                                echo get_responsive_image([
                                                                    'image_name'       => 'cw-hero/star',
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
            <ul class="cw-hero__statistic--list">
                <li class="cw-hero__statistic--item">
                    <div class="cw-hero__statistic--amunt">$36M+</div>
                    <div class="cw-hero__statistic--text">Saved <span>Fees</span></div>
                </li>
                <li class="cw-hero__statistic--item">
                    <div class="cw-hero__statistic--amunt">1,500+</div>
                    <div class="cw-hero__statistic--text">HOUSES <span>BOUGHT</span></div>
                </li>
                <li class="cw-hero__statistic--item">
                    <div class="cw-hero__statistic--amunt">96%</div>
                    <div class="cw-hero__statistic--text">SATISFIED <span>CUSTOMERS</span></div>
                </li>
            </ul>
        </div>
    </div>
</section>