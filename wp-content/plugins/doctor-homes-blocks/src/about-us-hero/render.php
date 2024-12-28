<a id="top"></a>
<section class="about-us-hero">
    <div class="about-us-hero-bg">
        <?php
        $url_for_preload = get_image_url('about-us-hero/bg', 768);
        schedule_preload($url_for_preload, 'image', ['fetchpriority' => 'high']);

        echo get_responsive_image([
            'image_name'       => 'about-us-hero/bg',
            'alt'              => 'Hero background',
            'class'           => 'about-us-hero-img',
            'default_size'     => 768,
            'additional_attrs' => [
                'decoding'      => 'async',
                'fetchpriority' => 'high',
            ]
        ]);
        ?>
    </div>
    <div class="grid-container">
        <div class="about-us-hero__content">
            <div class="about-us-hero__reviews">
                <div class="about-us-hero__reviews-stars-wrapper">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <span class="about-us-hero__star"><?php echo get_responsive_image([
                                                                'image_name'       => 'about-us-hero/star',
                                                                'alt'              => 'star',
                                                                'additional_attrs' => [
                                                                    'decoding'      => 'async',
                                                                    'loading'       => 'lazy',
                                                                ]
                                                            ]); ?></span>
                    <?php endfor; ?>
                </div>
                <div class="about-us-hero__reviews-text">
                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>
            <div class="about-us-hero__heading-wrapper">
                <h1 class="title-1">About Doctor Homes</h1>
            </div>
            <h2 class="sub-title">Simplifying Home Sales with Fast, Stress-Free Solutions.</h2>
        </div>
    </div>
</section>