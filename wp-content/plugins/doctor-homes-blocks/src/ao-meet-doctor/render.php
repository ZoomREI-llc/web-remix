<section class="ao-meet-doctor">
    <div class="ao-meet-doctor__container">
        <div class="ao-meet-doctor__content">
            <div class="ao-meet-doctor__text">
                <span class="ao-meet-doctor__hi">Hi, I'm Doctor Homes!</span>
                <h2 class="ao-meet-doctor__title">Have A House You Need To Sell FAST In St Louis, Missouri?</h2>
                <h3 class="ao-meet-doctor__subtitle">Let me help! We are genuine homebuyers, and we buy ANY house!</h3>
                <div class="ao-meet-doctor__description">
                    <p>Maybe you’ve inherited a house, don’t want to spend money on repairs, or are having trouble managing your tenants.</p>
                    <p>Whatever your circumstances and whatever state your home is in – it doesn’t matter to us. <br><strong>We’ll buy it, and fast!</strong></p>
                    <p>All this, <strong>without the hassle.</strong> No real estate agents. No repairs or cleaning. Plus, we always make you a fair offer.</p>
                </div>
                <h3 class="ao-meet-doctor__cta-text">Ready to sell your house right now?</h3>
            </div>
            <a class="cta-btn ao-meet-doctor__cta" href="#ao-form">Get Fast Cash OFFER <?php echo get_responsive_image([
                                                                                            'image_name'       => 'ao-meet-doctor/cta-arrow',
                                                                                            'alt'              => 'cta arrow',
                                                                                            'additional_attrs' => [
                                                                                                'decoding'      => 'async',
                                                                                                'loading'       => 'lazy',
                                                                                            ]
                                                                                        ]); ?></a>
            <div class="ao-hero__reviews">
                <div class="ao-hero__reviews-stars-wrapper">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <span class="ao-meet-doctor__star"><?php echo get_responsive_image([
                                                                'image_name'       => 'ao-meet-doctor/star',
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
        </div>
        <div class="ao-meet-doctor__img">
            <?php echo get_responsive_image([
                'image_name'       => 'ao-meet-doctor/person-buys',
                'alt'              => 'House with a garden',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading'       => 'lazy',
                ]
            ]); ?>
        </div>
    </div>
</section>