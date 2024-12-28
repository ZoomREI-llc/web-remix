<a id="top"></a>
<section class="sf-hero">
    <div class="sf-hero-bg">
        <?php
        $url_for_preload = get_image_url('sell-fast-hero/bg', 768);
        schedule_preload($url_for_preload, 'image', ['fetchpriority' => 'high']);

        echo get_responsive_image([
            'image_name'       => 'sell-fast-hero/bg',
            'alt'              => 'Hero background',
            'class'           => 'sf-hero-img',
            'default_size'     => 768,
            'additional_attrs' => [
                'decoding'      => 'async',
                'fetchpriority' => 'high',
            ]
        ]);
        ?>
    </div>
    <div class="grid-container">
        <div class="sf-hero__content">
            <div class="sf-hero__reviews">
                <div class="sf-hero__reviews-stars-wrapper">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <span class="sf-hero__star"><?php
                                                    echo get_responsive_image([
                                                        'image_name'       => 'sell-fast-hero/star',
                                                        'alt'              => 'Star',
                                                        'additional_attrs' => [
                                                            'decoding'      => 'async',
                                                            'loading' => 'lazy',
                                                        ]
                                                    ]);
                                                    ?></span>
                    <?php endfor; ?>
                </div>
                <div class="sf-hero__reviews-text">
                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>
            <div class="sf-hero__heading-wrapper">
                <h1 class="title-1">Sell Your House Fast</h1>
            </div>
            <h2 class="title-2">No Realtors, No Fees, No Repairs<br>
                Get a Fair Cash Offer Today and Sell Your House as is</h2>
            <p class="title-4">Selling your home can be stressful and time-consuming. We make it fast and hassle-free.
                At Doctor Homes, we buy houses in any condition, offering you a fair cash offer with no fees,
                no commissions, and no repairs needed.</p>
            <?php echo $content; ?>
            <div class="sf-hero__trust-icons">
                <?php
                echo get_responsive_image([
                    'image_name'       => 'sell-fast-hero/logo-google',
                    'alt'              => 'Google',
                    'class'           => 'dh-hero__trust-icon',
                    'additional_attrs' => [
                        'decoding'      => 'async',
                        'loading' => 'lazy',
                    ]
                ]);
                ?>
                <?php
                echo get_responsive_image([
                    'image_name'       => 'sell-fast-hero/logo-bbb',
                    'alt'              => 'BBB',
                    'class'           => 'dh-hero__trust-icon',
                    'additional_attrs' => [
                        'decoding'      => 'async',
                        'loading' => 'lazy',
                    ]
                ]);
                ?>
                <?php
                echo get_responsive_image([
                    'image_name'       => 'sell-fast-hero/logo-a-plus',
                    'alt'              => 'A+',
                    'class'           => 'dh-hero__trust-icon',
                    'additional_attrs' => [
                        'decoding'      => 'async',
                        'loading' => 'lazy',
                    ]
                ]);
                ?>
            </div>
        </div>
    </div>
</section>