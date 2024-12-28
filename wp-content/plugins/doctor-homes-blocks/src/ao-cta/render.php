<section class="ao-cta">
    <div class="ao-cta__inner">
        <div class="ao-cta__image">
            <?php echo get_responsive_image([
                'image_name'       => 'ao-cta/lc-cta-img',
                'alt'              => 'Hassle-Free Solution',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading'       => 'lazy',
                ]
            ]); ?>
        </div>
        <div class="ao-cta__content">
            <div class="ao-hero__reviews">
                <div class="ao-hero__reviews-stars-wrapper">
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
                <div class="ao-hero__reviews-text">
                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>
            <h3>Ready To Sell Your Property?</h3>
            <h2>Get A Cash Offer In Under 7 Minutes</h2>
            <p class="ao-cta__content--description">Fill out our form and we’ll get back to you in a few minutes.</p>
            <ul>
                <li><?php echo get_responsive_image([
                        'image_name'       => 'ao-cta/check-circle',
                        'alt'              => 'checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading'       => 'lazy',
                        ]
                    ]); ?>Get an instant <strong>competitive, cash offer</strong></li>
                <li><?php echo get_responsive_image([
                        'image_name'       => 'ao-cta/check-circle',
                        'alt'              => 'checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading'       => 'lazy',
                        ]
                    ]); ?>We’ll buy your house in&nbsp;<strong>any condition</strong></li>
                <li><?php echo get_responsive_image([
                        'image_name'       => 'ao-cta/check-circle',
                        'alt'              => 'checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading'       => 'lazy',
                        ]
                    ]); ?><strong>No agent fees,</strong>commissions, or hidden costs</li>
            </ul>
            <a class="cta-btn ao-cta__cta--button" href="#ao-form">GET MY CASH OFFER NOW <?php echo get_responsive_image([
                                                                                                'image_name'       => 'ao-cta/cta-arrow',
                                                                                                'alt'              => 'cta arrow',
                                                                                                'additional_attrs' => [
                                                                                                    'decoding'      => 'async',
                                                                                                    'loading'       => 'lazy',
                                                                                                ]
                                                                                            ]); ?></a>
        </div>
        <div class="ao-fresh-start__testimonial">
            <?php echo get_responsive_image([
                'image_name'       => 'ao-fresh-start/testimonee',
                'alt'              => 'Leigh Williams',
                'class'           => 'ao-fresh-start__testimonee',
                'sizes_attr'  => '80px',
                'default_size' => 300,
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading'       => 'lazy',
                ]
            ]); ?>
            <div class="ao-fresh-start__testimonial--content">
                <div class="ao-hero__reviews-stars-wrapper">
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
                <blockquote>
                    <p>"The <strong>customer service experience with Doctor Homes was outstanding.</strong> From beginning to end, the process of selling my home was exemplary."</p>
                    <cite>
                        Leigh Williams <?php echo get_responsive_image([
                                            'image_name'       => 'ao-cta/verified-check-circle',
                                            'alt'              => 'verified checkmark',
                                            'additional_attrs' => [
                                                'decoding'      => 'async',
                                                'loading'       => 'lazy',
                                            ]
                                        ]); ?> <span class="verified">Verified customer</span></cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>