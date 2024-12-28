<a id="top"></a>
<section class="hit-hero">
    <div class="hit-hero-bg">
        <?php
        $url_for_preload = get_image_url('how-it-works-hero/bg', 768);
        schedule_preload($url_for_preload, 'image', ['fetchpriority' => 'high']);

        echo get_responsive_image([
            'image_name'       => 'how-it-works-hero/bg',
            'alt'              => 'Hero background',
            'class'           => 'hit-hero-img',
            'default_size'     => 768,
            'additional_attrs' => [
                'decoding'      => 'async',
                'fetchpriority' => 'high',
            ]
        ]);
        ?>
    </div>
    <div class="grid-container">
        <div class="hit-hero__content">
            <div class="hit-hero__reviews">
                <div class="hit-hero__reviews-stars-wrapper">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <span class="hit-hero__star"><?php
                                                        echo get_responsive_image([
                                                            'image_name'       => 'how-it-works-hero/star',
                                                            'alt'              => 'Star',
                                                            'additional_attrs' => [
                                                                'decoding'      => 'async',
                                                                'loading' => 'lazy',
                                                            ]
                                                        ]);
                                                        ?></span>
                    <?php endfor; ?>
                </div>
                <div class="hit-hero__reviews-text">
                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>
            <div class="hit-hero__heading-wrapper">
                <h1 class="title-1">How Doctor Homes Works</h1>
            </div>
            <h2 class="sub-title">Sell Your House As Is with Our Easy Process</h2>
            <p class="title-4">At Doctor Homes, we want you to enjoy peace of mind while we do all the work for you. We make selling your house a fast, easy, and simple-to-understand process.</p>
        </div>
    </div>
</section>